<?php

if(isset($_POST['reg'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];

    $connection=mysqli_connect('localhost','root','','main');

    $sql="INSERT INTO login(username,password) values('$username','$password')";

    $result=mysqli_query($connection,$sql);
    if($result){
        echo "Your account is created success...";
    }
    else{
        echo "Your account is created...Insert failed";
    }


}

if(isset($_POST['log'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];

    $connection=mysqli_connect('localhost','root','','main');

    $sql="SELECT * FROM login WHERE username='$username' and password='$password'";

    $result=mysqli_query($connection,$sql);
    
    if(mysqli_num_rows($result)){
        echo "Successful";
        header("location:home.html");
    }
    else{
        
        echo "<h1> Wrong UserName Password.";
    }

    
}



?>