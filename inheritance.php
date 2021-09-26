<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;

    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $jmlHalaman = 0,
        $waktuMain = 0
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik  : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";

        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game  : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";

        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";

        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 33000, 99, 0);
$produk2 = new Game("Detroit Become Human", "Quantic Dream", "Sony Interactive", 44000, 0, 69);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

 // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 33000) - 99 Halaman.
 // Game : Detroit Become Human | Quantic Dream, Sony Interactive (Rp. 44000) - 69 Jam.
