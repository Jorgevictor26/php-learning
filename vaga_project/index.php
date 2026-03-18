<?php

require __DIR__ . '/vendor/autoload.php';

use App\entities\Vaga;

if (isset($_POST['titulo'], $_POST['descricao'], $_POST['status'])) {
    $vaga = new Vaga($_POST['titulo'], $_POST['descricao'], $_POST['status']);
     echo '<pre>';
    print_r($vaga);
    echo '</pre>';
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/main.php';
include __DIR__ . '/includes/footer.php';
?>