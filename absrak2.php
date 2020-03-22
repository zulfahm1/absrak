<?php 
	abstract class buah
	{
		public static $harga,
			   $jenis,
			   $jumlah;
			 

		public abstract function __construct($harga,$jenis,$jumlah);
	}
	trait bahan{

	}

	class pisang extends buah
	{
		public function __construct($harga,$jenis,$jumlah)
		{
			$this->harga=$harga;
			$this->jenis=$jenis;
			$this->jumlah=$jumlah;
			
		}

		public static function cetak_pisang($harga,$jenis,$jumlah)
		{	
			self::$harga=$harga;
			self::$jenis=$jenis;
			self::$jumlah=$jumlah;
			

			echo    'harga :'.self::$harga.
					'<br>jenis :'.self::$jenis.
					'<br>jumlah :'.self::$jumlah;
				
		}
	}
	pisang::cetak_pisang('10k','mengkal','2 kilo');