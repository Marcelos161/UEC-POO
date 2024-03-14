<?php 
    require_once 'config.php';
    require_once 'Lutador.php';

    // criando objeto lutador
    $nome = $_GET["nome"];
    $nacionalidade = $_GET["nacionalidade"];
    $idade = $_GET["idade"];
    $altura = $_GET["altura"];
    $peso = $_GET["peso"];

    $novolutador = new Lutador($nome, $nacionalidade, $idade, $altura, $peso, 0, 0, 0);
    

    print_r($novolutador->getCategoria());
    

    // cadastrando no banco

    $sql = "INSERT INTO lutadores (nome, nacionalidade, idade, altura, peso, categoria) VALUES ('{$nome}', '{$nacionalidade}', {$idade}, '{$altura}', '{$peso}', '{$novolutador->getCategoria()}')";

    $res = $conexao->query($sql);

    if($res) {
        print "<script> alert('cadastrado com sucesso')</script>";
        print "<script>location.href='index.php';</script>";
    } else {
        print "<script> alert('erro')</script>";
    }

?>