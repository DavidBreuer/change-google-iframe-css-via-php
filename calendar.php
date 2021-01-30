<?php
$content = file_get_contents('https://calendar.google.com/calendar/embed?src=q04l71gvn0t7rhbrv1p4r1481g%40group.calendar.google.com');
$content = str_replace('</title>','</title><base href="https://www.google.com/calendar/" />', $content);
$content = str_replace('</head>','<link rel="stylesheet" href="http://localhost/calendar.css" /></head>', $content);
echo $content;
?>
