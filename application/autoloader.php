 <?php
function namespace_class_autoloader($classname)
{
 	$classname = explode('\\', $classname);
	
	$path = APPLICATION_PATH . DIRECTORY_SEPARATOR;
	$length = sizeof($classname);
	$i = 1;
	foreach($classname as $value){
		$i++;
		$path .= strtolower ( $value ) . DIRECTORY_SEPARATOR;
		if($i == $length) break;
	}
		
	$path .= strtolower ( array_pop ( $classname ) ) . '.class.php';
	
	if (file_exists ( $path )) require $path;
}
  
spl_autoload_register('namespace_class_autoloader');