<?php
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $media = ($nota1 + $nota2 + $nota3) / 3;
    
    $media = number_format($media, 2, ",", ".");

    echo "Sua média é $media";
    echo '
        <br>
        <button onclick="window.location.href=\'../index.php\'">
            Continuar
        </button>
    '
?>