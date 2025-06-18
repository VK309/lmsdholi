<?php
error_reporting(0);
session_start();
include('smtp/PHPMailerAutoload.php');
$conn = mysqli_connect("localhost", "tajsyxak_lmsdholi", '#TR+eWf#p.3J', 'tajsyxak_lmsdholi');

    //$sessionID =  session_id();
class mainfunctions
{
  public function insertQuery($table, $data)
  {
    global $conn;
    unset($data["submit"]);
    $fields = array_keys($data);
    function realesacpe($d)
    {
      global $conn;
        return htmlspecialchars(mysqli_real_escape_string($conn,$d));

    }
    $val = array_map(
      "realesacpe",
      array_values($data)
    );
    $InsertRows =
      "INSERT INTO $table(" .
      implode(",", $fields) .
      ") VALUES ('" .
      implode("','", $val) .
      "');";
    $run_query = mysqli_query($conn, $InsertRows);
    if ($run_query) {
      return 1;
    } else {
      return 0;
    }
  }
  public function login_function($table, $data)
  {
    global $conn;
    $string= [];
    foreach($data as $key => $val){
      $string[] = $key ."= '".$val."'";
   
    }
    $query = "SELECT * FROM $table WHERE $string[0] AND $string[1]";
    $run_query = mysqli_query($conn, $query);
    $cont_rows = mysqli_num_rows($run_query);
    if ($cont_rows === 1) {
      return 1;
    } else {
      return 0;
    }
  }

  public function get_data($table,$orederby)
  {
    global $conn;
    if($orederby)
      $query = "SELECT * FROM $table ORDER BY id $orederby";
    else
      $query = "SELECT * FROM $table";
    $run_query = mysqli_query($conn, $query);
    $dd = array();
    while ($fetchrow =  mysqli_fetch_assoc($run_query)) {
      array_push($dd, $fetchrow);
    }
    return $dd;
  }

  public function get_data_conditon($table, $where)
  {
    global $conn;
     $query = "SELECT * FROM $table WHERE $where";
    $run_query = mysqli_query($conn, $query);
    $dd = array();
    while ($fetchrow =  mysqli_fetch_assoc($run_query)) {
      $dd[] = $fetchrow;
    }
    return $dd;
  }

  public function get_data_join($table, $join_table, $join_condition,$where){
    global $conn;
     $query = "SELECT * FROM $table INNER JOIN $join_table ON $join_condition WHERE $where";
    $run_query = mysqli_query($conn, $query);
    $dd = array();
    while ($fetchrow =  mysqli_fetch_assoc($run_query)) {
      $dd[] = $fetchrow;
    }
    return $dd;
  }

  public function check_logined($session_data, $url)
  {
    if (!$session_data) {
      header("location:$url");
    }
  }

  public function logout()
  {
    $sessiondes  = session_destroy();
    if ($sessiondes) {
      return 1;
    } else {
      return 0;
    }
  }
  public function custom_query($query)
  {
    global $conn;
    $runQuery = mysqli_query($conn, $query);
    if($runQuery){return 1; }else{ return 0;}
  }

  public function custom_Fetch_query($query)
  {
    global $conn;
    $runQuery = mysqli_query($conn, $query);
    $sudents = array();
    while ($data = mysqli_fetch_assoc($runQuery)) {
      $sudents[] = $data;
    }
    return $sudents;
  }

  public function updateQuery($table, $data, $condition)
  {
    global $conn;
    $set = array();

    foreach ($data as $key => $value) {
      $set[] = $key . ' = ' . "'".htmlspecialchars(mysqli_real_escape_string($conn,$value))."'";
    }
    $sets =  implode(',', $set);
    $query =  "UPDATE $table SET $sets WHERE $condition";
    if (mysqli_query($conn, $query)) {
      return 1;
    } else {
      return 0;
    }
  }

  public function delete($table, $where)
  {
    global $conn;
    $query = "DELETE FROM $table WHERE $where";
    $run_query = mysqli_query($conn, $query);
    if ($run_query) {
      return 1;
    } else {
      return 0;
    }
  }

  public function uploadFile($filepath, $schl_id)
  {
    global $conn;
    $csvFilePath = $filepath;
    $file = fopen($csvFilePath, "r");
    $row = fgetcsv($file);
    $n = 1;
    while ($row = fgetcsv($file)) {
      $stmt = $conn->prepare("INSERT INTO onlinepaper (Category, Question, A, B, C, D, Answer, schl_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("ssssssss",  $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $schl_id);
      $stmt->execute();
      $n++;
    }
  }
  public function exportsample()
  {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=users.csv');
    $output = fopen('php://output', 'w');
    fputcsv($output, ['Category', 'Question', 'A', 'B', 'C', 'D', 'Answer']);
    fputcsv($output, ['add question category',  'add question', 'add option A', 'add option B', 'add option C', 'add option D', 'add Answer']);
    die();
  }
  public function get_message($lesson_id,  $course_id, $student_id){
    $table="messages";
    if($student_id){
     $where = "lesson_id = '$lesson_id' AND course_id = '$course_id' AND student_id = '$student_id'";
    }else{
      $where = "lesson_id = '$lesson_id' AND course_id = '$course_id'";

    }
    $get_messages = $this->get_data_conditon($table,$where); 
    foreach($get_messages as $message){
        ?>
        <div class="<?php echo $message['message_form'];?>">
        <span>
            <?php 
                echo  $message['message'];
            ?>
        </span>
        <?php $status = $message['seen_status']==='0'?"unseen":"seen"?>
        <span class="<?php echo $status; ?>"></span>
        </div> 
        
        <?php
    }
  }
  public function unseen_msg(){
    global $conn;
    $query =  "SELECT * FROM `messages` WHERE `seen_status` = '0' GROUP BY student_id";
    $runquery = mysqli_query($conn,$query);
    $count =  mysqli_num_rows($runquery);
    while ($tem_data = mysqli_fetch_assoc($runquery)){
      $data[] = $tem_data;
    }
    return array("count"=> $count,"data"=>$data);
  }

  public function unseen_msg_by_student($student_id){
    global $conn;
    $query =  "SELECT * FROM `messages` WHERE `seen_status` = '0' AND `student_id` = '$student_id' GROUP BY student_id";
    $runquery = mysqli_query($conn,$query);
    $count =  mysqli_num_rows($runquery);
    while ($tem_data = mysqli_fetch_assoc($runquery)){
      $data[] = $tem_data;
    }
    return array("count"=> $count,"data"=>$data);
  }


}

function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	//$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	//$mail->Host = "gains.arrowsupercloud.com";
    $mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "ptkinfotechpathankot@gmail.com";
	$mail->Password = "tuslyoiavoergamg";
	$mail->SetFrom("info@ptkinfotech.com");
  
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}
