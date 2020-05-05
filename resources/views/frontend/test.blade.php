<?php
 $a = $_POST['mail'];
 $b = $_POST['password'];

 

 if($a == "kaleeva.zhanbota@mail.ru" and $b == "232773277"){
    header("Location: url {{ route('/view') }}");
 }
 else{
     header("Location: url {{ route('/home') }}");
 }
 ?>