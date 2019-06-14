<h1>Detail Data Kegiatan</h1>
<a href="<?php echo base_url() ?>RelasiKegiatan" class="btn btn-primary">Back</a>
<div class="dataTables_wrapper">
<table id="detail" class="display nowrap" style="width:100%">
	<thead>
		<tr>
			<th>Jenis Kegiatan</th>
			<th>Kode Desa</th>
			<th>Pagu</th>
			<th>Pagu PAK</th>
			<th>Nama PPTKD</th>
			<th>Lokasi</th>
			<th>Waktu</th>
			<th>Realisasi</th>
		</tr>	
	</thead>
	<tbody>
		<?php 

		foreach($detail_data as $item) { 

			if ($item->Jns_Kegiatan == 1) {
				
				$jenis = 'Non Fisik';
			}
			if ($item->Jns_Kegiatan == 2) {
				
				$jenis = 'Fisik';
			}
			if ($item->Lokasi) {
				
				$lokasi = $item->Lokasi;
			}
			if (empty($item->Lokasi)) {
				
				$lokasi = '<label class="label-danger">tidak ada lokasi</label>';
			}
			if ($item->Waktu) {
				
				$waktu = $item->Waktu;
			}
			if (empty($item->Waktu)) {
				
				$waktu = '<label class="label-danger">tidak ada waktu</label>';
			}




		?>
		<tr>
			<td><?php echo $jenis ?></td>
			<td><?php echo $item->Kd_Desa ?></td>
			<td>Rp. <?php echo number_format($item->Pagu,2) ?></td>
			<td>Rp. <?php echo number_format($item->Pagu_PAK,2) ?></td>
			<td><?php echo $item->Nm_PPTKD ?></td>
			<td><?php echo $lokasi ?></td>
			<td><?php echo $waktu ?></td>
			<td>
				<a href="<?php echo base_url() ?>RelasiKegiatan/detailRealisasi/<?php echo $item->Kd_Keg ?>/<?php echo $item->Kd_Keg ?>" class="btn btn-md btn-warning">Realisasi</a>
			</td>
		</tr>

		<?php } ?>
	</tbody>
</table>
</div>