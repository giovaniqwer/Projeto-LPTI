<!-- Conteudo -->
<div class="conteudo">
	<?php
		require_once 'init.php';
		$PDO = db_connect();
		$sql_count = "SELECT COUNT(*) AS total FROM Evento ORDER BY data ASC";
		$sql = "SELECT idEvento, data, local, palestrante, horario, tema, descricao, classificacao FROM Evento ORDER BY data ASC";
 
		$stmt_count = $PDO->prepare($sql_count);
		$stmt_count->execute();
		$total = $stmt_count->fetchColumn();
 
		$stmt= $PDO->prepare($sql);
		$stmt->execute();
	?>
	<h2>Lista de Eventos</h2>
	<p>Total de eventos: <?php echo $total ?></p>
	<?php if($total > 0): ?>
	<table width="100%" border="1"> 
		<thead>			
			<tr>
				<th>IdEvento</th>
				<th>Tema</th>
				<th>Palestrante</th>
				<th>Local</th>
				<th>Horário</th>
				<th>Data</th>
				<th>Descrição</th>
				<th>Classificação</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php while($evento = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
			<tr>
				<td><?php echo $evento['idEvento'] ?></td>
				<td><?php echo $evento['tema'] ?></td>
				<td><?php echo $evento['palestrante'] ?></td>
				<td><?php echo $evento['local'] ?></td>
				<td><?php echo $evento['horario'] ?></td>
				<td><?php echo $evento['data'] ?></td>
				<td><?php echo $evento['descricao'] ?></td>
				<td><?php echo $evento['classificacao'] ?></td>
				<td>
					<a onclick="chama(this)" href="form-edit.php?id=<?php echo $evento['idEvento']?> ">Editar</a>
					<a onclick="chama(this)" href="delete.php?id=<?php echo $evento['idEvento'] ?>">Excluir</a> 
				</td>
			</tr>
			<?php endwhile; ?>
 		</tbody>
	</table>
 	<?php else: ?>
 	<p> Nenhum Evento registrado </p>
 	<?php endif; ?>
 	<br>
 	<a  href="form-add.php" onclick="chama(this)" value="Novo Evento">novo evento</a>
</div>
