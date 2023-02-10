<?php 
//ADMINISTRATOR Section
//Add a Receptionist
if (isset($_POST['addre'])) {
 $hid = $_POST['hid'];
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $question = $_POST['rq'];
 $answer = $_POST['ra'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {

      $sql = "SELECT * FROM `farms` WHERE `Farm_ID`='$hid'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){

   $sql1 = "INSERT INTO `farmer`(`Farm_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `Recovery_Question`, `Recovery_Answer`, `Password`) VALUES 
                                 ('$hid',    '$fname',    '$phone',      '$email',       '$question','    $answer'         ,md5('$password'))";
     mysqli_query($conn, $sql1);
   // var_dump($sql);
   // die();
  header("Location: index.php?farmerregistration=success");
 }else{
  echo "Farm does not exist.";
 }
}else{
  echo "Passwords do not match.";
 }
}

//Add a VerificationAuthority
if (isset($_POST['addd'])) {
 $hid = $_POST['hid'];
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $spec = $_POST['spec'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {

      $sql = "SELECT * FROM `farms` WHERE `Farm_ID`='$hid'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){

   $sql1 = "INSERT INTO `verificatioauthorities`(`Farm_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `Specialty`) VALUES ('$hid','$fname','$phone','$email','$spec')";
     mysqli_query($conn, $sql1);
   // var_dump($sql);
   // die();
  header("Location: index.php?verificationauthorityregistration=success");
 }else{
  echo "Farm does not exist.";
 }
}else{
  echo "Passwords do not match.";
 }
}

//Add a Farm
if (isset($_POST['addh'])) {
 $loc = $_POST['loc'];
 $hname = $_POST['hname'];

 require_once 'dbconnection.inc.php';

   $sql = "INSERT INTO `farms`(`Farm_Name`, `Location`) VALUES ('$hname','$loc')";
     mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index.php?addfarm=success");
 }

 //Add a MilkProduct
if (isset($_POST['addro'])) {
 $hid = $_POST['hid'];
 //$loc = $_POST['loc'];
 $rname = $_POST['rname'];
 $stat = $_POST['stat'];

 require_once 'dbconnection.inc.php';

      $sql = "SELECT * FROM `farms` WHERE `Farm_ID`='$hid'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){

   $sql = "INSERT INTO `milkproducts`(`MilkProduct_Name`, `Farm_ID`, `Status`) VALUES ('$rname','$hid','$stat')";
     mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index.php?addmilkproduct=success");
 }else{
  echo "Farm does not exist.";
 }
}

//Delete An Item  
if (isset($_POST['deleted'])) {
  $id = $_POST['id'];
  $item = $_POST['item'];

  $h = 0;
  $ro = 1;
  $d = 2;
  $re = 3; 

require_once 'dbconnection.inc.php';

if ($item == $h) {
    $sql = "DELETE FROM `farms` WHERE `Farm_ID` = '$id'";

  mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index.php?delete=success");
}else if ($item == $ro) {
    $sql = "DELETE FROM `milkproducts` WHERE `MilkProduct_ID` = '$id'";

  mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index.php?delete=success");
}else if ($item == $d) {
    $sql = "DELETE FROM `verificationauthorities` WHERE `VerificationAuthority_ID` = '$id'";

  mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index.php?delete=success");
}else if ($item == $re) {
    $sql = "DELETE FROM `farmer` WHERE `Farmer_ID` = '$id'";

  mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index.php?delete=success");
}else{
  echo "An error occurred.";
}
}

//Update milk product
if (isset($_POST['upr'])) {
 $rid = $_POST['rid'];
 $stat = $_POST['stat'];

 require_once 'dbconnection.inc.php';


      $sql = "SELECT * FROM `milkproducts` WHERE `MilkProduct_ID`='$rid'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){

   $sql1 = "UPDATE `milkproducts` SET `Status`='$stat' WHERE `MilkProduct_ID` = '$rid';";
     mysqli_query($conn, $sql1);
   // var_dump($sql);
   // die();
  header("Location: index.php?updatemilkproduct=success");
 }else{
  echo "Milk Product does not exist.";
 }
}

