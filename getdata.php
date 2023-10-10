<?php             //    $run ="INSERT INTO `userdetails`(`username`, `password`, `age`) VALUES('$username','$password',24)"; $insert_user=mysqli_query($conn,$run);
include ("./config.php");
  if($_SERVER["REQUEST_METHOD"] == "POST"){  //if(isset($_POST['days']))
    $days= $_POST['days'];
    $notallowed= $_POST['notallowed'];
    $time= $_POST['time'];
    $message= $_POST['message'];
    $run ="INSERT INTO `message_announces`( `Time`, `filename`, `not_allowed`, `days`, `message`) VALUES('$time','ppp.txt','$notallowed','$days','$message')";
    $insert_user=mysqli_query($conn,$run);
    if($insert_user){
        echo"Data Inserted Sucessfully";
    }
}




?>