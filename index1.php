<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['Email1']) && !isset($_SESSION['recname']) && !isset($_SESSION['hosname'])) {
    header("Location: index.html");
}else{
  $email = $_SESSION['Email1'];
  $query=mysqli_query($conn,"SELECT * FROM `farmer` WHERE `Email_Address`='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Sale Port ~ Farmer Homepage</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

    <style type="text/css">
        
          table{
    border: solid 1px black;
    align-items: center;
  }

   th, tr, td{
    border: solid 1px black;
    padding: 0px 0px;
  }
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData3()
{
   var divToPrint=document.getElementById("printTable3");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData4()
{
   var divToPrint=document.getElementById("printTable4");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

<body>
   <!-- header section start -->
   <div class="header_section">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="logo"><a href="index1.php"><img src="images/ylogo.png" style="width: 200px;"></a></div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="index1.php">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#about">About Us</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#data">Database</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#act">Farmer Actions</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact Us</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="index4.php">Shop</a>
               </li>
            </ul>
         </div>
      </nav>
      <!-- header section end -->
      <!-- banner section start -->
      <div id="main_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="banner_section">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">Sale <br><span style="color: #151515;">Port</span></h1>
                           <p class="banner_text">Welcome Farmer, <?php echo $row['Fullname']; ?></p>
                           <div class="btn_main">
                              <div class="more_bt"><a href="#contact">Contact Now</a></div>
                              <div class="contact_bt"><a href="logout.php">Logout</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="images/img-1.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="banner_section">
                  <div class="container">
                     <div class="row">
                         <div class="col-md-6">
                           <h1 class="banner_taital">Sale <br><span style="color: #151515;">Port</span></h1>
                           <p class="banner_text">Welcome Farmer, <?php echo $row['Fullname']; ?></p>
                           <div class="btn_main">
                              <div class="more_bt"><a href="#contact">Contact Now</a></div>
                              <div class="contact_bt"><a href="logout.php">Logout</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="images/img-1.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="banner_section">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">Sale <br><span style="color: #151515;">Port</span></h1>
                           <p class="banner_text">Welcome Farmer, <?php echo $row['Fullname']; ?></p>
                           <div class="btn_main">
                              <div class="more_bt"><a href="#contact">Contact Now</a></div>
                              <div class="contact_bt"><a href="logout.php">Logout</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="images/img-1.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" style="font-size:24px; padding-top: 4px;"></i>
         </a>
         <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" style="font-size:24px; padding-top: 4px;"></i>
         </a>
      </div>
   </div>
   <!-- banner section end -->
   <!-- health section start -->
   <div id="about" class="health_section layout_padding">
      <div class="container">
         <h1 class="health_taital">About Us</h1>
         <p class="health_text">The existing systems provide basic functionalities needed to be handled in the small scale milk sales management environment. In this case, there is no intelligence of the software in such cases. In this existing system, all details of the farmer, customers and also the details of all tests done on the milk products is recorded manually.</p>
         <div class="health_section layout_padding">
            <div class="row">
               <div class="col-sm-7">
                  <div class="image_main">
                     <div class="main">
                        <img src="images/h5.jpg" alt="Avatar" class="image" style="width:100%">
                     </div>
                  </div>
               </div>
               <div class="col-sm-5">
                  <div class="image_main_1">
                     <div class="main">
                        <img src="images/h6.jpg" alt="Avatar" class="image" style="width:100%">
                     </div>
                  </div>
               </div>
            </div>
            <div class="getquote_bt_1"><a href="#data">View Database <span><img src="images/right-arrow.png"></span></a></div>
         </div>
      </div>
   </div>
   <!-- health section end -->
   <!-- knowledge section end -->
   <div id="data" >
      <div class="container">
         <div class="knowledge_main">
            <div class="left_main">
               <h1 class="knowledge_taital">Database</h1>
               <h1 class="knowledge_taital">MilkProduct Stock</h1>
            </div>
         </div>
          <table id="printTable">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Stock ID</th>
<th style="text-align: left;
  padding: 8px;">Name</th>
  <th style="text-align: left;
  padding: 8px;">Farm ID</th>
  <th style="text-align: left;
  padding: 8px;">Quantity Available</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "SalePort");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$fil = $_SESSION['hosname'];
$sql = "SELECT * FROM `milkproduct_stock` WHERE `Farm_ID` = '$fil'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Stock_ID"] . "</td><td>" . $row["milkproduct_Name"] . "</td><td>" . $row["Farm_ID"] . "</td><td>" . $row["Quantity_Available"] . "</td></tr>";
}
echo "</table>";
} else { echo "No results"; }
$conn->close();
?>

</table>
                                   <br>
                                   <br>
                                   <br>
                                   <div class="col-md-12 col-sm-12">
                                        <button class="form-control" id="cf-submit" onclick="printData()">Print MilkProduct Stock</button>
                                   </div>
                                   <br>
                                    </div>
      <div class="container">
         <div class="knowledge_main">
            <div class="left_main">
               <h1 class="knowledge_taital" style="color: black;">Available Verification Authority</h1>
            </div>
         </div>
          <table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">VerificationAuthority ID</th>
  <th style="text-align: left;
  padding: 8px;">Farm ID</th>
<th style="text-align: left;
  padding: 8px;">Fullname</th>
  <th style="text-align: left;
  padding: 8px;">Phone Number</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
  <th style="text-align: left;
  padding: 8px;">Speciality </th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "SalePort");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$fil1 = $_SESSION['hosname'];
$sql = "SELECT * FROM `verificationauthorities` WHERE `Farm_ID` = '$fil1'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["VerificationAuthority_ID"] . "</td><td>" . $row["Farm_ID"] . "</td><td>" . $row["Fullname"] . "</td><td>" . $row["Phone_Number"] . "</td><td>" . $row["Email_Address"] . "</td><td>" . $row["Specialty"] . "</td></tr>";
}
echo "</table>";
} else { echo "No results"; }
$conn->close();
?>

