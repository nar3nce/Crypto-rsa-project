<?php
use ParagonIE\EasyRSA\KeyPair;

$keyPair = KeyPair::generateKeyPair(4096);

$secretKey = $keyPair->getPrivateKey();
$publicKey = $keyPair->getPublicKey();
?>