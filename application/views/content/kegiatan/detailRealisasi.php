<?php 
if ($realisasi_anggaran_kegiatan){

	$totalanggaran = number_format($realisasi_anggaran_kegiatan,2);
}

if  (empty($realisasi_anggaran_kegiatan)){

	$totalanggaran ='<label class="label-danger">Total anggaran kosong</label>';
}

if ($get_sum_volume_realisasi_kegiatan){

	$totalvolume = $get_sum_volume_realisasi_kegiatan;
}
 
if (empty($get_sum_volume_realisasi_kegiatan)) {

	$totalvolume = '<label class="label-danger">Total volume kosong</label>';
} 

if ($get_realisasi_detail_by_kode_desa_info->Satuan){

	$satuan = $get_realisasi_detail_by_kode_desa_info->Satuan;
}

if (empty($get_realisasi_detail_by_kode_desa_info->Satuan)){

	$satuan = '<label class="label-danger">Satuan kosong</label>';
}
?>

 <ul class="list-group">
  <li class="list-group-item">Total Anggaran : Rp. <?php echo $totalanggaran; ?> </li>
  <li class="list-group-item">Total Volume : <?php echo $totalvolume; ?></li>
  <li class="list-group-item">Satuan : <?php echo $satuan; ?></li>
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

