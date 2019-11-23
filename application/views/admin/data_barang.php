<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3"data-toggle="modal" data-target="#tambahData"><i class="fas da-plus fa-sm"></i>+Tambah Data</button>

	<table class="table table-bordered">
		<tr align="center">
			<th>No</th>
			<th>NAMA BARANG</th>
			<th>KETERANGAN</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th>STOK</th>
			<th colspan="3">AKSI</th>
		</tr>
		<?php 
		$no=1;
			foreach ($barang as $brg) : ?>
				
				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $brg->nama_brg?></td>
					<td><?php echo $brg->keterangan?></td>
					<td><?php echo $brg->kategori?></td>
					<td><?php echo $brg->harga?></td>
					<td><?php echo $brg->stock?></td>
					<td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
					<td><?php echo anchor ('admin/data_barang/edit/'. $brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
					<td><?php echo anchor('admin/data_barang/hapus/'.$brg->id_brg,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
				</tr>

				<?php endforeach; ?>
			
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_barang/tambah_aksi'?>" method="post" enctype="multipart/form-data">
        	
        	<div class="form-group">
        		<label>Nama Barang</label>
        		<br>
        		<input type="text" name="nama_brg" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Keterangan</label>
        		<br>
        		<input type="text" name="keterangan" class="form-control">
        	</div>

        <div class="form-group">
          <label>Kategori</label>
          <select class="form-control" name="kategori">
            <option>gitar</option>
            <option>bass</option>
            <option>drum</option>
            <option>key</option>
          </select>
        </div>

        	<div class="form-group">
        		<label>Harga</label>
        		<br>
        		<input type="text" name="harga" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Stok</label>
        		<br>
        		<input type="text" name="stock" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Gambar Produk</label>
        		<br>
        		<input type="file" name="gambar" class="form_control">
        	</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" data-dismiss="modal">batalkan</button>
        <button type="submit" class="btn btn-primary">Upload</button>
      </div>
      </form>
    </div>
  </div>
</div>