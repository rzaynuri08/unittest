<?php
// Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang akan di test
require_once  "wordCount.php";

// Class yg diperuntukkan untuk run Testing
class SimpleTest extends TestCase{
    public function testCountWords(){
        // Inisialisasi class yang akan mau di test
        $Wc = new WordCount();

        // value yang akan mau di test
        $TestSentence = "My Name is Joko"; // Karena ada 4 kata seharusnya value yg ditetapkan harus juga 4
        $WordCount = $Wc->countWords($TestSentence); // Membuat variabel $WordCount untuk menyimpan jumlah kata dalam sebuah kalimat

        // Fungsi dari assertEqual adalah untuk membandikan nilai value yg ditetapkan dengan value yang diisi oleh kita pada variable $WordCount 
        $this->assertEquals(4, $WordCount);
    }
}
?>