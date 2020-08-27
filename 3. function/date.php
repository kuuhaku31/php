<?php
    // menampilkan tanggal dengan format tertentu
    // echo date("l, d/m/yy");

    // waktu
    // dari UNIX timestamp 
    // detik sejak 1 januari 1970
    // echo date('D-m-y',time()-60*60*24*3);
    // php di beri tugas menghitung detik, menit, lalu jam untuk menghitung beberapa hari kedepan

    // mktime
    // membuat detik sendiri
    // mktine(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l",mktime(0,0,0,1,10,2003));

    // strtotime
    // mengubah string menjadi tanggal/ waktu
    echo date("l",strtotime("10 january 2003"));
?>