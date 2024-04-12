<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習</title>
</head>
<body>
    <a href="index.html">回首頁</a>
    <h3>給定一個成績數字，判斷是否及格</h3>
    <?php
    $score=70;
    echo $score;
    echo "<br>";

    $result='';
    if($score>=60){
        $result="及格";
    }
    else{
        $resule="不及格";
    }
    echo "判斷為".$result;
   
    ?>
    
    <h2>分配成績等級</h2>
    <h3>根據成績所在的區間，給定等級</h3>
    <ul>
        <li>0 ~ 59 => E</li>
        <li>60 ~ 69 => D</li>
        <li>70 ~ 79 => C</li>
        <li>80 ~ 89 => B</li>
        <li>90 ~ 100 => A</li>
    </ul>
    
    <?php
    $score=55;
    $level='';
    // if($score>=0 && $score<=59){
    //     $level="E";
    // }else if($score>=60 && $score<=69){
    //     $level="D";
    // }else if($score>=70 && $score<=79){
    //     $level="C";
    // }else if($score>=80 && $score<=89){
    //     $level="B";
    // }else if($score>=90 && $score<=100){
    //     $level="A";
    // }else{
    //     $level='成績必須在0~100之間請重新輸入';
    // }
    // 條件需要順序姓，就像篩網
    if($score>=0 && $score<=59){
        $level="E";
    }else if($score<=69){
        $level="D";
    }else if($score<=79){
        $level="C";
    }else if($score<=89){
        $level="B";
    }else if($score<=100){
        $level="A";
    }else{
        $level='成績必須在0~100之間請重新輸入';
    }
    echo '成績為:' .$score. '分';
    echo 'level為:' .$level;
    ?>
    <h2>依據學生成績等級給予評價</h2>
    <h3>根據學生不同的成績等級在網頁上印出不同的文字評價</h3>
    <?php
    $word='';
    switch($level){
        case 'A':
            $word="很棒";
            $color='green';
            break;
        case 'B':
            $word="很厲害";
            $color='lightgreen';
            break;
         case 'C':
             $word="再加油";
             $color='pink';
             break;
        case 'D':
            $word="不太好";
            $color='red';
            break;
        case 'E':
            $word="笑死";
            $color='darkred';
            break;
            default;
        
    }
    // echo "<br>";
    // if ($level=='A' || $level=='B' || $level=='C' || $level=='D'){
    // echo "<span style='font-size:32px;color:green'>";

    // }else{
    //     echo "<span style='font-size:32px;color:red'>";
    // }
    echo "<span style='font-size:32px;color:$color'>";
    
    echo $word;
    echo "</span>";

    ?>
</body>
</html>