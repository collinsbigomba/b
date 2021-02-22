<?php
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if (!empty($email)){
if(!empty($password)){
$host = "localhost";
$email = 'collins@gmail.com';
$password ='';
$dbname = "youtube";

// connection
$conn = new mysql ($host, $email,$password,$dbname);

if (mysql_connect_error()){
    die('connection error ('. mysql_connect_errno() .') '.mysqli_connect_error());
}
else{
    $sql = "INSERT INTO account(email,password) values ('$email''$password')";
    if ($conn->query($sql)){
        echo "New record inserted";
    }
    else{
        echo'error: '.sql ."<br>". $conn->error;
    }
    $conn->close();
}
}
else{
    echo'password shouldnt be emppty';
    die();
}
}

else{
    echo"email shouldnt be empty";
    die();
}



?>