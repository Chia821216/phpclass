<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構0415</title>
    <style>
        /* border-collapse: collapse;表格邊框合併在一起 */
        table{
            border-collapse: collapse;
            width: 80%;
        }
        tr , td {
            border: 2px dashed darkblue;
            text-align:left;
            background-color: lightblue;
        }
        #nine9 tr:nth-child(1) td,
        #nine9 td:nth-child(1){
            background-color: gray;
            color:#CCC;
        }
    </style>
</head>
<body>
    <a href="index.html">回首頁</a>
    
    
    <h2>九九乘法表-簡單版</h2>
<table>
    <?php
    // 九九乘法表有兩個1~9的變數，所以用兩個迴圈寫
    for($i=1 ; $i<=9 ; $i++){
        echo '<tr>';
        for($j=1 ; $j<=9 ;$j++){
            $k=$i*$j;
        echo  "<td>" .$j. 'x'  .$i. '='  .$k. "</td>";
        // echo '<br>';
        }    
        echo '</tr>';
    }
    ?>
</table>

    <h2>九九乘法表-精緻版</h2>

    <?php
    echo "<table id='nine9'>";
        
        for($i=0 ; $i<=9 ; $i++){
        echo "<tr>" ;
            for($j=0 ; $j<=9 ; $j++){
                echo "<td>" ;
                if($i == 0  && $j == 0){
                    echo  " " ;
                }else if($j == 0 ){
                    echo  $i ;
                }else if($i == 0){     
                    echo $j;
                }else{
                    echo ($j*$i);
                }
            }
                echo "</td>" ;
        echo "</tr>" ;
        }
        
        
    echo "</table>";
    
    ?>











<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>