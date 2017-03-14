<?php
$json_data=file_get_contents("datamhs.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->nim;
echo "<br>";
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "Nomer HP : "; echo $obj->nomer_hp;
echo "<br>";
echo "Matakuliah Pertama: ";echo $obj->matakuliah[0];
echo "<br>";
echo "Matakuliah Kedua: ";echo $obj->matakuliah[1];
echo "<br>";
echo "Matakuliah Ketiga:";echo $obj->matakuliah[2];
echo "<br>";
echo "Matakuliah Keempat:";echo $obj->matakuliah[3];
echo "<br>";
echo "Matakuliah Kelima:";echo $obj->matakuliah[4];
echo "<br>";
?>