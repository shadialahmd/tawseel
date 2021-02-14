

<?php

// $someArray = [
//   [
//     "name"   => "Jonathan Suh",
//     "gender" => "male"
//   ],
//   [
//     "name"   => "William Philbin",
//     "gender" => "male"
//   ],
//   [
//     "name"   => "Allison McKinnery",
//     "gender" => "female"
//   ]
// ];


// print_r($someArray);


// echo "<br>";

// $someJSON = json_encode($someArray);
// echo $someJSON;


// echo "<br>";
// echo "<br>";

// $someArray2 = json_decode($someJSON, true);
// print_r($someArray2[0]["name"]);  


// echo "<br>";
// echo "<br>";

// $someArray3 = json_decode($someJSON);
// print_r($someArray3[0]->name); 


header("Content-type:application/json");

$url="192.168.1.38/tawseel/api/read.php";

$curl=curl_init();

curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL,$url);

//print json
$result=curl_exec($curl);

echo $result;

//print array or object
$arr=json_decode($result,true);

print_r($arr);




// header("Content-type:application/json");
// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "192.168.1.38/tawseel/api/read.php",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;


?>
