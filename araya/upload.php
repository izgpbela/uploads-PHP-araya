<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Diretório para armazenar os arquivos de imagem e PDF
    $diretorio_img = "img/";
    $diretorio_pdf = "pdf/";

    // Verifica se foi enviado um arquivo de imagem
    if (isset($_FILES["imagem"])) {
        $imagem_nome = $_FILES["imagem"]["name"];
        $imagem_temp = $_FILES["imagem"]["tmp_name"];
        $imagem_destino = $diretorio_img . $imagem_nome;

        // Move o arquivo para a pasta de destino
        move_uploaded_file($imagem_temp, $imagem_destino);

        // Exibe a imagem
        echo "<img src='$imagem_destino' alt='Imagem Enviada'>";
    }

    // Verifica se foi enviado um arquivo PDF
    if (isset($_FILES["pdf"])) {
        $pdf_nome = $_FILES["pdf"]["name"];
        $pdf_temp = $_FILES["pdf"]["tmp_name"];
        $pdf_destino = $diretorio_pdf . $pdf_nome;

        // Move o arquivo para a pasta de destino
        move_uploaded_file($pdf_temp, $pdf_destino);

        // Cria um link para o PDF
        echo "<a href='$pdf_destino' target='_blank'>Download PDF</a>";
    }
}
?>
