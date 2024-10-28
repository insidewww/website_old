<?php

require("fpdf/fpdf.php");
require("mailer/PHPMailer.php");
require("mailer/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$host = "192.168.101.60";
$user = "insidejo_poetbot";
$pass = "poetbottest20192019";
$database = "insidejo_poetbot";


$con=mysqli_connect($host,$user,$pass);
mysqli_select_db($con,$database); 
session_start(); //To start the session


$docsDirActualSize = folderSize("../poetbot/docs/");
$probabilityTreshold = 70;

$answer = $_POST["ans"];

$IP = $_SERVER['REMOTE_ADDR'];

$linesCount = rand(4,6);

$poem = "";

$sql1 = "Select ID, Line from poemsdata where (`COL 3` in (".$answer.") OR `COL 4` in (".$answer.") OR `COL 5` in (".$answer.") OR `COL 6` in (".$answer.")".
        "OR `COL 7` in (".$answer.") OR `COL 8` in (".$answer.")) AND ID NOT IN (SELECT PoemLineID from usedpoemlines where IP = '".$IP."')";
$sql2 = "Select ID, Line from poemsdata WHERE ID NOT IN (SELECT PoemLineID from usedpoemlines where IP = '".$IP."')";

$pdfname = CreateUniqueID().".pdf";

$sql5 = "INSERT INTO user_answers values (null, '".$IP."', now(), '".$answer."', '".$pdfname."')";
mysqli_query($con,$sql5);



for($i = 0; $i < $linesCount; ++$i)
{
    $probability = rand(1,100);
    
    $lines = "";
    //prawdopodobienstwo wybrania poematu wedlug wskazan uzytkownika
    if($probability > $probabilityTreshold )
    {
        $lines =  mysqli_query($con, $sql2);
        if(mysqli_num_rows($lines) == 0)
        {
            EraseUsedPoemLines($con, $IP);
            $lines =  mysqli_query($con, $sql2);
        }
        
    }else{
        
       $lines =  mysqli_query($con, $sql1);
       if(mysqli_num_rows($lines) == 0)
        {
            EraseUsedPoemLines($con, $IP);
            $lines =  mysqli_query($con, $sql2);
        }
    }
    
    //losowo wybieramy jedna wartosc z poematu
    $choosedVaule = rand(1, mysqli_num_rows($lines));
    
    $index = 1;
    $row = null;
    while ($index <= $choosedVaule) {
        $row = mysqli_fetch_row($lines);
        $index ++;
    }
    
    $poem = $poem. $row[1]."<br />";
    
    $savingSQL = "INSERT INTO usedpoemlines values ('".$IP."', '".$row[0]."')";
    mysqli_query($con,$savingSQL);

}

CreatePDF($poem, $answer, $pdfname);

print $poem."#".$pdfname;

SendNotificationIfSizeTresholdExceeded($docsDirActualSize);

function EraseUsedPoemLines($con, $IP)
{
    $sql5 = "DELETE FROM usedpoemlines where IP ='".$IP."'";
    mysqli_query($con, $sql5);
}

function CreateUniqueID()
{
    $ID = "personalised_poem_poetbot_".date("YmdHi");
    $counter = 0;
    while(file_exists("../poetbot/docs/".$ID.strval($counter).".pdf"))
    {
        $counter = $counter + 1;
    }
    
    return $ID.strval($counter); 
}

function folderSize ($dir)
{
    $size = 0;
    foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
        $size += is_file($each) ? filesize($each) : folderSize($each);
    }
    return $size;
}

function SendNotificationIfSizeTresholdExceeded($prevSize)
{
    $treshold1 = 15000000000;
    $treshold2 = 18000000000;
    $actualSize = folderSize("../poetbot/docs/"); 
    
    if($prevSize < $treshold1 && $actualSize >= $treshold1)
    {
        SendNotification("15 GB", "WARNING");
    }
    
    if($prevSize < $treshold2 && $actualSize >= $treshold2)
    {
        SendNotification("18 GB", "CRITICAL");
    }
}

function SendNotification($size, $warn)
{
     $message = "Hello,\r\n Documents directory exceeded ".$warn." treshold: ".$size."\r\n Please free some space.";
    
    $email = new PHPMailer();
    $email->SetFrom('poetbot@poetbot.com', 'Poetbot'); //Name is optional
    $email->Subject   = 'Alert from PoetBot.com';
    $email->Body      = $message;
    $email->AddAddress( "knychaus@gmail.com");
	$email->AddAddress( "ula.lucinska@gmail.com");
    $email->Send();  
    
}

function CreatePDF($poem, $answers, $pdfName)
{
    $pdfDestinationFolder = "../poetbot/docs/";
    $pdf = new FPDF();
    $pdf->AddPage();
    
    $pdf->Image('pdfImg.jpg',29,32,160);
    $pdf->SetFont('Courier','',13);

    $addAmount = 7;
    $actualLIne = 175;
    $lines =  explode("<br />", $poem);
    
    
    
    foreach ($lines as $value) {
        $pdf->SetY($actualLIne);
        $pdf->SetX(31);
        $pdf->Cell(200,14,$value);
        
        $actualLIne += $addAmount;
    }
    
    
    $ans =  explode(",", $answers);

    $pdf->Image($ans[0].'.jpg',31,250,13);
    $pdf->Image($ans[1].'.jpg',46,250,13);
    $pdf->Image($ans[2].'.jpg',61,250,13);
    $pdf->Output("F", $pdfDestinationFolder.$pdfName);
     
}


?>