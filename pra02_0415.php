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
            text-align:center;
            text-size:auto;
        }
    </style>
</head>
<body>
    <a href="index.html">回首頁</a>
    
    
    <h2>九九乘法表-簡單版</h2>
<table>
    <?php
    for($i=1 ; $i<=9 ; $i++){
        echo '<tr>';
        for($j=1 ; $j<=9 ;$j++){
        echo  "<td> $i x  $j =  $i*$j </td>";
        // echo '<br>';
        }    
        echo '</tr>';
    }
    ?>
</table>











</body>
</html>