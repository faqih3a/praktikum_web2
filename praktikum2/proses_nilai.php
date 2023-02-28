<?php 
$nama = $_GET['name'];
$matkul = $_GET['matkul'];
$UTS = $_GET['UTS'];
$UAS = $_GET['UAS'];
$TUGAS = $_GET['Tugas'];
$total_nilai = ($TUGAS + $UTS + $UAS) / 3;

if($total_nilai > 75){
    $keterangan = "LULUS";
}
else{
    $keterangan = "Tidak LULUS";
}


?>