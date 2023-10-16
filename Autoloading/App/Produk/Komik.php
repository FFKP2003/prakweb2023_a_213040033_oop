<?php   

class komik extends Produk implements InfoProduk {
    public $jumlahHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (RP. {$this->harga})";

        return $str;
    }
    public function getInfoProduk() {
        $str = "Komik : " . $this->getInfo() . " - {$this->jumlahHalaman} Halaman.";
        return $str;
    }
    
}