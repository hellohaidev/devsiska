<h1>Data Kegiatan</h1>


<table id="kegiatan" class="table" border="1">
	<thead>
		<tr>
			<th>Nama Kegiatan</th>
			<th>Detail</th>
		</tr>	
	</thead>
	<tbody>
		<?php foreach($data_kegiatan as $item) { ?>

		<tr>
			
			<td><?php echo $item->Nama_Kegiatan  ?></td>
			<td>
				<a href="#" class="btn btn-md btn-success">View</a>
			</td>
		</tr>

		<?php } ?>
	</tbody>
</table>