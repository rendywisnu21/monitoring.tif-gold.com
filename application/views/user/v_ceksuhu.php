<?php
    //cetak isi field suhu
    if ($data_sensor != "-") {
        echo '<span class="info-box-number">'.$data_sensor->suhu.' &#8451</span>';
        
    } else {
        echo '<span class="info-box-number">-</span>';
    }
?>