<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Comparison</title>
    <!-- 
    Operator Comparison adalah operator untuk membandingkan dua buah nilai.
    Hasil operasi dari operator Comparison akan menghasilkan nilai dengan tipe data boolean, yaitu true (benar) dan false (salah).
    Berikut ini daftar operator relasi:
    - Lebih Besar	                 >
    - Lebih Kecil                    <
    - Sama Dengan	                 == atau ===
    - Tidak Sama dengan	             != atau !==
    - Lebih Besar Sama dengan	     >=
    - Lebih Kecil Sama dengan	     <= 
    -->
</head>
<body>
    <?php
    $a = 6;
    $b = 2;
    
    // menggunakan operator Comparison lebih besar
    $c = $a > $b;
    echo "$a > $b: $c";
    echo "<hr>";
    
    // menggunakan operator Comparison lebih kecil
    $c = $a < $b;
    echo "$a < $b: $c";
    echo "<hr>";
    
    // menggunakan operator Comparison lebih sama dengan
    $c = $a == $b;
    echo "$a == $b: $c";
    echo "<hr>";
    
    // menggunakan operator Comparison lebih tidak sama dengan
    $c = $a != $b;
    echo "$a != $b: $c";
    echo "<hr>";
    
    // menggunakan operator Comparison lebih besar sama dengan
    $c = $a >= $b;
    echo "$a >= $b: $c";
    echo "<hr>";
    
    // menggunakan operator Comparison lebih kecil sama dengan
    $c = $a <= $b;
    echo "$a <= $b: $c";
    echo "<hr>";
    ?>
</body>
</html>