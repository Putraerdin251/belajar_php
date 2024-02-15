<!DOCTYPE html>
<html lang="en">

<!--nama muhammad putra erlangga syawaludin-->
<!--Kelas XI RPL-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NULL</title>
</head>
<body>
<!-- Nilai NULL khusus digunakan untuk mewakili variabel kosong di PHP.
Variabel tipe NULL adalah variabel tanpa data apa pun. -->
    <?php
    $a = NULL;    // NULL adalah satu-satunya nilai yang mungkin dari tipe null.
    var_dump($a);
    echo "<br>";

    $b = "Hello World!";
    $b = NULL;
    var_dump($b); 
    ?>   
<!-- Ketika sebuah variabel dibuat tanpa nilai dalam PHP seperti $var; itu secara otomatis diberi nilai nol.  -->
</body>
</html>