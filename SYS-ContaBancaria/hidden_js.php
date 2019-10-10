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
		<form name="teste">
			<select name="tipo" onchange="liberar_limite(this.value)">
				<option value="">::selecione::</option>
				<option value="cc">Conta Corrente</option>
				<option value="ce">Conta Especial</option>
			</select>
			<br />
			<div id="limite" style="display:none">
				<input type="number" name="limite" placeholder="Digite o limite especial..."  />				
			</div>
	
	</body>
</html>