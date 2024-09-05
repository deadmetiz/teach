<?php
use Illuminate\Support\Facades\DB;
$arr = Array();
$arr['userid'] = $_POST['userid'];
$arr['result'] = $_POST['result'];
$arr['course'] = $_POST['course'];
DB::table('users')->get();
echo json_encode($arr);

?>
