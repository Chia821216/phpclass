<a href="index.html"></a>
<?php
for($i=0;$i<10;$i++){
    echo $i;
    echo "<br>" ;
    echo $i*10;
    echo "<br>" ;
    echo "<hr>";
}
echo "<br>" ;
echo $i;
?>
<h2>while</h2>
<?php
$score=10;
echo "原始成績=" .$score;
while($score<66){
    
    $score=$score+10;
    echo "<br>" ;
    echo $score;
    echo "<br>" ;

}
echo "<hr>";
echo "調整結果=" .$score;
echo "<br>" ;
