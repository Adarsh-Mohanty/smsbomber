<?php
if(isset($_POST['no']))
{
    $no=$_POST['no'];
    

$post = array("Mobile" => $no);
$string= http_build_query($post);
echo $string;

$ch = curl_init("https://fantasycricket.myteam11.in/Home/GetAppLink");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);


curl_exec($ch);
sleep(3);
curl_close($ch);


//echo "<br>finished";
}
?>