<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Logical</title>
    <!-- Operator logika adalah operator untuk melakukan operasi logika seperti AND, OR, dan NOT. -
    Logika AND	&&
    Logika OR	||
    Negasi/kebalikan/ NOT	!
    -->
</head>
<body>
    <?php
    $a = true;
    $b = false;
    
    // variabel $c akan bernilai false
    $c = $a && $b;
    printf("%b && %b = %b", $a,$b,$c);  //  fungsi prinf() untuk mencetak memformat dan mencetak teks.
    echo "<hr>";
    
    // variabel $c akan bernilai true
    $c = $a || $b;
    printf("%b || %b = %b", $a,$b,$c);
    echo "<hr>";
    
    // variabel $c akan bernilai false
    $c = !$a;
    printf("!%b = %b", $a, $c);
    echo "<hr>";
    ?>
</body>
</html>