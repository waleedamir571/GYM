<?php include 'header.php';?>

<section class="content-section ">
    <div class="container ">
        <ol class="breadcrumb bg-transparent w-100 li_animate mb-3 mb-md-1">
            <li class="breadcrumb-item"><a href="index.php"><i class="lni lni-home"></i></a></li>
            <!-- <li class="breadcrumb-item"><a href="#">App</a></li> -->
            <li class="breadcrumb-item active" aria-current="page">Faq</li>
        </ol>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-title text-left">
                    <h1>HELLO, I M<br>
                        TEENA JONES</h1>
                    <h2>Work Hard,Rest Harder</h2>
                    <p class="pt-20">Bio</p>
                    <p class="pt-20">Working out should be on your terms because life is busy enough and
                        your time is precious. So we’ve <u>designed</u> a gym for people like you who
                        want to get results without spending hours and hours at the gym. Also,
                        to keep it simple and convenient to <strong>hit the gym</strong> you can use over 250
                        gyms, 24/7 across the world. </p>
                    <p class="pt-20">Working out should be on your terms because life is busy enough and
                        your time is precious. So we’ve a gym for people like you who
                        want to get results without spending hours and hours at the gym. Also,
                        to keep it simple and convenient to you can use over 250
                        gyms. </p>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-6 -->
            <div class="col-lg-5 offset-lg-1">
                <img src="images/slide01.jpg" alt="">
                <!-- end text-box -->

            </div>
            <!-- end col-5 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

<section class="content-section ">
    <div class="container ">
        <div class="row ">
            <div class="col-lg-6">
                <div class="section-title text-left">
                    <h1>MY FIELD OF<br>
                        EXPERTISE</h1>
                    <h2>Work Hard,Rest Harder</h2>
                    <p class="pt-20">Bio</p>
                    <p class="pt-20">Working out should be on your terms because life is busy enough and
                        your time is precious. So we’ve a gym for people like you who
                        want to get results without spending hours and hours at the gym. </p>
                    <p class="pt-20">Working out should be on your terms because life is busy enough and
                        your time is precious. So we’ve a gym for people like you who
                        want to get results without spending hours and hours at the gym. </p>

                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-6 -->
            <div class="col-lg-5 offset-lg-1">

                <div class="container">
                    <div class="row ">
                        <div class="col-md-6">
                            <p>Fundamental Knowledge</p>
                        </div>
                        <div class="col-md-6">
                            <div class="skills1">90%</div>
                        </div>
                    </div>
                    <div class="skills html">
                    </div>
                    <div class="row pt-20">
                        <div class="col-md-6">
                            <p>individuals coaching plan</p>
                        </div>
                        <div class="col-md-6">
                            <div class="skills1">90%</div>
                        </div>
                    </div>
                    <div class="skills html">
                        <div class="row pt-20">
                            <div class="col-md-6">
                                <p>individuals coaching plan</p>
                            </div>
                            <div class="col-md-6">
                                <div class="skills1">90%</div>
                            </div>
                        </div>
                        <div class="skills html">
                            <div class="row pt-20">
                                <div class="col-md-6">
                                    <p>individuals plan</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="skills1">90%</div>
                                </div>
                            </div>
                            <div class="skills html">
                                <div class="row pt-20">
                                    <div class="col-md-6">
                                        <p>individuals coaching </p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="skills1">90%</div>
                                    </div>
                                </div>
                                <div class="skills html">
                                </div>
                            </div>
                        </div>
                        <!-- end col-5 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
</section>

