<!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <title>Laravel</title>
                <link rel="stylesheet" href="./css/materialdesignicons.min.css">
                <link rel="stylesheet" href="./vendors/iconfonts/ionicons/dist/css/ionicons.css">
                <link rel="stylesheet" href="./vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
                <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
                <link rel="stylesheet" href="./vendors/css/vendor.bundle.addons.css">
                <!-- endinject -->
                <!-- plugin css for this page -->
                <!-- End plugin css for this page -->
                <!-- inject:css -->
                <link rel="stylesheet" href="./css/shared/style.css">
                <!-- endinject -->
                <!-- Layout styles -->
                <link rel="stylesheet" href="./css/demo_1/style.css">
                <!-- End Layout styles -->
                <link rel="shortcut icon" href="./images/favicon.ico" />

                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

                <!-- Styles -->
                <style>
                    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
                </style>

                <style>
                    body {
                        font-family: 'Nunito';
                    }
                </style>
            </head>
            <body >
                    
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
              <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="dashboard">
                  <img src="./images/logo.svg" alt="logo" /> </a>
                <a class="navbar-brand brand-logo-mini" href="#">
                  <img src="./images/logo-mini.svg" alt="logo" /> </a>
              </div>
              <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav">
                  <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
                  <li class="nav-item dropdown language-dropdown">
                    <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                      <div class="d-inline-flex mr-0 mr-md-3">
                        <div class="flag-icon-holder">
                          <i class="flag-icon flag-icon-us"></i>
                        </div>
                      </div>
                      <span class="profile-text font-weight-medium d-none d-md-block">English</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                      <a class="dropdown-item">
                        <div class="flag-icon-holder">
                          <i class="flag-icon flag-icon-us"></i>
                        </div>English
                      </a>
                      <a class="dropdown-item">
                        <div class="flag-icon-holder">
                          <i class="flag-icon flag-icon-fr"></i>
                        </div>French
                      </a>
                      <a class="dropdown-item">
                        <div class="flag-icon-holder">
                          <i class="flag-icon flag-icon-ae"></i>
                        </div>Arabic
                      </a>
                      <a class="dropdown-item">
                        <div class="flag-icon-holder">
                          <i class="flag-icon flag-icon-ru"></i>
                        </div>Russian
                      </a>
                    </div>
                  </li>
                </ul>
                <form class="ml-auto search-form d-none d-md-block" action="#">
                  <div class="form-group">
                    <input type="search" class="form-control" placeholder="Search Here">
                  </div>
                </form>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                      <i class="mdi mdi-bell-outline"></i>
                      <span class="count">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                      <a class="dropdown-item py-3">
                        <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                        <span class="badge badge-pill badge-primary float-right">View all</span>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <img src="./images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
                        <div class="preview-item-content flex-grow py-2">
                          <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                          <p class="font-weight-light small-text"> The meeting is cancelled </p>
                        </div>
                      </a>
                      <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <img src="./images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
                        <div class="preview-item-content flex-grow py-2">
                          <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                          <p class="font-weight-light small-text"> The meeting is cancelled </p>
                        </div>
                      </a>
                      <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <img src="./images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
                        <div class="preview-item-content flex-grow py-2">
                          <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                          <p class="font-weight-light small-text"> The meeting is cancelled </p>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                      <i class="mdi mdi-email-outline"></i>
                      <span class="count bg-success">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                      <a class="dropdown-item py-3 border-bottom">
                        <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                        <span class="badge badge-pill badge-primary float-right">View all</span>
                      </a>
                      <a class="dropdown-item preview-item py-3">
                        <div class="preview-thumbnail">
                          <i class="mdi mdi-alert m-auto text-primary"></i>
                        </div>
                        <div class="preview-item-content">
                          <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                          <p class="font-weight-light small-text mb-0"> Just now </p>
                        </div>
                      </a>
                      <a class="dropdown-item preview-item py-3">
                        <div class="preview-thumbnail">
                          <i class="mdi mdi-settings m-auto text-primary"></i>
                        </div>
                        <div class="preview-item-content">
                          <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                          <p class="font-weight-light small-text mb-0"> Private message </p>
                        </div>
                      </a>
                      <a class="dropdown-item preview-item py-3">
                        <div class="preview-thumbnail">
                          <i class="mdi mdi-airballoon m-auto text-primary"></i>
                        </div>
                        <div class="preview-item-content">
                          <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                          <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                      <img class="img-xs rounded-circle" src="./images/faces/face8.jpg" alt="Profile image"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                      <div class="dropdown-header text-center">
                        <img class="img-md rounded-circle" src="./images/faces/face8.jpg" alt="Profile image">
                        <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                        <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                      </div>
                      <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                      <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                      <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                      <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                      <form method="POST" action="{{ route('logout') }}">
                                              @csrf
                      <a href="{{ route('logout') }}"onclick="event.preventDefault();this.closest('form').submit();"
                      class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                                              <!-- <x-jet-dropdown-link href="{{ route('logout') }}"
                                                                  onclick="event.preventDefault();
                                                                          this.closest('form').submit();">
                                                  {{ __('Logout') }}
                                              </x-jet-dropdown-link> -->
                                          </form>

                    
                    </div>
                  </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                  <span class="mdi mdi-menu"></span>
                </button>
              </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
              <!-- partial:partials/_sidebar.html -->
              <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                  <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                      <div class="profile-image">
                        <img class="img-xs rounded-circle" src="./images/faces/face8.jpg" alt="profile image">
                        <div class="dot-indicator bg-success"></div>
                      </div>
                      <div class="text-wrapper">
                        <p class="profile-name">Allen Moreno</p>
                        <p class="designation">Premium user</p>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item nav-category">Main Menu</li>
                  <li class="nav-item">
                    <a class="nav-link" href="dashboard">
                      <i class="menu-icon typcn typcn-document-text"></i>
                      <span class="menu-title">Dashboard</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="add" >
                      <i class="menu-icon typcn typcn-shopping-bag"></i>
                      <span class="menu-title">Add Items</span>
                    </a>
                  </li>
                </ul>
              </nav>
              <!-- partial -->

              {{-- <form id="profile-form" action="{{ route('additems.create') }}" method="post" role="form"> --}}
              
                  <div class="col-md-6 grid-margin stretch-card" style="margin: 36px 0px 52px 150px;">
                      <div class="card" style="    min-width: 55%; margin-left: 20%;">
                        <div class="card-body">
                          <h4 class="card-title">Additems</h4>
                          
                          <form class="forms-sample">
                            <div class="form-group">
                              <label for="exampleInputName1">Title</label>
                              <input type="text" class="form-control" id="" name="title" placeholder="Name">
                            </div>
                            <div class="form-group">
                              <label for="exampleTextarea1">Descriptions</label>
                              <textarea class="form-control" id="" rows="2" name="Description"></textarea>
                            </div>
                            
                            <div class="form-group">
                              <label for="exampleInputPassword4">Price</label>
                              <input type="text" class="form-control" name="price" placeholder="price">
                            </div>
                            <div class="form-group">
                              <label>File upload</label>
                              <input type="file" name="img" class="file-upload-default">
                              <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" placeholder="Upload Image">
                                <span class="input-group-append">
                                  <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                                </span>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputCity1">City</label>
                              <input type="text" class="form-control" name="city" placeholder="Location">
                            </div>
                          
                            <div class="form-group">
                              <label for="">No of Days</label>
                              <input type="text" class="form-control" name="days" placeholder="Days">
                            </div>
                            <button type="submit" class="btn btn-success mr-2" id="submit" >Submit</button>
                            <button class="btn btn-light">Cancel</button>
                          </form>
                        </div>
                      </div>
                    </div>
                
              </form>
              
                    <!-- main-panel ends -->
            </div>
          </div>

            </div>
            </div>
            
      <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
              </span>
            </div>
          </footer>
      <!-- page-body-wrapper ends -->
 
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="./vendors/js/vendor.bundle.addons.js"></script>
    <script src="./vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="./js/shared/off-canvas.js"></script>
    <script src="./js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="./js/demo_1/dashboard.js"></script>
                </body>
               
        </html>
