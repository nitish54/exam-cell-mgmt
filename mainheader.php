<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<style type="text/css">
<!--

a {
	font-size: 16px;
	color: #FFFFFF;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #0033FF;
}
a:hover {
	text-decoration: underline;
	color: #CC0000;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
body {
	background-color: #E8DFE2;
}
.look {font-size: 24px}
#header-fixed {
    position:fixed;
    top: 0px;
    height: 30px;
    opacity:1;
}
-->
</style>

<!-- Start css3menu.com HEAD section -->
<link rel="stylesheet" href="images/css3menu1/style.css" type="text/css" />
<!-- End css3menu.com HEAD section -->

</head>
 <script language="javascript" type="text/javascript">
var tableOffset = $("#table-1").offset().top;
var $header = $("#table-1 > thead").clone();
var $fixedHeader = $("#header-fixed").append($header);

$(window).bind("scroll", function() {
    var offset = $(this).scrollTop();

    if (offset >= tableOffset && $fixedHeader.is(":hidden")) {
        $fixedHeader.show();
    }
    else if (offset < tableOffset) {
        $fixedHeader.hide();
    }
});
</script>
<body>
      <table id="header-fixed" width="100%" style="opacity:0.8;">
          <tr><td width="20%"><span class="look">Welcome <?php echo "<font color='blue'>".$_SESSION['user'];?></td><td width="80%"><div align="right"><img src="images/061.gif" width="16" height="16" /><a href="home.php"><font color="black" size="3">Home</font></a>&nbsp; <img src="images/066.gif" width="16" height="16" /><a href="about_us.php" target="content"><font color="black" size="3">AboutUs</font></a>&nbsp; <img src="images/055.gif" width="16" height="16" /><a href="help.php" target="blank"><font color="black" size="3">Help</font></a>&nbsp; &nbsp; </span></div>  </td></tr>
       </table>
     <br/>
<div align="center">
<table width="999" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
 
  <tr>
    <td height="110" bgcolor="#660033"><img src="images/bannerfans_3130759 (2).jpg" width="999" height="110" /></td>
  </tr>
  <tr>
    



<td height="74" align="center" valign="top" bgcolor="#006699">
<hr size="5" noshade="noshade" color="#999999" width="999" >
</hr>









<!-- Start css3menu.com BODY section id=1 -->
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="home.php" style="height:32px;line-height:32px;"><img src="images/css3menu1/home.png" alt="Home"/>Home</a></li>
	<li class="topmenu"><a href="ResultAnalyser.php" style="height:32px;line-height:32px;"><img src="images/css3menu1/blue-tabs-32.png" alt="Result analyzer"/>Result analyzer</a></li>
	<li class="topmenu"><a href="idForm.php" style="height:32px;line-height:32px;"><img src="images/css3menu1/137.gif" alt="Id card generater"/>ID card generator</a></li>
	<li class="topmenu"><a href="viewStudent.php" style="height:32px;line-height:32px;"><img src="images/css3menu1/1341.gif" alt="Students info"/>Students Info</a></li>
	<li class="topmenu"><a href="seatForm.php" style="height:32px;line-height:32px;"><img src="images/css3menu1/0861.gif" alt="seat management"/>Seat Management</a></li>
        <li class="topmenu"><a href="contactForm.php" style="height:32px;line-height:32px;"><img src="images/contact.png" alt="Teacher's info"/>Contact via Mail</a></li>
	<li class="topmenu"><a href="database.php" style="height:32px;line-height:32px;"><img src="images/css3menu1/database.jpg" alt="Database" width="15" height="20"/>Database</a></li>
	<li class="toplast"><a href="logout.php" style="height:32px;line-height:32px;"><img src="images/css3menu1/register3.png" alt="logout"/>logout</a></li>
</ul>
<p style="display:none"><a href="http://css3menu.com/">CSS Buttons with Images Css3Menu.com</a></p>
<!-- End css3menu.com BODY section -->

<hr size="5" noshade="noshade" color="#666666" width="999" >  
</hr>
  </tr>
</table>
</div>
</body>

</html>


