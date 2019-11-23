<div class="container-fluid">


	
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Id Produk</th>
			<th>Nama Produk</th>
			<th>Jumlah Pesanan</th>
			<th>Harga Satuan</th>
			<th>Sub-Total</th>
		</tr>
		<?php 
		$total = 0;
		foreach($pesanan as $psn):
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;
		 ?>
		 <tr>
		 	<td><?php echo $psn->id_barang ?></td>
		 	<td><?php echo $psn->nama_barang ?></td>
		 	<td><?php echo $psn->jumlah ?></td>
		 	<td align="right"><?php echo number_format($psn->harga,0,',','.')  ?></td>
		 	<td align="right"><?php echo number_format($subtotal,0,',','.')  ?></td>
		 </tr>
		<?php endforeach ?>
		<tr>
			<td colspan="4" align="center">Grand Total</td>
			<td align="rigth">Rp <?php echo number_format($total,0,',','.') ?></td>
		</tr>
	</table>
		<form  method="post" action="<?php echo base_url().'admin/invoice'?>">
	<div align="right"><button  type="submit" class="btn btn-sm btn-primary mb-3" >Kembali</button></div>
		<form method="post" action="<?php echo base_url().'Dashboard/proses_pesanan'?>">
</div>