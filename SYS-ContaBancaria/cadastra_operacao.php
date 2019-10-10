<?php
    include("cabecalho.php");


        $nroConta = $_POST['nroConta'];
        $operacao = $_POST['operacao'];
        $valor = $_POST['valor'];   

        include('ClasseContaEspecial.php');
    

        session_start();
        foreach($_SESSION['conta'] as $i=>$c)
        {
            
            $get_nroConta =  $c->get_nroConta();
           
            if($nroConta ==  $get_nroConta ){
                if($operacao == 'saque')
                {
                    echo"Saque realizado com sucesso";
                    $c->sacar($valor);
                }
                else if($operacao == 'deposito')
                {
                    echo"depósito realizado com sucesso";
                    $c->depositar($valor);

                }

                
            }
        
        }
?>