//Farmer Section
//Add a Customer
if (isset($_POST['addp'])) {
 $rec = $_POST['rec'];
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $gen = $_POST['gen'];
 $question = $_POST['rq'];
 $answer = $_POST['ra'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {

      $sql = "SELECT * FROM `farmer` WHERE `Farmer_ID`='$rec'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){

   $sql1 = "INSERT INTO `customers`(`Fullname`, `Phone_Number`, `Email_Address`, `Sex`, `Recovery_Question`, `Recovery_Answer`, `Password`) VALUES ('$fname','$phone','$email','$gen','$question','$answer',md5('$password'))";
     mysqli_query($conn, $sql1);
   // var_dump($sql);
   // die();
  header("Location: index1.php?customerregistration=success");
 }else{
  echo "Farmer does not exist.";
 }
}else{
  echo "Passwords do not match.";
 }
}

//Add Sale
if (isset($_POST['adda'])) {
 $hid = $_POST['hid'];
 $rec = $_POST['rec'];
 $pid = $_POST['pid'];
  $d = $_POST['d'];
 $t = $_POST['t'];
 $dt = "$d " . " $t";
 $stat = $_POST['stat'];

 require_once 'dbconnection.inc.php';

      $sql = "SELECT * FROM `farms` WHERE `Farm_ID`='$hid'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){

             $sql1 = "SELECT * FROM `farmers` WHERE `Farmer_ID`='$rec'";

        $query1 = mysqli_query($conn,$sql1);

        if(mysqli_num_rows($query1) > 0){

        $sql2 = "SELECT * FROM `customers` WHERE `Customer_ID`='$pid'";

        $query2 = mysqli_query($conn,$sql2);

        if(mysqli_num_rows($query2) > 0){

   $sql3 = "INSERT INTO `sales`(`Customer_ID`, `Farm_ID`, `Farmer_ID`, `Date_Time`, `Status`) VALUES ('$pid','$hid','$rec','$dt','$stat')";
     mysqli_query($conn, $sql3);
   // var_dump($sql);
   // die();
  header("Location: index1.php?addsale=success");
 }
else{
  echo "Customer does not exist.";
 }
}else{
  echo "Farmer does not exist.";
 }
}else{
  echo "Farm does not exist.";
 }
}

//Add a Payment
if (isset($_POST['addb'])) {
 $hid = $_POST['hid'];
 $rec = $_POST['rec'];
 $pid = $_POST['pid'];
 $sid = $_POST['sid'];
 $rid = $_POST['rid'];
 $amo = $_POST['amo'];
 $date = date('Y/m/d');
 $stat = $_POST['stat'];

 require_once 'dbconnection.inc.php';

      $sql = "SELECT * FROM `farms` WHERE `Farm_ID`='$hid'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){

             $sql1 = "SELECT * FROM `farmers` WHERE `Farmer_ID`='$rec'";

        $query1 = mysqli_query($conn,$sql1);

        if(mysqli_num_rows($query1) > 0){

        $sql2 = "SELECT * FROM `customers` WHERE `Customer_ID`='$pid'";

        $query2 = mysqli_query($conn,$sql2);

        if(mysqli_num_rows($query2) > 0){

          $sql2 = "SELECT * FROM `milkproduct_stock` WHERE `Stock_ID`='$sid'";

        $query2 = mysqli_query($conn,$sql2);

        if(mysqli_num_rows($query2) > 0){

   $sql3 = "INSERT INTO `bill`(`Amount`, `Farm_ID`, `Customer_ID`, `Stock_ID`, `MilkProduct_ID`, `Farmer_ID`, `Status`, `Date`) VALUES ('$amo','$hid','$pid','$sid','$rid','$rec','$stat','$date')";
     mysqli_query($conn, $sql3);
   // var_dump($sql);
   // die();
  header("Location: index1.php?addpayment=success");
 }
else{
  echo "Customer does not exist.";
 }
}else{
  echo "Farmer does not exist.";
 }
}else{
  echo "Farm does not exist.";
 }
}
}

