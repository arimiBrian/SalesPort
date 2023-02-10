<?php
require_once "dbconnection.inc.php";

session_start();

if(isset($_POST['login'])){

    $id = $_POST['email'];
    $password = $_POST['password'];
    $module = $_POST['mod'];    
    $a = 0;
    $r = 1;
    $p = 2;

if ($module == $a){
         $sql = "SELECT * FROM `admin` WHERE `Email_Address`='$id'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $pass = $row['Password'];

if(md5($password) == $pass){

                $_SESSION['adminname'] = $row['Administrator_ID'];
                $_SESSION['Email'] = $row['Email_Address'];
                echo "Login Succesful.";
                header("Location: index.php");
            }else{
                echo "Incorrect Password.
                <br>
                <br>
                <p> Click <a href='recover_1.php'>HERE</a> to Recover Your Password</p>";
            }
        }else{
            echo "Administrator does not exist.";
        }
}else if ($module == $r){
         $sql = "SELECT * FROM `farmer` WHERE `Email_Address`='$id'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $pass = $row['Password'];

if(md5($password) == $pass){

                $_SESSION['recname'] = $row['Farmer_ID'];
                $_SESSION['hosname'] = $row['Farm_ID'];
                $_SESSION['Email1'] = $row['Email_Address'];
                echo "Login Succesful.";
                header("Location: index1.php");
            }else{
                echo "Incorrect Password.
                <br>
                <br>
                <p> Click <a href='recover_1.php'>HERE</a> to Recover Your Password</p>";
            }
        }else{
            echo "Farmer does not exist.";
        }
}else if ($module == $p){
         $sql = "SELECT * FROM `customers` WHERE `Email_Address`='$id'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $pass = $row['Password'];

if(md5($password) == $pass){

                $_SESSION['patname'] = $row['Customer_ID'];
                $_SESSION['Email2'] = $row['Email_Address'];
                echo "Login Succesful.";
                header("Location: index2.php");
            }else{
                echo "Incorrect Password.
                <br>
                <br>
                <p> Click <a href='recover_1.php'>HERE</a> to Recover Your Password</p>";
            }
        }else{
            echo "Customer does not exist.";
        }
}else{
    echo "An error occured.";
}
            }

           
?>
