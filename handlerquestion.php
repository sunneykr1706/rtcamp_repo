
<?php 
include ("connect.php");
//echo $emaila;
 header("Access-Control-Allow-Origin: *");
  $curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://6cb2bbc9414ed837d085f0c5ac809700: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@winesubscribe12.myshopify.com/admin/api/2021-10/products.json",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	//CURLOPT_POSTFIELDS => "shopName=%3Ewinesubscribe12%3E&accessToken=%3E6cb2bbc9414ed837d085f0c5ac809700%3E",
	CURLOPT_HTTPHEADER => [
		"content-type: application/x-www-form-urlencoded",
		"x-rapidapi-host: https://winesubscribe12.myshopify.com/admin/api/2021-10/products.json",
		"x-rapidapi-key: 6cb2bbc9414ed837d085f0c5ac809700"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	//echo "fdf";
	//$json_data = file_get_contents($response);
	$txet=json_decode($response,true);
	//echo $txet['products'][0]['tags'];
	//$characters = json_decode($response); 
	//echo $response;
   //echo "csac";
   //$emaila=$_POST["queryone"].", ".$_POST["querytwo"].", ".$_POST["querythree"].", ".$_POST["queryfour"].", ".$_POST["queryfive"].", ".$_POST["querysix"].", ".$_POST["queryseven"];
   //echo $emaila;
   //$car[]=array(7);
   //echo $_POST["querytwo"];

  $df=" ".$_POST["queryone"]." ";
  $df1=$_POST["querytwo"];
  $df2=$_POST["querythree"];
   $car=array($df,$df1,$df2,$_POST["queryfour"],$_POST["queryfive"],$_POST["querysix"],$_POST["queryseven"]);
   //$emailaa=$_POST["queryseven"];
  
   //echo $car[0];
   sort($car);
   //echo $car[1];
   $cnt=0;
  $emaila=$car[0].",".$car[1].",".$car[2].",".$car[3].",".$car[4].",".$car[5].",".$car[6];
  echo $emaila;
   //echo"123213";
  // echo "</br>";
  // echo $txet['products'][0]['tags'];
   //echo "</br>";
 // echo strlen($emaila);
 // echo strlen($txet['products'][0]['tags']);
  //$car[]=array(10);
  $StrRepLast[]=array(7);
  $i=0;
  for($i=0;$i<7;$i++)
  {
      $StrRepLast[$i]=substr($car[$i], 1, -1);
  }
  
   $emaila=$StrRepLast[0].", ".$StrRepLast[1].", ".$StrRepLast[2].", ".$StrRepLast[3].", ".$StrRepLast[4].", ".$StrRepLast[5].", ".$StrRepLast[6];
echo $emaila;
    $k=0;
    ////
 
    while($k<9)
	{
        if( $txet['products'][$k]['tags'] == $emaila);
             {
                 echo "Product is ".$k."selected choices are".$emaila;
             }
        $k++;
    }
}
?>