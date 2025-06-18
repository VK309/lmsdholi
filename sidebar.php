<div class="nk-sidebar nk-sidebar-fixed is-light" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand"><a href="/index.php" class="logo-link nk-sidebar-logo"><img
                    class="logo-light logo-img" src="./images/dholilogo.png" srcset="/demo2/images/logo2x.png 2x"
                    alt="logo"><img class="logo-dark logo-img" src="./images/dholilogo.png"
                    srcset="/demo2/images/logo-dark2x.png 2x" alt="logo-dark"><img
                    class="logo-small logo-img logo-img-small" src="./images/dholilogo.png"
                    srcset="/demo2/images/logo-small2x.png 2x" alt="logo-small"></a></div>
        <div class="nk-menu-trigger me-n2"><a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
                data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a><a href="#"
                class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em
                    class="icon ni ni-menu"></em></a></div>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar="init">
                <div class="simplebar-wrapper" style="margin: -16px 0px -40px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                <div class="simplebar-content" style="padding: 16px 0px 40px;">
                                    <ul class="nk-menu">
                                        <li class="nk-menu-item"><a href="?page=home" class="nk-menu-link"><span
                                                    class="nk-menu-icon"><em
                                                        class="icon ni ni-dashboard-fill"></em></span><span
                                                    class="nk-menu-text">Dashboard</span></a></li>
                                                    <?php if($current_user['user_type'] === "1"){?>
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle"><span
                                                    class="nk-menu-icon"><em
                                                        class="icon ni ni-book-fill"></em></span><span
                                                    class="nk-menu-text">Courses</span></a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item"><a href="?page=addCourse"
                                                        class="nk-menu-link"><span class="nk-menu-text">Add
                                                            Course</span></a></li>
                                                <li class="nk-menu-item"><a href="?page=category"
                                                        class="nk-menu-link"><span
                                                            class="nk-menu-text">Catagories</span></a></li>
                                                <li class="nk-menu-item"><a href="?page=courses-list"
                                                        class="nk-menu-link"><span class="nk-menu-text">Course
                                                            List</span></a></li>
                                            </ul>
                                        </li>
                                        <?php } if($current_user['user_type'] === "1"){?>
                                        <li class="nk-menu-item"><a href="?page=students" class="nk-menu-link"><span
                                                    class="nk-menu-icon"><em
                                                        class="icon ni ni-users-fill"></em></span><span
                                                    class="nk-menu-text">Students</span></a></li>
                                        <?php 
                                           }
                                            foreach( $coursedata  as $data){
                                        ?>
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle"><span
                                                    class="nk-menu-icon"><em
                                                        class="icon ni ni-property-add"></em></span><span
                                                    class="nk-menu-text"><?php echo $data['coursename']; ?></span></a>
                                            <ul class="nk-menu-sub">
                                                <?php if($current_user['user_type'] === "1"){?>
                                                <li class="nk-menu-item"><a
                                                        href="?page=add-lesson&course-id=<?php echo $data['id']; ?>"
                                                        class="nk-menu-link"><span class="nk-menu-text">Add
                                                            Lesson</span></a></li>
                                                <?php }?>
                                                <?php 
                                                    $id =  $data['id'];
                                                    $table="lessons";
                                                    $where = "course_id = '$id' ORDER BY lesson_number asc";
                                                    $lessons = $mainfunc->get_data_conditon($table,$where);
                                                    foreach($lessons as $lesson){?>
                                                <li class="nk-menu-item"><a
                                                        href="?page=lesson&lesson-id=<?php echo $lesson['id']; ?>&course-id=<?php echo $lesson['course_id']; ?>"
                                                        class="nk-menu-link"><span
                                                            class="nk-menu-text"><?php echo $lesson['lessonname'].' '.$lesson['lesson_number']; ?></span></a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <?php } 
                                         if($current_user['user_type'] === "1"){?>
                                        <li class="nk-menu-item"><a href="?page=registeration"
                                                class="nk-menu-link"><span class="nk-menu-icon"><em
                                                        class="icon ni ni-dashboard-fill"></em></span><span
                                                    class="nk-menu-text">Registeration</span></a></li>
                                          <?php } ?>
                                        <li class="nk-menu-item"><a href="?page=message" class="nk-menu-link"><span
                                                    class="nk-menu-icon"><em
                                                        class="icon ni ni-chat-fill"></em></span><span
                                                    class="nk-menu-text">Messages</span></a></li>
                                        <li class="nk-menu-item"><a href="?page=admin-profile.html"
                                                class="nk-menu-link"><span class="nk-menu-icon"><em
                                                        class="icon ni ni-account-setting-fill"></em></span><span
                                                    class="nk-menu-text">Admin profile</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: auto; height: 420px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                    <div class="simplebar-scrollbar"
                        style="height: 276px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                </div>
            </div>
        </div>
    </div>
</div>