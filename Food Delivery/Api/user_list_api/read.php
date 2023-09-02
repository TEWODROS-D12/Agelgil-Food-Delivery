<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Method:GET');
header('Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers,Authorization,X-Request-With');
include('function.php');
 
$requestMethode =$_SERVER['REQUEST_METHOD'];
if($requestMethode == "GET"){
    $userlist=getuserlist();
    echo$userlist;
}
else{
     $data=[
         'status'=>405 ,
         'message'=>$requestMethode.'Method Not Allowed',

         ];
         header('HTTP/1.0 405 Method Not Allowed');

         echo json_encode($data);
}
?>