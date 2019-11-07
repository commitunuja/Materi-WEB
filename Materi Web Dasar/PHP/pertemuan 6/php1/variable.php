<?php 


$nama = "usama";
$angka1 = 10;
$angka2 = 10;

if ($angka1 > $angka2) {
	echo "lebih besar";
} elseif ($angka1 < $angka2) {
	echo "lebih kecil";
} else {
	echo "sama";
}

// $angka1++;
// $angka1++;

// $angka1 /= 5;

// $hasil = $angka1 + $angka2;

// define("nama", "usama");
// echo $angka1;

echo "<br>";

$x = "hijau";

switch ($x) {
	case 'hijau':
		echo "berangkat";
		break;
	case 'merah':
		echo "berhenti";
		break;
	
	default:
		echo "";
		break;
}
// if ($x == "merah") {
// 	echo "Berhenti";
// } else if($x == "kuning"){
// 	echo "Persiapan";
// }else if ($x == "hijau") {
// 	echo "Brangkaaattt";
// }



?>