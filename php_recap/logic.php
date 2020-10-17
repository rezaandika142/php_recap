<?php

$hasil3 = (true xor false);
echo '$hasil3 = ';
echo var_dump($hasil3); // $hasil3 = bool(true) 

var_dump(true && true);
var_dump(true || false);
var_dump(true || true);
var_dump(true xor false);
var_dump(true xor true);
var_dump(true != 'true');
var_dump(true !== 'true');
var_dump(true || (false && false));
var_dump(true && (false || true) || false or (1!='1'));

if(true) {
    echo "He is Budi";
}else {
    echo "He is not Budi";
}

echo (true) ? " Budi father's" : "Not Budi father's \n";

echo PHP_EOL;

for($x=1;$x<=10;$x++) {
    for($y=1;$y<=10;$y++) {
        echo $x."X".$y."=".$x*$y."\n";
    }
}

foreach(range(1, 10) as $num) {
    echo $num.PHP_EOL;
}

$num=0;
while (true) {
    $num=rand(1,10);

    if($num==9) {
        exit("Lucky nine");
    }else {
        echo "Losser, your number is ".$num.PHP_EOL;
    }
}