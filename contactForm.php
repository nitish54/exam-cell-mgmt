<?php
session_start();
if (!isset($_SESSION['name']))
    header('location: login.php');
?>
<html>
    <title>Exam Cell Portal</title>
    <head>

    </head>
<?php include 'mainheader.php'; ?> 
    <body>
        <div align="center">            
            <table width="1000" border="1">
                <tr>
                    <td valign="top" width="144" bgcolor="#006699">
<?php include 'lm_contact.php'; ?>   

                    </td>
                    <td>

                <html xmlns="http://www.w3.org/1999/xhtml">
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
                        <title>Mail</title>
                    </head>
                    <script type="text/javascript">
                        function valid(x){
                            var val = document.getElementById(x).value;
                            if(val=="")
                            {
                                document.getElementById(x).style.borderColor="red";
                                document.getElementById(x).style.background="#FFB599";
                            }
                            else   
                            {document.getElementById(x).style.background="whitesmoke";
                                document.getElementById(x).style.borderColor="black";
                            }
                        }
                        function fvalid()
                        {
                            var to = document.getElementById("txtTo").value;
                            var sub = document.getElementById("txtSub").value; 
                            var msg = document.getElementById("txtMsg").value;
                            if(to=="" || sub=="" ||msg==""){
                                alert("Fill all the Details");
                                return false;
                            }
                            var email = to.split(',');
                            for (var i = 0; i < email.length; i++) {
                            if(emailTest(email[i])==false){
                              alert("Enter Proper mail address..");
                              return false;
                            }
                            }
                            function emailTest(input){
                             var EMAIL_EXPR = /^[a-z0-9\.\_]{3,25}[@][a-z]{3,10}[.][a-z]{2,3}[.]{0,1}[a-z]{0,2}$/;
                            return EMAIL_EXPR.test(input);
                            }
                        }
                    </script>
                    <body>
                        <div align="center">
                            <table width="675" border="0" cellpadding="0" cellspacing="0">
                                <!--DWLayoutTable-->
                                <tr>
                                    <td width="13" height="">&nbsp;</td>
                                    <td width="78">&nbsp;</td>
                                    <td width="13">&nbsp;</td>
                                    <td width="73">&nbsp;</td>
                                    <td width="253">&nbsp;</td>
                                    <td width="69">&nbsp;</td>
                                    <td width="176">&nbsp;</td>
                                </tr>
<?php
$to = $_GET['to'];
$msg = $_GET['msg'];
?>
                                <tr><td colspan="8">
                                        <?php
                                        if($msg!=null)
                                        echo "<center><font size='5'>".$msg."</font></center>";
                                        ?>
                                <center><h2>Send Mail</h2></center>
                                </td></tr>
                                <form id="form1" name="contactform" method="post" action="contact.php">
                                    <tr>
                                        <td height=""></td>
                                        <td align="left" valign="top">To</td>
                                        <td align="center" valign="top">:</td>
                                        <td colspan="2" valign="top">
                                            <label>
                                                <textarea name="txtTo" id="txtTo" cols="50" rows="1" wrap="virtual" onblur="valid(this.id)" style="background: whitesmoke"><?php if ($to != "")
                                    echo $to; ?></textarea>
                                            </label><label>Separate multiple email-id with comma</label>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td height="24"></td>
                                        <td>&nbsp;</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td height="22"></td>
                                        <td align="left" valign="top">Subject</td>
                                        <td align="center" valign="top">:</td>
                                        <td colspan="3" valign="top">
                                            <label>
                                                <input name="txtSub" type="text" id="txtSub" value="" size="64" style="background: whitesmoke" onblur="valid(this.id)"/>
                                            </label>
                                        </td>
                                        <td>&nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td height="32"></td>
                                        <td>&nbsp;</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td height="38"></td>
                                        <td valign="top">Message</td>
                                        <td align="center" valign="top">:</td>
                                        <td colspan="2" rowspan="2" valign="top">
                                            <label>
                                                <textarea name="txtMsg" id="txtMsg" cols="50" rows="10" style="background: whitesmoke" onblur="valid(this.id)"></textarea>
                                            </label>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td height="125"></td>
                                        <td>&nbsp;</td>
                                        <td></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td height="33"></td>
                                        <td>&nbsp;</td>
                                        <td></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td height="27"></td>
                                        <td>&nbsp;</td>
                                        <td></td>
                                        <td valign="top">
                                            <label>
                                                <input name="btnSubmit" type="submit" id="btnSubmit" value="    Send    " onclick="return fvalid()"/>
                                            </label>
                                </form>
                                </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                </tr>
                            </table>
                        </div>
                    </body>
                </html>
                </td>
                </tr>


            </table>  
        </div>
    </body>
    <?php include 'footer.php'; ?>

</html>

