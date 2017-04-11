<?php 
//Don't forget to include this line! or your form will not work:
include 'secureformsettings.php';

//Select an image for the security code box
$random_img = rand(1, 20);
$imagenum = $random_img;

//Get the image's data drom the DB.
$sql = "select * from " . $tblprefix . "images where id='$imagenum'";
$result = mysql_query($sql) or die(mysql_error());
$imgresult = mysql_fetch_array($result);
$secureimage = $imgresult['imagefile'];
$imagenumber = $imgresult['imagenumber'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contact Us</title>
</head>
<body>
<table id="mainbodytable">
  <tr>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td id="indexrightbox_subnav">
        <form action="formresult.php" method="post" name="eedrer" id="eedrer">
          <table id="contactform">
            <tr>
              <td colspan="2"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">All
                    fields are required</font></div>
              </td>
            </tr>
            <tr>
              <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Your
                  Name:</font></td>
              <td><input type="text" name="nm_fhgkic8" class="formstyle" />
              </td>
            </tr>
            <tr>
              <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Your
                  Email Address:</font></td>
              <td><input type="text" name="dhfygien" class="formstyle" />
              </td>
            </tr>
            <tr>
              <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Security
                  Code:</font></td>
              <td><img src="<?php echo "" . $secureimage; ?>" alt="Security Code" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Type
                  Security Code (type them in lower case):</font></td>
              <td><input type="text" name="securitycode" class="formstyle" />
              </td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2"> <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Enter
                  your comments. Please also tell us where you are from:</font><br />
                  <textarea name="aabbccddee" class="formstyle" cols="60" rows="8"></textarea>
                  <br />
                  <input type="hidden" name="imgnum" value="<?php echo $imagenumber; ?>" />
                  <input name="submit" type="submit" class="formstyle" value="Submit" />
              </td>
            </tr>
            <tr>
              <td colspan="2"><a href="http://www.kara-star.com/phpresources.php"><img src="kfs_logo.gif" alt="KaraFormSecure" border="0" /></a></td>
            </tr>
          </table>
        </form>
    </td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
