<?php 
 require_once("functions.php");
$mainfunc = new mainfunctions;
$action =  $_POST['action'];
if($action == "send_message"){ 
  unset($_POST['action']);
  $data = $_POST;
  $table="messages";
   if($_POST['message'] !== ""){
    if($mainfunc->insertQuery($table,$data)){
      $student_id = ""; 
      $lesson_id = $_POST['lesson_id'];
      $course_id = $_POST['course_id'];
      $mainfunc->get_message($lesson_id,$course_id,$student_id);
     }
   }
}


if($action == "assign" || $action == "not_assign"){
   $status = $_POST['action'];
   $data = $_POST;
   unset($data['action']);
   $data['status'] =   $status;
   $table = "assign_student";
   $where = "lesson_id='".$data['lesson_id']."' AND student_id ='".$data['student_id']."'";
   $return = $mainfunc->get_data_conditon($table, $where);
   if(count($return) == 0){
      $mainfunc->insertQuery($table,$data);
   }else{
      $mainfunc->updateQuery($table, $data, $where);
   }

}
if($action == "update_seen_status"){
  $student_id = $_POST['student_id'];
   unset($data['action']);
   $table = "messages";
   $data = array('seen_status'=>'1');
   $condition = "student_id= '$student_id '";
   $mainfunc->updateQuery($table, $data, $condition);

}
  


?>