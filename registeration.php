<div class="container">
    <h2>Register Students</h2>
    <form method="post">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="username">First Name</label>
                    <input type="text" name="firstname" class="form-control" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" class="form-control" />
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" required />
                </div>
                
                <div class="form-group">
                    <label for="password">Country</label>
                    <input type="text" name="country" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="password">Assign Course</label>
                    <select name="course_name" class="form-control select_course">
                        <?php foreach($course as $key => $val){?> 
                            <option value="<?php echo $val['coursename'];?>" data-course_id="<?php echo $val['id'];?>"><?php echo $val['coursename'];?></option>
                        <?php } ?>
                       
                    </select>
                </div>
                <div class="form-group">
                    <input type="hidden" name="course_id" class="course_id" value=""/>
                    <button type="submit" name="register" class="btn btn-primary">Register</button>
                </div>
            </div>

        </div>
    </form>
</div>