<?php
$UploadAvatarMessage = '';
require(dirname(__FILE__) . "/src/ImageResize.class.php");
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_URL, 'https://avatars0.githubusercontent.com/u/5785188?v=3&s=460');
$response =  curl_exec($ch);
curl_close($ch);


if(!empty($response)){
	$UploadAvatar  = new ImageResize('String', $response);
	$LUploadResult = $UploadAvatar->Resize(256, 'curl_large.png', 100);
	$MUploadResult = $UploadAvatar->Resize(48, 'curl_middle.png', 90);
	$SUploadResult = $UploadAvatar->Resize(24, 'curl_small.png', 90);
	if ($LUploadResult && $MUploadResult && $SUploadResult)
		$UploadAvatarMessage = 'Success';
	else
		$UploadAvatarMessage = 'Failure. This file may not be image.';
}

echo $UploadAvatarMessage;