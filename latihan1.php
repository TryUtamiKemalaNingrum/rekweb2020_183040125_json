<?php

//latihan 1
$mahasiswa = [
    [
        "nama" => "Sandhika Galih",
        "nrp" => "040340023",
        "email" => "sandhikagalih@unpas.ac.id",
    ], 
    [
        //latihan 2
        "nama" => "Erik Doank",
        "nrp" => "023040001",
        "email" => "erik@gmail.com" 
    ]
];
    
$data = json_encode($mahasiswa);
echo $data;

?>