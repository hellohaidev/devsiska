<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $total_kegiatan ?></h3>

              <p>Total Kegiatan</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url() ?>Kegiatan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $total_kecamatan ?></h3>

              <p>Total Kecamatan</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url() ?>Kecamatan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $total_desa ?></h3>

              <p>Total Desa</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url(); ?>Desa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>  
    </div>

    <div class="row">
        <div class="col-lg-6 col-xs-6">
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>Rp. <?php echo number_format($total_anggaran,2) ?></h3>
              
              <p>Total Anggaran Desa Kabupaten Bogor</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url(); ?>" class="small-box-footer">More info<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <div class="col-lg-6 col-xs-6">
        <div class="small-box bg-light-blue">
          <div class="inner">
            <h3>Rp. <?php echo number_format($total_stlhpak,2)?></h3>
            <p>Total Anggaran Desa Kabupaten Bogor Setelah Perubahan</p>            
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="<?php echo base_url();?>" class ="small-box-footer">more info<i class="fa
          fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
</section>
