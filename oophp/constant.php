<?php 

// define("NAMA", "Ali Imran Rodja");
// echo NAMA;

// echo "<br>";

// const UMUR = 22;
// echo UMUR


// class Coba {
//     const NAMA = "Ali Imran Rodja";
// }
    
// echo Coba::NAMA;
    
// echo __LINE__;

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;


?>