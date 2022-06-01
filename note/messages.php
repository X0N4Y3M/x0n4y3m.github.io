<?php
file_put_contents("note.txt", 
"Note:" . $_POST['name'] . 
"\n", FILE_APPEND);
header('location: https://x0n4y3m.githube.io/note);
exit();



?>