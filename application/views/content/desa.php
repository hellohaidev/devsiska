<h1>Data Desa</h1>

<table id="data_desa" class="table" border="1">
	<thead>
		<tr>
			<th>Nama Desa</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data_desa as $item) {?>

		<tr>
			<td><?php echo $item->Nama_Desa ?></td>
		</tr>

		<?php } ?>
	</tbody>
</table>