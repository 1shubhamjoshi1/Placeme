
<html>
    <head>
              <meta charset="utf-8"/>
        <link rel="stylesheet" href="../css/first-page.css"/>
          <link rel="stylesheet" href="../css/font-awesome.css"/>
        <link rel="stylesheet" href="../css/animations.css"/>
        <link rel="stylesheet" href="../css/newForm.css"/>
        
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>

<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg').live('change', function()			{ 
			           $("#profile-image").html('');
			    $("#profile-image").html('<img src="loader.gif" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '#profile-image'
		}).submit();
		
			});
        }); 
</script>
     
    </head>
    
    <body >
        
       
       
        <div id="container">
          
            <header id="first-title">
                
                 
                <div id="middle-section">
                    <div id="logo">
                          
                        <div id="text-body" > <!-- remember to change the bg color -->
                            <h2 id="first-text"><img src="../assets/logo1.png"/> </h2>
                            
                         </div>

                        <div id="bird-image" class="fadeIn">
                            <img class="blueColorBg" src="../assets/bird.png"/>
                            
                        </div>
                    </div>
                     <form id="imageform" method="post" enctype="multipart/form-data" action="myAjax.php">



                        <fieldset>
                            <input type="text" id="email" placeholder="Email"/>
                            <input type="password" id="password" placeholder="Password"/>
                            <input type="text" id="username" placeholder="Username"/>
                            <div id="incorrect-email">
                                <div id="hiddenText">That's not a valid email address.
                                    <div id="incorrect-email-next-text"><br/>Please try again. </div>
                                </div>
                            </div>
                            <input type="button" value="Sign up" id="sign-up-button"/>
                            
                              
                        </fieldset>


                         <!--code for further details-->


                         <div id="expand" class="expand-animation">
                             <div id="gray-box">
                              <!--  <div id="more-info"> Let's get started! </div>-->
                                <img src="../assets/ic_action_cancel.png" alt="cancel_image" id="cancel-image"/>

                             </div>
                             
                                  <div id="newfieldset">
                                          
                                         <img src="../assets/placeme_small.png.png" alt="logo_sub" id="placeme_small_logo">
                                       
                                      <div id="sub-form">
                                        <input type="text" name="name" placeholder="Name" class="sop">
                                         <input type="text" name="lastname" placeholder="Last name" class="sop">
                                           <input type="text" name="Batch" placeholder="Batch" class="sop">
                                        </div>
                                      
                    <input type="button" value="Get started !" id="newButton" class="sop"onclick="anim();"/>
                                     
              
                                                   <p id="profile-image"><img src="" alt ="Shubham"></p>
                                   
                                         
                                        <div class="file-dialog-box">
                                            <label for="photoimg">
                                                        <img src="../assets/profile/upload.png" id="upload" value="submit" width="30px" height="30px">
                                                    </label>
                                                    <input id="photoimg" name="photoimg" type="file"/>
                                                    </div>
                                                </form>
                                    </div>  
                                 
                             
                         
                     </div>
                    
                   
                   
                </div>
                            <!-- Sinin button-->
                        
          
                
                             
             
                
            
              
            
                
                <div id="footer"> 
                
                    <div id="base-area-content">
                        <a href="#">Terms</a>
                        <a href="#">Support</a>
                        <a href="#">Privacy</a>
                        <a href="#">About us</a>
                    </div>

                    <div id="know-more">What is Placeme ?</div>
                    
                 </div>
                
             
                   
            </header>
                
                <div id="intro">
               
                <div id="content-intro">
                    
                </div>

           
        </div>
       
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript"></script>
        <script type="text/javascript" src="../js/scroll.js"></script>
        <script type="text/javascript" src="../js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="../js/sliding-animation.js"></script>
        <script type="text/javascript" src="../js/error-in-email.js"></script>
        <script type="text/javascript" src="../js/further-details.js"></script>
    </body>
    
    
</html>