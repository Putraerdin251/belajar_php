<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="identitas.css">
    <title>Kondisi</title>
    <!--
     Dalam PHP kita memiliki pernyataan kondisional berikut:

    - if statement - mengeksekusi beberapa kode jika satu kondisi benar
    - if... else statement - mengeksekusi beberapa kode jika suatu kondisi benar dan kode lain jika kondisi itu salah
    - if...elseif...else statement - mengeksekusi kode yang berbeda untuk lebih dari dua kondisi
    - Switch Statement - memilih salah satu dari banyak blok kode yang akan dieksekusi
    -->
</head>
<body>
    <!-- Format Identitas -->
  <table style="width: 510px;">
         <tr>
            <td rowspan="4">
                <img src="images/FOTO PROFIL1.jpg" width="110px" height="130px"/>
            </td>
         </tr>
         <tr>
            <td>Nama</td>
            <td>:</td>
            <td>M.putra erlanga syawaludin</td>
         </tr>
         <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>XI RPL</td>
         </tr>
         <tr>
            <td>Tanggal Praktikum</td>
            <td>:</td>
            <td>06/02/2024</td>
         </tr>
    </table>

    <h4>If</h4>
    <!-- Bentuk Kondisi yang paling sederhana, dimana hanya akan menjalankan pernyataan (statement) bila kondisi bernilai benar (true) -->
    <?php
    if (2 % 2 == 0){
        echo "Bilangan Genap";
    }
    ?>

    <h4>If Else</h4>
    <!-- Bentuk kondisi kedua dari if, pernyataan pertama akan dieksekusi bila bernilai benar. Bila bernilai salah maka pernyataan kedua yang akan dieksekusi -->
    <?php
    if (2 % 2 == 1){
        echo "Bilangan Genap";
    }else {
        echo "Bilangan Ganjil";
    }
    ?>

    <h4> If…Else If.. else</h4>
    <!-- Kondisi if else yang dapat dibilang cukup kompleks karena kondisi lebih dari satu. Pernyataan akan dieksekusi apabila kondisi bernilai true. Apabila tidak ada kondisi yang bernilai true maka pernyataan else yang akan dieksekusi. -->
    <?php
    $umur=35;

    if($umur<=10){
        echo "Anak-anak";
    } elseif ($umur<=18){
        echo "Remaja";
    }elseif ($umur<=35){
        echo "Dewasa";
    } elseif ($umur<=65){
        echo "Parubayah";
    } else {
        echo "Tua";
    }
    ?>
</body>
</html>