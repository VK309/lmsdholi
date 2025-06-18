<?php 
 $student_id = $_REQUEST['student_id'];
 $where = "id = '$student_id'";
 $table = "registeration";
$student_details = $mainfunc->get_data_conditon($table, $where)[0];
?>
<div class="continer">
    <div class="row">
        <div class="col-sm-12">
            <table class="table-bordered">
                <tr>
                    <th>Name</th>
                    <td><?php echo $student_details['firstname'].' '.$student_details['lastname']; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $student_details['email']; ?></td>
                </tr>
                <tr>
                    <th>Course Name</th>
                    <td><?php echo $student_details['course_name']; ?></td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td><?php echo $student_details['country']; ?></td>
                </tr>
                <tr>
                    <th>Joining Date</th>
                    <td><?php echo $student_details['created_date']; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-sm-12">
            <h3>Lessons</h3>
            <?php 
                $course_id = $student_details['course_id'];
                $table = "lessons";
                $where = "course_id = '$course_id'";
                $lessons =  $mainfunc->get_data_conditon($table, $where);
                

            ?>
            <table class="table-bordered">
                <tr>
                    <th><b>Lesson Number</th>
                    <th><b>lesson Name</b></th>
                    <th><b>Status</b></th>
                </tr>
                <?php foreach($lessons as $val){ 
                    $table = "assign_student";
                    $where = "lesson_id='".$val['id']."' AND student_id ='".$student_id."'";
                    $check_assigned = $mainfunc->get_data_conditon($table, $where);
                    $assign_status = $check_assigned[0]['status'];
                ?>
                    <tr>
                        <td><?php echo $val['lesson_number']; ?></td>
                        <td><?php echo $val['lessonname']; ?></td>
                        <td>
                            <select name="course_status" class="course_status form-control">
                                    <?php $selected =  $assign_status == 'assign'?'selected':''; ?>
                                    <option value="<?php echo $val['id']; ?>" data-student_id="<?php echo  $student_id; ?>" data-action="not_assign">Not Assign</option>
                                    <option value="<?php echo $val['id']; ?>" data-student_id="<?php echo  $student_id; ?>" data-action="assign" <?php echo $selected; ?>>Assign</option>
                               </select>
                        </td>
                    </tr>
                <?php } ?>

            </table>



        </div>
    </div>
</div>