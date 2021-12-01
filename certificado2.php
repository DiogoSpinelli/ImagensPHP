<?php
    //AUTOLOAD DO COMPOSER
    require __DIR__.'/vendor/autoload.php';

    use Dompdf\Dompdf;
    use Dompdf\Options;

    //INSTANCIA DE OPTIONS
    $options = new Options();
    $options->setChroot(__DIR__);
    $options->setIsRemoteEnabled(true);

    //INSTANCIA DE DOMPDF
    $dompdf = new Dompdf($options);

    //CARREGA O HTML PARA DENTRO DA CLASSE
    $dompdf->loadHtmlFile(__DIR__.'/certificado.html');

    //REDERIZAR O ARQUIVO PDF
    $dompdf->render();

    //IMPRIME O CONTEÚDO DO ARQUIVO PDF NA TELA
    $dompdf->stream(
        "certificado.pdf",
        array(
            "Attachment" => false
        )
    );
?>