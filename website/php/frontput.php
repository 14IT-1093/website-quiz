<?php include "database.php" ?>
<?php
if(isset($_POST['signsubmit']))
{
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="INSERT INTO register VALUES('$firstname','$lastname','$email','$password')";
    $result=mysqli_query($connection,$query);
    if(!$result)
    {
        echo "Unable To Insert Data";
    }
}
?>