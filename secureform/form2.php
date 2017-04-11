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
    <td></td>
    <td id="indexleftbox_subnav"><h3>&nbsp;</h3>
    </td>
    <td id="indexrightbox_subnav"><h2>Contact Us</h2>
      <form name="eedrer" method="post" action="formresult.php">
              <table id="contactform">
                <tr>
                  <td>&nbsp;</td>
                  <td>* = Required</td>
                </tr>
                <tr>
                  <td>Your Name:*</td>
				<td><input type="text" name="nm_fhgkic8" class="formstyle" /></td>
                </tr>
                <tr>
                  <td>Company Name: </td>
                  <td><input type="text" name="compname" class="formstyle" /></td>
                </tr>
                <tr>
                  <td>Your Email Address:*</td>
                  <td><input type="text" name="dhfygien" class="formstyle" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>What Services are You Interested in? </td>
                  <td><input type="checkbox" name="webdes" value="Web Design" /> Web Design</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="checkbox" name="logodes" value="Logo Design" /> Logo Design</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="checkbox" name="hosting" value="Web Hosting" /> Hosting</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>What continent do you live on? </td>
                  <td>
				  <select name="continent" multiple="multiple">
				  <option value="Africa">Africa</option>
				  <option value="Asia">Asia</option>
				  <option value="Australia">Australia</option>
				  <option value="Europe">Europe</option>
				  <option value="South America">South America</option>
				  <option value="North America">North America</option>
                  </select>                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Where did you hear about us? </td>
                  <td>
				  <select name="leadsource">
				  <option value="Google">Google</option>
				  <option value="MSN">MSN</option>
				  <option value="Yahoo!">Yahoo!</option>
				  <option value="Newspaper">Newspaper</option>
				  <option value="Other">Other</option>
				  </select>                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Do You Wish to join our newsletter? </td>
                  <td><input name="newslettersub" type="radio" value="Yes" checked="checked" /> Yes</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input name="newslettersub" type="radio" value="No" /> No Thanks</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Security Code: * </td>
				  <td><img src="<?php echo "/secureform/" . $secureimage; ?>" alt="Security Code" /><a href="#" onclick="window.open('/secureform/whatisthis.htm','Info','toolbar,width=200,height=150')">What is this?</a></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Type Security Code(lowercase):*</td>
                  <td><input type="text" name="securitycode" class="formstyle" /></td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2"><p>Would you like this demo form to actually send you the two demo emails?</p>
                    <p>YES <input name="sendmail" type="radio" value="1" checked="checked" />
						 NO <input name="sendmail" type="radio" value="0" /></p>					</td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2"><p>
				  Your Message: *<br />
				  <textarea name="aabbccddee" class="formstyle" cols="60" rows="8"></textarea>
				  <br />
				  <input type="hidden" name="imgnum" value="<?php echo $imagenumber; ?>" />
				  <input type="submit" value="Submit" class="formstyle" /></p></td>
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
