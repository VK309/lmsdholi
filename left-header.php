<?php 
$notification = $mainfunc->unseen_msg();
$notification_data = $notification['data'];
?>
<div class="nk-header nk-header-fixed is-light">
                  <div class="container-fluid">
                     <div class="nk-header-wrap">
                        <div class="nk-menu-trigger d-xl-none ms-n1"><a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a></div>
                        <div class="nk-header-brand d-xl-none"><a href="../index-2.html" class="logo-link"><img class="logo-light logo-img" src="../images/logo.png" srcset="/demo2/images/logo2x.png 2x" alt="logo"><img class="logo-dark logo-img" src="../images/logo-dark.png" srcset="/demo2/images/logo-dark2x.png 2x" alt="logo-dark"></a></div>
                        <div class="nk-header-tools">
                           <ul class="nk-quick-nav">
                              <li class="dropdown chats-dropdown hide-mb-xs">
                                 <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                    <div class="icon-status icon-status-na"><em class="icon ni ni-comments"></em></div>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                    <div class="dropdown-head"><span class="sub-title nk-dropdown-title">Recent Chats</span><a href="#">Setting</a></div>
                                    <div class="dropdown-body">
                                       <ul class="chat-list">
                                          <li class="chat-item">
                                             <a class="chat-link" href="message.html">
                                                <div class="chat-media user-avatar"><span>IH</span><span class="status dot dot-lg dot-gray"></span></div>
                                                <div class="chat-info">
                                                   <div class="chat-from">
                                                      <div class="name">Iliash Hossain</div>
                                                      <span class="time">Now</span>
                                                   </div>
                                                   <div class="chat-context">
                                                      <div class="text">You: Please confrim if you got my last messages.</div>
                                                      <div class="status delivered"><em class="icon ni ni-check-circle-fill"></em></div>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li class="chat-item is-unread">
                                             <a class="chat-link" href="message.html">
                                                <div class="chat-media user-avatar bg-pink"><span>AB</span><span class="status dot dot-lg dot-success"></span></div>
                                                <div class="chat-info">
                                                   <div class="chat-from">
                                                      <div class="name">Abu Bin Ishtiyak</div>
                                                      <span class="time">4:49 AM</span>
                                                   </div>
                                                   <div class="chat-context">
                                                      <div class="text">Hi, I am Ishtiyak, can you help me with this problem ?</div>
                                                      <div class="status unread"><em class="icon ni ni-bullet-fill"></em></div>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li class="chat-item">
                                             <a class="chat-link" href="message.html">
                                                <div class="chat-media user-avatar"><img src="../images/avatar/b-sm.jpg" alt=""></div>
                                                <div class="chat-info">
                                                   <div class="chat-from">
                                                      <div class="name">George Philips</div>
                                                      <span class="time">6 Apr</span>
                                                   </div>
                                                   <div class="chat-context">
                                                      <div class="text">Have you seens the claim from Rose?</div>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li class="chat-item">
                                             <a class="chat-link" href="message.html">
                                                <div class="chat-media user-avatar user-avatar-multiple">
                                                   <div class="user-avatar"><img src="../images/avatar/c-sm.jpg" alt=""></div>
                                                   <div class="user-avatar"><span>AB</span></div>
                                                </div>
                                                <div class="chat-info">
                                                   <div class="chat-from">
                                                      <div class="name">Softnio Group</div>
                                                      <span class="time">27 Mar</span>
                                                   </div>
                                                   <div class="chat-context">
                                                      <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                      <div class="status sent"><em class="icon ni ni-check-circle"></em></div>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li class="chat-item">
                                             <a class="chat-link" href="message.html">
                                                <div class="chat-media user-avatar"><img src="../images/avatar/a-sm.jpg" alt=""><span class="status dot dot-lg dot-success"></span></div>
                                                <div class="chat-info">
                                                   <div class="chat-from">
                                                      <div class="name">Larry Hughes</div>
                                                      <span class="time">3 Apr</span>
                                                   </div>
                                                   <div class="chat-context">
                                                      <div class="text">Hi Frank! How is you doing?</div>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li class="chat-item">
                                             <a class="chat-link" href="message.html">
                                                <div class="chat-media user-avatar bg-purple"><span>TW</span></div>
                                                <div class="chat-info">
                                                   <div class="chat-from">
                                                      <div class="name">Tammy Wilson</div>
                                                      <span class="time">27 Mar</span>
                                                   </div>
                                                   <div class="chat-context">
                                                      <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                      <div class="status sent"><em class="icon ni ni-check-circle"></em></div>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="dropdown-foot center"><a href="message.html">View All</a></div>
                                 </div>
                              </li>
                              <li class="dropdown notification-dropdown">
                                 <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                    <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                    <div class="dropdown-head"><span class="sub-title nk-dropdown-title">Notifications</span></div>
                                    <div class="dropdown-body">
                                       <div class="nk-notification">
                                       <?php 
                                          foreach($notification_data as $val){  
                                             $stu_id = $val['student_id'];
                                             $table = "registeration";
                                             $where = "id = '$stu_id'";
                                             $student_info = $mainfunc->get_data_conditon($table,$where)[0];
                                             $name = $student_info['firstname'].' '.$student_info['lastname']; 
                                             $seen_status = $val['seen_status'] === '0' ? "unseen":"seen";                                             
                                         ?>
                                          <div class="nk-notification-item dropdown-inner <?php echo $seen_status; ?>" data-student_id="<?php echo  $student_info['id'] ?>">
                                             <div class="nk-notification-icon"><em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em></div>
                                             <div class="nk-notification-content">
                                                <div class="nk-notification-text" data-id="">You have Message from
                                                <span>
                                                   <b>
                                                      <a class="notification" data-action="update_seen_status" data-student_id = <?php echo $val['student_id']; ?> href="?page=lesson&student-id=<?php echo $val['student_id']; ?>&lesson-id=<?php echo $val['lesson_id']; ?>&course-id=<?php echo $val['course_id']; ?>">
                                                         <?php 
                                                       if($current_user['user_type']==='1'){
                                                         echo $name;
                                                       }else{echo "admin"; }
                                                           
                                                         ?>
                                                      </a>
                                                  </b> 
                                               </span>
                                             </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                             </div>
                                          </div>
                                          <?php } ?>
                                        
                                       </div>
                                    </div>
                                    <div class="dropdown-foot center"><a href="#">View All</a></div>
                                 </div>
                              </li>
                              <li class="dropdown user-dropdown">
                                 <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                    <div class="user-toggle">
                                       <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em></div>
                                       <div class="user-info d-none d-xl-block">
                                          <div class="user-status user-status-active"> <?php echo $current_user["user_type"] == '0'?"Student":"Super Admin"; ?></div>
                                          <div class="user-name dropdown-indicator"><?php echo $current_user['firstname']." ".$current_user['lastname']; ?></div>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                    <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                       <div class="user-card">
                                          <div class="user-avatar"><span><?php $firstname = $current_user['firstname']; $lastname = $current_user['lastname']; echo substr("$firstname",0,1). substr("$lastname",0,1);?></span></div>
                                          <div class="user-info"><span class="lead-text"><?php echo $current_user['firstname']." ".$current_user['lastname']; ?></span><span class="sub-text"><?php echo $current_user['email']; ?></span></div>
                                       </div>
                                    </div>
                                    <div class="dropdown-inner">
                                       <ul class="link-list">
                                          <li><a href="admin-profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                          <li><a href="admin-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                          <li><a href="admin-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                       </ul>
                                    </div>
                                    <div class="dropdown-inner">
                                       <ul class="link-list">
                                          <li><a href="?page=logout"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                </div>