<div class="container">
    <div class="row">
        <div class="col-xs-12 ">
            <nav>
                <div class="nav nav-tabs nav-fill pb-20 " id="nav-tab" role="tablist">
                    <a class="nav-item nav-link pt-30 active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                        role="tab" aria-controls="nav-home" aria-selected="true">Calender</a>
                    <a class="nav-item nav-link pt-30" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                        role="tab" aria-controls="nav-profile" aria-selected="false">Gallery</a>
                    <a class="nav-item nav-link pt-30" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                        role="tab" aria-controls="nav-contact" aria-selected="false">Subscription</a>

                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <section class="content-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card tui-calendar">
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap justify-content-between align-items-center"
                                                id="menu-navi">
                                                <div class="d-flex align-items-center my-1">
                                                    <button
                                                        class="btn bg-secondary text-light me-2 lnb-new-schedule-btn"
                                                        id="btn-new-schedule" type="button" data-bs-toggle="modal">New
                                                        schedule</button>
                                                    <button class="btn btn-primary move-today" type="button"
                                                        data-action="move-today">Today</button>
                                                </div>
                                                <div class="fs-5 fw-bold my-1" id="renderRange"></div>
                                                <div class="d-flex align-items-center my-1">
                                                    <div class="dropdown morphing scale-left">
                                                        <button class="btn btn-primary dropdown-toggle"
                                                            id="dropdownMenu-calendarType" type="button"
                                                            data-bs-toggle="dropdown"><i id="calendarTypeIcon"></i><span
                                                                class="ms-1"
                                                                id="calendarTypeName">Dropdown</span></button>
                                                        <ul class="dropdown-menu border-0 shadow" role="menu">
                                                            <li role="presentation"><a
                                                                    class="dropdown-item dropdown-menu-title"
                                                                    role="menuitem" data-action="toggle-daily"><i
                                                                        class="fa fa-bars me-2"></i>Daily</a></li>
                                                            <li role="presentation"><a
                                                                    class="dropdown-item dropdown-menu-title"
                                                                    role="menuitem" data-action="toggle-weekly"><i
                                                                        class="fa fa-th-large me-2"></i>Weekly</a></li>
                                                            <li role="presentation"><a
                                                                    class="dropdown-item dropdown-menu-title"
                                                                    role="menuitem" data-action="toggle-monthly"><i
                                                                        class="fa fa-th me-2"></i>Month</a></li>
                                                            <li role="presentation"><a
                                                                    class="dropdown-item dropdown-menu-title"
                                                                    role="menuitem" data-action="toggle-weeks2"><i
                                                                        class="fa fa-th-large me-2"></i>2 weeks</a></li>
                                                            <li role="presentation"><a
                                                                    class="dropdown-item dropdown-menu-title"
                                                                    role="menuitem" data-action="toggle-weeks3"><i
                                                                        class="fa fa-th-large me-2"></i>3 weeks</a></li>
                                                            <li class="dropdown-divider" role="presentation"></li>
                                                            <li role="presentation"><a class="dropdown-item"
                                                                    role="menuitem" data-action="toggle-workweek">
                                                                    <input class="tui-full-calendar-checkbox-square"
                                                                        type="checkbox" value="toggle-workweek"
                                                                        checked=""><span
                                                                        class="checkbox-title"></span>Show
                                                                    weekends</a></li>
                                                            <li role="presentation"><a class="dropdown-item"
                                                                    role="menuitem" data-action="toggle-start-day-1">
                                                                    <input class="tui-full-calendar-checkbox-square"
                                                                        type="checkbox" value="toggle-start-day-1"><span
                                                                        class="checkbox-title"></span>Start Week on
                                                                    Monday</a></li>
                                                            <li role="presentation"><a class="dropdown-item"
                                                                    role="menuitem" data-action="toggle-narrow-weekend">
                                                                    <input class="tui-full-calendar-checkbox-square"
                                                                        type="checkbox"
                                                                        value="toggle-narrow-weekend"><span
                                                                        class="checkbox-title"></span>Narrower than
                                                                    weekdays</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ms-2">
                                                        <button class="btn btn-outline-secondary move-day" type="button"
                                                            data-action="move-prev"><i class="fa fa-angle-left"
                                                                data-action="move-prev"></i></button>
                                                        <button class="btn btn-outline-secondary move-day" type="button"
                                                            data-action="move-next"><i class="fa fa-angle-right"
                                                                data-action="move-next"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-body" id="lnb">
                                            <div class="d-flex flex-wrap justify-content-between align-items-center"
                                                id="lnb-calendars">
                                                <div class="d-flex flex-wrap" id="calendarList"></div>
                                                <div class="lnb-calendars-item">
                                                    <label>
                                                        <input class="tui-full-calendar-checkbox-square" type="checkbox"
                                                            value="all" checked=""><span></span><strong>View
                                                            all</strong>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="border" id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab-wrapper -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end container -->
                    </section>

                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="container">
                        <div class="row pb-20">
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="images/gym.webp" class="card-img-top" alt="...">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="images/gym.webp" class="card-img-top" alt="...">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="images/gym.webp" class="card-img-top" alt="...">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="images/gym.webp" class="card-img-top" alt="...">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="images/gym.webp" class="card-img-top" alt="...">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="images/gym.webp" class="card-img-top" alt="...">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="images/gym.webp" class="card-img-top" alt="...">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat
                    veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim.
                    Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim
                    non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor
                    ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore.
                    Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                </div>

            </div>

        </div>
    </div>
</div>


<!-- end content-section -->

<!-- end google-maps -->
<?php include 'footer.php';?>

<script src="js/tuicalendar.bundle.js"></script>