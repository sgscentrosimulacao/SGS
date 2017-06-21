<?php
require "../Control/controleDoBanco.php";


$result = consultarItem();

function consultarItem()
{
    $conn = abrirDatabase();
    if(isset($_POST['fieldPesquisar']) && $_POST['fieldPesquisar'] != null){

        $pesquisa = strtoupper ($_POST['fieldPesquisar']);
        $dropTipoPesquisa = $_POST['dropTipoPesquisa'];

        switch ($dropTipoPesquisa) {

            case 1:

                $selectUsuario = "SELECT tb_inventario.idPeca, tb_inventario.nomePeca, tb_inventario.descricao, tb_sala.nomeSala, tb_inventario.quantidade FROM tb_inventario
                                    LEFT JOIN tb_sala ON tb_inventario.idSala = tb_sala.idSala
                                    
                                    WHERE UPPER(tb_inventario.nomePeca) LIKE '%{$pesquisa}%'";
                                break;
            case 2:
                $selectUsuario = "SELECT tb_inventario.idPeca, tb_inventario.nomePeca, tb_inventario.descricao, tb_sala.nomeSala, tb_inventario.quantidade FROM tb_inventario
                                    LEFT JOIN tb_sala ON tb_inventario.idSala = tb_sala.idSala
                                    
                                    WHERE UPPER(tb_sala.nomeSala) LIKE '%{$pesquisa}%'";

                break;
        }
    }else{
        $selectUsuario = "SELECT tb_inventario.idPeca, tb_inventario.nomePeca, tb_inventario.descricao, tb_sala.nomeSala, tb_inventario.quantidade FROM tb_inventario
                                    LEFT JOIN tb_sala ON tb_inventario.idSala = tb_sala.idSala";
    }

    return mysqli_query($conn, $selectUsuario);
}
?>