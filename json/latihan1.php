<?php 

// $mahasiswa =[
//   [

//     "nama" => "Lathifah Hanum",
//     "nim" => "2217020154",
//     "email" => "hanumlathifah006@gmail.com"

//   ],
//    [

//     "nama" => "Lathifah Hanum",
//     "nim" => "2217020154",
//     "email" => "hanumlathifah006@gmail.com"
//    ]
// ];


$dbh = new PDO('mysql:host=localhost;dbname=bakesbangpol','root','');
$db = $dbh->prepare('SELECT * FROM pengajuans');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>