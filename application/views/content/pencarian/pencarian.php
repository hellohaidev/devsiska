



<div class="row">
	<div class="col-md-6">

		<h1>Cari Data Desa</h1>
		<?php echo form_open('Pencarian/search') ?>
		<select class="form-control select2" name="Kd_Kec">
			<option>Pilih</option>
			<?php foreach ($kecamatan as $key ) { ?>
				
				<option value="<?php echo $key->Kd_Kec ?>"><?php echo $key->Nama_Kecamatan ?></option>

			<?php } ?>
			?>
		</select>

		<input type="submit" class="btn btn-primary" name="caridata" value="cari"/>


		<?php echo form_close()  ?>
	</div>
	<div class="col-md-6">
		<h1>Hasil Pencarian</h1>
		<?php if (isset($_POST['caridata'])) { ?>
		<table class="table" id="data_desa">
			<thead>
				<tr>
					<th>Nama Desa</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach ($search_result as $item) { 
						if ($item) {
				?>
					<tr>
						<td><?php echo $item->Nama_Desa; ?></td>
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
			                Silahkan Pilih Kecamatan Terelebih dahulu
			              </div>';
					} 
		?>
		
	</div>
</div>