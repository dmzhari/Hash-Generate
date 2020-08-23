<?php
error_reporting(0);
@ini_set('error_log',NULL);
define('biru',"\e[1;34m");
define('cyan',"\e[1;36m");
define('greenl',"\e[1;92m");
define('green',"\e[1;32m");
define('putih',"\e[1;0m");
sleep(2);
@system('clear');
@system('date');
 echo cyan."\n    [!] Hash Encoder [!]\n";
 echo putih."[+] Coded By EcchiExploit [+]\n\n";
 echo green."NOTE : ";
 echo putih."Kalian Edit Salt Nya Dengan Salt Kalian Sendiri\n";
 echo biru."Masukan Text Untuk Di Hash : ".greenl;
 $text = trim(fgets(STDIN));
 $ok = array(1,2,3,4,5,6,7,8,9);
 $fuck = json_decode($ok, TRUE);
 echo "\n\t1.Hash Crypt MD5";
 echo "\t6.SHA Originial\n";
 echo "\t2.Hash Crypt SHA512";
 echo "\t7.Hash Ripemd\n";
 echo "\t3.Hash Blowfish";
 echo "\t\t8.Hash Fnv\n";
 echo "\t4.Hash Crypt DES Based";
 echo "\t9.Snefru\n";
 echo "\t5.MD Original";
 echo "\t\t10.Hash Gost\n";
 echo "\n\tPilih Gan Untuk Di Hash => ".cyan;
 $fuck = trim(fgets(STDIN));
 switch($fuck){
    case '1':
    $md5crypt = crypt($text,'$1$salt4md5$');
    echo "Crypt MD5 => $md5crypt\n";
    break;
    case '2':
    $shacrypt = crypt($text,'$6$rounds=8000$somesalt4sha-521$');
    echo "Crypt SHA => $shacrypt\n";
    break;
    case '3':
    echo "Tunggu Sebentar...\n";
    $crypt = crypt($text,'$2y$18$justsomesalt4blowfish$');
    echo "Blowfish => $crypt\n";
    break;
    case '4';
    $des = crypt($text,'_w8..salt');
    echo "DES => $des\n";
    break;
    case '5':
    $md5 = md5($text);
    $md4 = hash('md4',$text,false);
    $md2 = hash('md2',$text,false);
    echo "MD2 => $md2\n";
    echo "MD4 => $md4\n";
    echo "MD5 => $md5\n";
    break;
    case '6':
    $sha1 = sha1($text);
    $sha224 = hash('sha224',$text,false);
    $sha256 = hash('sha256',$text,false);
    $sha384 = hash('sha384',$text,false);
    $sha512 = hash('sha512',$text,false);
    echo "SHA1 => $sha1\n";
    echo "SHA224 => $sha224\n";
    echo "SHA256 => $sha256\n";
    echo "SHA384 => $sha384\n";
    echo "SHA512 => $sha512\n";
    break;
    case '7':
    $ripemd128 = hash('ripemd128',$text,false);
    $ripemd160 = hash('ripemd160',$text,false);
    $ripemd256 = hash('ripemd256',$text,false);
    $ripemd320 = hash('ripemd320',$text,false);
    echo "Ripemd128 => $ripemd128\n";
    echo "Ripemd160 => $ripemd160\n";
    echo "Ripemd256 => $ripemd256\n";
    echo "Ripemd320 => $ripemd320\n";
    break;
    case '8':
    $fnv132 = hash('fnv132',$text);
    $fnv1a32 = hash('fnv1a32',$text);
    $fnv164 = hash('fnv164',$text);
    $fnv1a64 = hash('fnv1a64',$text);
    echo "Fnv132 => $fnv132\n";
    echo "Fnv1a32 => $fnv1a32\n";
    echo "Fnv164 => $fnv164\n";
    echo "Fnv1a64 => $fnv1a64\n";
    break;
    case '9':
    $snefru = hash('snefru',$text,false);
    $snefru256 = hash('snefru256',$text,false);
    echo "Snefru => $snefru\n";
    echo "Snefru256 => $snefru256\n";
    break;
    case '10':
    $gost = hash('gost',$text,false);
    $gostcry = hash('gost-crypto',$text,false);
    echo "Gost => $gost\n";
    echo "Gost-crypto => $gostcry\n";
    break;
    default:
    echo "What Are You Doing??\n";
    break;
 }
?>
