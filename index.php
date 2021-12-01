<?php

require __DIR__.'/vendor/autoload.php';

use \App\File\Image;

if(isset($_POST['esconder'])){
    $obImage = new Image($_FILES['imagem']);
    $obImage->setText($_POST['texto']);
    $obImage->download();
}

$text = '';
if(isset($_POST['ler'])){
    $obImage = new Image($_FILES['imagem']);
    $text = $obImage->getText();
}

include __DIR__.'/includes/titulo.php';

include __DIR__.'/includes/header.php';

include strlen($text) ?  __DIR__.'/includes/resultado.php' :  __DIR__.'/includes/formulario.php';

include __DIR__.'/includes/footer.php';

include __DIR__.'/includes/header copy.php';

include __DIR__.'/includes/form.php';

include __DIR__.'/includes/footer.php';

include __DIR__.'/includes/header copy 2.php';

include __DIR__.'/includes/form2.php';

include __DIR__.'/includes/footer.php';

include __DIR__.'/includes/header copy 3.php';

include __DIR__.'/includes/form2 copy.php';

include __DIR__.'/includes/footer.php';

include __DIR__.'/includes/header copy 4.php';

include __DIR__.'/includes/form2 copy 2.php';

include __DIR__.'/includes/footer.php';



include __DIR__.'/includes/header copy 5.php';

include __DIR__.'/includes/form2 copy 3.php';

include __DIR__.'/includes/footer.php';