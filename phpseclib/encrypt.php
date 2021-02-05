<?php
//rsa object
include('Crypt/RSA.php');
$rsa = new Crypt_RSA();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Encrypt</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>

<?php
$encrypted_msg = "";
if(isset($_POST['encrypt'])) {
$plain_message = $_POST['plain_message'];
$public_key = $_POST['public_key'];


$rsa->loadKey($public_key); // public key
$rsa->setEncryptionMode(CRYPT_RSA_ENCRYPTION_PKCS1);
$ciphertext = $rsa->encrypt($plain_message);
$encrypted_msg = base64_encode($ciphertext);
}
?>

</head>

<body>
<form id="form2" name="form2" method="post">
  <table width="799" border="0">
    <tr>
      <td width="198"><div align="center">Secret message </div></td>
      <td width="127"><div align="center">Plus (+) </div></td>
      <td width="215"><div align="center">Public key </div></td>
      <td width="91"><div align="center">=</div></td>
      <td width="146"><div align="center">Encrypted Message </div></td>
    </tr>
  </table>
  <table width="644" border="0">
    <tr>
      <td width="197"><div align="center">
          <label>
          <textarea name="plain_message" cols="30" rows="7"></textarea>
          </label>
      </div></td>
      <td width="78"><div align="center">
          <label></label>
          <span class="style1">asdasdasdad</span></div></td>
      <td width="197"><div align="center">
          <textarea name="public_key" cols="30" rows="7"></textarea>
      </div></td>
      <td width="52"><div align="center">
        <label></label>
        <span class="style1">asdasdasdad</span></div></td>
      <td width="98"><textarea name="textarea4" cols="30" rows="7"><?php echo $encrypted_msg; ?></textarea></td>
    </tr>
  </table>
  <p>
    <label>encrypt message
    <input type="submit" name="encrypt" value="encrypt" />
    </label>
  </p>
  </form>
</body>
</html>
