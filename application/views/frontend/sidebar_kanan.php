	<style>
		.hr_cart {
			border-style: dashed;
			border-color: black;
		}
	</style>

	<?php  
		// $data = array(
		// 				'id' => 1,
		// 				'qty' => 5,
		// 				'price' => 1000,
		// 				'name' => "Kain",
		// 				'options' => array('gambar' => 'milky.jpg')
		// 			);

		// $this->cart->insert($data);

		// $data = array(
		// 				'id' => 2,
		// 				'qty' => 3,
		// 				'price' => 1500,
		// 				'name' => "Kain 2",
		// 				'options' => array('gambar' => 'taslan-bening.jpg')
		// 			);

		// $this->cart->insert($data);
	?>


		<div class="panel panel-primary">
			<div class="panel-heading"><i class="fa fa-shopping-cart"></i> keranjang Belanja</div>
			<div class="panel-body">
				<p><strong><?php echo count($this->cart->contents()) ?> Produk</strong></p>
				<ol>
				<?php foreach ($this->cart->contents() as $item): ?>
					<li> <?php echo $item['rowid'] ?></li>
				<?php endforeach ?>
				</ol>
				<hr class="hr_cart">
				<p>Total : Rp. <?php echo $this->cart->format_number($this->cart->total()) ?></p>				
			</div>
		</div>
		
		<div class="panel panel-danger">
			<div class="panel-heading">
				
			</div>
		</div>