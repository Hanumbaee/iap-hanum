<?php 

// $mahasiswa =[
//   [

//     "nama" => "Riri Febriani",
//     "nim" => "2217020047",
//     "email" => "ririfeb22@gmail.com"

//   ],
//    [

//     "nama" => "Riri Febriani",
//     "nim" => "2217020047",
//     "email" => "ririfeb22@gmail.com"
//    ]
// ];


$dbh = new PDO('mysql:host=localhost;dbname=kopma','root','');
$db = $dbh->prepare('SELECT * FROM berita');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>