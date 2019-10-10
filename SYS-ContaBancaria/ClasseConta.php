<?php
    include("cabecalho.php");
    $tipo = $_POST["tipo"];
    if($tipo == 'ce')
    {
        include("ClasseContaEspecial.php");            
        $C= new ContaEspecial($_POST);
    }else{
       
        include("ClasseContaCorrente.php");

        $C= new ContaCorrente($_POST);
    }
        session_start();
        $_SESSION['conta'][] = $C;

        echo"Conta  cadastrada com sucesso";
        $C->exibe_dados();

?>
