<?php
class Kutuphane
{
    public $kitaplar;
    public $dergiler;

    public function okuma($kitaplar, $dergiler)
    {
        $this->Kitap_Bölümü = $kitaplar;
        $this->Dergi_Bölümü = $dergiler;
    }

    public function Kategori()
    {
        echo '1. Kategori: ' . $this->kitaplar .'<br>'.'2. Kategori: ' . $this->dergiler .'<hr>';
    }
}

class Kitap extends Kutuphane
{
    public $isim;
    public $yazar;
    public $sayfa;

    public function kaydet($isim, $yazar, $sayfa)
    {
        $this->isim = $isim;
        $this->yazar = $yazar;
        $this->sayfa = $sayfa;
    }

    public function etiketYazdir()
    {
        echo 'Kitap adı: ' . $this->isim . '<br>'. 'Yazar: ' . $this->yazar . '<br>'. 'Sayfa: ' . $this->sayfa . '<hr>';
    }
}

$kitap1 = new Kitap();
$kitap2 = new Kitap();
$kitap3 = new Kitap();

$kitap1->kaydet('Geri Sayım', 'Elizabeth Norris', 496);
$kitap2->kaydet('Harry Potter ve Ölüm Yadigarları', 'J. K. Rowling', 690);
$kitap3->kaydet('Kehanetin Çağrısı', 'Denise Grover Swank', 428);

$kitap1->etiketYazdir();
$kitap2->etiketYazdir();
$kitap3->etiketYazdir();

class Dergi extends Kutuphane
{
    public $isim;
    public $konu;
    public $sayfa;

    public function kaydet($isim, $konu, $sayfa)
    {
        $this->isim = $isim;
        $this->konu = $konu;
        $this->sayfa = $sayfa;
    }

    public function etiketYazdir()
    {
        echo 'Dergi adı: ' . $this->isim . '<br>'. 'Konusu: ' . $this->konu . '<br>'. 'Sayfa sayısı: ' . $this->sayfa . '<hr>';
    }
}

$dergi1 = new Dergi();
$dergi2 = new Dergi();
$dergi3 = new Dergi();

$dergi1->kaydet('Kafkaokur', 'Eğlence/Felsefe', 65);
$dergi2->kaydet('Bilim Teknik', 'Bilim', 100);
$dergi3->kaydet('OT', 'Edebiyat', 84);

$dergi1->etiketYazdir();
$dergi2->etiketYazdir();
$dergi3->etiketYazdir();

?>