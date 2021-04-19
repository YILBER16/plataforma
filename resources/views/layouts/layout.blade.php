<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Courses</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">
    @yield('titulo')

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap" rel="stylesheet">

    <!-- Perfect Scrollbar -->
    
    <link type="text/css" href="{{asset('dist/dist/vendor/perfect-scrollbar.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    
    <!-- Fix Footer CSS -->
    
    <link type="text/css" href="{{asset('dist/dist/vendor/fix-footer.css')}}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{asset('dist/dist/css/material-icons.css')}}" rel="stylesheet">
    <!-- include the style -->
    {{-- <link rel="stylesheet" href="{{asset('css/alertify.css')}}" > --}}
    {{-- <link rel="stylesheet" href="{{asset('css/component-chosen.css')}}" > --}}
    <link rel="stylesheet" href="{{asset('css/component-chosen.min.css')}}" >
    <link rel="stylesheet" href="{{asset('css/component-custom-switch.min.css')}}" >
<!-- include a theme -->
    <link rel="stylesheet" href="{{asset('css/themes/default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/yearpicker.css')}}" />
    <link rel="stylesheet" href="{{asset('js/bootstrap-fileinput/css/fileinput.min.css')}}" />



    <!-- Font Awesome Icons -->
    <link type="text/css" href="{{asset('dist/dist/css/fontawesome.css')}}" rel="stylesheet">

    
    <!-- Preloader -->
    {{-- <link type="text/css" href="{{asset('dist/dist/css/preloader.css')}}" rel="stylesheet"> --}}
    <link type="text/css" href="{{asset('css/preloaderpropio.css')}}" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- App CSS -->
    <link type="text/css" href="{{asset('css/app.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('dist/dist/css/app.css')}}" rel="stylesheet">
    {{-- Full calendar --}}
    <link href="{{asset('fullcalendar/main.css')}}" rel='stylesheet' />
    <link href="{{asset('fullcalendar/main.min.css')}}" rel='stylesheet' />
    
    

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/1.1.2/css/rowGroup.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

<script>
      
function alertasuccess(){
    const Toast = Swal.mixin({
  toast: true,
  position: 'bottom-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Agregado con exito'
})
  }
  function alertaelim(){
    const Toast = Swal.mixin({
  toast: true,
  position: 'bottom-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Eliminado con exito'
})
  }
  function alertaerror(){
    const Toast = Swal.mixin({
  toast: true,
  position: 'bottom-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'error',
  title: 'Ocurrio un error'
})
  }
</script>
    @yield('script')
</head>

