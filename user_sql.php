<?php
include "config.php";


if(isset($_POST['submit_info'])){
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $gender = $_POST['flexRadioDefault'];
    $id = $_SESSION['ID'];

    $query="UPDATE `users` SET `height`='$height', `weight`='$weight', `gender` ='$gender' WHERE `userid`='$id' ";
    $inforesult=mysqli_query($conn,$query);
    
    if($inforesult){
        header("Location:home.php");
    }else{
        echo "<script>alert('Update Failed')</script>";
        echo "<script>window.open('home.php', '_self')</script>";
    }
}

?>