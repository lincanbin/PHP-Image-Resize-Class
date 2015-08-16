PHP-Image-Resize-Class
======================
Automatic extract the square central part of the uploaded image, and zoom to the specified size.

Parameters
------------
```php
$UploadAvatar = new ImageResize('FormName');
$Result = $UploadAvatar->Resize(256, 'upload/avatar/large.png', 80);
/*
256: the size of the picture to be compressed
upload/avatar/large.png: save path
80: Picture quality, 100 indicates no compression. 
*/
```

Example
------------
#### Resize image from post field: 
```php
$UploadAvatar = new ImageResize('PostField', 'Avatar');
$Result = $UploadAvatar->Resize(256, 'upload/avatar/large.png', 80);
```
#### Resize image from Web: 
```php
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_URL, 'https://avatars0.githubusercontent.com/u/5785188?v=3&s=460');
$response =  curl_exec($ch);
curl_close($ch);

$UploadAvatar = new ImageResize('String', $response);
$Result = $UploadAvatar->Resize(256, 'upload/avatar/large.png', 80);
```

License
------------
```
Copyright 2006-2015 Canbin Lin (lincanbin@hotmail.com)

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
```