//Add a Test
if (isset($_POST['addt'])) {
 $hid = $_POST['hid'];
 $did = $_POST['did'];
 $pid = $_POST['pid'];
 $des = $_POST['desc'];
 $res = $_POST['res'];

 require_once 'dbconnection.inc.php';

      $sql = "SELECT * FROM `farms` WHERE `Farm_ID`='$hid'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){

             $sql1 = "SELECT * FROM `verificatioauthorities` WHERE `VerificationAuthority_ID`='$did'";

        $query1 = mysqli_query($conn,$sql1);

        if(mysqli_num_rows($query1) > 0){

        $sql2 = "SELECT * FROM `customers` WHERE `Customer_ID`='$pid'";

        $query2 = mysqli_query($conn,$sql2);

        if(mysqli_num_rows($query2) > 0){

   $sql3 = "INSERT INTO `test`(`Farm_ID`, `VerificationAuthority_ID`, `Customer_ID`, `Description`, `Results`) VALUES ('$hid','$did','$pid','$des','$res')";
     mysqli_query($conn, $sql3);
   // var_dump($sql);
   // die();
  header("Location: index1.php?addtest=success");
 }
else{
  echo "Customer does not exist.";
 }
}else{
  echo "VerificationAuthority does not exist.";
 }
}else{
  echo "Farm does not exist.";
 }
}

//Add Product
if (isset($_POST['addm'])) {
 $med = $_POST['med'];
 $hid = $_POST['hid'];
 $quan = $_POST['quan'];

 require_once 'dbconnection.inc.php';


      $sql = "SELECT * FROM `farms` WHERE `Farm_ID`='$hid'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){

   $sql1 = "INSERT INTO `milkproduct_stock`(`MilkProduct_Name`, `Farm_ID`, `Quantity_Available`) VALUES ('$med','$hid','$quan')";
     mysqli_query($conn, $sql1);
   // var_dump($sql);
   // die();
  header("Location: index1.php?addproduct=success");
 }else{
  echo "Farmer does not exist.";
 }
}

//Delete An Item  
if (isset($_POST['deleted1'])) {
  $id = $_POST['id'];
  $item = $_POST['item'];

  $p = 0;
  $m = 1;
  $t = 2;
  $b = 3; 
  $a = 4;

require_once 'dbconnection.inc.php';

if ($item == $p) {
    $sql = "DELETE FROM `customers` WHERE `Customer_ID` = '$id'";

  mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index1.php?delete=success");
}else if ($item == $m) {
    $sql = "DELETE FROM `milkproduct_stock` WHERE `Stock_ID` = '$id'";

  mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index1.php?delete=success");
}else if ($item == $t) {
    $sql = "DELETE FROM `test` WHERE `Test_ID` = '$id'";

  mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index1.php?delete=success");
}else if ($item == $b) {
    $sql = "DELETE FROM `payment` WHERE `Payment_ID` = '$id'";

  mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index1.php?delete=success");
}else{
  echo "An error occurred.";
}
}

 //Customer Section
 //Order sale
if (isset($_POST['seta'])) {
 $hid = $_POST['hid'];
 $pid = $_POST['pid'];
 $d = $_POST['d'];
 $t = $_POST['t'];
 $dt = "$d " . " $t";

 require_once 'dbconnection.inc.php';

      $sql = "SELECT * FROM `farms` WHERE `Farm_ID`='$hid'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){

        $sql2 = "SELECT * FROM `customers` WHERE `Customer_ID`='$pid'";

        $query2 = mysqli_query($conn,$sql2);

        if(mysqli_num_rows($query2) > 0){

   $sql3 = "INSERT INTO `sales`(`Customer_ID`, `Farm_ID`, `Farmer_ID`, `Date_Time`, `Status`) VALUES ('$pid','$hid','None, Self-Service.','$dt','Active')";
    mysqli_query($conn, $sql3);
   //var_dump($sql3);
   // die();
  header("Location: index2.php?setsale=success");
 }
else{
  echo "Customer does not exist.";
 }
}else{
  echo "Farm does not exist.";
 }
}

//Update a Customer
if (isset($_POST['upp'])) {
 $id = $_POST['id'];
 $fname = $_POST['fname'];
 $phone = $_POST['phone'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {

      $sql = "SELECT * FROM `customers` WHERE `Customer_ID`='$id'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){

   $sql1 = "UPDATE `customers` SET `Fullname`='$fname',`Phone_Number`='$phone' WHERE `Customer_ID` = '$id';";
     mysqli_query($conn, $sql1);
   // var_dump($sql);
   // die();
  header("Location: index2.php?customerregistration=success");
 }else{
  echo "Farmer does not exist.";
 }
}else{
  echo "Passwords do not match.";
 }
}
 ?>