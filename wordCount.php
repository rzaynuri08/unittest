<?php
class wordCount{
    public function countWords($sentence){
        // Fungsi explode adalah untuk memecahkan value menjadi sebuah Array
        // Fungsi count adalah menghitung panjangnya Array
        return count(explode(" ", $sentence));
        // Funsi return digunakan untuk mengembalikan jumlah elemen / panjang array yang didapatkan dari variable $sentence
    }
}
?>