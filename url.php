<?php

//fungsi http_reques
function http_request($url){

	//persiapan url
	$ch = curl_init();

	//set url
	curl_setopt($ch, CURLOPT_URL, $url);

	//aktifkan fungsi tf nilai 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	//setting localhost
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	//tampung hasil
	$output =curl_exec($ch);

	//tutup curl
	curl_close($ch);

	//kembali
	return $output;

}

//funggsi http_request
$data = http_request("https://api.kawalcorona.com/indonesia/provinsi/");

//ubah format json
$data = json_decode($data, TRUE);

echo "<pre>";
	print_r($data);
echo "</pre>";
?>




