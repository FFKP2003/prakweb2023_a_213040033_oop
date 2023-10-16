<?php  

// Nilai nya tidak dapat berubah sampe program selesai
// ada dua penggunaan di dalam constant 
// yang pertama bisa memakai define tetapi tidak bisa digunakan didalam kelas 
// yang kedua bisa memakai const bisa digunakan di dalam kelas  

// define('NAMA', 'Hiiqaff');
// echo NAMA;

// echo "<br>";

// const UMUR = 21;
// echo UMUR;

// class Coba {
//     const NAMA = 'Hiiqaff';

// }

// echo Coba::NAMA;

// echo __FILE__;

// function Coba() {
//     return __FUNCTION__;

// }

// echo Coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;