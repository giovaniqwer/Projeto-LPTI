<!-- Conteudo -->
<div class="conteudo">
	<form method="post" action="add.php" name="formCadastro" enctype="multipart/form-data">
		<h1>Cadastro de Eventos</h1>
		<table width="100%">
			<tr>
				<th width="18%">Tema</th>
				<td width="82%"><input type="text" name="txtTema"></td>
			</tr>				
			<tr>
				<th>Palestrante</th>
				<td><input type="text" name="txtPalestrante"></td>
			</tr>
			<tr>
				<th>Data</th>
				<td><input type="text" name="txtData" ></td>
			</tr>
			<tr>
				<th>Local</th>
				<td><input type="text" name="txtLocal" ></td>
			</tr>
			<tr>
				<th>Hora</th>
				<td><input type="text" name="horario" ></td>
			</tr>
			<tr>
				<th>Descricao</th>
				<td><input type="text" name="txtDescricao" ></td>
			</tr>
			<tr>
				<th>Classificacao</th>
				<td><input type="text" name="txtClassificacao" ></td>
			</tr>
			<tr></tr>
			<tr>
				<td></td>				
				<td>
					<input type="submit" href="add.php" onclick="chama(this)" value="Cadastrar"></input>
					<input type="reset" name="bntLimpar" value="Limpar"></input>
				</td>
			</tr>
		</table>
	</form>
</div>

