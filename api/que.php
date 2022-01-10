<?php include_once "../base.php";

$subject=$_POST['subject'];
// 因為是新增，所以count應該是0
$Que->save(['text'=>$subject,'parent'=>0,'count'=>0]);
// 這邊用parent ，但實務上應該去找問卷名稱比較好(所以問卷名稱不能重複不然找id會出錯)
$parent_id=$Que->math("max","id");
//$parent_id=$Que->find(['text'=>$subject])['id'];

foreach($_POST['options'] as $opt){
    $Que->save(['text'=>$opt,'parent'=>$parent_id,'count'=>0]);
}

to("../back.php?do=que");