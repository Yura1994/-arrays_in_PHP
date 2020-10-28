<?php
echo "<br> №1 <br>";
$arr = ['a','b','c'];
var_dump($arr);

echo "<br><br> №2 <br>";

echo "<br>1- ".$arr[0]."<br>2- ".$arr[1]."<br>3- ".$arr[2];

echo "<br><br> №3 <br>";

$arra = ['a','b','c','d'];
echo "<br>".$arra[0]."+".$arra[1]."<br>".$arra[2]."+".$arra[3];

echo "<br><br> №4 <br>";

$arc = [2,5,3,9];

$result = (($arc[0]*$arc[1])+($arc[2]*$arc[3]));
echo "($arc[0]*$arc[1])+($arc[2]*$arc[3]) = ".$result;

echo "<br><br> №5 <br>";

$arr_ch[]=1;
$arr_ch[]=2;
$arr_ch[]=3;
$arr_ch[]=4;
$arr_ch[]=5;

var_dump($arr_ch);



echo "<br><br> №6 <br>";

$arr_k = ['a'=>1, 'b'=>2, 'c'=>3];
//var_dump($arr_k);
$keys = array_keys($arr_k);
echo "Key ".$keys[2]." = ". $arr_k['c'];


echo "<br><br> №7 <br>";

$arr_s = ['a'=>1, 'b'=>2, 'c'=>3];
$keyss = array_keys($arr_s);
for ($i=0; $i<count($keyss); $i++){
    $sum += $arr_s[$keyss[$i]];
}
echo  $keyss[0]." + ".$keyss[1]." + ".$keyss[2]." = ".$sum;


echo "<br><br> №8 <br>";

$arr_zp = ['Коля'=>'1000$','Вася'=>'500$','Петя'=>'200$'];

$keys_zp = array_keys($arr_zp);

echo "Зарплатаы: <br> $keys_zp[0] = ".$arr_zp['Коля']."<br> $keys_zp[2] = ".$arr_zp['Петя'];

echo "<br><br> №9 <br>";
$arr_d = [1=>'Пн', 2=>'Вт', 3=>'Ср', 4=>'Чт', 5=>'Пт', 6=>'Сб', 7=>'Вс'];
echo $arr_d[4].'<br>';

echo "<br><br> №10 <br>";
$day=3;
echo $arr_d[$day].'<br>';

?>