<?php
include 'conecta_mysql.inc';
$ID = $_POST['nome'];
    //verifica se o ID esta vazio
if (isset($_POST['nome'])) {
    //delete e script para voltar ao index
	mysqli_query($conexao,"DELETE FROM ATIVO WHERE cd_patrimonio = '$ID' ");
    print "sucesso";
} else {
    //erro e script para voltar ao index
    print"ERRO DURANTE EXCLUS�O";
}