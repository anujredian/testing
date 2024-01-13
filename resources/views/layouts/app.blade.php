<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description"
    content="MVS admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin panel with unlimited possibilities.">
  <meta name="keywords"
    content="admin panel, MVS admin panel, dashboard panel, flat admin panel, responsive admin panel, web app">
  <meta name="author" content="MVS">
  <title>Power</title>
  <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">
  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.min.css')}}">




  <link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
  <link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/vendors/css/tables/datatable/select.dataTables.min.css') }}">
  {{--
  <link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.min.css') }}"> --}}
  <!-- END: Vendor CSS-->
  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/bordered-layout.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
  <link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/charts/chart-apex.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/pickers/form-pickadate.css')}}">
  <link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/css/plugins/extensions/ext-component-toastr.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-invoice-list.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-invoice.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/animate/animate.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
  <link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/css/plugins/extensions/ext-component-sweet-alerts.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />






  @yield('styles')
  @guest <style>
    .body_cover_image::before {
      content: '';
      position: absolute;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      top: 0px;
      left: 0px;
    }
  </style> @endguest
   {{-- @viteReactRefresh
  @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static body_cover_image" data-open="click"
  data-menu="vertical-menu-modern" data-col="" @guest style="background-image: url(https://vibecode.paramsoft.co.in/public/masters/img/login-bg.jpg);
background-size: cover;
background-position: center;
background-repeat: no-repeat;
position: relative;" @endguest>
  <!-- BEGIN: Header--> @auth() 
  


  <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">

        
         
            <ul class="nav navbar-nav align-items-center ml-auto">
               
            
                <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge badge-pill badge-danger badge-up">0</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                                <div class="badge badge-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar"><img src="{{asset('app-assets/images/portrait/small/avatar-s-15.jpg')}}" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar"><img src="{{asset('app-assets/images/portrait/small/avatar-s-3.jpg')}}" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">New message</span>&nbsp;received</p><small class="notification-text"> You have 10 unread messages</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content">MD</div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Revised Order 👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order updated</small>
                                    </div>
                                </div>
                            </a>
                            <div class="media d-flex align-items-center">
                                <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
                                <div class="custom-control custom-control-primary custom-switch">
                                    <input class="custom-control-input" id="systemNotification" type="checkbox" checked="">
                                    <label class="custom-control-label" for="systemNotification"></label>
                                </div>
                            </div><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Server down</span>&nbsp;registered</p><small class="notification-text"> USA Server is down due to hight CPU usage</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Sales report</span>&nbsp;generated</p><small class="notification-text"> Last month sales report generated</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="alert-triangle"></i></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">Read all notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">{{Auth::user()->name}}</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><i class="mr-50" data-feather="power"></i> Logout</a>
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{asset('app-assets/images/icons/xls.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{asset('app-assets/images/icons/jpg.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{asset('app-assets/images/icons/pdf.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{asset('app-assets/images/icons/doc.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{asset('app-assets/images/portrait/small/avatar-s-8.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{asset('app-assets/images/portrait/small/avatar-s-1.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{asset('app-assets/images/portrait/small/avatar-s-14.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{asset('app-assets/images/portrait/small/avatar-s-6.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul> -->
    <!-- <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul> -->
  
  <!-- END: Header-->
  <!-- BEGIN: Main Menu-->
  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="html/ltr/vertical-menu-panel/index.html"><span class="brand-logo">
                            </span>
                        <h2 class="brand-text">MVS</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span><span class="badge badge-light-warning badge-pill ml-auto mr-1">2</span></a>
                    <ul class="menu-content">
                        <li class="active"><a class="d-flex align-items-center" href="dashboard-analytics.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="dashboard-ecommerce.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">Gender Master</span></a>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="app-todo.html"><i data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="Todo">Todo</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-calendar.html"><i data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="Calendar">Calendar</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-kanban.html"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Kanban">Kanban</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Invoice</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="List">List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Preview">Preview</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Add">Add</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-file-manager.html"><i data-feather="save"></i><span class="menu-title text-truncate" data-i18n="File Manager">File Manager</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="shopping-cart"></i><span class="menu-title text-truncate" data-i18n="eCommerce">eCommerce</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-ecommerce-shop.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Shop">Shop</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-ecommerce-details.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Details">Details</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-ecommerce-wishlist.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Wish List">Wish List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-ecommerce-checkout.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Checkout">Checkout</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">User</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-user-list.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="List">List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-user-view.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="View">View</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-user-edit.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Pages</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item" data-i18n="Authentication">Authentication</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-auth-login-v1.html" target="_blank"><span class="menu-item" data-i18n="LoginV1">Login v1</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-auth-login-v2.html" target="_blank"><span class="menu-item" data-i18n="LoginV2">Login v2</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-auth-register-v1.html" target="_blank"><span class="menu-item" data-i18n="RegisterV1">Register v1</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-auth-register-v2.html" target="_blank"><span class="menu-item" data-i18n="RegisterV2">Register v2</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-auth-forgot-password-v1.html" target="_blank"><span class="menu-item" data-i18n="ForgotPasswordV1">Forgot Password v1</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-auth-forgot-password-v2.html" target="_blank"><span class="menu-item" data-i18n="ForgotPasswordV2">Forgot Password v2</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-auth-reset-password-v1.html" target="_blank"><span class="menu-item" data-i18n="ResetPasswordV1">Reset Password v1</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-auth-reset-password-v2.html" target="_blank"><span class="menu-item" data-i18n="ResetPasswordV2">Reset Password v2</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-account-settings.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Account Settings">Account Settings</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-profile.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Profile">Profile</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-faq.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="FAQ">FAQ</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-knowledge-base.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Knowledge Base">Knowledge Base</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-pricing.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Pricing">Pricing</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item" data-i18n="Blog">Blog</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-blog-list.html"><span class="menu-item" data-i18n="List">List</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-blog-detail.html"><span class="menu-item" data-i18n="Detail">Detail</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-blog-edit.html"><span class="menu-item" data-i18n="Edit">Edit</span></a>
                                </li>
                            </ul>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item" data-i18n="Miscellaneous">Miscellaneous</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-misc-coming-soon.html" target="_blank"><span class="menu-item" data-i18n="Coming Soon">Coming Soon</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-not-authorized.html" target="_blank"><span class="menu-item" data-i18n="Not Authorized">Not Authorized</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-under-maintenance.html" target="_blank"><span class="menu-item" data-i18n="Maintenance">Maintenance</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-error.html" target="_blank"><span class="menu-item" data-i18n="Error">Error</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="User Interface">User Interface</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="ui-typography.html"><i data-feather="type"></i><span class="menu-title text-truncate" data-i18n="Typography">Typography</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="ui-colors.html"><i data-feather="droplet"></i><span class="menu-title text-truncate" data-i18n="Colors">Colors</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="ui-feather.html"><i data-feather="eye"></i><span class="menu-title text-truncate" data-i18n="Feather">Feather</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="credit-card"></i><span class="menu-title text-truncate" data-i18n="Card">Card</span><span class="badge badge-light-success badge-pill ml-auto mr-1">New</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="card-basic.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Basic</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-advance.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Advance">Advance</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-statistics.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Statistics">Statistics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-analytics.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-actions.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Card Actions">Card Actions</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="briefcase"></i><span class="menu-title text-truncate" data-i18n="Components">Components</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="component-alerts.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Alerts">Alerts</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-avatar.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Avatar">Avatar</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-badges.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Badges">Badges</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-breadcrumbs.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Breadcrumbs">Breadcrumbs</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-buttons.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Buttons">Buttons</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-carousel.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Carousel">Carousel</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-collapse.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Collapse">Collapse</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-divider.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Divider">Divider</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-dropdowns.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Dropdowns">Dropdowns</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-list-group.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="List Group">List Group</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-media-objects.html"><i data-feather="circle"></i><span class="menu-item">Media Objects</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-modals.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Modals">Modals</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-navs-component.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Navs Component">Navs Component</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-pagination.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Pagination">Pagination</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-pill-badges.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Pill Badges">Pill Badges</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-pills-component.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Pills Component">Pills Component</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-popovers.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Popovers">Popovers</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-progress.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Progress">Progress</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-spinner.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Spinner">Spinner</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-tabs-component.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Tabs Component">Tabs Component</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-timeline.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Timeline">Timeline</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-bs-toast.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Toasts">Toasts</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-tooltips.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Tooltips">Tooltips</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="Extensions">Extensions</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="ext-component-sweet-alerts.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Sweet Alert">Sweet Alert</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-blockui.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Block UI">BlockUI</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-toastr.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Toastr">Toastr</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-sliders.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Sliders">Sliders</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-drag-drop.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Drag &amp; Drop">Drag &amp; Drop</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-tour.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Tour">Tour</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-clipboard.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Clipboard">Clipboard</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-media-player.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Media player">Media Player</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-context-menu.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Context Menu">Context Menu</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-swiper.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="swiper">Swiper</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-tree.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Tree">Tree</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-ratings.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Ratings">Ratings</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-i18n.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="l18n">l18n</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="layout"></i><span class="menu-title text-truncate" data-i18n="Page Layouts">Page Layouts</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="layout-collapsed-menu.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Collapsed Menu">Collapsed Menu</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-boxed.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Layout Boxed">Layout Boxed</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-without-menu.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Without Menu">Without Menu</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-empty.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Layout Empty">Layout Empty</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-blank.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Layout Blank">Layout Blank</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Forms &amp; Tables">Forms &amp; Tables</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="copy"></i><span class="menu-title text-truncate" data-i18n="Form Elements">Form Elements</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="form-input.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Input">Input</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-input-groups.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Input Groups">Input Groups</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-input-mask.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Input Mask">Input Mask</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-textarea.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Textarea">Textarea</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-checkbox.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Checkbox">Checkbox</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-radio.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Radio">Radio</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-switch.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Switch">Switch</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-select.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Select">Select</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-number-input.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Number Input">Number Input</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-file-uploader.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="File Uploader">File Uploader</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-quill-editor.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Quill Editor">Quill Editor</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-date-time-picker.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Date &amp; Time Picker">Date &amp; Time Picker</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-layout.html"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="Form Layout">Form Layout</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-wizard.html"><i data-feather="package"></i><span class="menu-title text-truncate" data-i18n="Form Wizard">Form Wizard</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-validation.html"><i data-feather="check-circle"></i><span class="menu-title text-truncate" data-i18n="Form Validation">Form Validation</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-repeater.html"><i data-feather="rotate-cw"></i><span class="menu-title text-truncate" data-i18n="Form Repeater">Form Repeater</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="table-bootstrap.html"><i data-feather="server"></i><span class="menu-title text-truncate" data-i18n="Table">Table</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Datatable">Datatable</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="table-datatable-basic.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Basic</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="table-datatable-advanced.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Advanced">Advanced</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="table-ag-grid.html"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="ag-grid">agGrid Table</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Charts &amp; Maps">Charts &amp; Maps</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="pie-chart"></i><span class="menu-title text-truncate" data-i18n="Charts">Charts</span><span class="badge badge-light-danger badge-pill ml-auto mr-2">2</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="chart-apex.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Apex">Apex</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="chart-chartjs.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Chartjs">Chartjs</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="maps-leaflet.html"><i data-feather="map"></i><span class="menu-title text-truncate" data-i18n="Leaflet Maps">Leaflet Maps</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Misc">Misc</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="menu"></i><span class="menu-title text-truncate" data-i18n="Menu Levels">Menu Levels</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item" data-i18n="Second Level">Second Level 2.1</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item" data-i18n="Second Level">Second Level 2.2</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="#"><span class="menu-item" data-i18n="Third Level">Third Level 3.1</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="#"><span class="menu-item" data-i18n="Third Level">Third Level 3.2</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="disabled nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="eye-off"></i><span class="menu-title text-truncate" data-i18n="Disabled Menu">Disabled Menu</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="https://MVS.martvalley.com/"><i data-feather="folder"></i><span class="menu-title text-truncate" data-i18n="Documentation">Documentation</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="https://MVS.martvalley.com/"><i data-feather="life-buoy"></i><span class="menu-title text-truncate" data-i18n="Raise Support">Raise Support</span></a>
                </li>
            </ul>
        </div>
    </div>
  <!-- END: Main Menu-->
  
  @endauth
  <!-- BEGIN: Content-->
  <div class="app-content content ">
    <div class="content-overlay"></div>
    {{-- <div class="header-navbar-shadow"></div> --}}
    <div class="content-wrapper">
      <div class="content-header row"></div>
      <div class="content-body">
        @yield('content')

      </div>
    </div>
  </div>
  <!-- END: Content-->
  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>
  <!-- BEGIN: Footer-->

  <button class="btn btn-primary btn-icon scroll-top" type="button">
    <i data-feather="arrow-up"></i>
  </button>

  <script src="{{ asset('app-assets/vendors/js/vendors.min.js')}}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.select.min.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/jszip.min.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap.min.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js')}}"></script>
  <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
  <script src="{{asset('app-assets/js/scripts/extensions/ext-component-toastr.js')}}"></script>
  <script src="{{ asset('app-assets/vendors/js/extensions/moment.min.js')}}"></script>
  <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
  <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
  <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.time.js')}}"></script>
  <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/legacy.js')}}"></script>
  <script src="{{ asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
  <script src="{{ asset('app-assets/js/core/app-menu.js')}}"></script>
  <script src="{{ asset('app-assets/js/core/app.js')}}"></script>
  <script src="{{ asset('app-assets/js/scripts/pages/app-invoice-list.js')}}"></script>
  <script src="{{ asset('app-assets/js/scripts/forms/pickers/form-pickers.js')}}"></script>
  <script src="{{asset('app-assets/js/scripts/pages/app-invoice.js')}}"></script>
  <script src="{{asset('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
  <script src="{{asset('app-assets/js/scripts/components/components-collapse.js')}}"></script>
  <script src="{{asset('app-assets/vendors/js/extensions/polyfill.min.js')}}"></script>
  <script src="{{asset('app-assets/js/scripts/extensions/ext-component-sweet-alerts.js')}}"></script>
  <script src="{{asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.1/axios.min.js" integrity="sha512-zJYu9ICC+mWF3+dJ4QC34N9RA0OVS1XtPbnf6oXlvGrLGNB8egsEzu/5wgG90I61hOOKvcywoLzwNmPqGAdATA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="https://unpkg.com/vue-select@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script>
    $(window).on('load', function() {
        if (feather) {
          feather.replace({
            width: 14,
            height: 14
          });
        }

        $("input").not($(":button")).keypress(function (evt) {
            if (evt.keyCode == 13) {
                iname = $(this).val();
                if (iname !== 'Submit') {
                    var fields = $(this).parents('form:eq(0),body').find('button, input, textarea, select');
                    var index = fields.index(this);
                    if (index > -1 && (index + 1) < fields.length) {
                        fields.eq(index + 1).focus();
                    }
                    return false;
                }
            }
        });
        $("select").not($(":button")).keypress(function (evt) {
            if (evt.keyCode == 13) {
                iname = $(this).val();
                if (iname !== 'Submit') {
                    var fields = $(this).parents('form:eq(0),body').find('button, input, textarea, select');
                    var index = fields.index(this);
                    if (index > -1 && (index + 1) < fields.length) {
                        fields.eq(index + 1).focus();
                    }
                    return false;
                }
            }
        });
      })
      $("#retail").select2({
    placeholder: "Select an retail",
});
  </script>
  @yield('scripts')
  @stack('scripts')
</body>
<!-- END: Body-->

</html>