<!-- 投票結果  從front/vote.php複製來的 -->
<!-- 遇到算比例的東西 要注意分母是不是0 -->
<?php
$subject=$Que->find($_GET['id']);
?>
<fieldset>
    <legend>目前位置：首頁>問卷調查><?=$subject['text'];?></legend>
    <h3><?=$subject['text'];?></h3>
    
        <?php

// 這兩個都是一樣的意思，都是我主題的選項內容
//$options=$Que->all(['parent'=>$subject['id']])
$options=$Que->all(['parent'=>$_GET['id']]);
foreach($options as $key => $opt){
    $div=($subject['count']==0)?1:$subject['count'];
    $rate=round($opt['count']/$div,2);
    ?>
    <!-- 把p標籤改成div，因為p標籤不能彈性使用 -->
    <div style="display:flex;margin:15px 0">
        <div style="width:40%"><?=($key+1).".".$opt['text'];?></div>
        <div style="height:25px;background:#ccc;width:<?=40*$rate;?>%"></div>
        <div><?=$opt['count'];?>票(<?=$rate*100;?>%)</div>
    </div>
  

    
    <?php
    }
    ?>
    <div class="ct">
    <button onclick="location.href='?do=que'">返回</button>
    </div>


</fieldset>
