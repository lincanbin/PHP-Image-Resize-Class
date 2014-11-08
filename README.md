PHP-Image-Resize-Class
======================
A PHP class which can resize the image easily.

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
```php
$UploadAvatar = new ImageResize('Avatar');
$Result = $UploadAvatar->Resize(256, 'upload/avatar/large.png', 80);
```

License
------------

[Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0)
