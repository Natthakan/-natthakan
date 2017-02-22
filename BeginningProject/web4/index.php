<!doctype html>
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
<title>web4-page-index</title>
</head>
<body>

  <center><div id="banner"><img src="img/bg3.jpg" >
  
   <p><img src="img/login.png"> <a href="index.php" class="js__p_start">Login</a> |  <img src="img/register.png"> <a href="register.php" >Register</a></p>

    <div class="p_body js__p_body js__fadeout"></div>
          <div class="popup js__popup js__slide_top"> 
             <a href="index.php" class="p_close js__p_close" title="Close"></a>
             <form name="form1" method="post" action="check_login.php"><br>
                <center> <h1> Login</h1>
                  <input name="txtUsername" type="text" class="boxinput" placeholder="Username" /><br>
                  <input name="txtPassword" type="password" class="boxinput"  placeholder="Password" / ><br>
                  <input name="Submit" type="submit"  class="boxsubmit" value="Login" ><br>
                
             </form>
          </div></a>

  </div>

  </div>
  
   </center>
</body>
</html>
