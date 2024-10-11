<?php 
#1.1

printnumberlesson(1.1);

$chislo = mt_rand(-100, 100);

echo $chislo;


if ($chislo > 0) {
    echo " ==> ПОЛОЖИТЕЛЬНОЕ ЧИСЛО";
} else {
    echo " ==> ОТРИЦАТЕЛЬНОЕ ЧИСЛО";
}

#1.2

echo "<br>";
printnumberlesson(1.2);

$stroka = "ZALUPA";

echo "Длинна строки $stroka ==> ";
echo mb_strlen($stroka);

#1.3
echo "<br>";
printnumberlesson(1.3);

$stroka = "АЙ НИД МОР БУЛЛИТC";
$last = strlen($stroka) - 1;

echo "Последний символ $stroka, это ";
echo $stroka[$last];

#1.4
echo "<br>";
printnumberlesson(1.4);

$num = mt_rand(1,100);

if ($num % 2 == 0) {
    echo "Число $num чётное";
} else {
    echo "Число $num не четное ";
};

#1.5
echo "<br>";
printnumberlesson(1.5);

#$dbh = new PDO("mysql:host=localhost;dbname=words;charset=utf8","root", "");

#$sel = "select * from names";

#$exc = $dbh->prepare($sel);                              (крч опять траблы какие-то пока забудем про базу данных)
#$exc->execute();
#$names = $exc->fetchAll();

#print_r($exc->fetchAll());

$ah = "Ahmed";
$an = "Andrey";

$ahm = $ah[0];
$and = $an[0];

if ($ahm == $and){
    echo "Первая буква $ah ==> $ahm совпадает с первой буквой $an ==> $and";
} else{
    echo "Первая буква $ah ==> $ahm  НЕ совпадает с первой буквой $an ==> $and ";
};

#1.6
echo "<br>";
printnumberlesson(1.6);

$word = "зеленый слониKb";                               #заменил на английские буквы, чтоб выводило
$lst = strlen($word) -1;
$tls = strlen($word) -2; 
if ($lst == "b"){
    $lst = $tls; 
} else{
    echo $word[$lst];
};                                                       #очень по тупому ес честно) но я прост тороплюсь

#--Уровень 1.2--#
#1.1
echo "<br>";
printnumberlesson(1.1);

$int = mt_rand(0,100);
$var = substr($int, 0,1);
echo "Первая цифра числа $int ==> $var";

#1.2
echo "<br>";
printnumberlesson(1.2);

$intt = mt_rand(0,100);
$varr = substr($intt, 1,1.5);
echo "Последняя цифра числа $intt ==> $varr";                #наебал систему поставил полторашку и все воркает

#1.3
echo "<br>";
printnumberlesson(1.3);

$rand = mt_rand(10,99);                            #с этого момента пояснений на выводе не будет, идите нахуй времени нет
$rar = substr($rand, 1,1.5);
$lastc = mt_rand(10,99);
$varrr = substr($rand, 0,1);
$summa = ($rar + $varrr);
echo "$rand || ";
echo "$varrr + $rar ==> ";
echo $summa;

#1.4
echo "<br>";
printnumberlesson(1.4);

$nums = "1337";
$count = strlen($nums);
echo "$nums || $count";

#1.5
echo "<br>";
printnumberlesson(1.5);

$pervoe = 1337;
$vtoroe = 228;
echo ["НЕ совпадает", "Совпадает"][((string)(abs($pervoe)))[0] === ((string)(abs($vtoroe)))[0]];            #списал(

#--Уровень 1.3--#
#1.1
echo "<br>";
printnumberlesson(1.1);

$str = "САЛАМАЛЕКСyC";
$leng = strlen($str);
$y = $str[-2];

if ($leng > 1){
    echo $y;
} else{
    echo $str;
};

#1.2
echo "<br>";
printnumberlesson(1.2);

$a = 1488;
$b = 666;
$sum = $a % $b;

if ($a % $b == 0){
    echo "Делится";
} else{
    echo "НЕ делится";
};

#--Уровень 1.4--#
#1.1
echo "<br>";
printnumberlesson(1.1);

$a = 1;
$b = 0;
$step = 0;
while ($a <= 100){
    echo($a);
    $a++;
    if($b >= $step){
        $step++;
        $b = 0;
        echo("\n");
    } else {
        $b++;
        echo " ";
    };
};

#1.2
echo "<br>";
printnumberlesson(1.2);

$a = -100;
$b = 0;
$step = 0;
while ($a <= 0){
    echo($a);
    $a++;
    if($b >= $step){
        $step++;
        $b = 0;
        echo("\n");
    } else {
        $b++;
        echo " ";
    };
};

#1.3
echo "<br>";
printnumberlesson(1.3);

for ($i=100; $i>=0; $i--)
    if ($i%1==0) {
        echo $i; 
        echo " ";
        };


#1.4
echo "<br>";
printnumberlesson(1.4);




function printnumberlesson($number) {
    echo "<br>";
    echo $number;
    echo "<br>";
}