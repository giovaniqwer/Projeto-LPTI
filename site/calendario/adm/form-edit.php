<div class="conteudo">
<?php
	require 'init.php';
    // pega o ID da URL
	$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
	// valida o ID
 	if (empty ($id))
{
	echo "ID para alteração não definido";
 	exit;
}
 	// busca os dados do usuário a ser editado
 	$PDO = db_connect();
 	$sql = "SELECT data, local, palestrante, horario, tema, descricao, classificacao FROM Evento WHERE idEvento = :idEvento";
	$stmt = $PDO->prepare($sql);
 	$stmt->bindParam(':idEvento', $id, PDO::PARAM_INT);
 	$stmt->execute();
 	$evento = $stmt->fetch(PDO::FETCH_ASSOC);
 	/* se o método fetch () não retornar um array
 	significa que o ID não corresponde a um usuário válido */
 	if(!is_array($evento))
 	{
 		echo "Nenhum Evento encontrado";
 		exit;
 	}
 	$dataOK = dateConvert($evento['data']);
 ?>

 	<form method = "post" name="formAltera" action ="edit.php" enctype="multipart/form-data">
 	<h1> Edição de dados </h1>
			<table width="100%">
			<tr>
				<th width="18%">Tema</th>
				<td width="82%"><input type="text" name="txtTema" value="<?php echo $evento['tema']?>"></td>
			</tr>				
			<tr>
				<th>Palestrante</th>
				<td><input type="text" name="txtPalestrante" value="<?php echo $evento['palestrante']?>"></td>
			</tr>
			<tr>
				<th>Data</th>
				<td><input type="text" name="txtData" value="<?php echo $evento['data']?>"></td>
			</tr>
			<tr>
				<th>Local</th>
				<td><input type="text" name="txtLocal" value="<?php echo $evento['local']?>"></td>
			</tr>
			<tr>
				<th>Hora</th>
				<td><input type="text" name="horario" value="<?php echo $evento['horario']?>"></td>
			</tr>
			<tr>
				<th>Descricao</th>
				<td><input type="text" name="txtDescricao" value="<?php echo $evento['descricao']?>"></td>
			</tr>
			<tr>
				<th>Classificacao</th>
				<td><input type="text" name="txtClassificacao" value="<?php echo $evento['classificacao']?>"></td>
			</tr>
			<tr></tr>
			<tr>
				<td></td>				
 			<input type="hidden" name="id" value="<?php echo $id ?>">
 			<td><input type="submit" href="edit.php" onclick="chama(this)" value="Alterar"></input></td>
 			<td><input type="reset" name="btnLimpar" value="Limpar"></td>
 				</tr>
 			</table>
 		</form>

</div>

