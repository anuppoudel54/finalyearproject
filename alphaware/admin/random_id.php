<?php
/* Confirmation Code */
function createRandomPassword() {
    $chars = "01234567899876543210";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i <= 7) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
   					 }
    return $pass;
						}
						
/*values*/



// function gen_uuid($len=10) {

//     $hex = md5("yourSaltHere" . uniqid("", true));

//     $pack = pack('H*', $hex);
//     $tmp =  base64_encode($pack);

//     $uid = preg_replace("#(*UTF8)[^A-Za-z0-9]#", "", $tmp);

//     $len = max(4, min(128, $len));

//     while (strlen($uid) < $len)
//         $uid .= gen_uuid(22);

//     return substr($uid, 0, $len);
// }

//$code=gen_uuid();
$code = createRandomPassword();//gen_uuid();
//$code=uniqid('gs_',true);
//print_r($code);
?>