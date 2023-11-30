<?php
include_once "db.php";

foreach ($_POST['id'] as $key => $id) {

    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $Title->del($id);
    } else {
        $row = $Title->find($id);
        $row['text'] = $_POST['text'][$key];
        $row['sh'] = ($id == $_POST['sh']) ? 1 : 0;
        $Title->save($row);
    }
}
header("location:index.php");








//     $row = $Title->find($id);
//     //dd($row);
//     $row['text'] = $_POST['text'][$key];
//     //dd($row);
//     $Title->save($row);


// foreach ($_POST['id'] as $id) {
//     $row = $Title->find($id);

    //下面這五行程式碼是原始本的
    // if($id==$_POST['sh']){
    //         $row['sh']=1;
    // }else{
    //     $row['sh']=0;
    // }
    // $row['sh']=($id==$_POST['sh'])?1:0;   //這段式簡化過的程式碼
    // $Title->save($row);
// }



// function dd($array)
// {
//     echo "<pre>";
//     print_r($array);
//     echo "</pre>";
// }


// $Title=new DB('titles');
