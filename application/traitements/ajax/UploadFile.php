<?php
/*
 * jQuery File Upload Plugin PHP Example
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * https://opensource.org/licenses/MIT
 */

error_reporting(E_ALL | E_STRICT);
require(APPLICATION_PATH . DIRECTORY_SEPARATOR . "bibliotheques" . DIRECTORY_SEPARATOR .'UploadHandler.php');
$upload_handler = new UploadHandler();
