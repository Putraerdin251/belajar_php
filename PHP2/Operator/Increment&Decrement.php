<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Increment & Decrement</title>
    <!-- 
    Operator increment dan decrement merupakan operator yang digunakan untuk menambah +1 (tambah satu) dan mengurangi -1 (kurangi dengan satu).
    Opertor increment menggunakan simbol ++, sedangkan decrement menggunakan simbol --. 
    -->
</head>
<body>
    <?php
    $score = 0;

    $score++;
    $score++;
    $score++;
    
    echo $score;  //  Nilai $score akan menjadi 3, karena kita melakukan increment sebanyak 3x.
    ?>
</body>
</html>