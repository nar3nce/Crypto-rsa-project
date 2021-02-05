<?php
include('Crypt/RSA.php');

//create rsa object
$rsa = new Crypt_RSA();

//============== generating 2 keys ================///

//set key format
$rsa->setPrivateKeyFormat(CRYPT_RSA_PRIVATE_FORMAT_PKCS1);
$rsa->setPublicKeyFormat(CRYPT_RSA_PUBLIC_FORMAT_PKCS1);

//generate keys with 512 bit
$key = ($rsa->createKey(512)); 
echo '<pre><code>';
echo $priv = $key['privatekey'];
echo '<pre><code>';
echo $pub = $key['publickey'];
//============== generating 2 keys end ================///



//the secret message
$plaintext = 'narence gwapo';




//============== encrypting the secret message ================///

//load the public key
$rsa->loadKey($pub); 

//set encrypt mode
$rsa->setEncryptionMode(CRYPT_RSA_ENCRYPTION_PKCS1);

//enrcypt
$ciphertext = $rsa->encrypt($plaintext);
echo '<pre><code>';

//convert to base 64
echo $secret = base64_encode($ciphertext);
//============== encrypting the secret message end ================///



//============== decrypting the secret message ================///
//set the encrypted msg
$secret2 = base64_decode($secret);

// load the private key
$rsa->loadKey($priv); 
echo '<pre><code>';

//decrypt!!
$result = $rsa->decrypt($secret2);

//some fuckin conditions
if($result == true)
{
echo "decrypted : ". $result;
}
else
{
echo "invalid key";
}
//============== decrypting the secret message end ================///

?>