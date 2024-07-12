<?php 
$compny = DB::table('users')->where('role','company')->get();
?>
<!doctype html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Employee Details</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/remixicon/remixicon.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        @include('admin.layout.menusidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @include('admin.layout.navbar')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row g-6">
                <!-- Transactions -->
                <div class="col-md-6 col-xxl-6">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                    
                      <table class="table">
                        
                        <tbody class="table-border-bottom-0">
                        <tr>
                            <th>Employee ID:</th>
                            <td>{{$vuewuser->emp_id}}</td>
                          </tr>
                          <tr>
                          <tr>
                            <th>Company Name:</th>
                            <td> {{$vuewuser->company->name}}</td>
                          </tr>
                          <tr>
                         
                            <th>Employee Name:</th>
                            <td>{{$vuewuser->emp_name}}</td>
                          </tr>
                          <tr>
                            <th>Email Address:</th>
                            <td>{{$vuewuser->email}}</td>
                          </tr>
                          <tr>
                            <th>Phone Number:</th>
                            <td>{{$vuewuser->phone}}</td>
                          </tr>
                          
                          <tr>
                            <th>Address:</th>
                            <td>{{$vuewuser->address}}</td>
                          </tr>
                          <tr>
                            <th>Entry Date:</th>
                            <td>{{$vuewuser->created_at}}</td>
                          </tr>
                          
                        
                        </tbody>
                      </table>
                    </div>
               
                  </div>
                </div>
                <!--/ Transactions -->

                <!-- Upgrade Plan -->
                <div class="col-md-6 col-xxl-6">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                   
                    @if (isset($vuewuser) && $vuewuser->images)
                @php
                    $pdfs = explode(',', $vuewuser->images);
                @endphp
                @foreach ($pdfs as $pdf)
                    @php
                        // Check if the PDF file exists
                        $pdfPath = public_path('/pdf/' . $pdf);
                    @endphp
                    @if (file_exists($pdfPath))
                        <embed src="{{ asset('/pdf/' . $pdf) }}" type="application/pdf" width="100%" height="550px" />
                    @else
                        <p>PDF file not found: {{ $pdf }}</p>
                    @endif
                @endforeach
            @else
                <p>No PDF files found for display.</p>
            @endif


                    </div>
                    
                  </div>
                </div>
                <!--/ Upgrade Plan -->


              <!-- /Modal -->
              <script>
                // Check selected custom option
                window.Helpers.initCustomOptionCheck();
              </script>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('admin.layout.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/cards-advance.js"></script>
    <script src="../../assets/js/modal-add-new-cc.js"></script>
  </body>
</html>
