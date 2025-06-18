<html>
<?php 
   require_once("head.php");
   $session_email = $_SESSION["email"];
   if(empty($session_email)){
     header("location:login.php");
   }
    $page = empty($_REQUEST['page'])?'home':$_REQUEST['page'];
    $mainpath = getcwd();
    $pagepath = $mainpath.'/'.$page.'.php';
    $notfound = $mainpath.'/notfound.php';
    $course_id = $_REQUEST['course-id'];
    $lesson_id = $_REQUEST['lesson-id'];

   //add-lesson    
   if(isset($_POST['addlesson'])){
       unset($_POST['addlesson']);
       $data= $_POST;
       $data["course_id"] = $course_id;
       $table="lessons";
       $mainfunc->insertQuery($table,$data);
   }
   //add lesson_data
   if(isset($_POST['addlesson_data'])){
    unset($_POST['addlesson_data']);
     $table="lessons_data";
     $data = $_POST;
     $file_name = basename($_FILES['video']['name']);
     $tmp_name = $_FILES['video']['tmp_name'];
     //$uploads_dir = dirname(__FILE__);
     $target_dir = "lesson_data/";
     $target_file = $target_dir . basename($file_name);
     $name = "lesson_data";
     $data["video_url"] = $file_name;

     if(move_uploaded_file($tmp_name,$target_file)){
        foreach($data as $val){
            echo mysqli_real_escape_string($conn,$val)."<br>";
        }
         $condition = "Lesson_id='".$_POST['lesson_id']."' AND course_id ='".$_POST['course_id']."'";
         $checkData =  $mainfunc->get_data_conditon($table,$condition)[0];
         if($checkData['id']){
             $mainfunc->updateQuery($table, $data, $condition);
         }else{
            $mainfunc->insertQuery($table,$data);
         }
     }else{
        echo "<script>alert('File is not uploaded and data is not saved')</script>";
     }

     
  
    }

    //register student
    if(isset($_POST['register'])){
        unset($_POST['register']);
        $_POST['password'] =  md5($_POST['password']);
        $table = "registeration";
        $data = $_POST;
        if($_POST['email']){
            $mainfunc->insertQuery($table,$data);
        }else{
             echo "<script>alert('Please add email')</script>";
        }

    }
    //get students for dasdboard page and student page
    $table = "registeration";
    if($_REQUEST['searchByname']){
        $searchedname = $_REQUEST['searchByname'];
        $where = "user_type = '0' AND firstname LIKE '$searchedname%'";
    }else{
        $where = "user_type = '0'";
    }
    
    $students = $mainfunc->get_data_conditon($table, $where);
    //get_courses
    $table = "courses";
    $course = $mainfunc->get_data($table, "");

    //get current user data
    $table = "registeration";
    $where = "email = '$session_email'";
    $current_user = $mainfunc->get_data_conditon($table, $where)[0];
    //sidebar caures data 
    //user_type one means currentuser is supper admin 
    $table = "courses";
    if($current_user['user_type'] === "1"){
        $coursedata = $mainfunc->get_data($table,"desc"); 
    }else{
        $current_course_id = $current_user["course_id"];
        $where  = "id = '$current_course_id'";
        $coursedata = $mainfunc->get_data_conditon($table,$where); 
  
    }
    //check its is a super admin or not
    function check_super_admin($user_type){
        if($user_type !== '1'){
            echo "<script>window.location.href='index.php'</script>";
        }
    }
    //lesson data
    if( !empty($course_id) && !empty($lesson_id)){
        if( $course_id == $current_user["course_id"] || $current_user['user_type'] === "1"){
            $table = "lessons_data";
            $join_table = "lessons";
            $join_condition = $join_table.'.id = '.$table.'.lesson_id';
            $where = $join_table.".id = "."'".$lesson_id."'";
            $lesson_data = $mainfunc->get_data_join($table, $join_table, $join_condition,$where)[0];
        }
    }
    $notification_count =  $mainfunc->unseen_msg();
    if( $notification_count['count'] > 0){?>
        <style>
           .icon-status-info:after{
                background-color: #1ee0ac;
            }
        </style>
        <?php
    }

if($current_user['user_type']==='1'){ ?>
    <style>
    .super_admin {
        text-align: right !important;
    }
    .student {
        text-align: left  !important;
    }
    .seen,.unseen{ display: none; }
    </style>
    <?php
  }else{ ?>
   <style>
    .super_admin {
         text-align: left !important;
    }
    .student {
        text-align: right  !important;
    }
    </style>
<?php }
  
  ?>

<body class="nk-body bg-lighter npc-general has-sidebar no-touch nk-nio-theme">
    <div class="nk-app-root">
        <div class="nk-main">
            <?php 
               require_once("sidebar.php");
            ?>
            <div class="nk-wrap ">
                <?php require_once('left-header.php'); ?>
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                              <?php
                                 if(file_exists($pagepath)){
                                    require($pagepath);
                                 }else{
                                    require($notfound);
                                 }
                              ?>
                            </div>
                        </div>
                    </div>
                </div>


                <?php require_once('footer.php'); ?>
            </div>
        </div>
    </div>
    <!-- <script src="./assets/js/bundle583f.js?ver=3.1.3"></script> -->
    <script src="./assets/js/scripts583f.js?ver=3.1.3"></script>
    <script src="./assets/js/demo-settings583f.js?ver=3.1.3"></script>
    <script src="./assets/js/libs/editors/quill583f.js?ver=3.1.3"></script>
    <script src="./assets/js/editors583f.js?ver=3.1.3"></script>




</body>


</html>