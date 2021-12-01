<?php
    require __DIR__.'/vendor/autoload.php';

    use \App\Image\resize;

    $obResize = $_FILES['imagem']['name'];
    $dimensao = $_POST['number'];

    $obResize->resize(- 1, $dimensao);

    header('Content-Type: image/png');
    header('Content-Disposition: atachment; filename=image.png');
    imagepng($obResize);

    //$obResize->save(__DIR__.'/footage/NewWindows.jpg', 100);