<!DOCTYPE html>
<html>
<body>

<!-- Aturan untuk penulisan variabel PHP adalah:

    Dimulai dengan tanda $, kemudian diikuti dengan nama variabel.
    Penulisan nama variabel harus dimulai dengan huruf atau karakter garis bawah.
    Tidak boleh dimulai dengan angka.
    Hanya boleh berisi karakter alfanumerik dan garis bawah (A-z, 0-9, dan _ ).
    Peka terhadap huruf besar-kecil ($age dan $AGE adalah dua variabel yang berbeda) -->

<!-- Penulisan variabel -->
    <?php
$txt = "Hasil Dari 5 + 10";
$x = 5;
$y = 10;
echo $txt . " " . "adalah" . " " . $x + $y;
echo "<br>"
?>

<!-- Type Data -->
<!-- PHP memiliki beberapa jenis tipe data, beberapa diantaranya adalah string, integer, float, boolean, array, object, NULL, dan Resource. -->

<?php
$string = "Pemrograman PHP";
$integer = 300000;
$float /* double/desimal */ = 3.14;
echo "<br>"
?>

<!-- $boolean -->
<?php
	$x = true;
	$y = false;
	
	echo $x; //Hasil: 1
	echo "<br>";
	echo $y; //Tidak ada hasil yang ditampilkan
    echo "<br>"
?>

<!-- $array -->
<?php
  // membuat array
  $tas = array('Pulpen','Buku Tulis','Penggaris');

  // menampilkan isi array
  echo $tas[0]."<br>";
  echo $tas[1]."<br>";
  echo $tas[2]."<br>";
?>

<!-- $object -->
<?php
  class Sapa
  {
    var $str;  
  }

  // membuat object pesan. ini disebut instansiasi
  $pesan = new Sapa();
  
  //memberikan nilai utk properti str pada objek pesan
  $pesan->str="Hello Wordl!"; 

  // mencetak nilainya (pengolahan data)
  echo $pesan->str; 
?>
<?php
  class Sapa1{
   var $str ;

   public function tampung($temp){
    return $this->str=$temp;
   }

   public function cetak(){
    echo $this->str; // mencetak nilainya (pengolahan data)
   }
  }

  // membuat object pesan. ini disebut instansiasi
  $pesan = new Sapa1();

  //memanggil method tampung dan memberikan nilainya
  $pesan->tampung("Hello World!");
  echo "<br>";
  $pesan->cetak(); // memanggil method cetak
  echo "<br>"
?>

<!-- $null -->
<?php
  // x pertama kali diberi nilai 2
  $x = 2;
  if($x >0){
     echo "Bisa dibandingkan karena tidak null";
  }

  // x diberi NULL
  $x = null;
  if($x > 0){
     echo "Tidak bisa dibandingkan karena null";
  }
  echo "<br>";
?>



<!-- Konstanta -->
<?php
define("Sapa3", "Welcome to My World ");
echo Sapa3;
echo "<br>";
?>

<?php
define("Sapa4", "Welcome to My World!");

function myTest() {
  echo Sapa4;
}

myTest();
?>

</body>
</html>