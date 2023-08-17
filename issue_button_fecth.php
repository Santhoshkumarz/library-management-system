<?php
   $con=mysqli_connect("localhost","root","","main");
   
    $sql="SELECT * FROM issue_button";
    $result=mysqli_query($con,$sql);

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Issued Book</title>
</head>
<body>
<h1>Issued Person Details</h1>

<table border="1px solid">
    <tr>
        <th>Id</th>
        <th>Bookid</th>
        <th>Bookname</th>                 
        <th>Name</th>                            
        <th>Rollno</th>
        <th>Date</th> 
        <th>Phonenumber</th>                       
    </tr>
    
    <?php
    while($rows=mysqli_fetch_assoc($result))
    {
        ?>
            <tr>

                <td><?php echo $rows['id']; ?></td>
                <td><?php echo $rows['bookid']; ?></td>
                <td><?php echo $rows['bookname']; ?></td>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['rollno']; ?></td>
                <td><?php echo $rows['date']; ?></td>
                <td><?php echo $rows['phonenumber']; ?></td>
            
            </tr>
        <?php
    }
    ?>
    
</table>
    
</body>
</html>