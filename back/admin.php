<fieldset>
    <legend>帳號管理</legend>
    <!-- 請去api找一隻程式叫做api... -->
    
    <table>
        <tr class="clo">
            <td>帳號</td>
            <td>密碼</td>
            <td>刪除</td>
        </tr>
        <?php
        $Users=$User->all();
        foreach ($users as $key =>$user){

        ?>
        <tr>
            <!-- 用repeat根據文字的長度去重複星星 
                 要知道文字有多長用mb_strlen-->
            <td><?=$user['acc'];?></td>
            <td><?=$user['pw'];?></td>
            <td><?=$user['id'];?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</fieldset>