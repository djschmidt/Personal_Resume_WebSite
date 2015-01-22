<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">




<head>
    <link rel="stylesheet" type="text/css" href="main.css"/>
    <img src ="banner1.jpg" alt="head_banner"/><br> 
        
      <div id="mainmenu">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="index.php">Resume</a></li>
            <li><a href="suggest.php">Suggestions</a></li>
        </ul>
    </div>
        
   
    
      <?php
      /*
        date_default_timezone_set("America/Los_Angeles");
        echo "Today is " . date("m/d/Y") . "<br>";
        echo "Today is " . date("l") .   "<br>";
        
        if( date("h:i:s") < date_sunset(time()))
        {
           echo "<div style ='color:blue'>It is currently day</p>" ;
        }
        
        else
        {
           echo"<div style ='color:black'>It is currently night</div>" ;
        }
     
        */
        
       ?>
        
        <div id ="timer">
            
        </div>
       

        <meta charset="UTF-8"/>

 


</head>

<body>
        
    <script>
        
     setInterval(function() {
         
        var currentTime = new Date ( );    
        var currentHours = currentTime.getHours ( );   
        var currentMinutes = currentTime.getMinutes ( );   
        var currentSeconds = currentTime.getSeconds ( );
        currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;   
        currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;    
        var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";    
        currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;    
        currentHours = ( currentHours == 0 ) ? 12 : currentHours;    
        var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
        document.getElementById("timer").innerHTML = currentTimeString;
        }, 1000);
    </script>
    
</body>



</html>