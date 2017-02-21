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
?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/jquery.popup.css" type="text/css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery.popup.js"></script>

<script type="text/javascript">
    $(function() {
      $(".js__p_start, .js__p_another_start").simplePopup();
    });
  </script>
<style type="text/css">
@import url("webfonts/edpensook/stylesheet.css");
@import url("webfonts/edpensook_bold/stylesheet.css");
body,td,th {
	font-family: "edpensook bold";
}
</style>
<title>web4-page-gift</title>
</head>
<body>

	<div id="head">
		<img src="img/head2.jpg">
	</div><br>

    <div id="box">
    	 <h1><div id="profile"><img src="img/profile.png"> <?php echo $objResult["Username"]?>   <img src="img/point.png"> <?php echo $objResult["point"];?> Point </div></h1>
         <br>

        <?php
          $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
          $objDB = mysql_select_db("web4");
          $strSQL = "SELECT * FROM my_cooking ";
          $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
      ?>

      <center><div class="boxproduct">
      <?php
          while($objResult = mysql_fetch_array($objQuery))
          {
      ?>

        
         <a href="select.php?imgID=<?php echo $objResult["imgID"];?> ">
         	<div class="product">
         	<img src="img/<?php echo $objResult["fileimg"];?>" width ="200" hight="200"><br>

         	<h2><img src="img/pointt.png"> <?php echo $objResult["point"];?> point</h2>
         </div>
         <?php
          }
      ?></div></center>
<?php
mysql_close($objConnect);
?>
</a>
    </div>
    <div id="boxx">
	<a class="active" href="logout.php"><div class="box1"><img src="img/logout2.jpg"></div></a>
	<a class="active" href="#"><div class="box1"><img src="img/buy2.jpg"></div>
	<a class="active" href="gift.php"><div class="boxactive"><img src="img/gift2.jpg"></div>
	<a class="active" href="#"><div class="box1"><img src="img/delivery2.jpg"></div>
	</div>

</body>
</html>
