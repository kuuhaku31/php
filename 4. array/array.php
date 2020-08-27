<?php
    // adalah varibel yang mempunyai banyak elemen
    // kurang lebih mirip seperti di javascript

    // membuat array
    // cara lama
    $month = array("january", "februari", "maret");
    // cara baru
    $days = ["senin", "selasa", "rabu"];

    // menampilkan array
    // var_dump() / print_r
    // tidak bisa menggunakan echo

    var_dump($month);
    /* output
    array(3) {
    [0]=>
    string(7) "january"
    [1]=>
    string(8) "februari"
    [2]=>
    string(5) "maret"
    }
    */
    print_r($days);
    /* output
    Array
    (
    [0] => senin
    [1] => selasa
    [2] => rabu
    )
    */


?>