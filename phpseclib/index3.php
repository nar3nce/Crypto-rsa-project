<?php
//======================================///
//decrypting message from random key   //
//=====================================//
include('Crypt/RSA.php');


//create object
$rsa = new Crypt_RSA();

//load the priv key
$privateKey = "-----BEGIN RSA PRIVATE KEY-----
MIIBOwIBAAJBAL8p7cTFLySahI+OXV24O/7dKs1oRul14RqKNFi/66PzbDFFw80E
CUzQLCL3ZpWd/CLdtcxUvIaHF7gO48IQwvECAwEAAQJBAKzXxFw9zbpS27jRCCpN
AjIW1zSSLEu6gaX1gA8euHireAUI6YU2m4dmSu+gNIuu2RfkQ1FR0vBiDYTVHwUF
9gECIQDdVqAplIwy7AaH9Nv58QMP+H3nO8U+gPx58qw/ILuqqQIhAN0ZnVku5Neq
XLEvMxTN7TGbF48EC08la6hrwUHGHosJAiA+zscSJYIHLSzJRbVqXnbVAFmR1Ucq
bmW2oSM5oqs+SQIgCLpJHsseF3FPJWNildCnK00e+fND6wTkIgrW3xzN+dkCIQCk
lL2b+6MaAZi550h/c8Qlh2A4icdXWQ5Jb5M6HQnnrg==
-----END RSA PRIVATE KEY-----";

//load the secret message
$strBase64 = 'Tn6BPRkmd3v6wOHBuGViol1dA924ob4oDWMk7dgFPAsUSDhuvAloDn8MfZhifTztxvXm1d2Rglpth36Gbj6jpA==';

//set encrption mode
$rsa->setEncryptionMode(CRYPT_RSA_ENCRYPTION_PKCS1);

//set priv key
$rsa->loadKey($privateKey); 

// ENCRYPTTTT!!!
echo $rsa->decrypt(base64_decode($strBase64));
?>