<body class="layout-app ">
    
    {{-- <div class="preloader " >
        
        <div class="sk-double-bounce " >
            <div class="sk-child sk-double-bounce1 " ></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div> --}}
   
    <div class="centrado">
        <div class="loadercenter">
            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_DMgKk1.json"  background="transparent"  speed="2"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player> 
        </div>
        </div>

    <div class="mdk-drawer-layout js-mdk-drawer-layout " data-push data-responsive-width="992px">
      <div class="mdk-drawer-layout__content page-content">

          <!-- Header -->






          <div class="navbar navbar-expand navbar-light border-bottom-2" id="default-navbar" data-primary>

              <!-- Navbar toggler -->
              <button class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0" type="button" data-toggle="sidebar">
                  <span class="material-icons">short_text</span>
              </button>

              <!-- Navbar Brand -->
              <a href="index.html" class="navbar-brand mr-16pt d-lg-none">
                  <!-- <img class="navbar-brand-icon" src="{{asset('dist/dist/images/logo/white-100@2x.png')}}" width="30" alt="Luma"> -->

                  <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                      <span class="avatar-title rounded bg-primary"><img src="{{asset('dist/dist/images/illustration/student/128/white.svg')}}" alt="logo" class="img-fluid" /></span>

                  </span>

                  <span class="d-none d-lg-block">Luma</span>
              </a>

              <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                  <li class="nav-item">
                      <a href="index.html" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">Courses</a>
                      <div class="dropdown-menu">
                          <a href="courses.html" class="dropdown-item active">Browse Courses</a>
                          <a href="student-course.html" class="dropdown-item">Preview Course</a>
                          <a href="student-lesson.html" class="dropdown-item">Preview Lesson</a>
                          <a href="student-take-course.html" class="dropdown-item"><span class="mr-16pt">Take Course</span> <span class="badge badge-notifications badge-accent text-uppercase ml-auto">Pro</span></a>
                          <a href="student-take-lesson.html" class="dropdown-item">Take Lesson</a>
                          <a href="student-take-quiz.html" class="dropdown-item">Take Quiz</a>
                          <a href="student-quiz-result-details.html" class="dropdown-item">Quiz Result</a>
                          <a href="student-dashboard.html" class="dropdown-item">Student Dashboard</a>
                          <a href="student-my-courses.html" class="dropdown-item">My Courses</a>
                          <a href="student-quiz-results.html" class="dropdown-item">My Quizzes</a>
                          <a href="help-center.html" class="dropdown-item">Help Center</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">Paths</a>
                      <div class="dropdown-menu">
                          <a href="paths.html" class="dropdown-item">Browse Paths</a>
                          <a href="student-path.html" class="dropdown-item">Path Details</a>
                          <a href="student-path-assessment.html" class="dropdown-item">Skill Assessment</a>
                          <a href="student-path-assessment-result.html" class="dropdown-item">Skill Result</a>
                          <a href="student-paths.html" class="dropdown-item">My Paths</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a href="pricing.html" class="nav-link">Pricing</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">Teachers</a>
                      <div class="dropdown-menu">
                          <a href="instructor-dashboard.html" class="dropdown-item">Instructor Dashboard</a>
                          <a href="instructor-courses.html" class="dropdown-item">Manage Courses</a>
                          <a href="instructor-quizzes.html" class="dropdown-item">Manage Quizzes</a>
                          <a href="instructor-earnings.html" class="dropdown-item">Earnings</a>
                          <a href="instructor-statement.html" class="dropdown-item">Statement</a>
                          <a href="instructor-edit-course.html" class="dropdown-item">Edit Course</a>
                          <a href="instructor-edit-quiz.html" class="dropdown-item">Edit Quiz</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown" data-toggle="tooltip" data-title="Community" data-placement="bottom" data-boundary="window">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                          <i class="material-icons">people_outline</i>
                      </a>
                      <div class="dropdown-menu">
                          <a href="teachers.html" class="dropdown-item">Browse Teachers</a>
                          <a href="student-profile.html" class="dropdown-item">Student Profile</a>
                          <a href="teacher-profile.html" class="dropdown-item">Instructor Profile</a>
                          <a href="blog.html" class="dropdown-item">Blog</a>
                          <a href="blog-post.html" class="dropdown-item">Blog Post</a>
                          <a href="faq.html" class="dropdown-item">FAQ</a>
                          <a href="help-center.html" class="dropdown-item">Help Center</a>
                          <a href="discussions.html" class="dropdown-item">Discussions</a>
                          <a href="discussion.html" class="dropdown-item">Discussion Details</a>
                          <a href="discussions-ask.html" class="dropdown-item">Ask Question</a>
                      </div>
                  </li>
              </ul>






              <ul class="nav navbar-nav ml-auto mr-0">
                  <li class="nav-item">
                      <a href="login.html" class="nav-link" data-toggle="tooltip" data-title="Login" data-placement="bottom" data-boundary="window"><i class="material-icons">lock_open</i></a>
                  </li>
                  <li class="nav-item">
                      <a href="signup.html" class="btn btn-outline-dark">Get Started</a>
                  </li>
              </ul>
          </div>




          <!-- // END Header -->
















          <div class="page-section">
              <div class="container page__container">
                @include('sweetalert::alert')
                @yield('contenido')
              </div>
          </div>






      </div>
      <!-- // END drawer-layout__content -->





      <!-- drawer -->
      <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
          <div class="mdk-drawer__content">
              <div class="sidebar sidebar-dark-dodger-blue sidebar-left" data-perfect-scrollbar>




                  <a href="index.html" class="sidebar-brand ">
                      <!-- <img class="sidebar-brand-icon" src="{{asset('dist/dist/images/illustration/student/128/white.svg')}}" alt="Luma"> -->

                      <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                          <span class="avatar-title rounded bg-primary"><img src="{{asset('dist/dist/images/illustration/student/128/white.svg')}}" class="img-fluid" alt="logo" /></span>

                      </span>

                      <span>Edumax</span>
                  </a>



                  <div class="sidebar-heading">Gestion personal</div>
                  <ul class="sidebar-menu">



                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#acudientes_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left"><i class="fas fa-users"></i></span>
                            Acudientes
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="acudientes_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ url('/acudientes')}}">
                                    <span class="sidebar-menu-text">Inicio</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ url('/acudientesdeshabilitados')}}">
                                    <span class="sidebar-menu-text">deshabilitados</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#padres_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left"><i class="fas fa-user-friends"></i></span>
                            Padres
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="padres_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ url('/padres')}}">
                                    <span class="sidebar-menu-text">Inicio</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ url('/padresdeshabilitados')}}">
                                    <span class="sidebar-menu-text">deshabilitados</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#docentes_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left"><i class="fas fa-users"></i></span>
                            Docentes
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="docentes_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ url('/docentes')}}">
                                    <span class="sidebar-menu-text">Inicio</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ url('/docentesdeshabilitados')}}">
                                    <span class="sidebar-menu-text">deshabilitados</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#estudiantes_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left"><i class="fas fa-user-graduate"></i></span>
                            Estudiantes
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="estudiantes_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ url('/estudiantes')}}">
                                    <span class="sidebar-menu-text">Inicio</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ url('/estudiantesdeshabilitados')}}">
                                    <span class="sidebar-menu-text">deshabilitados</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    
                    
                </ul>
                <div class="sidebar-heading">Matriculas</div>
                  <ul class="sidebar-menu">
                          <a class="sidebar-menu-button" href="{{ url('/matriculas')}}">
                              <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left"><i class="fas fa-id-card-alt"></i></span>
                              <span>Matricular</span>
                          </a>
                  </ul>
                  <div class="sidebar-heading">Gestion de calendario</div>
                  <ul class="sidebar-menu">


                      <li class="sidebar-menu-item">
                          <a class="sidebar-menu-button" href="{{ url('/aniolectivo')}}">
                              <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left"><i class="far fa-clock"></i></span>
                              <span>Registrar año</span>
                          </a>
                      </li>
                      <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{ url('/calendario')}}">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left"><i class="fas fa-calendar-alt"></i></span>
                            <span>Calendario academico</span>
                        </a>
                    </li>
                      

                  </ul>
                  <div class="sidebar-heading">Gestion de grados</div>
                  <ul class="sidebar-menu">


                      <li class="sidebar-menu-item">
                          <a class="sidebar-menu-button" href="{{ url('/grados')}}">
                              <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left"><i class="fas fa-chalkboard"></i></span>
                              <span>Registro de grados</span>
                          </a>
                      </li>
                      <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{ url('/mensualidades')}}">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left"><i class="fas fa-coins"></i></span>
                            <span>Mensualidades</span>
                        </a>
                    </li>
                      

                  </ul>



                  <div class="sidebar-heading">Applications</div>
                  <ul class="sidebar-menu">



                      <li class="sidebar-menu-item">
                          <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#enterprise_menu">
                              <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                              Enterprise
                              <span class="ml-auto sidebar-menu-toggle-icon"></span>
                          </a>
                          <ul class="sidebar-submenu collapse sm-indent" id="enterprise_menu">
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="erp-dashboard.html">
                                      <span class="sidebar-menu-text">ERP Dashboard</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="crm-dashboard.html">
                                      <span class="sidebar-menu-text">CRM Dashboard</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="hr-dashboard.html">
                                      <span class="sidebar-menu-text">HR Dashboard</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="employees.html">
                                      <span class="sidebar-menu-text">Employees</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="staff.html">
                                      <span class="sidebar-menu-text">Staff</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="leaves.html">
                                      <span class="sidebar-menu-text">Leaves</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button disabled" href="departments.html">
                                      <span class="sidebar-menu-text">Departments</span>
                                  </a>
                              </li>

                          </ul>
                      </li>
                      
                      
                  </ul>


                  <div class="sidebar-heading">UI</div>
                  <ul class="sidebar-menu">
                      <li class="sidebar-menu-item">
                          <a class="sidebar-menu-button" data-toggle="collapse" href="#components_menu">
                              <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">tune</span>
                              Components
                              <span class="ml-auto sidebar-menu-toggle-icon"></span>
                          </a>
                          <ul class="sidebar-submenu collapse sm-indent" id="components_menu">
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="ui-buttons.html">
                                      <span class="sidebar-menu-text">Buttons</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="ui-avatars.html">
                                      <span class="sidebar-menu-text">Avatars</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="ui-forms.html">
                                      <span class="sidebar-menu-text">Forms</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="ui-loaders.html">
                                      <span class="sidebar-menu-text">Loaders</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="ui-tables.html">
                                      <span class="sidebar-menu-text">Tables</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="ui-cards.html">
                                      <span class="sidebar-menu-text">Cards</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="ui-icons.html">
                                      <span class="sidebar-menu-text">Icons</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="ui-tabs.html">
                                      <span class="sidebar-menu-text">Tabs</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="ui-alerts.html">
                                      <span class="sidebar-menu-text">Alerts</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="ui-badges.html">
                                      <span class="sidebar-menu-text">Badges</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="ui-progress.html">
                                      <span class="sidebar-menu-text">Progress</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="ui-pagination.html">
                                      <span class="sidebar-menu-text">Pagination</span>
                                  </a>
                              </li>

                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button disabled" href="">
                                      <span class="sidebar-menu-text">Disabled</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  
                  </ul>


              </div>
          </div>
      </div>
      <!-- // END drawer -->


      <div class="mdk-drawer js-mdk-drawer " id="library-drawer" data-align="end">
          <div class="mdk-drawer__content ">
              <div class="sidebar sidebar-light sidebar-right py-16pt" data-perfect-scrollbar data-perfect-scrollbar-wheel-propagation="true">

                  <div class="d-flex align-items-center mb-24pt  d-lg-none">
                      <form action="index.html" class="search-form search-form--light mx-16pt pr-0 pl-16pt">
                          <input type="text" class="form-control pl-0" placeholder="Search">
                          <button class="btn" type="submit"><i class="material-icons">search</i></button>
                      </form>
                  </div>

                  <div class="sidebar-heading">Category</div>
                  <ul class="sidebar-menu">
                      <li class="sidebar-menu-item active">
                          <a href="" class="sidebar-menu-button">
                              <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">code</span>
                              <span class="sidebar-menu-text">Web Development</span>
                          </a>
                      </li>
                      <li class="sidebar-menu-item">
                          <a href="" class="sidebar-menu-button">
                              <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">brush</span>
                              <span class="sidebar-menu-text">Design</span>
                          </a>
                      </li>
                      <li class="sidebar-menu-item">
                          <a href="" class="sidebar-menu-button">
                              <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">settings_cell</span>
                              <span class="sidebar-menu-text">iOS &amp; Swift</span>
                          </a>
                      </li>
                      <li class="sidebar-menu-item">
                          <a href="" class="sidebar-menu-button">
                              <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">android</span>
                              <span class="sidebar-menu-text">Android</span>
                          </a>
                      </li>
                      <li class="sidebar-menu-item">
                          <a href="" class="sidebar-menu-button">
                              <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">business_center</span>
                              <span class="sidebar-menu-text">Business</span>
                          </a>
                      </li>
                      <li class="sidebar-menu-item">
                          <a href="" class="sidebar-menu-button">
                              <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">crop_original</span>
                              <span class="sidebar-menu-text">Photography</span>
                          </a>
                      </li>
                      <li class="sidebar-menu-item">
                          <a href="" class="sidebar-menu-button">
                              <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">payment</span>
                              <span class="sidebar-menu-text">Marketing</span>
                          </a>
                      </li>
                      <li class="sidebar-menu-item">
                          <a href="" class="sidebar-menu-button">
                              <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">store</span>
                              <span class="sidebar-menu-text">eCommerce</span>
                          </a>
                      </li>
                      <li class="sidebar-menu-item">
                          <a href="" class="sidebar-menu-button">
                              <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">redeem</span>
                              <span class="sidebar-menu-text">Health &amp; Fitness</span>
                          </a>
                      </li>
                      <li class="sidebar-menu-item">
                          <a href="" class="sidebar-menu-button">
                              <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">music_note</span>
                              <span class="sidebar-menu-text">Music</span>
                          </a>
                      </li>
                  </ul>

                  <div class="sidebar-heading">Platform</div>
                  <div class="sidebar-block">
                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" value="" id="filtersCheck01" checked="">
                              <label class="custom-control-label" for="filtersCheck01">All</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" value="" id="filtersCheck02">
                              <label class="custom-control-label" for="filtersCheck02">Archive</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" value="" id="filtersCheck06">
                              <label class="custom-control-label" for="filtersCheck06">Unity</label>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" value="" id="filtersCheck03">
                              <label class="custom-control-label" for="filtersCheck03">Web</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" value="" id="filtersCheck04">
                              <label class="custom-control-label" for="filtersCheck04">iOS &amp; Swift</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" value="" id="filtersCheck05">
                              <label class="custom-control-label" for="filtersCheck05">Android</label>
                          </div>
                      </div>
                  </div>

                  <div class="sidebar-heading">Subscription</div>
                  <div class="sidebar-block">
                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" value="" id="filtersCheck07" checked="">
                              <label class="custom-control-label" for="filtersCheck07">All</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" value="" id="filtersCheck08">
                              <label class="custom-control-label" for="filtersCheck08">Free</label>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" value="" id="filtersCheck09">
                              <label class="custom-control-label" for="filtersCheck09">Beginner</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" value="" id="filtersCheck10">
                              <label class="custom-control-label" for="filtersCheck10">Advanced</label>
                          </div>
                      </div>
                  </div>

                  <div class="sidebar-heading">Content type</div>
                  <div class="sidebar-block">
                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" value="" id="filtersCheck11" checked="">
                              <label class="custom-control-label" for="filtersCheck11">All</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" value="" id="filtersCheck12">
                              <label class="custom-control-label" for="filtersCheck12">Episode</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" value="" id="filtersCheck13">
                              <label class="custom-control-label" for="filtersCheck13">Video</label>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" value="" id="filtersCheck14">
                              <label class="custom-control-label" for="filtersCheck14">Article</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" value="" id="filtersCheck15">
                              <label class="custom-control-label" for="filtersCheck15">Book</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" value="" id="filtersCheck16">
                              <label class="custom-control-label" for="filtersCheck16">Screencast</label>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>




  

   <!-- Modal item observaor-->
