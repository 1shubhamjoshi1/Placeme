<?php
    include_once'take-question.php';
?>
<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" href="../../css/quiz-giving.css">
        <link rel="stylesheet" href="../../css/animations.css">
        <link rel="stylesheet" href="../../css/prettify.css">
        <link rel="stylesheet" href="../../css/newLayoutWithoutImage.css">
        <link rel="stylesheet" href="../../css/checkbox.css">
        <html>
   

       
    </head>
    <script>
        
      
  
var a;
        var k;
        
        function ajax_post(c){
            //alert(c);
    k=c;
            var hr = new XMLHttpRequest();
    
            var url = "fakingItUp.php";
   
            var vars = "key="+c;
            hr.open("POST", url, true);
   
            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   
            hr.onreadystatechange = function() {
	           if(hr.readyState == 4 && hr.status == 200) {
                   var return_data = hr.responseText;
			         document.getElementById("status").innerHTML = return_data;
                   var str='Status';
                   document.getElementById("status-footer").innerHTML= str;
	               }
                }
            hr.send(vars); 
            
            var tr= new XMLHttpRequest();
            var url2="test.php";
            var vars2="key="+c;
            tr.open("POST",url2,true);
            tr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            tr.onreadystatechange=function(){
                if(tr.readyState == 4 && tr.status == 200) {
                   var return_data2 = tr.responseText;
			         document.getElementById("inner-code").innerHTML = return_data2;
	               }
            }
            
            tr.send(vars2);
              var vr= new XMLHttpRequest();
            var url4="fetchanswer.php";
            var vars4="key="+c;
            vr.open("POST",url4,true);
            vr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            vr.onreadystatechange=function(){
                if(vr.readyState == 4 && vr.status == 200) {
                   var return_data4 = vr.responseText;
              //  document.getElementById("status-footer").innerHTML = return_data4;
			         a=return_data4;
	               }
            }
            
            vr.send(vars4);
            //alert(r);
            //alert(return_data4);
            
            
        }
        
        function fun1()
        { //document.getElementById("status-footer").innerHTML=a;
          var nameContent=document.getElementById('option1').value;
         //var ab=a;
           // alert('nameContent='+nameContent);
            var sr= new XMLHttpRequest();
            var url3="checkanswer.php";
            var vars3="nameContent="+nameContent+"&a="+a+"&&k="+k;
            sr.open("POST",url3,true);
            sr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            sr.onreadystatechange=function(){
                if(sr.readyState == 4 && sr.status == 200) {
                   var return_data3 = sr.responseText;
			         document.getElementById("status-footer").innerHTML = return_data3;
	               }
            }
            
            sr.send(vars3);
        }
        
          function fun2()
        { 
          var nameContent=document.getElementById('option2').value;
            //alert('nameContent'+nameContent);
             var sr= new XMLHttpRequest();
            var url3="checkanswer.php";
            var vars3="nameContent="+nameContent+"&a="+a+"&&k="+k;
            sr.open("POST",url3,true);
            sr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            sr.onreadystatechange=function(){
                if(sr.readyState == 4 && sr.status == 200) {
                   var return_data3 = sr.responseText;
                    document.getElementById("status-footer").innerHTML = return_data3;
	               }
            }
            
            sr.send(vars3);
            
        }
          function fun3()
        { 
          var nameContent=document.getElementById('option3').value;
            //alert('nameContent'+nameContent);
    var sr= new XMLHttpRequest();
            var url3="checkanswer.php";
            var vars3="nameContent="+nameContent+"&a="+a+"&&k="+k;
            sr.open("POST",url3,true);
            sr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            sr.onreadystatechange=function(){
                if(sr.readyState == 4 && sr.status == 200) {
                   var return_data3 = sr.responseText;
			         document.getElementById("status-footer").innerHTML = return_data3;
	               }
            }
            
            sr.send(vars3);
         }
          function fun4()
        { 
          var nameContent=document.getElementById('option4').value;
           // alert('nameContent'+nameContent);
             var sr= new XMLHttpRequest();
            var url3="checkanswer.php";
            var vars3="nameContent="+nameContent+"&a="+a+"&&k="+k;
            sr.open("POST",url3,true);
            sr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            sr.onreadystatechange=function(){
                if(sr.readyState == 4 && sr.status == 200) {
                   var return_data3 = sr.responseText;
			         document.getElementById("status-footer").innerHTML = return_data3;
	               }
            }
            
            sr.send(vars3);
        }
      
      
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : ["Operating System","DataStructures","C++","Java","Aptitute","Technical","Logical"],
		datasets : [
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			},
			{
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			}
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}

	
    </script>
    
    <body>
      <div id="fun">
        <div id="top">Placeme Analysis</div>
       <div id="char"style="width: 50%">
			<canvas id="canvas" height="450" width="600"></canvas>
		</div>
      </div>
        <div id="container">
        <div id="top-header">
            <img id="image" src="../../assets/smallLogo.png">
        </div>
      
      
        <div id="display-section">
             <div id="status"></div>
            
              <div id="qcode">
    
                <pre id="inner-code" class="prettyprint">
