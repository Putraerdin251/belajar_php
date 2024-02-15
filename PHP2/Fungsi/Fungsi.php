<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="identitas.css">
    <title>Fungsi</title>
    <!-- 
    Fungsi adalah sekumpulan pernyataan yang dapat digunakan berulang kali dalam suatu program.
    Suatu fungsi tidak akan dijalankan secara otomatis saat halaman dimuat.
    Suatu fungsi akan dieksekusi dengan panggilan ke fungsi tersebut. 
    -->
</head>
<body>
    <!-- Format Identitas -->
  
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
    function myMessage() {   //  Tanda kurung kurawal pembuka { menunjukkan awal kode fungsi, dan tanda kurung kurawal penutup } menunjukkan akhir fungsi.
        echo "Hello world!";
      }
      
      myMessage(); //  Untuk memanggil fungsi tersebut, cukup tulis namanya diikuti tanda kurung ():
    ?>
</body>
</html>