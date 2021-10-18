<?php

$frutas1 = array("limon", "naranja", "banana", "manzana");
echo "</br>Resultado sort: </br>";
print_r($frutas1);
sort($frutas1);
echo "</br>";
print_r($frutas1);
echo "</br>-----------------------------------------------";
$frutas1 = array("limon", "naranja", "banana", "manzana");
echo "</br>Resultado rsort: </br>";
print_r($frutas1);
rsort($frutas1);
echo "</br>";
print_r($frutas1);
echo "</br>-----------------------------------------------";
$frutas2 = array("d" => "limon", "a" => "naranja", "b" => "banana", "c" => "manzana");
echo "</br>Resultado asort: </br>";
print_r($frutas2);
asort($frutas2);
echo "</br>";
print_r($frutas2);
echo "</br>-----------------------------------------------";
$frutas2 = array("d" => "limon", "a" => "naranja", "b" => "banana", "c" => "manzana");
echo "</br>Resultado arsort: </br>";
print_r($frutas2);
arsort($frutas2);
echo "</br>";
print_r($frutas2);
echo "</br>-----------------------------------------------";
$frutas2 = array("d" => "limon", "a" => "naranja", "b" => "banana", "c" => "manzana");
echo "</br>Resultado ksort: </br>";
print_r($frutas2);
ksort($frutas2);
echo "</br>";
print_r($frutas2);
echo "</br>-----------------------------------------------";
$frutas2 = array("d" => "limon", "a" => "naranja", "b" => "banana", "c" => "manzana");
echo "</br>Resultado krsort: </br>";
print_r($frutas2);
krsort($frutas2);
echo "</br>";
print_r($frutas2);
echo "</br>-----------------------------------------------";
$ficheros = array("img12.png", "img10.png", "img2.png", "img1.png");
echo "</br>Resultado natsort: </br>";
print_r($ficheros);
natsort($ficheros);
echo "</br>";
print_r($ficheros);

function cmp1($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

echo "</br>-----------------------------------------------";
$arr1 = array(3, 2, 5, 6, 1);
echo "</br>Resultado usort: </br>";
print_r($arr1);
usort($arr1, "cmp1");
echo "</br>";
print_r($arr1);
echo "</br>-----------------------------------------------";
$arr2 = array(3, 2, 5, 6, 1);
echo "</br>Resultado uasort: </br>";
print_r($arr2);
uasort($arr2, "cmp1");
echo "</br>";
print_r($arr2);
echo "</br>-----------------------------------------------";
$arr2 = array(3, 2, 5, 6, 1);
echo "</br>Resultado uasort: </br>";
print_r($arr2);
uasort($arr2, "cmp1");
echo "</br>";
print_r($arr2);

function cmp2($a, $b) {
    $a = preg_replace('@^(a|an|the) @', '', $a);
    $b = preg_replace('@^(a|an|the) @', '', $b);
    return strcasecmp($a, $b);
}
echo "</br>-----------------------------------------------";
$arr3 = array("John" => 1, "the Earth" => 2, "an apple" => 3, "a banana" => 4);
echo "</br>Resultado ukasort: </br>";
print_r($arr3);
uksort($arr3, "cmp2");
echo "</br>";
print_r($arr3);
