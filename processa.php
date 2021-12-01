<?php
    $titulo_artigo = $_POST['titulo_artigo'];
    $imagem = $_FILES['imagem']['name'];
    $marca = $_FILES['marca']['name'];

    $image_temporaria = imagecreatefromstring(file_get_contents($_FILES['imagem']['tmp_name']));

    $logo = imagecreatefromstring(file_get_contents($_FILES['marca']['tmp_name']));

    $altura_logo = imagesy($logo);

    $largura_logo = imagesx($logo);

    $x_logo = imagesx($image_temporaria) - $largura_logo - 6;
    $y_logo = imagesy($image_temporaria) - $altura_logo - 6;

    imagecopymerge($image_temporaria, $logo, $x_logo, $y_logo, 0, 0, $largura_logo, $altura_logo, 70);

    header('Content-Type: image/png');
    header('Content-Disposition: atachment; filename=image.png');
    imagepng($image_temporaria);
    