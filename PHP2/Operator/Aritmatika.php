<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="identitas.css">
    <title>Operator Aritmatika</title>
    <!-- Operator aritmatika PHP digunakan dengan nilai numerik untuk melakukan operasi aritmatika umum,
    seperti penjumlahan, pengurangan, perkalian, dll. -->
    <!-- 
    Operator Aritmatika Terdiri Dari :
    1. Penjumlahan	+
    2. Pengurangan	-
    3. Perkalian	*
    4. Pemangkatan	**
    5. Pembagian	/
    6. Sisa Bagi	%     
    -->
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
            <td>muhammad putra erlangga s</td>
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
    $a = 5;
    $b = 2;
    
    // penjumlahan
    $c = $a + $b;
    echo "$a + $b = $c";
    echo "<hr>";
    
    // pengurangan
    $c = $a - $b;
    echo "$a - $b = $c";
    echo "<hr>";
    
    // Perkalian
    $c = $a * $b;
    echo "$a * $b = $c";
    echo "<hr>";
    
    // Pembagian
    $c = $a / $b;
    echo "$a / $b = $c";
    echo "<hr>";
    
    // Sisa bagi
    $c = $a % $b;
    echo "$a % $b = $c";
    echo "<hr>";
    
    // Pangkat
    $c = $a ** $b;
    echo "$a ** $b = $c";
    echo "<hr>";    
    ?>
</body>
</html>