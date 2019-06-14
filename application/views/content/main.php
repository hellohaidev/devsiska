<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><a href="<?php echo base_url();?>Kegiatan "><i style="color:black" class="far fa-file-alt"></i></a></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Kegiatan</span>
              <span class="info-box-number"><?php echo $total_kegiatan ?></span>
            </div>
          </div>
        </div>  

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="info-box">
            <span class="info-box-icon bg-green"><a href="<?php echo base_url();?>Kecamatan "><i style="color:black" class="far fa-file-alt"></i></a></span>
            
            <div class="info-box-content">
              <span class="info-box-text">Total Kecamatan</span>
              <span class="info-box-number"><?php echo $total_kecamatan ?></span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="info-box">
            <span class="info-box-icon bg-red"><a href="<?php echo base_url();?>Desa "><i style="color:black" class="far fa-file-alt"></i></a></span>
            
            <div class="info-box-content">
              <span class="info-box-text">Total Desa</span>
              <span class="info-box-number"><?php echo $total_desa ?></span>
            </div>
          </div>
        </div>          
  
    </div>   

    <div class="row">
        <div class="col-lg-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-orange"> <a href="<?php echo base_url();?>"><i style="color:black" class="far fa-file-alt"></i></a></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Anggaran Desa Kabupaten Bogor</span>
              <span class="info-box-number">Rp. <?php echo number_format($total_anggaran,2)?></span>
            </div>
            <!-- /.info-box-content -->
            </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      
        <div class="col-lg-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-light-blue"><a href="<?php echo base_url();?>"><i style="color:black" class="far fa-file-alt"></i></a></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Anggaran Setelah Perubahan</span>
              <span class="info-box-number">Rp. <?php echo number_format($total_stlhpak,2)?></span>
            </div>
            <!-- /.info-box-content -->
            </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>  
</section>
