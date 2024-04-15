<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>畫星星</title>
    <style>
        *{
            font-family:'courier new', Courier , monosoace;
        }
    </style>
</head>
<body>
<h2>以 * 符號為基礎在網頁上排列出下列圖形</h2>
<h4>直角三角形</h4>
<?php
$stars=7;

for($i=0 ; $i<=$stars ; $i++){
    for($j=0 ; $j<$i ; $j++){
        echo "*";
    }
    echo '<br>';
}
?>
<h4>倒直角三角形</h4>
<?php
for($i=$stars; $i>0 ; $i--){
    
    for($j=0 ;$j<$i ;$j++){
    echo "*";
    }
    echo '<br>';
}
?>
<h4>正三角形</h4>
<?php

for($i=0 ; $i<$stars ; $i++){ 
    for($k=0 ; $k<=$stars-1-$i ; $k++){
    echo "&nbsp";
    }
    for($j=0 ;$j<$i*2+1 ;$j++){
        echo "*";
    }
    echo '<br>';
}
?>







<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>