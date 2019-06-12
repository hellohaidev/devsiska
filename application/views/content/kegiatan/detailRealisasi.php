
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
		
		if ($value->Anggaran){

			$anggaran = number_format($value->Anggaran);
		}

		if (empty($value->Anggaran)){

			$anggaran = '<label class="label-danger">Tidak ada Anggaran</label>'; 
		}

		if ($value->Volume){

			$volume = $value->Volume;
		}

		if (empty($value->Volume)){

			$volume = '<label class="label-danger">Tidak ada Volume</label>';
		}

		if ($value->Satuan){

			$satuan = $value->Satuan;
		}

		if (empty($value->Satuan)){

			$satuan = '<label class="label-danger">Tidak ada Satuan</label>';
		}

		
		?>		
		 <tr>
			<td><?php echo $value->Nama_Paket ?></td>
			<td>Rp. <?php echo $anggaran ?></td>
			<td><?php echo $volume ?></td>
			<td><?php echo $satuan ?></td>
		</tr>

<?php }  ?> 

	</tbody>
</table>

