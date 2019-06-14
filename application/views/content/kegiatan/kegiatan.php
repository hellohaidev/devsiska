<h1>Data Kegiatan</h1>


<table id="kegiatanMaster" class="table" border="1">
	<thead>
		<tr>
			<th>Nama Kegiatan</th>
			
		</tr>	
	</thead>
	<tbody>
		<?php foreach($data_kegiatan as $item) { ?>

		<tr>
			
			<td><?php echo $item->Nama_Kegiatan  ?></td>
		</tr>

		<?php } ?>
	</tbody>
</table>