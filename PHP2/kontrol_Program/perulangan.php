<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="identitas.css">
    <title>Perulangan</title>
    <!-- 
    Ada dua jenis perulangan dalam pemrograman:
    1. Counted loop
       Counted loop adalah perulangan yang sudah jelas banyak pengulangannya.
    2. Uncounted loop.
       Sedangkan Uncounted loop tidak pasti berapa kali dia akan mengulang.

    ada 4 jenis perulangan yang bisa kita gunakan:
    1. Perulangan For
    2. Perulangan While
    3. Perulangan Do/While
    4. Perulangan Foreach
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
            <td>M.putra erlangga syawaludin</td>
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

    <h2>1. Perulangan For</h2>
    <!-- Perulangan For adalah perulangan yang termasuk dalam counted loop, karena kita bisa menentukan jumlah perulangannya. -->
    <?php
    // Maksud dari $i++ adalah nilai $i akan ditambah 1 disetiap kali melakukan perulangan.
    for($i = 0; $i < 10; $i++){
        echo "<p>Ini perulangan ke-$i</p>";
    }
    ?>
   
    <h2>2. Perulangan While</h2>
    <!-- Perulangan while adalah perulangan yang termasuk dalam uncounted loop. Karena biasanya digunakan untuk mengulang sesuatu yang belum jelas jumlah pengulangannya. -->
    <?php
    $ulangi = 0;

    while($ulangi < 10){    
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
        $ulangi++;   // $ulangi++ Artinya Tambah 1 disetiap pengulangan.
    }
    ?>

    <h2>Perulangan Do/While</h2>
    <!-- 
    Perulangan Do/While sama seperti perulangan while. Ia juga tergolong dalam uncounted loop.

    Perbedaan Do/While dengan while terletak pada cara iya memulai pengulangan :
    - Perulangan Do/While akan selalu melakukan pengulangan sebanyak 1 kali, kemudian melakukan pengecekan kondisi.
    - Sedangkan perulangan while akan mengecek kondisi terlebih dahulu, baru melakukan pengulangan. 
    -->
    <?php
    $ulangi = 10;

    do {
        echo "<p>ini adalah perulangan ke-$ulangi</p>";
        $ulangi--;
    } while ($ulangi > 0);    
    ?>

    <h2>Perulangan Foreach</h2>
    <!-- Perulangan foreach sama seperti perulangan for. Namun, ia lebih khusus digunakan untuk mecetak array. -->
    <?php
    $books = [
        "Panduan Belajar PHP untuk Pemula",
        "Membangun Aplikasi Web dengan PHP",
        "Tutorial PHP dan MySQL",
        "Membuat Chat Bot dengan PHP"
    ];
    
    echo "<h5>Judul Buku PHP:</h5>";
    echo "<ul>";
    foreach($books as $buku){
        echo "<li>$buku</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>