<?php include_once "../base.php"; 



$email=$_POST['email'];
$user=$User->find(['email'=>$email]);

if(empty($user)){
    echo "查無此資料";
}else{
    echo "您的密碼為".$user['pw'];
}
















//如果不會有echo這件事情，可以不用加結尾這個
?>