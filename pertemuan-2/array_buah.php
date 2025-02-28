<?php
    $ar_buah = ["pepaya","mangga","pisang","jambu"];
    //menampilkan buah index ke 1
    echo $ar_buah[1];
    //menampilkan jumlah buah
    echo "<br/> Jumlah buah " . count($ar_buah);
    //menampilkan seluruh buah
    echo "<ol>";
    foreach ($ar_buah as $buah) {
        echo "<li>". $buah ."</li>";
    }
    echo "</ol>";

    //menambahkan buah
    $ar_buah[] = "Apel";

    //menghapus buah index ke 1
    unset($ar_buah[1]);

    //mengubah index ke 2 menjadi manggis
    $ar_buah[2] = "manggis";

    //menampilkan seluruh buah dengan indexnya
    echo "<ul>";
    foreach ($ar_buah as $buah => $v) {
        echo "<li>Buah index - " . $buah . " adalah " . $v . "</li>";
    }
        echo "</ul>";

    echo "<ul>";
    sort($ar_buah);
    foreach ($ar_buah as $buah => $v) {
        echo "<li>Buah index - " . $buah . " adalah " . $v . "</li>";
    }
    echo "</ul>";
?>