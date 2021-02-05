<?php
//rsa object
include('Crypt/RSA.php');
$rsa = new Crypt_RSA();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Generate Keys</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>

 <?php
$pub = "";
$priv = "";
if(isset($_POST['generate'])) {

//generate partner keys with 512 bit
$key = $rsa->createKey(512);

$priv = $key['privatekey'];
$pub = $key['publickey'];

}

?>

</head>

<body>
<form id="form1" name="form1" method="post">

  <p>
    <input type="submit" name="generate" value="generate key" />
  <p>
</form>
   
  <table width="499" border="0">
    <tr>
      <td width="199"><div align="center">Public Key </div></td>
      <td width="117"><div align="center"> </div></td>
      <td width="169"><div align="center">Private Key </div></td>
    </tr>
  </table>
  <table width="485" border="0">
    <tr>
      <td width="230"><div align="center">
        <label>
			<textarea name="textarea" cols="30" rows="7"><?php echo $pub; ?></textarea>
        </label>
      </div></td>
      <td width="36"><div align="center">
        <label></label>
      <span class="style1">asdasdasdad</span></div></td>
      <td width="197"><div align="center">
        <textarea name="textarea2" cols="30" rows="7"><?php echo $priv; ?></textarea>
      </div></td>
    </tr>
</table>

  
</body>
</html>
