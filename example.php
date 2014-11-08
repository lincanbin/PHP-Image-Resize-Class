<?php
$UploadAvatarMessage = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if($_FILES['Avatar']['size'] && $_FILES['Avatar']['size'] < 1048576){
		require(dirname(__FILE__)."/src/ImageResize.class.php");
		$UploadAvatar = new ImageResize('Avatar');
		$LUploadResult = $UploadAvatar->Resize(256, 'large.png', 100);
		$MUploadResult = $UploadAvatar->Resize(48, 'middle.png', 90);
		$SUploadResult = $UploadAvatar->Resize(24, 'small.png', 90);
		if($LUploadResult && $MUploadResult && $SUploadResult)
			$UploadAvatarMessage = 'Success';
		else
			$UploadAvatarMessage = 'Failure. This file may not be image.';
	}else{
		$UploadAvatarMessage = 'File is too large! ';
	}
}
?>
<form method="post" enctype="multipart/form-data" action="?">
	<p>
		Make sure that the path can be written.
	</p>
	<p>
		<?php echo $UploadAvatarMessage; ?>
	</p>
	<p>
		<input type="file" name="Avatar">
	</p>
	<p>
		<input type="submit" value="Upload and Resize" name="submit" />
	</p>