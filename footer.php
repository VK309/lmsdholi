             <div class="nk-footer">
                  <div class="container-fluid">
                     <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright"> © 2023 Dholi.</div>
                     </div>
                  </div>
               </div>
               <script src="https://code.jquery.com/jquery-3.7.0.min.js" ></script>
               <script>
                  jQuery(document).ready(function(){
                     jQuery(".nk-menu-toggle").on("click",function(){
                           jQuery(this).closest(".has-sub").toggleClass("active");
                     });
                     jQuery(".select_course").on("click",function(){
                        let val = jQuery(this).val();
                        let course_id = jQuery("option:selected",this).attr("data-course_id");
                        jQuery(this).closest("form").find(".course_id").val(course_id);
                     });
                     jQuery(".dropdown-indicator").click(function(){
                        jQuery(this).closest(".user-dropdown").find(".dropdown-menu-end").toggleClass("show");
                     });

                     jQuery(".btn-trigger").on("click",function(){
                        jQuery(this).closest(".dropdown").find(".dropdown-menu-end").toggleClass("active");
                     });
                     jQuery(".send_message_form").on("submit",function(e){
                        e.preventDefault();
                        let data = jQuery(this).serialize();
                        console.log(data);
                        jQuery.ajax({
                           type:"POST",
                           url:"ajax.php",
                           data:data,
                           success:function(response){
                              jQuery(".comments").html(response);
                              jQuery(".msgbox").val("");
                           },
                           error:function(error){
                              console.log(error);
                           }
                        });
                     });
                     jQuery(".course_status").on("change",function(){
                        let val = jQuery('option:selected',this).val();
                        let student_id = jQuery('option:selected',this).attr("data-student_id");
                        let action = jQuery('option:selected',this).attr("data-action");
                        jQuery.ajax({
                           type:"POST",
                           url:"ajax.php",
                           data:{action:action,student_id:student_id,lesson_id:val},
                           success:function(response){
                              console.log(response);
                           },
                           error:function(error){
                              console.log(error);
                           }
                        });
                     });
                     jQuery(".notification-dropdown .dropdown-toggle").on("click",function(){
                      
                           jQuery(this).closest(".notification-dropdown").find(".dropdown-menu").toggleClass("active");
                     });
                     jQuery(".nk-notification-text .notification").click(function(){
                        let student_id = jQuery(this).attr("data-student_id");
                         let action = jQuery(this).attr("data-action");
                        jQuery.ajax({
                           type:"POST",
                           url:"ajax.php",
                           data:{action:action,student_id:student_id},
                           success:function(response){
                              console.log(response);
                           },
                           error:function(error){
                              console.log(error);
                           }
                        });
                     });   
                  jQuery('.comments').scrollTop($('.comments')[0].scrollHeight);


                  });
               </script>