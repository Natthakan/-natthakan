<?php
session_start();
if($_SESSION['UserID'] == ""){
    echo "Please Login!";
    header("Location:index.php");
    exit();
}
if($_SESSION['Status'] != "USER"){
     echo "This page for User only!";
     exit();
}  
mysql_connect("localhost","root","");
mysql_select_db("web4");
$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
?>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">


<style type="text/css">
@import url("webfonts/edpensook/stylesheet.css");
@import url("webfonts/edpensook_bold/stylesheet.css");
body,td,th {
  font-family: "edpensook bold";
}
</style>
<title>web4-page-sele</title>
</head>
<body>
<div id="head">
    <img src="img/head2.jpg">
  </div><br>

   <div id="box">
       <h1><div id="profile"><img src="img/profile.png"> <?php echo $objResult["Username"]?>   <img src="img/point.png"> <?php echo $objResult["point_mem"];?> Point </div></h1>
         <br>

<?php
  $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
  $objDB = mysql_select_db("web4");
  $strSQL = "SELECT * FROM my_cooking WHERE imgID = '".$_GET["imgID"]."' ";
  $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
  $objResult = mysql_fetch_array($objQuery);
  mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");

?>
    
         <div class="select">
             <img src="img/<?php echo $objResult["fileimg"];?>" width ="250" hight="250"><br>
             <h2><img src="img/pointt.png"> <?php echo $objResult["point"];?> point</h2>
         </div>

         <div class="text">
             <h3><?php echo $objResult["Name"];?></h3>
             <p><?php echo $objResult["detail"];?></p><br>
                        <!--  <button ><a href="user_page.php">Back</a></button> -->
 
         </div>
         
         <div id="btn">
         <center>

          <a class="active" href="gift.php">
                    <div class="btn_back">Back</div></a>
          <a href="point_gift.php?imgID=<?php echo $objResult["imgID"];?> "><div class="btn_select">Ok</div></a>
         </center>
       </div>

       </div>
    
  <div id="boxx">
  <a class="active" href="logout.php"><div class="box1"><img src="img/logout2.jpg"></div></a>
  <a class="active" href="#"><div class="box1"><img src="img/buy2.jpg"></div>
  <a class="active" href="gift.php"><div class="boxactive"><img src="img/gift2.jpg"></div>
  <a class="active" href="#"><div class="box1"><img src="img/delivery2.jpg"></div>

  </div>
</body>
</html>