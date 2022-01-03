<fieldset>
    <legend>忘記密碼</legend>
    <div>請輸入信箱以查詢密碼</div>
    <div><input type="text" name="email" id="email"></div>
    <div></div>
    <div><button onclick="find()">尋找</button></div>


</fieldset>
<script>
    function find(){
        $.post("api/find_pw.php",{email:$("#email").val()},(result)=>{
            //不管結果是什麼都給我放在網頁上
            $("#result").text(result)
        })
    }

</script>