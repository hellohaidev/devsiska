



<div class="row">
	<div class="col-md-12">

		<h1>Cari Data Kegiatan Desa</h1>
		<?php echo form_open('Pencarian/searchPagu') ?>


		

		<select class="form-control select3" name="Kd_Desa">
			<option>Pilih Desa</option>
			<?php foreach ($desa as $datadesa ) { ?>
				
				<option value="<?php echo $datadesa->Kd_Desa ?>"><?php echo $datadesa->Nama_Desa ?></option>

			<?php } ?>
			?>
		</select>


		<input type="submit" class="btn btn-primary" name="caridata" value="cari"/>


		<?php echo form_close()  ?>
	</div>
</div>

<div class="row">

	<h1>Hasil Pencarian</h1>
		<?php if (isset($_POST['caridata'])) { ?>


		<table class="table" id="data_desa">
			<thead>
				<tr>
					<th>Nama Kegiatan</th>
					<th>Pagu</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach ($search_result_pagu as $items) { 
						if ($items) {
				?>
					<tr>
						<td><?php echo $items->Nama_Kegiatan; ?></td>
						<td><?php echo 'Rp. ' . number_format($items->Pagu,2); ?></td>
					</tr>
				<?php 
						}
						
					}
					 
				?>
			</tbody>
		</table>
		<?php 
			}
			else {
					echo '<div class="alert alert-warning alert-dismissible">
			                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
			                Silahkan Pilih Desa Terelebih dahulu
			              </div>';
					} 
		?>

</div>