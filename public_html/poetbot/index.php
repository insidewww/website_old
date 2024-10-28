<!DOCTYPE html>

<html>
    <head>
        <title>Poetbot v_1.1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>

        <script src="js/pdf.js" type="text/javascript"></script>
        
        
        
    </head>
    <body>
        
    
      <div id="poetbotPage">
	  <?php  if(!isMobileDevice()): ?>
            <video autoplay muted loop playsinline id="poetbotVideo" class="poetbotVideo" >
            <source src="movies/animacja_otwarcie.mp4" type="video/mp4">
        </video>
          
         
          
        <video playsinline  id="startAnim" class="poetbotVideo">
            <source src="movies/startanimacja2.mp4" type="video/mp4">
        </video>
        <video playsinline id="question1Vid" class="poetbotVideo questionVid">
            <source src="movies/pytanie1.mp4" type="video/mp4">
        </video>
        <video playsinline id="question2Vid" class="poetbotVideo questionVid">
            <source src="movies/pytanie2.mp4" type="video/mp4">
        </video>
        <video playsinline  id="question3Vid" class="poetbotVideo questionVid">
            <source src="movies/pytanie3.mp4" type="video/mp4">
        </video>
        <video playsinline  id="thinking" class="poetbotVideo">
            <source src="movies/thinking.mp4" type="video/mp4">
        </video>
        <?php else: ?>
        <video autoplay muted loop playsinline id="poetbotVideo" class="poetbotVideo">
            <source src="movies/animacja_otwarcieMob.mp4" type="video/mp4">
        </video>
        <video playsinline autoplay   id="startAnim" class="poetbotVideo">
            <source src="movies/startanimacja2Mob.mp4" type="video/mp4">
        </video>
        <video playsinline autoplay   id="question1Vid" class="poetbotVideo questionVid" >
            <source src="movies/pytanie1Mob.mp4" type="video/mp4">
        </video>
        <video playsinline autoplay   id="question2Vid" class="poetbotVideo questionVid">
            <source src="movies/pytanie2Mob.mp4" type="video/mp4">
        </video>
        <video playsinline  autoplay   id="question3Vid" class="poetbotVideo questionVid">
            <source src="movies/pytanie3Mob.mp4" type="video/mp4">
        </video>
        <video playsinline autoplay    id="thinking" class="poetbotVideo">
            <source src="movies/thinkingMob.mp4" type="video/mp4">
        </video>
        <?php endif; ?>
        
        <div class="row" id="menuBar">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <img src="images/INFO (left corner)/poetbot_info_button.png" alt="i"/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 menuEmojis">
                <img src="images/emojis_button/emojis logo.png" alt=""/>
            </div>
            <div class="col-md-1 col-sm-1  col-xs-1">
                
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1">
                <div id="aboutButton" class="poetBotButton">
                    <img src="images/ABOUT_button/about_button.png" class="poetBotButtonNormal" alt=""/>
                    <img src="images/ABOUT_button/about_button_inverse.png" class="poetBotButtonInv" alt=""/>
                </div>
                <img src="images/ABOUT_button/poetbot_about_txt.png" id="aboutText" alt=""/>
            </div>
        </div> 

          
           
          <div id="poetbotStart" >
            <div class="row" >
                <div class="col-md-3 col-sm-3  col-xs-3"></div>
                <div class="col-md-6 col-sm-6 col-xs-6 mainLogo" id="mainLogo">
                    <img src="images/LOGO/poetbot_logo.png" alt=""/>

                </div>
                <div class="col-md-3 col-sm-3  col-xs-3"></div>
            </div>

            <div class="row" >
                <div class="col-md-2 col-sm-2 col-xs-2"></div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div id="startButton" class="poetBotButton">
                        <img src="images/START_button/start_button.png" class="poetBotButtonNormal" alt=""/>
                        <img src="images/START_button/start_button_inverse.png" class="poetBotButtonInv"  alt=""/>
                    </div>

                </div>
                <div class="col-md-6 col-sm-6  col-xs-6"></div>
            </div>
        </div>
          
        
        
            <div class="row seven-cols" id="emojiIcons">
              <div class="col-md-1 col-sm-1 col-xs-1 emojiIcon">
                  <img src="images/emojis_button/fortunate.gif" alt="1"/>
              </div>
              <div class="col-md-1 col-sm-1 col-xs-1 emojiIcon">
                  <img src="images/emojis_button/neutral.gif" alt="2"/>
              </div>
              <div class="col-md-1 col-sm-1 col-xs-1 emojiIcon">
                  <img src="images/emojis_button/skeptic.gif" alt="3"/>
              </div>
              <div class="col-md-1 col-sm-1 col-xs-1 emojiIcon">
                  <img src="images/emojis_button/timid.gif" alt="4"/>
              </div>
              <div class="col-md-1 col-sm-1 col-xs-1 emojiIcon">
                  <img src="images/emojis_button/spirited.gif" alt="5"/>
              </div>
              <div class="col-md-1 col-sm-1 col-xs-1 emojiIcon">
                  <img src="images/emojis_button/rebelious.gif" alt="6"/>
              </div>
              <div class="col-md-1 col-sm-1 col-xs-1 emojiIcon">
                  <img src="images/emojis_button/dominated.gif" alt="7"/>
              </div>
            </div>
        <div id="restartRow">
            <div  id="restartButton">
                <img src="images/SKIP BUTTON/restart.png" alt=""/>
            </div> 
            
        </div>
        <div  id="skipRow">
            <div  id="skipButton">
                <img src="images/SKIP BUTTON/skipbutton.png" alt=""/>
            </div> 
        </div>
        
        
        <div id="poemPage"  style="display:none">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-7 poemPageLeft">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-8">
                            <img src="images/yourpoem.png" alt=""/>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-md-12 col-sm-12 col-xs-12" id="poem">
                            
                        </div>
                    </div>
                    
                    <div class="row row-eq-height">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div id="savePDFButton" class="poetBotButton">
                                <a href="" download id="downloadLink"> 
                                    <img src="images/final buttons/savepdf_button.png" class="poetBotButtonNormal" alt=""/>
                                    <img src="images/final buttons/savepdf_button_inverse.png" class="poetBotButtonInv" alt=""/>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div id="mailMeButton" class="poetBotButton" style="height: 100%">
                                <img src="images/final buttons/mailme_button.png" class="poetBotButtonNormal" style="height: 100%"  alt=""/>
                                <img src="images/final buttons/mailme_button_inverse.png" class="poetBotButtonInv" style="height: 100%"  alt=""/>
                            </div>
                        </div>
                        
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <div id="startAgainButton" class="poetBotButton">
                                <img src="images/final buttons/startagainbutton.png" class="poetBotButtonNormal" alt=""/>
                                <img src="images/final buttons/startagainbutton_inverse.png" class="poetBotButtonInv" alt=""/>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                 <div class="col-md-5 col-sm-5 col-xs-5 poemPageRight">
                     <canvas id="poemCanvas" width="800" height="1150" style="display: none"></canvas>
                     <img id="poemImg" src="" style="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4"></div>
            <div class="col-md-5 col-sm-5 col-xs-5">
                
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3"></div>
        </div>
        
        <div id="emailDialog" class="dialogFrame"  style="display:none">
            <div class="dialog">
                <div class="dialogTitle">ENTER YOUR EMAIL:</div>
                <input type="email" name="email" id="emailInput">
                <div id="dialogAlert"></div>
                <div class="row row-eq-height emailDialogButtons">
                    <div class="col-md-1 col-sm-1 col-xs-1"></div>
                    <div class="col-md-5 col-sm-5 col-xs-5">
                        <div id="SendButton" class="poetBotButton">
                            <img src="images/final buttons/send.png" class="poetBotButtonNormal" alt=""/>
                            <img src="images/final buttons/send_inverse.png" class="poetBotButtonInv" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5">
                            <div id="CancelButton" class="poetBotButton" style="height: 100%">
                                <img src="images/final buttons/cancel.png" class="poetBotButtonNormal" style="height: 100%" alt=""/>
                                <img src="images/final buttons/cancel_inverse.png" class="poetBotButtonInv" style="height: 100%" alt=""/>
                            </div>
                        </div>
                     <div class="col-md-1 col-sm-1 col-xs-1"></div>
                    
                </div>
            </div>
            
            
        </div>
        
        
        <audio id="buttonClick">
            <source src="sounds/buttons_sound.wav" type="audio/wav">
        </audio>
        </div>
        <div id="ChangeOrientationMessage">
            <div class="row">
                <div class="col-xs-12 mainLogo">
                    <img src="images/LOGO/poetbot_logo.png" alt=""/>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    This page can't be displayed in that orientation. Please, rotate your device.
                </div>
            </div>
           
        </div>
        
        
        <script type="text/javascript">
            
        StartFirstAnim();
        PreloadVideos();
        
        var actualQuestion = 1;
        var answer = "";
        var actualVideo = "#poetbotVideo";
        var poem = "";
        var videoEndedTreshold = 1.0;
        
        
        
        function PreloadVideos()
        {
            $("#startAnim")[0].preload = "auto";
            $("#question1Vid")[0].preload = "auto";
            $("#question2Vid")[0].preload = "auto";
            $("#question3Vid")[0].preload = "auto";
            $("#thinking")[0].preload = "auto";
        }


        
        function StartFirstAnim()
        {
            $("#poetbotVideo").show();
           $("#poetbotVideo")[0].currentTime = 0.1; 
        }
            
            function StopActualVideo()
            {
                $(actualVideo)[0].pause();
                $(actualVideo)[0].currentTime = 0.1;
            }
            
            $( "#aboutButton" ).click(function() {
                $( "#aboutText" ).show();
                PlayButtonClickSound();
            });
            $( "#aboutButton" ).mouseleave(function() {
                $( "#aboutText" ).hide();
            });
            
            function PlayButtonClickSound()
            {
                $("#buttonClick")[0].play();  
            }
            
            
            $( "#startButton" ).click(function() {
                PlayButtonClickSound();
                HideLogo();
                
                actualQuestion = 1;
                poem = "";
                answer = "";
                
                StartAnimation();
                $( "#restartRow" ).show();
                
            });
            
            function ShowLogo() {
                 $( "#poetbotStart" ).show();
            }
            
            function HideLogo() {
                 $( "#aboutText" ).hide();
                $( "#poetbotStart" ).hide();
            }
            
            function StartAnimation()
            {
                StopActualVideo();
                $( "#poetbotVideo").hide();
                $( "#startAnim").show();
                actualVideo = "#startAnim";
                $("#startAnim")[0].play();
                $( "#skipRow" ).show();
            }
            
            $("#startAnim").on('timeupdate',function(){
                if($("#startAnim")[0].duration - $("#startAnim")[0].currentTime <= videoEndedTreshold)
                {
                StopActualVideo();
                $( "#startAnim").hide();
                $( "#question1Vid").show();
                actualVideo = "#question1Vid";
                $("#question1Vid")[0].play();
                $( "#skipRow" ).show();
               
            }
            });
            
            $( ".emojiIcon").click(function() {
                PlayButtonClickSound();
                answer += $(this).find("img").attr("alt");
                $( "#emojiIcons" ).hide();
                StopActualVideo();
                $( actualVideo ).hide();          
                actualQuestion++;    
                

                if(actualQuestion <= 3)
                {
                    answer += ",";
                    actualVideo = "#question"+actualQuestion.toString() +"Vid";
                    $(actualVideo).show(); 
                    $( "#skipRow" ).show();
                    $(actualVideo)[0].play();
                }else{
                    actualVideo = "#thinking";
                    $("#thinking").show();
                    $( "#restartRow" ).hide();
                    $("#thinking")[0].play();
                    SendAnswer() ;  
                }
            });
            
            $( "#restartButton").click(function() {
                PlayButtonClickSound();
                $( "#restartRow" ).hide();
                $( "#emojiIcons" ).hide();
                $( "#skipRow" ).hide(); 
                
                StopActualVideo();
                $( actualVideo ).hide(); 
                actualVideo = "#poetbotVideo";
                
                $("#poetbotVideo").show();
                $("#poetbotVideo")[0].play();
                ShowLogo();
            });
            
            $(".questionVid").on('timeupdate',function(){
                if((($(actualVideo)[0].currentTime >= 5.0 ) || ($(actualVideo)[0].duration - $(actualVideo)[0].currentTime <= videoEndedTreshold )) && $("#emojiIcons").is(":hidden")  )
                {
                  $( "#emojiIcons" ).show();
                  $( "#skipRow" ).hide();  
                }
            });
            
            
            $( "#skipButton").click(function() {
                $(actualVideo)[0].currentTime = $(actualVideo)[0].duration; 
               $( "#skipRow" ).hide();
            });
            
            function SendAnswer()
            {
                $.post( "../poetbotBackend/alg.php", { ans: answer })
                .done(function( data ) {
                    data2 = data.split("#");
                     poem = data2[0];
                     $("#downloadLink").attr("href", "docs/"+data2[1] );
                     
                     LoadPDFImage("docs/"+data2[1]);
                     
                    if($("#thinking")[0].duration - $("#thinking")[0].currentTime <= videoEndedTreshold )
                    {
                      ShowPoem();   
                    }
                 }); 
            }
            
             function LoadPDFImage(pdfUrl)
            {
                var loadingTask = pdfjsLib.getDocument(pdfUrl);
                loadingTask.promise.then(function(pdf) {
                  pdf.getPage(1).then(function(page) {
                    var viewport = page.getViewport(1.4,0);
                    

                    var canvas = document.getElementById('poemCanvas');
                    var context = canvas.getContext('2d');
                    
                    var renderContext = {
                      canvasContext: context,
                      viewport: viewport
                    };
                    page.render(renderContext).then(function() {
                        $("#poemImg").attr("src", canvas.toDataURL('image/png'));
                        
                    });
                    
                    
                  });
                });
            }
            
            $("#thinking").on('timeupdate',function(){
                  if($("#thinking")[0].duration - $("#thinking")[0].currentTime <= videoEndedTreshold && poem !== "")
                  {
                      ShowPoem();
                  }
            });

            function ShowPoem()
            {
                StopActualVideo();
                actualVideo = "#poetbotVideo";
                $("#thinking").hide();
                $("#poetbotVideo").show();
                $("#poetbotVideo")[0].play();
                 $("#poemPage").show();
                 $("#poem").html(poem);
            }
            
            $( "#startAgainButton").click(function() {
                PlayButtonClickSound();
                $("#poetbotVideo")[0].currentTime = 0.1;
                $("#poemPage").hide();
                ShowLogo();
                
                
            });
            
            $( "#mailMeButton").click(function() {
                PlayButtonClickSound();
                $("#emailDialog").show();
                
            });
            
            $( "#savePDFButton").click(function() {
                PlayButtonClickSound();
                
            });
            
            $( "#CancelButton").click(function() {
                PlayButtonClickSound();
                $("#emailDialog").hide();
                
            });
            
            $( "#SendButton").click(function() {
                PlayButtonClickSound();
                email = $("#emailInput").val();
                $.post( "../poetbotBackend/email.php", { mail:  email, poemURL: $("#downloadLink").attr("href")})
                .done(function( data ) {
                    
                    if (data === "OK")
                        {
                            $("#emailDialog").hide();
                            $("#dialogAlert").html("");
                        }
                        else{
                            $("#dialogAlert").html(data);
                        }
                 }); 
                
            });
            

            
            
        </script>


 </body>

</html>

<?php
function isMobileDevice() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
        
        
        


