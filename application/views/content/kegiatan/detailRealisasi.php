
 <ul class="list-group">
  <li class="list-group-item">Total Anggaran : Rp. <?php echo number_format($realisasi_anggaran_kegiatan,2) ?> </li>
  <li class="list-group-item">Total Volume : <?php echo $get_sum_volume_realisasi_kegiatan; ?></li>
  <li class="list-group-item">Satuan : <?php echo $get_realisasi_detail_by_kode_desa_info->Satuan; ?></li>
</ul> 

<table id="data_relasi_kegiatan" class="table table-responsive">
	<thead>
		<tr>
			<th>Nama Paket</th>
			<th>Anggaran</th>
			<th>Volume</th>
			<th>Satuan</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach ($detail_realisasi_desa as $value) {
		?>		
		<tr>
			<td><?php echo $value->Nama_Paket; ?></td>
			<td>Rp. <?php echo number_format($value->Anggaran); ?></td>
			<td><?php echo $value->Volume; ?></td>
			<td><?php echo $value->Satuan; ?></td>
		</tr>

<?php } ?>
	</tbody>
</table>

