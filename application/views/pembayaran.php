<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if ($keranjang = $this->cart->contents()){

					foreach ($keranjang as $item) {
						
						$grand_total = $grand_total + $item['subtotal'];

					}
					echo "<h4>Total belanja : Rp ".number_format($grand_total,0,',','.');
				}?>
				
			</div><br><br>
			<h3>Masukkan alamat pengiriman dan pembayaran</h3>
			<form method="post" action="<?php echo base_url().'Dashboard/proses_pesanan'?>">

				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
				</div>

				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
				</div>

				<div class="form-group">
					<label>No. Telepon</label>
					<input type="text" name="no_telp" placeholder="Nomor Telepon" class="form-control">
				</div>

				<div class="form-group">
					<label>Jasa Pengiriman</label>
					<select class="form-control">
						<option>JNE Regular (2-3 hari kerja)</option>
						<option>JNE YES (1 hari kerja)</option>
						<option>J&T (2-3 hari kerja)</option>
						<option>POS Indonesia (2-3 hari kerja)</option>
					</select>
				</div>

				<div class="form-group">
					<label>Metode Pembayaran</label>
					<select class="form-control">
						<option>Transfer Bank Mandiri</option>
						<option>Transfer Bank BNI</option>
						<option>Transfer Bank BRI</option>
						<option>DANA</option>
						<option>OVO</option>
					</select>
				</div>

				<button type="submit" class="btn btn-sm btn-primary mb-3">Bayar</button>
				
			</form>
		</div>


		<div class="col-md-2"></div>
	</div>
</div>