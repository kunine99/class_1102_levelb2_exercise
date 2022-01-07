<!-- clone 預設是把文字複製出來，+標籤會連屬性一起複製? -->
<!-- innertext innerhtml 另一種複製作法??-->

<div>目前位置：首頁 > 分類網誌 > <span id="navTag">健康新知</span></div>
<div style="display:flex">
    <fieldset style="width:20%">
        <legend>分類項目</legend>
      <a><p class="tag" data-page="1">健康新知</p></a>
      <a><p class="tag" data-page="2">菸害防治</p></a>
      <a><p class="tag" data-page="3">癌症防治</p></a>
      <a><p class="tag" data-page="4">慢性病防治</p></a>
    </fieldset>
    <fieldset style="width:70%">
        <legend>文章列表</legend>
        <!-- 如果列表顯示，新聞內容就隱藏 -->
        <!-- 如果新聞內容顯示，列表就隱藏 -->
        <div id="newslist"></div>
        <div id="news" style="display:none"></div>
    </fieldset>
</div>


<script>
    getlist(1)
    // 按下按鍵後會把文字改掉然後執行getlist
    $(".tag").on('click',function(){
        let navtag=$(this).text()
        $("#navTag").text(navtag)
        let type=$(this).data('type')
        getlist(type)
    });

// 顯示文字完後會想拿到文章內容
function getlistt(type){
    // 我會把type傳給你，把list回傳給我
    $.get("api/getlist.php",{type},(list)=>{
        $("#newslist").html(list)
        $("#newslist").show()
        $("#news").hide();
    })
}
function getnews(id){
    $.get("api/getnews.php",{id},(news)=>{
        $("#news").html(news)
        $("#news").show()
        $("#newslist").hide()
    })
}

</script>