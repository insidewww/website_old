<?php



 $imagick = new Imagick();
 // Reads image from PDF
  $imagick->readImage('doc.pdf[0]');
 // Writes an image
 $imagick->writeImages('converted_page_one.jpg');




?>