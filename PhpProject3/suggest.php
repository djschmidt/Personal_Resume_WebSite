<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<head>
    
   <?php
    include 'head.php';
    ?>
    
     
    


</head>
<body>
    
      <h1>Suggestions Page</h1>
      
    <p>Feel Free to leave your name and any suggestions that you may have below regarding my resume or my home page. Any advice is welcome.</p>
    <form action = "suggest.php" method="post">

        Name: <input type ="text"  name ="name"><br>
                Suggestion: <input type ="text" name="suggestion">
                    <input type ="submit">
                        </form>

                        <?php
                        if (isset($_POST['name']) && isset($_POST['suggestion'])) {

                            $name = $_POST['name'];
                            $suggestion = $_POST['suggestion'];




                            require_once __DIR__ . '/db_connect.php';


                            $d = new DB_CONNECT();

                            $result = mysql_query("INSERT INTO suggest( name, suggestion) VALUES('$name', '$suggestion')");
                        }
                        ?>
    </body>
</html>