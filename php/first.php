<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../css/first-page.css"/>
          <link rel="stylesheet" href="../css/font-awesome.css"/>
        <link rel="stylesheet" href="../css/animations.css"/>
        <link rel="stylesheet" href="../css/newForm.css"/>
        
        <script type="text/javascript" src="jquery.form.js"></script>

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
                    
                     <form id="sign-up-form" action="after-sign-up/one.html" method="post">
                       
                         <fieldset>
                         <input type="text" id="username" placeholder="Username"/>

                            <input type="password" id="password" placeholder="Password"/>
			   <input type="password" id="confirm_password" placeholder="Confirm Password"/>
                            <div id="incorrect-email">
                                <div id="hiddenText">That's not a valid email address.
                                    <div id="incorrect-email-next-text"><br/>Please try again. </div>
                                </div>
                            </div>
                                <div id="username-result">
                                <div id ="wrong-username"> The username must be at least 3 characters  </div>
                                <div id = "username-exist"> Username already exist </div>
                                <div id ="wrong-password"> The password must be at least 8 characters  </div>

                                <div id = "wrong-confirm"> Password doesn't match </div>
		
		</div>
                            <input type="button" value="Sign up" id="sign-up-button"/>     
                        </fieldset>


                         <!--code for further details-->


                         <div id="expand" class="expand-animation">
                             <div id="gray-box">
                                <img src="../assets/ic_action_cancel.png" alt="cancel_image" id="cancel-image"/>
                             </div>
                              
                            <div id="newfieldset">
                                <img src="../assets/placeme_small.png.png" alt="logo_sub" id="placeme_small_logo">
                                    <div id="sub-form">
                                         <input type="text" name="name" placeholder="Name" class="sop" id="name">
                                         <input type="text" name="lastname" placeholder="Last name" class="sop" id="lastname">
                                         <input type="text" name="Batch" placeholder="Batch" class="sop" id="batch">
                                    </div>
                                      
                                      
                                <input type="submit" value="Get started !" id="newButton" class="sop"/>
                                     
                            <p id="profile-image"><img src="../assets/profile/unknown.jpg" width="200px"  height="200px">
                            </p>
                                                
                            <div id="imageform" method="post" enctype="multipart/form-data" action="myAjax.php">
                            <div class="file-dialog-box">
                                <label for="photoimage">
                                <img src="../assets/profile/upload.png" id="upload" value="submit" width="30px" height="30px">
                                </label>
                                <input id="photoimage" name="photoimage" type="file"/>
                            </div>                     
                        </div>  
                    </div>
                    </div>
                </form> 
                       
            
       
                </div>
                        
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
                <div id="content-intro" >
                    <div id="heading" class="fastFade">
                        You Already Knows How It Works !
                    </div>
                    <div id="sub-heading" class="fastFade">
                        Once you sign-up, all the questions of computer science field are accessible to you! Fed up of old quiz                               sites?<br> Give rapid quizes and  check you performance . 
                        Practice and boost your chances to get placed!!
                        
                    </div>
                    
                    <div id="image-area-of-content-intro" class="funkymove">
                        <div id="place-me-header"> 
                            
                        </div>
                        
                    </div>
                    <div id="large-image-area" class="subFunk"> 
                        <div id="large-place-me-header"></div>
                    </div>
                    
                    
                </div>
                   
        </div>
        <a href="login.php" id="sign-in-button-final"><div>Sign in </div></a>
        <div id="sub-sign-up"><div>Sign up </div></div>
     </div>
        
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript"></script>
        <script type="text/javascript" src="../js/back-navigation.js"></script><!--to implement-->
        <script type="text/javascript" src="../js/scroll.js"></script>
        <script type="text/javascript" src="../js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="../js/sliding-animation.js"></script>
        <script type="text/javascript" src="../js/error-in-email.js"></script>
        <script type="text/javascript" src="../js/default-action-of-submit-button.js"></script>
        <script type="text/javascript" src="../js/further-details.js"></script>
        <script type="text/javascript" src="../js/user.js"></script>

    </body>
    
    
</html>