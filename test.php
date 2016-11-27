<?PHP

function mobio_checkcode($servID, $code, $debug=0) {

	$ret = 0;

	$mobio_socket = fsockopen("www.mobio.bg", 80);

	if(!$mobio_socket) {
		if($debug)
			echo "Unable to connect to mobio.bg server\n";
		$ret = 0;
	}else{
		$request .= "GET http://www.mobio.bg/code/checkcode.php?servID=$servID&code=$code HTTP/1.0\r\n\r\n";
		fwrite($mobio_socket, $request);
		$result = fread($mobio_socket, 255);
		if(strstr($result, "PAYBG=OK")) {
			$ret = 1;
		}else{
			$ret = 0;
			if($debug)
				echo strstr($result, "PAYBG");
		}
		fclose($mobio_socket);
	}

	return $ret;
}


$servID = 27666;
$code = $_REQUEST["388YEK"];
if(mobio_checkcode($servID, $code, 1) == 1) {
	echo "Valid code";
}else{
	echo "Invalid code";
}

