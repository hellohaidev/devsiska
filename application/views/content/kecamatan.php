<h1>Data Kecamatan</h1>

<table id="data_kecamatan" class="table">
	<thead>
		<tr>
			<th>Nama Kecamatan</th>
			<th>Nama Desa</th>
		</tr>	
	</thead>
	<tbody>
		<?php foreach($data_kecamatan as $item) { ?>

		<tr>
			<td><?php echo $item->Nama_Kecamatan ?></td>
			<td><?php echo $item->Nama_Desa ?></td>
		</tr>

		<?php } ?>
	</tbody>
</table>
