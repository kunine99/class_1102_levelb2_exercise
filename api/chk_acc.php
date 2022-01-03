<?php include_once "../base.php"; 


$acc=$_POST['acc'];

$chk=$User->math('count','*',['acc'=>$acc]);

if($chk>0){
    echo 1;
}else{
    echo 0;
}

















//如果不會有echo這件事情，可以不用加結尾這個
?>