<div class="modal fade" id="observadormodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro de item del observador</h5>
        </div>
        <div class="modal-body">
            @yield('cuerpo_modal_itemobservador')
        <div class="modal-footer">
            @yield('pie_modal_itemobservador')
            <button id="btncancelaritem" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="observadormodaledit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edición de item del observador</h5>
        </div>
        <div class="modal-body">
            @yield('cuerpo_modal_itemobservador_edit')
            <input type="text" name="id" id="id" hidden>
          <input type="text" name="iditem" id="iditem" hidden>
          <div class="form-group">
            <label for="" class="">Categoria de la falta</label>
          <input type="text" name="categoriafaltaedit" id="categoriafaltaedit" class="form-control" maxlength="120" readonly>
        </div> 
          <div class="form-group">
          <label for="" class="">Tipo de falta</label>
          <input type="text" name="tipofaltaedit" id="tipofaltaedit" class="form-control" maxlength="120">
        </div>   
        <div class="modal-footer">
            @yield('pie_modal_itemobservador_edit')
            <button id="btncancelaritemedit" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

        </div>
      </div>
    </div>
  </div>
</div>
</div>

{{-- Modal eliminar --}}
  <div class="modal fade" id="deletemodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
        </div>
        <div class="modal-body">
            Seguro que desea eliminar a
            <span class="dname"></span>?<span style="display: none;" class="did"></span>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger btneliminar">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- Modal calendario  --}}
