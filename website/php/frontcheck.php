<?php include "database.php" ?>
<?php
 if(isset($_POST['check']))
 {
     $emailc=$_POST['emailc'];
     $passwordc=$_POST['passwordc'];
     $op=mysqli_query($connection,"SELECT password FROM register WHERE email='$emailc'");
     $row=mysqli_fetch_assoc($op);
     if($passwordc!=$row['password'] || $emailc='' || $passwordc='')
     {
         echo "Unsuccessful Login";
     }
     else
     {

           header('Location: quiz.php');
           
           
           
     }
 }
?>
