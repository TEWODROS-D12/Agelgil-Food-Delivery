<?php
include'../../config/db_connection.php';
//include(ABSPATH.'db_connection.php');
function getuserlist(){


    global $conn;
    $query='SELECT * FROM user';
    $queryrun=mysqli_query($conn,$query);


    if ($queryrun){

        if (mysqli_num_rows($queryrun)>0){

            $responce=mysqli_fetch_all($queryrun,MYSQLI_ASSOC);

            $data=[
                'status'=>200 ,
                'message'=>'user fetched successfully',
                'data'=>$responce
       
                ];
                header('HTTP/1.0 200 fetched successfully ');
                return json_encode($data);

        }else{

            $data=[
                'status'=>404 ,
                'message'=>'no user found',
       
                ];
                header('HTTP/1.0 404 no user found ');
                return json_encode($data);
        }

    }
    else{
        $data=[
            'status'=>500 ,
            'message'=>'server error',
   
            ];
            header('HTTP/1.0 500 server error ');
            echo json_encode($data);
   
    }

}

?>