</table>
                                   <br>
                                   <br>
                                   <div class="col-md-12 col-sm-12">
                                        <button class="form-control" id="cf-submit" onclick="printData1()">Print Available Farms</button>
                                   </div>
                                   <br>
                                    </div>
                                          <div class="container">
         <div class="knowledge_main">
            <div class="left_main">
               <h1 class="knowledge_taital" style="color: black;">Available MilkProducts</h1>
            </div>
         </div>
          <table id="printTable2">
<tr style="text-align: left;
  padding: 8px;">
  <th style="text-align: left;
  padding: 8px;">MilkProducts ID</th>
<th style="text-align: left;
  padding: 8px;">Farm ID</th>
<th style="text-align: left;
  padding: 8px;">Name</th>
  <th style="text-align: left;
  padding: 8px;">Status</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "SalePort");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$fil2 = $_SESSION['hosname'];
$sql = "SELECT  `MilkProduct_ID`, `Farm_ID`, `MilkProduct_Name`, `Status` FROM `milkproducts` WHERE `Farm_ID` = '$fil2'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["MilkProduct_ID"] . "</td><td>" . $row["Farm_ID"] . "</td><td>" . $row["MilkProduct_Name"] . "</td><td>" . $row["Status"] . "</td></tr>";
}
echo "</table>";
} else { echo "No results"; }
$conn->close();
?>

</table>
                                   <br>
                                   <br>
                                   <div class="col-md-12 col-sm-12">
                                        <button class="form-control" id="cf-submit" onclick="printData2()">Print Available MilkProducts</button>
                                   </div>
                                   <br>
                                    </div>
        <div class="container">
         <div class="knowledge_main">
            <div class="left_main">
               <h1 class="knowledge_taital" style="color: black;">Available Customers</h1>
            </div>
         </div>
          <table id="printTable3">
<tr style="text-align: left;
  padding: 8px;">
  <th style="text-align: left;
  padding: 8px;">Customer ID</th>
<th style="text-align: left;
  padding: 8px;">Fullname</th>
