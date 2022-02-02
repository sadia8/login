

<?php
include_once 'config.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     //$mobile = $_POST['mobile'];
     $pass=$_POST['pass'];
     $cpass = $_POST['cpass'];

     $sql = "INSERT INTO users(name,email,pass,cpass)
     VALUES ('$name','$email','$pass','$cpass')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>