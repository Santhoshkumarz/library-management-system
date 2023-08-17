<?php
   $con=mysqli_connect("localhost","root","","main");
   
    $sql="SELECT * FROM addbook";
    $result=mysqli_query($con,$sql);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>All Book</title>
</head>
<body>
    <h1>All Book</h1>

    <table border="1px solid">
        <tr>
            <th>bookid</th> 
            <th>bookname</th>                 
            <th>author</th>                            
            <th>edition</th>
                                 
        </tr>
    <?php
    while($rows=mysqli_fetch_assoc($result))
    {
        ?>
            <tr>

                <td><?php echo $rows['bookid']; ?></td>
                <td><?php echo $rows['bookname']; ?></td>
                <td><?php echo $rows['author']; ?></td>
                <td><?php echo $rows['edition']; ?></td>
                

            </tr>
        <?php
    }
    ?>

    </table>
    
</body>
</html>