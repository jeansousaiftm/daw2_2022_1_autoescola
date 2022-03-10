<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro de Carros</title>
	</head>
	<body>
		<form method="POST" action="/carro">
			<div>
				<label>Marca:</label>
				<input type="text" name="marca" />
			</div>
			<div>
				<label>Modelo:</label>
				<input type="text" name="modelo" />
			</div>
			<div>
				<label>Placa:</label>
				<input type="text" name="placa" />
			</div>
			<div>
				<label>Cor:</label>
				<input type="text" name="cor" />
			</div>
			<div>
				<label>Ano:</label>
				<input type="number" name="ano" />
			</div>
			<div>
				<button type="submit">Salvar</button>
				<a href="/carro">Novo</a>
			</div>
		</form>
		<table border="1">
			<thead>
				<tr>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Placa</th>
					<th>Cor</th>
					<th>Ano</th>
					<th>Edit</th>
					<th>Del</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</body>
</html>