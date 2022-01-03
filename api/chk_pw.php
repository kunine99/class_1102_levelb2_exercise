<?php include_once "../base.php"; 


$acc=$_POST['acc'];
$pw=$_POST['pw'];

$chk=$User->math('count','*',['acc'=>$acc,'pw'=>$pw]);

// echo ($chk>0)?1:0;    三元運算寫法

if($chk>0){
    // $_SESSION['login']=$_POST['acc'];
    echo 1;
    $_SESSION['login']=$acc;
}else{
    echo 0;
}

















//如果不會有echo這件事情，可以不用加結尾這個
?>