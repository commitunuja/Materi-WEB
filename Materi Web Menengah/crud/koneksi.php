<?php

//php 5 atas
$koneksi = mysqli_connect("localhost", "root", "", "unuja");

// mysqli_connect() = koneksi ke database
// mysqli_query = membuat kode sql
// mysqli_num_rows = membaca baris kolom
// mysqli_fetch_array = membaca data dalam bentuk array

//INSERT INTO semester (nama_semester) VALUES ('2'),('3'),('4'),('5'),('6'),('7'),('8')  = simpan data 1 kolom banyak data

//INSET INTO semester (nama_semester) VALUES ('1') = Simpan 1 kolom sama 1 data
