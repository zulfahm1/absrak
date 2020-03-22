<?php 
	abstract class rumah
	{
		public static $harga,
			   $type,
			   $jumlah;
			 

		public abstract function __construct($harga,$type,$jumlah);
	}
	trait bahan{

	}

	class mobil extends rumah
	{
		public function __construct($harga,$type,$jumlah)
		{
			$this->harga=$harga;
			$this->type=$type;
			$this->jumlah=$jumlah;
			
		}

		public static function cetak_mobil($harga,$type,$jumlah)
		{	
			self::$harga=$harga;
			self::$type=$type;
			self::$jumlah=$jumlah;
			

			echo    'harga :'.self::$harga.
					'<br>type :'.self::$type.
					'<br>jumlah :'.self::$jumlah;
				
		}
	}
	mobil::cetak_mobil('1 M','LUX','20');