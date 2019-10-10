<!DOCTYPE html>
<html>
	<head>
        <title>Operações</title>
	</head>
	
	<body>
        <?php
        include("cabecalho.php");
        if(!empty($_GET)){
            $nroConta = $_GET["nroConta"];
        }else{
            $nroConta = "";

        }
        if(empty($_POST)){
        ?>
            <form action="cadastra_operacao.php" method="POST"> 
                <input type="number" name="nroConta" placeholder="Numero da conta..." value="<?php echo $nroConta;?>" /><br />
                <input type="number" name="valor" placeholder="valor..."/><br />    
                <select name="operacao">
                    <option value="saque">Saque</option>
                    <option value="deposito">Deposito</option>
                </select>
                <br />
                <button>Enviar</button>
             </form>
    <?php } ?>
</body>
</html> 
	</body>
</html>