<div class="modal fade" id="calendarioadd" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Datos del evento</h5>
        </div>
        <div class="modal-body">
          <input type="text" name="txtid" id="txtid" hidden>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
          <label for="" class="">Titulo del evento</label>
          <input type="text" name="txttitulo" id="txttitulo" class="form-control">
          <br>
        </div>
            </div>
          <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <label for="" class="">Fecha y hora inicial</label>
          <input type="datetime-local" name="txtfechainicial" id="txtfechainicial" class="form-control" >
          <br>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <label for="" class="">Fecha y hora final</label>
          <input type="datetime-local" name="txtfechafinal" id="txtfechafinal" class="form-control">
          <br>
        </div>
          
    </div>
 
          
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
          <label for="" class="">Descripción</label>
          <textarea name="txtdescripcion" id="txtdescripcion" cols="30" rows="3" class="form-control"></textarea>
          <br>
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <label for="" class="">Color</label>
          <input type="color" name="txtcolor" id="txtcolor" class="form-control">
          <br>
        </div>
        
       
        <div class="modal-footer">
            <button id="btnagregar" class="btn btn-primary">Agregar</button>
            <button id="btnmodificar" class="btn btn-warning">Modificar</button>
            <button id="btnborrar" class="btn btn-danger">Eliminar</button>
            <button id="btncancelar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

        </div>
      </div>
    </div>
  </div>
  <!-- Button trigger modal -->
 

  

    <!-- Bootstrap -->
    <script src="{{asset('dist/dist/vendor/popper.min.js')}}"></script>
    <script src="{{asset('dist/dist/vendor/bootstrap.min.js')}}"></script>
    {{-- <script src="{{asset('js/alertify.min.js')}}"></script> --}}
    <script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>

  

    <!-- Perfect Scrollbar -->
    <script src="{{asset('dist/dist/vendor/perfect-scrollbar.min.js')}}"></script>

    <!-- DOM Factory -->
    <script src="{{asset('dist/dist/vendor/dom-factory.js')}}"></script>

    <!-- MDK -->
    <script src="{{asset('dist/dist/vendor/material-design-kit.js')}}"></script>

    <!-- Fix Footer -->
    <script src="{{asset('dist/dist/vendor/fix-footer.js')}}"></script>

    <!-- App JS -->
    <script src="{{asset('dist/dist/js/preloaderpropio.js')}}"></script>
    <script src="{{asset('dist/dist/js/app.js')}}"></script>
    <script src="{{asset('js/yearpicker.js')}}"></script>
    <script src="{{asset('js/chosen.jquery.js')}}"></script>
    <script src="{{asset('js/chosen.jquery.min.js')}}"></script>
    <script src="{{asset('fullcalendar/main.js')}}"></script>
    <script src="{{asset('fullcalendar/main.min.js')}}"></script>
    <script src="{{asset('fullcalendar/locales-all.js')}}"></script>

    <script src="{{asset('fullcalendar/locales-all.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.1.2/js/dataTables.rowGroup.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('js/bootstrap-fileinput/js/fileinput.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-fileinput/js/locales/es.js')}}"></script>
    <script src="{{asset('js/bootstrap-fileinput/themes/fa/theme.min.js')}}"></script>

    






</body>

</html>