<?php

$con=mysqli_connect("localhost","root","","main");

$id=$_GET['rn'];
$query="DELETE FROM issue_button WHERE id='$id' ";

$data=mysqli_query($con,$query);

if($data)
{
    echo "The book was return";

}else{
    echo "The book was not return";
}



?>