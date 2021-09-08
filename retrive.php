<?php
include_once 'signup.php';
$result = mysqli_query($con,"SELECT * FROM sign_ups");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0){
?>
  <table border="1">
  
  <tr>
    <td>first_name</td>
    <td>last_name</td>
    <td>email</td>
    <td>user_name</td>
    <td>password </td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["user_name"]; ?></td>
    <td><?php echo $row["password"]; ?></td>
    
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>
