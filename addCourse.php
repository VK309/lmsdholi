                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Course Category</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total 8 Categories</p>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                                    data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li class="nk-block-tools-opt d-none d-sm-block"><a
                                                                class="btn btn-primary" data-bs-toggle="modal"
                                                                href="#modalCreate"><em
                                                                    class="icon ni ni-plus"></em><span>Add
                                                                    Category</span></a></li>
                                                        <li class="nk-block-tools-opt d-block d-sm-none"><a
                                                                class="btn btn-icon btn-primary" data-bs-toggle="modal"
                                                                href="#modalCreate"><em
                                                                    class="icon ni ni-plus"></em></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <div class="add-course">
                                        <form class="add_course" method="post">
                                            <input type="text" class="form-control" name="coursename" />
                                            <button type="submit" name="addcourse" class="btn btn-primary">Add
                                                course</button>
                                        </form>
                                    </div>
                                    <div class="courses">
                                        <table class="nk-tb-list nk-tb-ulist">
                                            <thead>
                                                <tr class="nk-tb-item nk-tb-head">
                                                    <th class="nk-tb-col nk-tb-col-check">
                                                        <div
                                                            class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="pid-all"><label class="custom-control-label"
                                                                for="pid-all"></label>
                                                        </div>
                                                    </th>
                                                    <th class="nk-tb-col"><span class="sub-text">Course Name</span></th>
                                                    <th class="nk-tb-col tb-col-lg"><span
                                                            class="sub-text">Category</span></th>
                                                    <th class="nk-tb-col tb-col-lg"><span
                                                            class="sub-text">Instractor</span></th>
                                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Lesson</span>
                                                    </th>
                                                    <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Enrole
                                                            Student</span></th>
                                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span>
                                                    </th>
                                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text">Price</span>
                                                    </th>
                                                    <th class="nk-tb-col tb-col-mb"><span
                                                            class="sub-text">Deadline</span></th>
                                                    <th class="nk-tb-col nk-tb-col-tools text-end">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="dropdown">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-trigger btn-icon dropdown-toggle"
                                                                        data-bs-toggle="dropdown" data-offset="0,5"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-archive"></em><span>Mark
                                                                                        As Archive</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-trash"></em><span>Remove
                                                                                        Category</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($coursedata as $course){ ?>
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col nk-tb-col-check">
                                                        <div
                                                            class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="pid-01"><label class="custom-control-label"
                                                                for="pid-01"></label>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <a href="#" class="project-title">
                                                            <div class="user-avatar sq bg-purple"><span>RD</span></div>
                                                            <div class="project-info">
                                                                <h6 class="title"><?php echo $course['coursename']; ?>
                                                                </h6>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg"><span>Web Development</span></td>
                                                    <td class="nk-tb-col tb-col-lg"><span>Alex Ashley</span></td>
                                                    <td class="nk-tb-col tb-col-lg"><span>Total lesson: 32</span></td>
                                                    <td class="nk-tb-col tb-col-xxl"><span>Total enrolment: 25</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md"><span
                                                            class="badge badge-dim bg-success">Active</span></td>
                                                    <td class="nk-tb-col tb-col-mb"><span>$30</span></td>
                                                    <td class="nk-tb-col tb-col-mb"><span>20.4.2021</span></td>
                                                    <td class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#"
                                                                        class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a data-bs-toggle="modal"
                                                                                    href="#modalEdit"><em
                                                                                        class="icon ni ni-edit"></em><span>Edit
                                                                                        Course</span></a></li>
                                                                            <li><a data-bs-toggle="modal"
                                                                                    href="#modalDelete"><em
                                                                                        class="icon ni ni-delete"></em><span>Delete
                                                                                        Course</span></a></li>
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
                                </div>