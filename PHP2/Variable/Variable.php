<!DOCTYPE html>
<html lang="en">
<!--nama muhammad putra erlangga syawaludin-->
<!--Kelas XI RPL-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="identitas.css">
    <title>Variable</title>
</head>
<body>
      <!-- Format Identitas -->
  <table style="width: 510px;">
         <tr>
            <td rowspan="4">
                <img src="images/foto.jpg" width="110px" height="130px"/>
            </td>
         </tr>
         <tr>
            <td>Nama</td>
            <td>:</td>
            <td>Muhammad Putra Erlangga</td>
         </tr>
         <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>XI RPL</td>
         </tr>
         <tr>
            <td>Tanggal Praktikum</td>
            <td>:</td>
            <td>04/02/2024</td>
         </tr>
    </table>

<!-- Variabel adalah “wadah” untuk menyimpan informasi. -->
<!-- - Variabel diawali dengan tanda $, diikuti dengan nama variabel
     - Nama variabel harus diawali dengan huruf atau karakter garis bawah
     - Nama variabel tidak boleh diawali dengan angka
     - Nama variabel hanya boleh berisi karakter alfanumerik dan garis bawah (A-z, 0-9, dan _ )
     - Nama variabel peka huruf besar-kecil ($age dan $AGE adalah dua variabel berbeda) -->
<?php
    $x = 20;        //variabel diawali dengan tanda $
    $y = "putra";
    
    echo $x;
    echo "<br>";
    echo $y;
    ?>
</body>
</html>