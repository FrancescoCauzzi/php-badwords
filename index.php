<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Badwords-Redirect</title>
</head>
<body>
    <header>
    <h1>Redirected Page</h1>
    </header>
    <main>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];    

        $message = $_POST["message"];         
        $message_length = strlen($message);
        //$name_lower = strtolower($name);

        // The str_ireplace function performs a case-insensitive string replacement. 
        $modified_message = str_ireplace($name, "***", $message);
        
        
        echo "<p>Your message is: $message. <br><br> The Word you want to censor is: '$name'</p>";
        echo "<br>";
        echo "<p>Your message is $message_length characters long.</p>";
        echo "<br>";        
        echo "<h4>Modified message</h4>";
        echo $modified_message;
        
        
        

        
        
        }
    ?>
    
        


    </main>
    <footer></footer>
    
</body>
</html>