<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v5.0.0
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2024 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Kavasam Dashbord</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <!-- <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png"> -->
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png"> -->
    <link rel="icon" type="image/png"  href="../../assets/logo-main.svg">
   
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <!-- <link rel="stylesheet" href="node_modules/simplebar/dist/simplebar.css"> -->
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <!-- <link href="css/examples.css" rel="stylesheet"> -->
    <!-- We use those styles to style Carbon ads and CoreUI PRO banner, you should remove them in your application.-->
    <!-- <link href="css/ads.css" rel="stylesheet"> -->
    <script src="js/config.js"></script>
    <script src="js/color-modes.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.0/dist/css/themes/bootstrap/bootstrap.min.css" rel="stylesheet" integrity="sha384-/RDR4U8w9nL193EPIaVcrk6XQ4e22oyREAvWpltey9f8FUsM4MyhP+ExTvt4O6qk" crossorigin="anonymous">
    <link rel="stylesheet"href="css/kavasam.css">
    <!-- <link href="node_modules/@coreui/chartjs/dist/css/coreui-chartjs.css" rel="stylesheet"> -->
  </head>
  <body >
  
  
<?php
session_start();

if (!isset($_SESSION['access_token'])) {
    
    header('Location: ../index.php');
    exit();
}
?>




    <div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
     


      <!-- ========== Start asite ========== -->
      <div class="sidebar-header border-bottom">
        <div class="sidebar-brand">
          <img src="../../assets/kavasamlabs.svg" class="sidebar-brand-full"  width="200px" height="100px"  alt="kavaram logo">
          <!-- <svg class="sidebar-brand-full" width="88" height="32" alt="CoreUI Logo">
            <use xlink:href="../../assets/logo-main.svg#full"></use>
          </svg>
          <svg class="sidebar-brand-narrow" width="32" height="32" alt="CoreUI Logo">
            <use xlink:href="../../assets/logo-main.svg.svg#signet"></use> -->
          </svg>
        </div>
        <button class="btn-close d-lg-none" type="button" data-coreui-dismiss="offcanvas" data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item"><a class="nav-link" href="index.php">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-speedometer"></use>
            </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <li class="nav-title">Mechine</li>
        <li class="nav-item"><a class="nav-link" href="colors.html">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-drop"></use>
            </svg> Cloud server</a></li>
        <li class="nav-item"><a class="nav-link" href="challange.php">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-pencil"></use>
            </svg> Challange Mechine</a></li>
        <li class="nav-title">Leaderboard</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-puzzle"></use>
            </svg> Codeing Labs</a>
          <ul class="nav-group-items compact">
            <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>Kavasam Palyers</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Breadcrumb</a></li>
            <li class="nav-item"><a class="nav-link" href="base/cards.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Cards</a></li>
            <li class="nav-item"><a class="nav-link" href="base/carousel.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Carousel</a></li>
            <li class="nav-item"><a class="nav-link" href="base/collapse.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Collapse</a></li>
            <li class="nav-item"><a class="nav-link" href="base/list-group.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> List group</a></li>
            <li class="nav-item"><a class="nav-link" href="base/navs-tabs.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Navs &amp; Tabs</a></li>
            <li class="nav-item"><a class="nav-link" href="base/pagination.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Pagination</a></li>
            <li class="nav-item"><a class="nav-link" href="base/placeholders.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Placeholders</a></li>
            <li class="nav-item"><a class="nav-link" href="base/popovers.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Popovers</a></li>
            <li class="nav-item"><a class="nav-link" href="base/progress.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Progress</a></li>
            <li class="nav-item"><a class="nav-link" href="base/spinners.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Spinners</a></li>
            <li class="nav-item"><a class="nav-link" href="base/tables.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Tables</a></li>
            <li class="nav-item"><a class="nav-link" href="base/tooltips.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Tooltips</a></li> -->
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-cursor"></use>
            </svg>Hacking Labs</a>
          <ul class="nav-group-items compact">
            <li class="nav-item"><a class="nav-link" href="buttons/buttons.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Buttons</a></li>
            <li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Buttons Group</a></li>
            <li class="nav-item"><a class="nav-link" href="buttons/dropdowns.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Dropdowns</a></li>
          </ul>
        </li>
      



        <li class="nav-title">Supports</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-star"></use>
            </svg> Pages</a>
          <ul class="nav-group-items compact">
            <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                </svg> Login</a></li>
            <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                </svg> Register</a></li>
            <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bug"></use>
                </svg> Error 404</a></li>
            <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bug"></use>
                </svg> Error 500</a></li>
          </ul>
        </li>
 
      </ul>
      <!-- ========== End asite ========== -->
      
      <div class="sidebar-footer border-top d-none d-md-flex">     
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
      </div>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100">
      <header class="header header-sticky p-0 mb-4">
        <div class="container-fluid border-bottom px-4">
          <button class="header-toggler" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()" style="margin-inline-start: -14px;">
            <svg class="icon icon-lg">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-menu"></use>
            </svg>
          </button>
          <ul class="header-nav d-none d-lg-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
          </ul>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-list-rich"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                </svg></a></li>
          </ul>
          <ul class="header-nav">
            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown">
              <button class="btn btn-link nav-link py-2 px-2 d-flex align-items-center" type="button" aria-expanded="false" data-coreui-toggle="dropdown">
                <svg class="icon icon-lg theme-icon-active">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                </svg>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem;">
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="light">
                    <svg class="icon icon-lg me-3">
                      <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-sun"></use>
                    </svg>Light
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="dark">
                    <svg class="icon icon-lg me-3">
                      <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-moon"></use>
                    </svg>Dark
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center active" type="button" data-coreui-theme-value="auto">
                    <svg class="icon icon-lg me-3">
                      <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                    </svg>Auto
                  </button>
                </li>
              </ul>
            </li>
            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link py-0 pe-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div></a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2">Account</div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                  </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-task"></use>
                  </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-comment-square"></use>
                  </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold my-2">
                  <div class="fw-semibold">Settings</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                  </svg> Profile</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-credit-card"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="logout.php">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                  </svg> Logout kavasam</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="container-fluid px-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0">
              <li class="breadcrumb-item"><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active"><span>Dashboard</span>
              </li>
            </ol>
          </nav>
        </div>
      </header>
    <!-- ========== Start contetn of page  ========== -->
    
    <div class="body flex-grow-1">
        <div class="container-lg px-4">
       
         
          </div>
          <!-- /.row-->
     
          <!-- /.card-->
     
          <!-- /.row-->
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4">
                <div class="card-header">Traffic &amp; Sales</div>
                <div class="card-body">
                
                  <!-- /.row--><br>
                  <div class="table-responsive">
                    <table class="table border mb-0">
                      <thead class="fw-semibold text-nowrap">
                        <tr class="align-middle">
                          <th class="bg-body-secondary text-center">
                            <svg class="icon">
                              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-people"></use>
                            </svg>
                          </th>
                          <th class="bg-body-secondary">User</th>
                          <th class="bg-body-secondary text-center">Gitlab Id</th>
                          <th class="bg-body-secondary">Email</th>
                          <th class="bg-body-secondary text-center">Ip Address </th>
                          <th class="bg-body-secondary">Activity</th>
                          <th class="bg-body-secondary"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
