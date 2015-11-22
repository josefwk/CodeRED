<?php
$pathDir = dirname(__FILE__);
$paths = array('controllers', 'models', 'views');
for($i = 0; $i < count($paths); $i++){
	set_include_path(get_include_path() . PATH_SEPARATOR . $pathDir . DIRECTORY_SEPARATOR . $paths[$i]);
}

spl_autoload_register('myClassLoader');

function myClassLoader($className) {
	$paths = explode (PATH_SEPARATOR, get_include_path ());
	foreach ($paths as $path) {
		 $file = $path . DIRECTORY_SEPARATOR . $className . '.class.php';
		  if (file_exists($file)) {
             include_once $file;
             break;
		  } 
	}
}
?>