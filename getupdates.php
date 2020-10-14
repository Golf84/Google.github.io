<?php

const TOKEN = '1387511427:AAERGk63XbGWmOsjFKPqWUaXNBrDkBvOkjI';

$url = 'https://api.telegram.org/bot' . TOKEN . '/getUpdates';

$lastupdate = 206594573; 

$params=[
	'offset'=>$lastupdate+1
];  

echo $url = $url. '?'. http_build_query($params)
die;

$response = json_decode(
	file_get_contents ($url),
	JSON_OBJECT_AS_ARRAY
);

if($response ['ok']) {
	foreach ($response['result']as $update) {
		
		echo $update ['message']['text'];
		
		?>
	}
}

	//var_dump($response);
	
	
	/*

