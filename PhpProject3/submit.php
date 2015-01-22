<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<head>
    
    <?php
        include 'head.php';
    ?>  
</head>

<body>
    
    <form action = "submit.php" method="post">
        
        First Name: <input type ="text"  name ="firstname"><br>
        Last Name: <input type ="text" name="lastname">
        <input type ="submit">
          
    </form>
    
    <?php
    
      
       //here we replace all instances of both lower case "s" and upper-case "S" with 5 from firstname posted by user
        $firstname = str_replace("s","5",$_POST["firstname"]);
        $firstname = str_replace("S","5",$firstname);
        
        //here we replace all intances of both lower case "s" and upper-case "S" with 5 from lastname posted by user
        $lastname = str_replace("s","5",$_POST["lastname"]);
        $lastname = str_replace("S","5",$lastname);
        
        //combine first and last name
        $fullname = $firstname . " " . $lastname;
        
        
        $final_string;
        
        //if the character e is present in the name, then take the characters before e and the characters after e, then concatenate them back with an underlined e character
        if(strchr($fullname,"e")!=false)
        {
            $first=strchr($fullname,"e");
            $first=substr($first,1);
            $first_before=strchr($fullname,"e",true);
            $final_string = $first_before . "<u>e</u>" . $first;
            
        }
        //if e character is not found then just use the fullname again
        else{
            $final_string = $fullname;
        }
        
        $firstname=strchr($final_string," ",true);
        $lastname=strchr($final_string," ");
        
      
       //if "5on" is found the concatenate the part of lastname before 5on with and italicized version of 5on
        if(strchr($lastname,"5on")!=false)
        {
            $lastname = strchr($lastname,"5on",true) . "<i>5on</i>";
        }
        
        //concatenate the firstname and lastname and create the final_string
        $final_string = $firstname . $lastname;
    
        
            //display the final string on the page
        
            echo $final_string . "<br>";
        
     
        
       
    ?>
    
    <p>Please enter a Qualification, and recieve a yes or no response whether the user has this qualification </p><br>
        
        <form action = "submit.php" method="post">
            
            
        
            Job Qualification: <input type ="text"  name ="qualifications"><br>
     
           <input type ="submit">
          
        </form>
        
        <?php
        //create an array of qualifications
        
        $qualification[0] = "computer skills";
        $qualification[1] = "programming skills";
        $qualification[2] = "communication skills";
        $qualification[3] = "tutoring skills";
        $qualification[4] ="math skills";
        
        $qual_length = count($qualification);
        $answer = " ";
        
        
        //compare user response with the array elements and set $answer to yes if the user response matches
        
        $response = $_POST["qualifications"];
        
        
                if($response === $qualification[0])
                {
                     $answer ="YES";
                }
                
                else if($response === $qualification[1])
                {
                    $answer ="YES";
                }
                
                else if($response === $qualification[2]){
                     $answer ="YES";
                }
                
                  else if($response === $qualification[3]){
                     $answer ="YES";
                }
                
                  else if($response === $qualification[4]){
                     $answer ="YES";
                }
                
                else
                {
                    $answer ="NO";
                }
                
                
      
        echo $answer;
        
        ?>
    
    
</body>




</html>


