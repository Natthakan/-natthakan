<?php
   session_start();
   mysql_connect("localhost","root","");
   mysql_select_db("web4");
   $strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['txtUsername'])."' 
   and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
   $objQuery = mysql_query($strSQL);
   $objResult = mysql_fetch_array($objQuery);
   if(!$objResult)
   {
        ?><center>
          <h3><?php echo "Username and Password Incorrect!"; ?></h3>
              <a href="login.php">Back<div id="home"> </div> </a>
          </center>
         <?php 
   }
   else
   {
         $_SESSION["UserID"] = $objResult["UserID"];
         $_SESSION["Status"] = $objResult["Status"];

         session_write_close();
         
         if($objResult["Status"] == "ADMIN")
         {
            header("location:admin_page.php");
         }
         else
         {
            header("location:gift.php");
         }
   }
   mysql_close();

?>