<th style="text-align: left;
  padding: 8px;">Phone Number</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
    <th style="text-align: left;
  padding: 8px;">Sex </th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "SalePort");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  `Customer_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `Sex` FROM `customers`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Customer_ID"] . "</td><td>" . $row["Fullname"] . "</td><td>" . $row["Phone_Number"] . "</td><td>" . $row["Email_Address"] . "</td><td>" . $row["Sex"] . "</td></tr>";
}
echo "</table>";
} else { echo "No results"; }
$conn->close();
?>

</table>
                                   <br>
                                   <br>
                                   <div class="col-md-12 col-sm-12">
                                        <button class="form-control" id="cf-submit" onclick="printData3()">Print Available Customers</button>
                                   </div>
                                   <br>
                                    </div>
                <div class="container">
         <div class="knowledge_main">
            <div class="left_main">
               <h1 class="knowledge_taital" style="color: black;">Available Sales</h1>
            </div>
         </div>
          <table id="printTable4">
<tr style="text-align: left;
  padding: 8px;">
  <th style="text-align: left;
  padding: 8px;">Sale ID</th>
  <th style="text-align: left;
  padding: 8px;">Customer ID </th>
<th style="text-align: left;
  padding: 8px;">Farm ID</th>
<th style="text-align: left;
  padding: 8px;">Farmer ID</th>
  <th style="text-align: left;
  padding: 8px;">Date & Time</th>
  <th style="text-align: left;
  padding: 8px;">Status</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "SalePort");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$fil4 = $_SESSION['recname'];
$sql = "SELECT  * FROM `sales` WHERE `Farmer_ID` = '$fil4'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Sale_ID"] . "</td><td>" . $row["Customer_ID"] . "</td><td>" . $row["Farm_ID"] . "</td><td>" . $row["Farmer_ID"] . "</td><td>" . $row["Date_Time"] . "</td><td>" . $row["Status"] . "</td></tr>";
}
echo "</table>";
} else { echo "No results"; }
$conn->close();
?>

</table>
                                   <br>
                                   <br>
                                   <div class="col-md-12 col-sm-12">
                                        <button class="form-control" id="cf-submit" onclick="printData4()">Print Available Sales</button>
                                   </div>
                                   <br>
                                    </div>
                                    <div class="container">
         <div class="knowledge_main">
            <div class="left_main">
               <h1 class="knowledge_taital" style="color: black;">Available Payments</h1>
            </div>
         </div>
          <table id="printTable4">
<tr style="text-align: left;
  padding: 8px;">
  <th style="text-align: left;
  padding: 8px;">Payment ID</th>
  <th style="text-align: left;
  padding: 8px;">Amount (in .kshs)</th>
<th style="text-align: left;
  padding: 8px;">Farm ID</th>
  <th style="text-align: left;
  padding: 8px;">Customer ID </th>
  <th style="text-align: left;
  padding: 8px;">Stock ID </th>
  <th style="text-align: left;
  padding: 8px;">MilkProduct ID </th>
<th style="text-align: left;
  padding: 8px;">Farmer ID</th>
  <th style="text-align: left;
  padding: 8px;">Status</th>
  <th style="text-align: left;
  padding: 8px;">Date</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "SalePort");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$fil5 = $_SESSION['recname'];
$sql = "SELECT  * FROM `payment` WHERE `Farmer_ID` = '$fil5'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Payment_ID"] . "</td><td>" . $row["Amount"] . "</td><td>" . $row["Farm_ID"] . "</td><td>" . $row["Customer_ID"] . "</td><td>" . $row["Stock_ID"] . "</td><td>" . $row["MilkProduct_ID"] . "</td><td>" . $row["Farmer_ID"] . "</td><td>" . $row["Status"] . "</td><td>" . $row["Date"] . "</td></tr>";
}
echo "</table>";
} else { echo "No results"; }
$conn->close();
?>

</table>
                                   <br>
                                   <br>
                                   <div class="col-md-12 col-sm-12">
                                        <button class="form-control" id="cf-submit" onclick="printData4()">Print available Payments</button>
                                   </div>
                                   <br>
                                    </div>
                                    <div class="container">
         <div class="knowledge_main">
            <div class="left_main">
               <h1 class="knowledge_taital" style="color: black;">Available Tests</h1>
            </div>
         </div>
          <table id="printTable4">
