<?php

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    

    if (empty($firstname) && empty($lastname) && empty($username) && empty($password) && empty($email) && empty($age))
    {
        echo "*The fields should not be empty.<br>";
        
    
       /* if (strlen($firstname) < 2 && strlen($lastname) < 2 && strlen($username) < 2 && strlen($password) < 2 && strlen($email) < 2)
        {
            echo "*Data entered should be atleast more than 2 characters long.<br>";
        
        }*/    
            if ($email != "@" || $email != "_")
            {
                echo "*Email should atleast have a '@' or a '_' sign";
            }
        
    }
            else    
            {
            header("location:success.php");
            //dbdhddj
            }    
}

?>


<html>
<head>
    <title>Form validation</title>
</head>
<body>

<form method = "post" action = "">
<label>First Name</label>
<input type = "text" name = "firstname" placeholder = "Enter first name" />
<br><br>
<label>Last Name</label>
<input type = "text" name = "lastname" placeholder = "Enter last name" />
<br><br>
<label>Username</label>
<input type = "text" name = "username" id = "username" placeholder = "Enter username" />
<br><br>
<label>Password</label>
<input type = "password" name = "password" placeholder = "Enter password" />
<br><br>
<label>Email</label>
<input type = "email" name = "email" placeholder = "Enter email" />
<br><br>
<label>Age</label>
<input type = "number" name = "age" placeholder = "Enter age" />
<br><br>

<input type = "submit" value = "Submit">


</form>
</body>
</html>