<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "ABC";

?>
<div>
    $a=10;<br>
    $b=50;<br>
</div>
<h4>a.b.交換後</h4>
<?php
$a=10;
$b=50;
echo '$a=' . $a ;
echo "<br>" ;
echo '$b=' . $b ;

echo "<hr>";
$score=30;
$level=($score>=60)?'及格':'不及格';
echo "成績為:".$score;
echo "<br>" ;
echo "是否及格:" . $level ;
echo "<hr>";

?>
<?php
$clothprice=100;
$pantsprice=150;
if($clothprice>=$pantsprice){
    echo '衣服價錢:' .$clothprice ;
    echo "<br>" ;
    echo '褲子價錢:' .$pantsprice ;
    echo "<br>" ;
}
else{
    $clothprice++ ;
    echo '衣服價錢:' .$clothprice;
}

?>
</body>
</html>