<tr style="text-align: left;
  padding: 8px;">
  <th style="text-align: left;
  padding: 8px;">Test ID</th>
  <th style="text-align: left;
  padding: 8px;">Farm ID </th>
<th style="text-align: left;
  padding: 8px;">Verifaication Authority ID</th>
<th style="text-align: left;
  padding: 8px;">Customer ID</th>
  <th style="text-align: left;
  padding: 8px;">Description</th>
  <th style="text-align: left;
  padding: 8px;">Results</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "SalePort");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$fil6 = $_SESSION['hosname'];
$sql = "SELECT  * FROM `test` WHERE `Farm_ID` = '$fil6'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Test_ID"] . "</td><td>" . $row["Farm_ID"] . "</td><td>" . $row["VerificationAuthority_ID"] . "</td><td>" . $row["Customer_ID"] . "</td><td>" . $row["Description"] . "</td><td>" . $row["Results"] . "</td></tr>";
}
echo "</table>";
} else { echo "No results"; }
$conn->close();
?>

</table>
                                   <br>
                                   <br>
                                   <div class="col-md-12 col-sm-12">
                                        <button class="form-control" id="cf-submit" onclick="printData4()">Print Available Tests</button>
                                   </div>
                                   <br>
                                    </div>
      </div>
   <!-- knowledge section end -->
   <!-- contact section start -->
   <div id="act" class="contact_section layout_padding">
      <div class="container">
         <h1 class="contact_taital">Farmer Actions </h1>
         <div class="news_section_2">
            <div class="row">
               <div class="col-md-6">
                  <div class="contact_box">
                     <form method="post" action="insertion.inc.php">
                     <h1 class="book_text">Add Customer</h1>
                     <input type="text" required="" class="Email_text" placeholder="Fullname" name="fname">
                     <input type="text" required="" hidden="" class="Email_text" value="<?php echo $_SESSION['recname']; ?>" name="rec">
                     <input type="text" required="" class="Email_text" placeholder="Phone Number" name="phone">
                     <input type="email" required="" class="Email_text" placeholder="Email Address" name="email">
                     <input type="text" required="" class="Email_text" placeholder="Recovery Question" name="rq">
                     <input type="text" required="" class="Email_text" placeholder="Recovery Answer" name="ra">
                     <select class="Email_text" required="" name="gen">
                        <option value="" selected="" disabled="">Select Gender</option>
                        <option value="Male">Male </option>
                        <option value="Female">Female </option>
                     </select>
                     <input type="password" required="" class="Email_text" placeholder="Password" name="password">
                     <input type="password" required="" class="Email_text" placeholder="Confirm Password" name="cpassword">
                     <div class="send_bt"><button class="form-control" href="#" type="submit" name="addp">Add</button></div>
                     </form>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="contact_box">
                     <form method="post" action="insertion.inc.php">
                     <h1 class="book_text">Add Sale</h1>
                     <input type="text" required="" hidden="" class="Email_text" value="<?php echo $_SESSION['recname']; ?>" name="rec">
                     <input type="text" required="" hidden="" class="Email_text" value="<?php echo $_SESSION['hosname']; ?>" name="hid">
                     <input type="text" required="" class="Email_text" placeholder="Customer ID" name="pid">
                     <input type="date" min="<?= date('Y-m-d'); ?>" class="Email_text" placeholder="Date & Time" name="d">
                     <input type="time" min="<?= date('h:i:sa'); ?>" class="Email_text" placeholder="Date & Time" name="t">
                     <select class="Email_text" required="" name="stat">
                        <option value="" selected="" disabled="">Select Status</option>
                        <option value="Active">Active </option>
                        <option value="Pending">Pending </option>
                     </select>
                     <div class="send_bt"><button class="form-control" href="#" type="submit" name="adda">Add</button></div>
                     </form>
                  </div>
                  <br>
                  <div class="contact_box">
                     <form method="post" action="insertion.inc.php">
                     <h1 class="book_text">Add Payment</h1>
                     <input type="text" required="" class="Email_text" placeholder="Amount" name="amo">
                     <input type="text" required="" class="Email_text" placeholder="Farm ID" name="hid">
                     <input type="text" required="" class="Email_text" placeholder="Customer ID" name="pid">
                     <input type="text" required="" class="Email_text" placeholder="Stock ID" name="sid">
                     <input type="text" required="" class="Email_text" placeholder="MilkProduct ID" name="rid">
                     <input type="text" required="" hidden="" class="Email_text" value="<?php echo $_SESSION['recname']; ?>" name="rec">
                     <select class="Email_text" required="" name="stat">
                        <option value="" selected="" disabled="">Select Status</option>
                        <option value="Paid">Paid </option>
                        <option value="Unpaid">Unpaid </option>
                     </select>
                     <div class="send_bt"><button class="form-control" href="#" type="submit" name="addb">Add</button></div>
                     </form>
                  </div>
               </div>
         </div>
                     <div class="row">
               <div class="col-md-6">
                  <div class="contact_box">
                     <form method="post" action="insertion.inc.php">
                     <h1 class="book_text">Add A Test</h1>
                     <input type="text" required="" hidden="" class="Email_text" value="<?php echo $_SESSION['hosname']; ?>" name="hid">                     
                     <input type="text" required="" class="Email_text" placeholder="Customer ID" name="pid">
                     <input type="text" required="" class="Email_text" placeholder="VerificationAuthority ID" name="did">
                    <input type="text" required="" class="Email_text" placeholder="Description" name="desc">
                    <input type="text" required="" class="Email_text" placeholder="Results" name="res">
                     <div class="send_bt"><button class="form-control" href="#" type="submit" name="addt">Add</button></div>
                     </form>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="contact_box">
                     <form method="post" action="insertion.inc.php">
                     <h1 class="book_text">Delete An Item</h1>
                     <input type="text" required="" class="Email_text" placeholder="Item ID" name="id">
                    <select class="Email_text" required="" name="item">
                        <option value="" selected="" disabled="">Select Item</option>
                        <option value="0">Customer </option>
                        <option value="1">Product </option>
                        <option value="2">Test </option>
                        <option value="3">Payment </option>
                        <option value="4">Sale </option>
                     </select>
                     <div class="send_bt"><button class="form-control" href="#" type="submit" name="deleted1">Delete</button></div>
                     </form>
                  </div>
                  <br>
                  <div class="contact_box">
                     <form method="post" action="insertion.inc.php">
                     <h1 class="book_text">Add Product</h1>
                     <input type="text" required="" class="Email_text" placeholder="Product Name" name="yog">
                     <input type="text" required="" hidden="" class="Email_text" value="<?php echo $_SESSION['hosname']; ?>" name="hid">
                     <input type="number" required="" class="Email_text" placeholder="Quantity" name="quan">
                     <div class="send_bt"><button class="form-control" href="#" type="submit" name="addm">Add</button></div>
                     </form>
                  </div>
               </div>
         </div>
      </div>
   </div>
   <br>
   <br>
 </div>
   <!-- contact section end -->
   <!-- footer section start -->
   <div id="contact" class="footer_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-sm-6">
               <div class="footer_logo"><a href="index1.php"><img style="width: 200px;" src="images/ylogo1.png"></a></div>
               <h1 class="adderss_text">Contact Us</h1>
               <div class="map_icon"><img src="images/map-icon.png"><span class="paddlin_left_0">Nairobi, KENYA.</span></div>
               <div class="map_icon"><img src="images/call-icon.png"><span class="paddlin_left_0">+254 87282 08289</span></div>
               <div class="map_icon"><img src="images/mail-icon.png"><span class="paddlin_left_0">brian.kithinji@strathmore.edu</span></div>
            </div>
            <div class="col-lg-6 col-sm-6">
               <h1 class="adderss_text">About Us</h1>
               <div class="hiphop_text_1">SalePort offers useful dashboards and reports, through which farmers and customers can have quick and simple access to the system. It improves competency and legitimacy in the milk sales industry, which in turn increases the quality of the  products. </div>
            </div>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">2022 All Rights Reserved.</p>
      </div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>