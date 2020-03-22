<?php 
	abstract class celana
	{
		public static $categori,
			   $ukuran,
			   $warna,
			   $stok;

		public abstract function __construct($categori,$ukuran,$warna,$stok);
	}
	trait bahan{

	}

	class topi extends celana
	{
		public function __construct($categori,$ukuran,$warna,$stok)
		{
			$this->categori=$categori;
			$this->ukuran=$ukuran;
			$this->warna=$warna;
			$this->stok=$stok;
		}

		public static function cetak_topi($categori,$ukuran,$warna,$stok)
		{	
			self::$categori=$categori;
			self::$ukuran=$ukuran;
			self::$warna=$warna;
			self::$stok=$stok;

			echo    'categori :'.self::$categori.
					'<br>ukuran :'.self::$ukuran.
					'<br>warna :'.self::$warna.
					'<br>stok :'.self::$stok;
		}
	}
	topi::cetak_topi('jubah','M','green','5');