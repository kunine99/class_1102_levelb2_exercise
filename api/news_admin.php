<?php include_once "../base.php";


// 先判斷id存不存在(雖然一定有存在)
foreach($_POST['id'] as $id){
    
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $News->del($id);
    }else{
        $news=$News->find($id);
        $news['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        $News->save($news);
        
        /* $sh=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        $News->save(['id'=>$id,'sh'=>$sh]); */
    }
}


/*
* 不健議的做法   
// 僅供參考，因為我們前端有做分頁，但這個做法會全部找分頁的資料都run一遍，所以不建議使用
foreach($_POST['del'] as $id){
    $News->del($id);
}
$news=$News->all();
foreach($news as $n){
    // checked box 特性 有勾選才會送出 沒有勾選的不會送出
    // 1顯示   0不顯示
    if(isset($_POST['sh']) && in_array($n['id'],$_POST['sh'])){
        $n['sh']=1;
    }else{
        $n['sh']=0;
    }
    
    // 如果算式很簡單 ，判斷式只有一行，可以改用三元運算是簡化算式
    $n['sh']=(isset($_POST['sh']) && in_array($n['id'],$_POST['sh']))?1:0;
    
    $News->save($n);
}
*/
to("../back.php?do=news");