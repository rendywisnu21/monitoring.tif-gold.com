<?php
    //cetak isi field suhu
    if ($data_sensor != "-") {
        echo '<p class="text-black">'.$data_sensor->pelembab.'</p>';
    } else {
        echo '<p class="text-secondary text-center">-</p>';
    }
?>