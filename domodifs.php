<?php $data = $_POST['new_data'];
//set mode of file to writable.
chmod("data/data.json", 0777);
$f = fopen("data/data.json", "w+") or die("fopen failed");
fwrite($f, $data);
fclose($f);
header('Location : modif.php');?>