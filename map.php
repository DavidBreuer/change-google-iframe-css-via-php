<?php
$content = file_get_contents('https://www.google.de/maps/d/embed?mid=10FgdZv0rEJaMj3lOLcUF0uni195DosKI');
$content = str_replace('</title>','</title><base href="https://www.google.com/maps/" />', $content);
$content = str_replace('</head>','<link rel="stylesheet" href="http://localhost/map.css" /></head>', $content);
echo $content;
?>
