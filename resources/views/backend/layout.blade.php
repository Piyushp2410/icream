<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title') - Admin </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('icream-app/admin/img/favicon.png') }}" rel="icon">
    <!-- <link href="{{ asset('icream-app/admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('icream-app/admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('icream-app/admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('icream-app/admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('icream-app/admin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('icream-app/admin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('icream-app/admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('icream-app/admin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('icream-app/admin/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/admin-login/dashboard" class="logo d-flex align-items-center">
                <img src="{{ asset('icream-app/admin/img/logo.png') }}" alt="">
                <span class="d-none d-lg-block">Admin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Piyush Parmar</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Piyush Parmar</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{ route('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav11" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Slider</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav11" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('add-slider') }}">
                            <i class="bi bi-circle"></i><span>Add Slider</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('slider-home') }}">
                            <i class="bi bi-circle"></i><span>Manage Slider</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Products</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/admin-login/add-products">
                            <i class="bi bi-circle"></i><span>Add Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('manage-products') }}">
                            <i class="bi bi-circle"></i><span>Manage Products</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Services</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('add-service') }}">
                            <i class="bi bi-circle"></i><span>Add Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('manage-services') }}">
                            <i class="bi bi-circle"></i><span>Manage Services</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav1" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Gallery Category</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('add-ga-cat') }}">
                            <i class="bi bi-circle"></i><span>Add Gallery Category</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('manage-ga-cat') }}">
                            <i class="bi bi-circle"></i><span>Manage Gallery Category</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Products Gallery</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('add-gal') }}">
                            <i class="bi bi-circle"></i><span>Add Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('manage-gal') }}">
                            <i class="bi bi-circle"></i><span>Manage Gallery</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('contacts-home') }}">
                    <i class="bi bi-person"></i>
                    <span>Contact</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-register.html">
                    <i class="bi bi-card-list"></i>
                    <span>Register</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin-login">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Login</span>
                </a>
            </li><!-- End Login Page Nav -->
        </ul>

    </aside><!-- End Sidebar-->






    @yield('content')





    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Admin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('icream-app/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('icream-app/admin/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('icream-app/admin/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('icream-app/admin/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('icream-app/admin/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('icream-app/admin/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('icream-app/admin/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('icream-app/admin/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('icream-app/admin/js/main.js') }}"></script>
    <script>
        function previewImage(input) {
            // Retrieve the element with the ID 'preview' and store it in the 'preview' variable
            var preview = document.getElementById('preview');

            // Check if input.files and input.files[0] are defined and not null
            if (input.files && input.files[0]) {
                // Create a new FileReader object
                var reader = new FileReader();

                // Define an onload event handler for the FileReader object
                reader.onload = function(e) {
                    // When the file has been loaded, set the src attribute of the preview image to the result of the FileReader
                    preview.src = e.target.result;
                    // Make the preview image visible by setting its display style to 'block'
                    preview.style.display = 'block';
                }

                // Read the content of the first file in the input element as a data URL
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>

</html>
