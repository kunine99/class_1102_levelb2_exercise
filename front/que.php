<fieldset>
    <legend>目前位置：首頁>問卷調查</legend>
    <table class='tab'>
        <tr>
            <td width="10%">編號</td>
            <td width="50%">問卷題目</td>
            <td width="15%">投票總數</td>
            <td width="10%">結果</td>
            <td>狀態</td>
        </tr>
        <?php
    $ques=$Que->all(['parent'=>0]);
    foreach($ques as $key => $que){
        ?>
    <tr>
        <td><?=$key+1;?></td>
        <td><?=$que['text'];?></td>
        <td><?=$que['count'];?></td>
        <td>
            <!-- 結果是一個連結，所以是a標籤 -->
            <a href='?do=result&id=<?=$que['id'];?>'>結果</a>
        </td>
        <td>
            <?php
                // 看你有沒有登入
                if(isset($_SESSION['login'])){
                    echo "<a href='?do=vote&id={$que['id']}'>";
                    echo "參與投票";
                    echo "</a>";

                }else{
                    echo "請先登入";
                }
            ?>
        </td>
    </tr>
    <?php
    }
    ?>
</table>



</fieldset>