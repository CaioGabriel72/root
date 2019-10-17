<?php
	include("../classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");

	include("conexao.php");
	
	$sql = "SELECT * FROM area";
	
	$stmt = $conexao->prepare($sql);
	
	$stmt->execute();
	
	echo "<table border='1'>";
	echo "<thead>
			<tr>
				<th>ID AREA</th>
				<th>NOME</th>	
				<th>AÇÃO</th>
			</tr>
		  </thead>
		  <tbody>
		  ";
	while($linha=$stmt->fetch()){
		echo "<tr>
				<td>".$linha["ID_AREA"]."</td>
				<td>".$linha["NOME"]."</td>		
				<td>
				<form method='post' action='remover.php'>
				<input type='hidden' name='tabela' value='area' />
				<input type='hidden' name='id' 
					value='".$linha["ID_AREA"]."' />
				<button>Remover</button>
			</form>
					
				</td>
		      </tr>";
	}
	echo "</tbody>
		</table>";
?>