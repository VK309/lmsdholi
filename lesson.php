<?php

 $lesson_id = $_REQUEST['lesson-id'];
 $current_id = $current_user['id'];
 $table = "assign_student";
 $where = "lesson_id='".$lesson_id."' AND student_id ='".$current_id."'";
 $return = $mainfunc->get_data_conditon($table, $where);

    if($return[0]['status'] === 'not_assign' || count($return) === 0 && $current_user['user_type'] === '0'){
        echo "<script>window.location.href = '?page=lesson_not_assign';</script>";
         exit;
    }
?> 
<div class="row">
    <div class="col-sm-12">
        <div class="heading">
            <h4><b>Lesson No: </b><?php echo '#'.$lesson_data['lesson_number']; ?></h4>
            <h2><b>Lesson Name:</b> <?php echo $lesson_data['lessonname']; ?></h2>
        </div>
        <div class="video_block">
            <?php
                $video_url = "lesson_data/".$lesson_data['video_url'];
                if( $video_url){
            ?>
           <video width="100%" height="500" controls>
                <source src="<?php echo $video_url; ?>" >
                Your browser does not support the video tag.
            </video>
            <?php 
                }else{
            ?>
            <div class="text-center">
                <h2>video not Found</h2>
            </div>
            <?php
              } ?>
        </div>
        <div class="video_description">
            <h4>Description</h4>
            <div>
                <?php echo $lesson_data['description']; ?>
            </div>
        </div>
    </div>
    <?php if($current_user['user_type'] === "1"){?>
    <div class="col-sm-12">
        <div class="update_video_data">
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="lesson_id" value="<?php echo $lesson_id; ?>">
                <input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
                <div class="form-group">
                    <label for="video_url">video url</label>
                    <input type="file" name="video"  class="form-control" />
                </div>
                <div class="form-group">
                    <label for="lesson-name">Description</label>
                    <textarea name="description"
                        class="form-control"><?php echo $lesson_data['description']; ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="addlesson_data" class="btn btn-primary">Add lesson</button>
                </div>
            </form>
        </div>
    </div>

    <?php }else{ ?>
        <div class="col-sm-12">
        <div class="comments">
           <?php 
            $student_id= "";
             $lesson_id = $_REQUEST['lesson-id'];
             $course_id = $_REQUEST['course-id'];
             $mainfunc->get_message($lesson_id,$course_id, $student_id);
            ?>
        </div>
            <div class="comment-box">
                 <form method="post" class="send_message_form">
                    <div class="row">
                        <div class="col-sm-8">
                            <?php $mess_from = $current_user['user_type'] === "1"?"super_admin":"student";?>
                            <input type="hidden" name="action" value="send_message"/>
                            <input type="hidden" name="message_form" value="<?php echo $mess_from; ?>"/>
                            <input type="hidden" name="student_id" value="<?php echo $current_user['id']; ?>"/>
                            <input type="hidden" name="lesson_id" value="<?php echo $lesson_id; ?>"/>
                            <input type="hidden" name="course_id" value="<?php echo $course_id; ?>"/>
                            <input type="text" name="message" class="form-control msgbox"/>
                        </div>
                        <div class="col-sm-4">
                            <button type="submit" name="send_message" class="send_message btn btn-primary">Send</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    <?php } ?>
    <?php 
       $student_id = $_REQUEST['student-id'];
       $lesson_id = $_REQUEST['lesson-id'];
       $course_id = $_REQUEST['course-id'];

       if($student_id && $lesson_id && $course_id ){
        $table = "messages";
        $data = array('seen_status'=>'1');
        $condition = "student_id= '$student_id' AND lesson_id === '$lesson_id' AND course_id = '$course_id'";
        $mainfunc->updateQuery($table, $data, $condition);
       }
    if($current_user['user_type'] === "1" &&  $student_id){ ?>
        <div class="col-sm-12">
        <div class="comments">
           <?php 
            $student_id = $_REQUEST['student-id'];
             $lesson_id = $_REQUEST['lesson-id'];
             $course_id = $_REQUEST['course-id'];
             $mainfunc->get_message($lesson_id,$course_id, $student_id);
            ?>
        </div>
            <div class="comment-box">
                 <form method="post" class="send_message_form">
                    <div class="row">
                        <div class="col-sm-8">
                            <?php $mess_from = $current_user['user_type'] === "1"?"super_admin":"student";?>
                            <input type="hidden" name="action" value="send_message"/>
                            <input type="hidden" name="message_form" value="<?php echo $mess_from; ?>"/>
                            <input type="hidden" name="student_id" value="<?php echo $student_id; ?>"/>
                            <input type="hidden" name="lesson_id" value="<?php echo $lesson_id; ?>"/>
                            <input type="hidden" name="course_id" value="<?php echo $course_id; ?>"/>
                            <input type="text" name="message" class="form-control msgbox"/>
                        </div>
                        <div class="col-sm-4">
                            <button type="submit" name="send_message" class="send_message btn btn-primary">Send</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>

    <?php } ?>
</div>