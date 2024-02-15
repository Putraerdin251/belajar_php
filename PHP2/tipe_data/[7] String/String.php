<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="identitas.css">
    <title>String</title>
    <!-- String adalah rangkaian karakter, seperti "Hello world!".
    String dapat berupa teks naon bae di dalam tanda kutip.
    String dapat menggunakan tanda kutip tunggal('') atau ganda(""). -->
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
            <td>M.putra erlangga s</td>
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

    <?php
    $x = "Hello world!";
    $y = 'Hello world!';
    
    var_dump($x);
    echo "<br>";
    var_dump($y);
    ?>
</body>
</html>