<?php

require_once 'Model/post.php';
require_once 'DAO/postagemDAO.php';

function posts()
{
    $select = listarPosts();
    $linha = retorna_linha($select);
    $total = verifica_resultado($select);

    // se o número de resultados for maior que zero, mostra os dados
    if ($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
            ?>
            <p><?= $linha['ID'] ?> / <?= $linha['TEXTO'] ?></p>
<?php
        // finaliza o loop que vai mostrar os dados
} while ($linha = retorna_linha($select));
    // fim do if 
}
}
?>