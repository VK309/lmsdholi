<?php  
 $usertype = $current_user['user_type']; 
 check_super_admin($usertype);
?>
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Add Lesson</h3>
        </div>
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="more-options"><em
                        class="icon ni ni-more-v"></em></a>
                <div class="toggle-expand-content" data-content="more-options">
                    <ul class="nk-block-tools g-3">
                        <li>
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-right"><em class="icon ni ni-search"></em></div>
                                <input type="text" class="form-control" id="default-04" placeholder="Search by name">
                            </div>
                        </li>
                        <li>
                            <div class="drodown">
                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white"
                                    data-bs-toggle="dropdown">Status</a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><span>Actived</span></a></li>
                                        <li><a href="#"><span>Inactived</span></a></li>
                                        <li><a href="#"><span>Blocked</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nk-block-tools-opt"><a class="btn btn-icon btn-primary d-md-none"
                                data-bs-toggle="modal" href="#student-add"><em class="icon ni ni-plus"></em></a><a
                                class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal"
                                href="#student-add"><em class="icon ni ni-plus"></em><span>Add</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="addlesson-popup">
    <form method="post">
        <div class="form-group">
            <label for="lesson-name">Lesson Number</label>
            <input type="number" name="lesson_number" class="form-control" />
        </div>
        <div class="form-group">
            <label for="lesson-name">Lesson Name</label>
            <input type="text" name="lessonname" class="form-control" />
        </div>
        <div class="form-group">
            <button type="submit" name="addlesson" class="btn btn-primary">Add lesson</button>
        </div>
    </form>
</div>