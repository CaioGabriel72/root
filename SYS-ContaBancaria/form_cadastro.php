<!DOCTYPE html>
<html>
	<head>
		<script>
			function liberar_limite(valor){
				if(valor=="ce"){
					document.getElementById("limite").style.display="block";
				}else{
					document.getElementById("limite").style.display="none";
				}
				
			}
		</script>
	</head>
	
	<body>

        <?php
        if(empty($_POST)){
        ?>
            <form action="cadastra_Conta.php" method="POST"> 
                <input type="text" name="cpf" placeholder="cpf ..."/><br />
                <input type="text" name="nome" placeholder="nome ..."/><br />
                <input type="email" name="email" placeholder="email ..."/><br />

    
                <select name="tipo" onchange="liberar_limite(this.value)">
                    <option value="">::tipo::</option>
                    <option value="cc">Conta Corrente</option>
                    <option value="ce">Conta Especial</option>
                </select>
                <br />
                <div id="limite" style="display:none">
                    <input type="number" name="limite" placeholder="Digite o limite especial..."  />				
                </div>                             
                <button>Enviar</button>
             </form>
    <?php }   ?>
</body>
</html>
