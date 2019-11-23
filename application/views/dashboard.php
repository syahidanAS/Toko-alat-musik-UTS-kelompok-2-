<head>
	<style type="text/css">
		/* Equal-height card images, cf. https://stackoverflow.com/a/47698201/1375163*/
.card-img-top {
    /*height: 11vw;*/
    object-fit: cover;
}
  /* Small devices (landscape phones, 576px and up) */
  @media (min-width: 576px) {
    .card-img-top {
        height: 19vw;
    }
  }
  /* Medium devices (tablets, 768px and up) */
  @media (min-width: 768px) {
    .card-img-top {
        height: 16vw;
    }
  }
  /* Large devices (desktops, 992px and up) */
  @media (min-width: 992px) {
    .card-img-top {
        height: 11vw;
    }
  }
  /* Extra large devices (large desktops, 1200px and up) */
  @media (min-width: 992px) {
    .card-img-top {
        height: 11vw;
    }
  }
	</style>
</head>

<div class="container-fluid">
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/slider1.jpg')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slider1.jpg')?>" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
	<div class="row text-center">
		<?php foreach ($barang as $brg) :?>
			<div class="card ml-1 mt-1" style="width: 16rem;">
				
			  <img  src="<?php echo base_url().'/uploads/'.$brg->gambar?>" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
			    <small><?php echo $brg->keterangan ?></small><br>
			    <span class="badge badge-success mb-1">Rp <?php echo number_format( $brg->harga,0,',','.') ?></span>
			    <hr>
          
			    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah ke keranjang</div>') ?>
			  </div>
			</div>
		<?php endforeach ?>
	</div>
</div>