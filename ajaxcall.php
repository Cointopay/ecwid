<?php
if (isset($_REQUEST["merchantId"])) {
   $merchant = $_REQUEST["merchantId"];

    $url = 'https://app.cointopay.com/CloneMasterTransaction?MerchantID=' . $merchant . '&output=json&JsonArray=1';
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url,
    ));
    $response = curl_exec($curl);

    $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    if ($http_status === 200) {
        print_r($response);
    } else {
        echo "no coins";
    }
}
