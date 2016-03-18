<?php
   session_start();
  include_once 'db.php';
    $answer = $db->query("select *from records where rank=2");

    $result = $answer->fetch(PDO::FETCH_ASSOC);
   
 
?>

 
<!Doctype html>
<html>
  <head>
    <style>
     
    </style>
    <link rel="stylesheet" href="../../css/after-sign-up/probablyone.css">
      <link rel="stylesheet" href="../css/font-awesome.css"/>
      
      <link rel="stylesheet" href="../../css/animations.css"/>
  </head>
  
  
  <body> 
   
  <div clss="fake-page" id="icons"></div> 

      <div class="actual-page" id="true-div">
  <?php include_once 'head.php'?>
    
    <div id="search-to">
     <div id='aa'> Move On to our search . Start Typing!!</div>
      <div id='bb'>PlaceMe Optimised Search Engine 1.1v</div>
    </div>
    <div id="sepa"></div>
    <div id="user-box"></div>
    <div id="container">
      <div class="frame">
        <img class="profile" src="../../assets/after-sing-up/Uploads/user_shubham.jpg">
  
        <div id="info">
          
          <div id="yo">
              <div id="ranker"><ul><li>55</li><li>55</li><li>33</li><li>33.33%</li></ul></div>
          <div id="fur">Rating </div><div id="fur1">Rank</div><div id="fur2"> Overall</div><div id="fur3">Percentile</div>
          <div id="idd"><img width="40px"src="../../assets/after-sing-up/graphs1.png"></div>
          <div id='tr'>Track</div>
          </div>
        
          </div>
      </div>
      
      <div class="news-feed">
        <ul>
          <div>
            <img id="floating" src="../../assets/after-sing-up/streams/c++.jpg">
          </div>
          <a href="#">
          <li>
              <div id="info1">
                 <div id="des">Technical</div>
                <div id="des2">25 mins</div>
                <img id="book"src="../../assets/after-sing-up/streams/book.svg">
               
              </div> 
            <img src="../../assets/after-sing-up/streams/c++.png" id="a">
            <div  >
              
            </div>
          
          </li>
            </a>
           <div>
            <img id="floating" src="../../assets/after-sing-up/streams/logicalh.jpg">
          </div>
          <li>
             <div id="info1">
                 <div id="des">Logical</div>
                <div id="des2">25 mins</div>
                <img id="book"src="../../assets/after-sing-up/streams/book.svg">
               
              </div> 
            <img src="../../assets/after-sing-up/streams/logical.jpg" id="b">
            <div ></div>
          </li>
          <div>
            <img id="floating" class="strech" src="../../assets/after-sing-up/streams/english.jpg">
          </div>
          <li>
             <div id="info1">
                 <div id="des">English</div>
                <div id="des2">25 mins</div>
                <img id="book"src="../../assets/after-sing-up/streams/book.svg">
               
              </div> 
            <img src="../../assets/after-sing-up/streams/eico.jpg" id="c">
            <div ></div>
          </li>
           <div>
            <img id="floating" class="strech" src="../../assets/after-sing-up/streams/homework.jpg">
          </div>
          <li>
             <div id="info1">
                 <div id="des">Technical</div>
                <div id="des2">25 mins</div>
                <img id="book"src="../../assets/after-sing-up/streams/book.svg">
               
              </div> 
            <img src="../../assets/after-sing-up/Uploads/919899798362-1438020046.jpg" id="d">
            <div ></div>
          </li>
          <div>
            <img id="floating" class="strech" src="../../assets/after-sing-up/streams/random.jpg">
          </div>
          <li >
             <div id="info1">
                 <div id="des">Technical</div>
                <div id="des2">25 mins</div>
                <img id="book"src="../../assets/after-sing-up/streams/book.svg">
               
              </div> 
            <img src="../../assets/after-sing-up/Uploads/919873997579.jpg" id="e">
            <div ></div>
          </li>
         
        </ul>
      </div>
    
    </div>
        
    
    <div id="graph-layout" class="expand-animation ">
         <div id="head" class="sjfade">Quiz Ratings</div>
          <div id="further"  class="sjfade">Hover over the section to get detailed view</div>
      <div id="abox1"  class="bigEntrance adjust"></div><div class="t">Technical</div>
          <div id="abox2"  class="bigEntrance adjust"></div><div class="t">Technical</div>
          <div id="abox3"  class="bigEntrance adjust"></div><div class="t">Technical</div>
          <div id="abox4"  class="bigEntrance adjust"></div><div class="t">Technical</div>
       <div id="button-next" class="bnew"><div class="tri"></div></div>
          <div id="curtain"></div>
    </div>
 
      <div id ="graph-layout-t" class="fade">
       
      </div>
    
    <div id="canvas-holder" style="width:25%">
			<canvas id="chart-area" class="disapear" width="100" height="100"/>
        
		</div>
     
    <div id="hovered" class="appear">
    
    </div>
    
    <div id="top-players">
     <div id="side-head">Top placemers</div> 
      <img src="../../assets/after-sing-up/Uploads/919868141614.jpg" id="onea" class="i">
      <div id="hidden1" class="hidden1">
        <img id="backG" src="../../assets/after-sing-up/streams/background.jpg">  
        <div id="heading">Ashutosh Sharma</div>
         <div id="track">Track
          
        </div>
        
         
          <div id="points">
          <ul>
            <li>44</li>  
            <li>3333</li>
            <li>2</li>
          </ul>
          </div>
        <img id="center-image" src="../../assets/after-sing-up/Uploads/919868141614.jpg">
        
      
        
        <div id="recent-attempts">
          <img id="ata" class="at" src="../../assets/after-sing-up/streams/tree.gif">
           <img id="atb" class="at" src="../../assets/after-sing-up/streams/random.jpg">
           <img id="atc" class="at" src="../../assets/after-sing-up/streams/bst1.gif">
        </div>
       
      </div>
      <div id="side-text1">Ashutosh Sharma</div>
      <div id="side-text2">PlaceRank 1</div>
      <img src="../../assets/after-sing-up/Uploads/919899798362-1438020046.jpg" id="oneb"class="i">
       <div id="hidden1" class="hidden2">
        <img id="backG" src="../../assets/after-sing-up/streams/background.jpg">  
        <div id="heading">Ashutosh Sharma</div>
         <div id="track">Track
          
        </div>
        
         
          <div id="points">
          <ul>
            <li>44</li>  
            <li>3333</li>
            <li>2</li>
          </ul>
          </div>
        <img id="center-image" src="../../assets/after-sing-up/Uploads/919899798362-1438020046.jpg">
        
      
        
        <div id="recent-attempts">
          <img id="ata" class="at" src="../../assets/after-sing-up/streams/tree.gif">
           <img id="atb" class="at" src="../../assets/after-sing-up/streams/random.jpg">
           <img id="atc" class="at" src="../../assets/after-sing-up/streams/bst1.gif">
        </div>
       
      </div>
      <div id="side-text1">Ashutosh Sharma</div>
      <div id="side-text2">PlaceRank 1</div>
      <img src="../../assets/after-sing-up/Uploads/919873997579.jpg" id="onec"class="i">
        
      <div id="hidden1" class="hidden3">
        <img id="backG" src="../../assets/after-sing-up/streams/background.jpg">  
        <div id="heading">Ashutosh Sharma</div>
         <div id="track">Track
          
        </div>
        
        
         
          <div id="points">
          <ul>
            <li>44</li>  
            <li>3333</li>
            <li>2</li>
          </ul>
          </div>
        <img id="center-image" src="../../assets/after-sing-up/Uploads/919873997579.jpg">
        <div id="up"></div>
      
        
        <div id="recent-attempts">
          <img id="ata" class="at" src="../../assets/after-sing-up/streams/tree.gif">
           <img id="atb" class="at" src="../../assets/after-sing-up/streams/random.jpg">
           <img id="atc" class="at" src="../../assets/after-sing-up/streams/bst1.gif">
        </div>
       
      </div>
      
      <div id="side-text1">Ashutosh Sharma</div>
      <div id="side-text2">PlaceRank 1</div>
      <div id="text">Explore all placemers</div>
    </div>
 
     <div id="notice"> 
      
     </div>
        
        <div id="hovered-section" ></div>
        
    
     
     <script type="text/javascript" src="../../js/jquery.js"></script>
      <script type="text/javascript" src="../../js/after-sign-up/graph.js"></script>
     <script type="text/javascript" src="../../js/after-sign-up/probablyone.js"></script>
     <script type="text/javascript" src="../../js/libs/Chart.js"></script>
       <script type="text/javascript" src="../../js/after-sign-up/chart-work.js"></script>
         <script type="text/javascript" src="../../js/after-sign-up/amazeMe.js"></script>
    <script type="text/javascript" src="../../js/after-sign-up/search.js"></script>
    <script type="text/javascript" src="../../js/after-sign-up/ajax-search.js"></script>
     <script type="text/javascript" src="../../js/jquery.js"></script>
        <script type="text/javascript" src="../../js/libs/raphael-min.js"></script>
        <script type="text/javascript" src="../../js/after-sign-up/next-transition.js"></script>
         <script type="text/javascript" src="../../js/after-sign-up/main.js"></script>
        <script type="text/javascript" src="../../js/libs/jquery.lazylinepainter-1.1.min.js"></script>
  
    

  </body>
</html>