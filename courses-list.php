

            <div class="nk-block-head nk-block-head-sm">
               <div class="nk-block-between">
                  <div class="nk-block-head-content">
                     <h3 class="nk-block-title page-title">Courses</h3>
                  </div>
                  <div class="nk-block-head-content">
                     <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                           <ul class="nk-block-tools g-3">
                              <li class="nk-block-tools-opt d-none d-sm-block" data-bs-toggle="modal" data-bs-target="#modalCreate"><a href="#" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Course</span></a></li>
                              <li class="nk-block-tools-opt d-block d-sm-none" data-bs-toggle="modal" data-bs-target="#modalCreate"><a href="#" class="btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="nk-block">
               <div class="card card-stretch">
                  <div class="card-inner-group">
                     <div class="card-inner p-0">
                        <table class="nk-tb-list nk-tb-ulist">
                           <thead>
                              <tr class="nk-tb-item nk-tb-head">
                                 <th class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="pid-all"><label class="custom-control-label" for="pid-all"></label></div>
                                 </th>
                                 <th class="nk-tb-col"><span class="sub-text">Course Name</span></th>
                                 <th class="nk-tb-col tb-col-lg"><span class="sub-text">Category</span></th>
                                 <th class="nk-tb-col tb-col-lg"><span class="sub-text">Instractor</span></th>
                                 <th class="nk-tb-col tb-col-lg"><span class="sub-text">Lesson</span></th>
                                 <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Enrole Student</span></th>
                                 <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                 <th class="nk-tb-col tb-col-mb"><span class="sub-text">Price</span></th>
                                 <th class="nk-tb-col tb-col-mb"><span class="sub-text">Deadline</span></th>
                                 <th class="nk-tb-col nk-tb-col-tools text-end">
                                    <ul class="nk-tb-actions gx-1">
                                       <li>
                                          <div class="dropdown">
                                             <a href="#" class="btn btn-sm btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-more-h"></em></a>
                                             <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                   <li><a href="#"><em class="icon ni ni-archive"></em><span>Mark As Archive</span></a></li>
                                                   <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Category</span></a></li>
                                                </ul>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                            <?php
                                $table = "courses";
                                $coursedata = $mainfunc->get_data($table,"desc");
                                foreach( $coursedata  as $data){
                            ?>
                           <tr class="nk-tb-item">
                                 <td class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="pid-01"><label class="custom-control-label" for="pid-01"></label></div>
                                 </td>
                                 <td class="nk-tb-col">
                                    <a href="#" class="project-title">
                                       <div class="user-avatar sq bg-purple"><span>RD</span></div>
                                       <div class="project-info">
                                          <h6 class="title"><?php echo $data['coursename']; ?></h6>
                                       </div>
                                    </a>
                                 </td>
                                 <td class="nk-tb-col tb-col-lg"><span>Web Development</span></td>
                                 <td class="nk-tb-col tb-col-lg"><span>Alex Ashley</span></td>
                                 <td class="nk-tb-col tb-col-lg"><span>Total lesson: 32</span></td>
                                 <td class="nk-tb-col tb-col-xxl"><span>Total enrolment: 25</span></td>
                                 <td class="nk-tb-col tb-col-md"><span class="badge badge-dim bg-success">Active</span></td>
                                 <td class="nk-tb-col tb-col-mb"><span>$30</span></td>
                                 <td class="nk-tb-col tb-col-mb"><span>20.4.2021</span></td>
                                 <td class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                       <li>
                                          <div class="dropdown">
                                             <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                             <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                   <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Course</span></a></li>
                                                   <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Course</span></a></li>
                                                </ul>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </td>
                              </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                     </div>
                     <div class="card-inner">
                        <div class="nk-block-between-md g-3">
                           <div class="g">
                              <ul class="pagination justify-content-center justify-content-md-start">
                                 <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                 <li class="page-item"><a class="page-link" href="#">1</a></li>
                                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                                 <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                 <li class="page-item"><a class="page-link" href="#">6</a></li>
                                 <li class="page-item"><a class="page-link" href="#">7</a></li>
                                 <li class="page-item"><a class="page-link" href="#">Next</a></li>
                              </ul>
                           </div>
                           <div class="g">
                              <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                 <div>Page</div>
                                 <div>
                                    <select class="form-select js-select2 select2-hidden-accessible" data-search="on" data-dropdown="xs center" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                       <option value="page-1" data-select2-id="3">1</option>
                                       <option value="page-2">2</option>
                                       <option value="page-4">4</option>
                                       <option value="page-5">5</option>
                                       <option value="page-6">6</option>
                                       <option value="page-7">7</option>
                                       <option value="page-8">8</option>
                                       <option value="page-9">9</option>
                                       <option value="page-10">10</option>
                                       <option value="page-11">11</option>
                                       <option value="page-12">12</option>
                                       <option value="page-13">13</option>
                                       <option value="page-14">14</option>
                                       <option value="page-15">15</option>
                                       <option value="page-16">16</option>
                                       <option value="page-17">17</option>
                                       <option value="page-18">18</option>
                                       <option value="page-19">19</option>
                                       <option value="page-20">20</option>
                                    </select>
                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 79.3333px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-t4bf-container"><span class="select2-selection__rendered" id="select2-t4bf-container" role="textbox" aria-readonly="true" title="1">1</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                 </div>
                                 <div>OF 102</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
