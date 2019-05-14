<h1>Data Desa</h1>

<table id="data_desa" class="table">
	<thead>
		<tr>
			<th>Kode Kecamatan</th>
			<th>Kode Desa</th>
			<th>Nama Desa</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data_desa as $item) {?>

		<tr>
			<td><?php echo $item->Kode_Kecamatan ?></td>
			<td><?php echo $item->Kode_Desa ?></td>
			<td><?php echo $item->Nama_Desa ?></td>
		</tr>

		<?php } ?>
	</tbody>
</table>