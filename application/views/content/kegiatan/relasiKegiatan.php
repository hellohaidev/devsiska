<h1>Data Kegiatan</h1>


<table id="kegiatan" class="table" border="1">
	<thead>
		<tr>
			<th>Kode Kegiatan</th>
			<th>Nama Kegiatan</th>
			<th>Detail</th>
		</tr>	
	</thead>
	<tbody>
		<?php foreach($data_kegiatan as $item) { ?>

		<tr>
			
			<td><?php echo $item->ID_Keg  ?></td>
			<td><?php echo $item->Nama_Kegiatan  ?></td>
			<td>
				<a href="<?php echo base_url() ?>RelasiKegiatan/detail/<?php echo $item->ID_Keg ?>" class="btn btn-md btn-success">View</a>
			</td>
		</tr>

		<?php } ?>
	</tbody>
</table>