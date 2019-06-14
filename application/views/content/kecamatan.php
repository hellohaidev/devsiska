<h1>Data Kecamatan</h1>

<table id="data_kecamatan" class="table" border="1">
	<thead>
		<tr>
			<th>Nama Kecamatan</th>
		</tr>	
	</thead>
	<tbody>
		<?php foreach($data_kecamatan as $item) { ?>

		<tr>
			<td><?php echo $item->Nama_Kecamatan ?></td>
		</tr>

		<?php } ?>
	</tbody>
</table>