<!--
void main(){
    cout<<"void main"<<endl;
    return 0;
}-->
                
              </pre></div>
            
            
          
        </div>
     
      
    
            <div id="bottom-pannel">
             <img src="../../assets/one.svg"  onclick="ajax_post(1);" width="40px" height="40px" name="question-no"/>  
             <img src="../../assets/two.svg" onclick="ajax_post(2);checker(2);"width="40px" height="40px" name="question-no"/>  
             <img src="../../assets/three.svg" onclick="ajax_post(3);checker(3);"width="40px" height="40px" name="question-no"/> 
             <img src="../../assets/four.svg" onclick="ajax_post(4);checker(4);"width="40px" height="40px" name="question-no"/>  
             <img src="../../assets/five.svg" onclick="ajax_post(5);checker(5);"width="40px" height="40px" name="question-no"/>  
             <img src="../../assets/six.svg" onclick="ajax_post(6);checker(6);"width="40px" height="40px" name="question-no"/>  
             <img src="../../assets/seven.svg" onclick="ajax_post(7);checker(7);"width="40px" height="40px" name="question-no"/>  
             <img src="../../assets/eight.svg" onclick="ajax_post(8);checker(8);"width="40px" height="40px" name="question-no"/>  
             <img src="../../assets/nine.svg" onclick="ajax_post(9);checker(9);"width="40px" height="40px" name="question-no"/> 
             <img src="../../assets/ten.svg" onclick="ajax_post(10);checker(10);"width="40px" height="40px" name="question-no"/>  
             <img src="../../assets/eleven.svg" onclick="ajax_post(11);checker(11);"width="40px" height="40px" name="question-no"/>  
             <img src="../../assets/twelve.svg" onclick="ajax_post(12);checker(12);"width="40px" height="40px" name="question-no"/>  
             <img src="../../assets/thirteen.svg" onclick="ajax_post(13);checker(13);"width="40px" height="40px" name="question-no"/>  
             <img src="../../assets/fourteen.svg" onclick="ajax_post(14);"width="40px" height="40px" name="question-no"/>  
             <img src="../../assets/fifteen.svg" onclick="ajax_post(15);"width="40px" height="40px" name="question-no"/> 
             <img src="../../assets/sixteen.svg" onclick="ajax_post(16);"width="40px" height="40px" name="question-no"/>  
             <img src="../../assets/seventeen.svg" onclick="ajax_post(17);"width="40px" height="40px" name="question-no"/>  
             <img src="../../assets/eighteen.svg" onclick="ajax_post(18);"width="40px" height="40px" name="question-no"/>  
             <img src="../../assets/nineteen.svg" onclick="ajax_post(19);"width="40px" height="40px" name="question-no"/>  
             <img src="../../assets/twenty.svg" onclick="ajax_post(20);"width="40px" height="40px" name="question-no"/>  
             </div>
        
          
        
        <a id="submit-button">Submit</a>
        <!--
       -->
          
        <div id="status-footer">
        Status
        </div>
        
       
        </div>
          <script type="text/javascript" src="../../js/jquery.js"></script>
       <script src="../../js/libs/prettify.js"></script>
        <script src="../../js/libs/Chart.js"></script>
        <script src="../../js/funwork.js"></script>
    </body>
</html>