<?php
    include("config.php");
    session_start();
    $error="";
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $username=mysqli_real_escape_string($con,$_POST["username"]);
        $password=mysqli_real_escape_string($con,$_POST["password"]);

        $sql="select * from users where user_name='$username' and user_password='$password'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_num_rows($result);
        $count=mysqli_num_rows($result);
        if($count==1){
            $_SESSION["user"]=$username;
            header("location:index.php");
        }
        else{
            $error="Hata";
        }
    }

    if(isset($_POST["insertbtn"])){
        $insert="insert into users(user_mail, user_name, user_password) values ('".$_POST["insertemail"]."','".$_POST["insertusername"]."','".$_POST["insertpassword"]."')";
        $snc=mysqli_query($con,$insert);
        if($snc){
            header("location: index.php");
        }
        else{
            header("location: index.php");
        }
    }

    if(isset($_GET["deletebtn"]) && isset($_GET["id"])){
        $userid=$_GET["id"];
        $del="DELETE FROM users WHERE user_id = $userid";
        $bgl=mysqli_query($con,$del);
        if($bgl){
            header("location: index.php");
        }
        else{
            echo("<script>alert('Hata');</script>");
            header("location: index.php");
        }
    }
    ?>
    
   