$db = new mysqli('localhost', 'root', '', 'kavasam');

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Fetch data from the database
$sql = "SELECT * FROM users";
$result = mysqli_query($db, $sql);

// Step 3: Loop through the data and display each row in the table
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='align-middle'>";
        
        echo "<td class='text-center'><div class='avatar avatar-md'><img class='avatar-img' src='" . $row['avatar_url'] . "' alt='user@email.com'><span class='avatar-status bg-success'></span></div></td>";
        
        echo "<td class=''><div class='text-nowrap'>" . $row['name'] . "</div><div class='small text-body-secondary text-nowrap'><span>New</span> | Registered: " . $row['gitlab_id'] . "</div></td>";
        echo "<td class='text-center'><div  class='small text-body-secondary'></div><div class='fw-semibold text-nowrap'> " . $row['gitlab_id'] . "</div></td>";
        echo "<td class=''><div class='fw-semibold text-nowrap'> " . $row['email'] . "</div></td>";
        echo "<td class='text-center'><div class='fw-semibold text-nowrap'> " . $row['ip_address'] . "</div></td>";
        // Add more table cells as needed...
        echo "<td class=''><div  class='small text-body-secondary'>Last login </div><div class='fw-semibold text-nowrap'> " . $row['last_login'] . "</div></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($db);
                        
                        
                        ?>
                        <tr class="align-middle">
                          <td class="text-center">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/1.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                          </td>
                          <td>
                            <div class="text-nowrap">Yiorgos Avraamu</div>
                            <div class="small text-body-secondary text-nowrap"><span>New</span> | Registered: Jan 1, 2023</div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/flag.svg#cif-us"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="d-flex justify-content-between align-items-baseline">
                              <div class="fw-semibold">50%</div>
                              <div class="text-nowrap small text-body-secondary ms-3">Jun 11, 2023 - Jul 10, 2023</div>
                            </div>
                            <div class="progress progress-thin">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/brand.svg#cib-cc-mastercard"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-body-secondary">Last login</div>
                            <div class="fw-semibold text-nowrap">10 sec ago</div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                            </div>
                          </td>
                        </tr>
                        <!-- <tr class="align-middle">
                          <td class="text-center">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/2.jpg" alt="user@email.com"><span class="avatar-status bg-danger"></span></div>
                          </td>
                          <td>
                            <div class="text-nowrap">Avram Tarasios</div>
                            <div class="small text-body-secondary text-nowrap"><span>Recurring</span> | Registered: Jan 1, 2023</div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/flag.svg#cif-br"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="d-flex justify-content-between align-items-baseline">
                              <div class="fw-semibold">10%</div>
                              <div class="text-nowrap small text-body-secondary ms-3">Jun 11, 2023 - Jul 10, 2023</div>
                            </div>
                            <div class="progress progress-thin">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/brand.svg#cib-cc-visa"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-body-secondary">Last login</div>
                            <div class="fw-semibold text-nowrap">5 minutes ago</div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                            </div>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-center">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/3.jpg" alt="user@email.com"><span class="avatar-status bg-warning"></span></div>
                          </td>
                          <td>
                            <div class="text-nowrap">Quintin Ed</div>
                            <div class="small text-body-secondary text-nowrap"><span>New</span> | Registered: Jan 1, 2023</div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/flag.svg#cif-in"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="d-flex justify-content-between align-items-baseline">
                              <div class="fw-semibold">74%</div>
                              <div class="text-nowrap small text-body-secondary ms-3">Jun 11, 2023 - Jul 10, 2023</div>
                            </div>
                            <div class="progress progress-thin">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/brand.svg#cib-cc-stripe"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-body-secondary">Last login</div>
                            <div class="fw-semibold text-nowrap">1 hour ago</div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                            </div>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-center">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"><span class="avatar-status bg-secondary"></span></div>
                          </td>
                          <td>
                            <div class="text-nowrap">Enéas Kwadwo</div>
                            <div class="small text-body-secondary text-nowrap"><span>New</span> | Registered: Jan 1, 2023</div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/flag.svg#cif-fr"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="d-flex justify-content-between align-items-baseline">
                              <div class="fw-semibold">98%</div>
                              <div class="text-nowrap small text-body-secondary ms-3">Jun 11, 2023 - Jul 10, 2023</div>
                            </div>
                            <div class="progress progress-thin">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/brand.svg#cib-cc-paypal"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-body-secondary">Last login</div>
                            <div class="fw-semibold text-nowrap">Last month</div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                            </div>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-center">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                          </td>
                          <td>
                            <div class="text-nowrap">Agapetus Tadeáš</div>
                            <div class="small text-body-secondary text-nowrap"><span>New</span> | Registered: Jan 1, 2023</div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/flag.svg#cif-es"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="d-flex justify-content-between align-items-baseline">
                              <div class="fw-semibold">22%</div>
                              <div class="text-nowrap small text-body-secondary ms-3">Jun 11, 2023 - Jul 10, 2023</div>
                            </div>
                            <div class="progress progress-thin">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/brand.svg#cib-cc-apple-pay"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-body-secondary">Last login</div>
                            <div class="fw-semibold text-nowrap">Last week</div>
                          </td>
                          <td>
                            <div class="dropdown dropup">
                              <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                            </div>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-center">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"><span class="avatar-status bg-danger"></span></div>
                          </td>
                          <td>
                            <div class="text-nowrap">Friderik Dávid</div>
                            <div class="small text-body-secondary text-nowrap"><span>New</span> | Registered: Jan 1, 2023</div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/flag.svg#cif-pl"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="d-flex justify-content-between align-items-baseline">
                              <div class="fw-semibold">43%</div>
                              <div class="text-nowrap small text-body-secondary ms-3">Jun 11, 2023 - Jul 10, 2023</div>
                            </div>
                            <div class="progress progress-thin">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/brand.svg#cib-cc-amex"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-body-secondary">Last login</div>
                            <div class="fw-semibold text-nowrap">Yesterday</div>
                          </td>
                          <td>
                            <div class="dropdown dropup">
                              <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                            </div>
                          </td>
                        </tr> -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- /.row-->
        </div>
      </div>



    <!-- ========== End contetn of page  ========== -->
    
      <footer class="footer px-4">
        <div><a href="https://coreui.io">Dashboard </a><a href="#">kavasam</a> &copy; 2024 kavasamLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">kavasam Labs </a></div>
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
    <script src="node_modules/simplebar/dist/simplebar.min.js"></script>
    <script>
      const header = document.querySelector('header.header');
      
      document.addEventListener('scroll', () => {
        if (header) {
          header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
        }
      });
      
    </script>
    <!-- Plugins and scripts required by this view-->
    <!-- <script src="node_modules/chart.js/dist/chart.umd.js"></script>
    <script src="node_modules/@coreui/chartjs/dist/js/coreui-chartjs.js"></script>
    <script src="node_modules/@coreui/utils/dist/umd/index.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Xjrv08HR1c2s0dxQXZLAK1a0A+er+hbRmumMrQbmr0XmSF6/j09KKC6RuwDi3vKM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script> 
    </script>
  </body>
</html>