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
                          <th>Full Name</th>
                            <td>{{$vuewuser->username}} {{$vuewuser->m_name}} {{$vuewuser->l_name}}</td>
                          </tr>
                          <tr>
                          <tr>
                          <th>Contact Number</th>
                            <td> {{$vuewuser->phone}}</td>
                          </tr>
                          <tr>
                         
                          <th>Email ID</th>
                            <td>{{$vuewuser->email}}</td>
                          </tr>
                          <tr>
                          <th>Date of Birth</th>
                            <td>{{$vuewuser->dob}}</td>
                          </tr>
                          <tr>
                          <th>Gender</th>
                            <td>{{$vuewuser->gender}}</td>
                          </tr>
                          
                          <tr>
                          <th>Marital Status</th>
                            <td>{{$vuewuser->unmarried}}</td>
                          </tr>
                          <tr>
                          <th>Father's Name</th>
                            <td>{{$vuewuser->f_name}}</td>
                          </tr>
                          <tr>
                          <th>Identification Number</th>
                            <td>{{$vuewuser->identification}}</td>
                          </tr>
                          <tr>
                          <th>Identification Type</th>
                            <td>{{$vuewuser->identification_type}}</td>
                          </tr>
                          <tr>
                          <th>House/Flat No.</th>
                            <td>{{$vuewuser->hose_no}}</td>
                          </tr>
                          <tr>
                          <th>Building Number & Name</th>
                            <td>{{$vuewuser->building}}</td>
                          </tr>
                          <tr>
                          <th>Cross/Lane/Main Name</th>
                            <td>{{$vuewuser->lane}}</td>
                          </tr>
                          <tr>
                          <th>Area/Sector Name</th>
                            <td>{{$vuewuser->sector}}</td>
                          </tr>
                          <tr>
                          <tr>
                          <th>District Name</th>
                            <td> {{$vuewuser->district}}</td>
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
                    
                    <table class="table">
                        
                        <tbody class="table-border-bottom-0">
                          <tr>
                             <th>City</th>
                            <td>{{$vuewuser->city}}</td>
                          </tr>
                          <tr>
                          <th>Postal Code</th>
                            <td>{{$vuewuser->postal}}</td>
                          </tr>
                          <tr>
                          <th>State</th>
                            <td>{{$vuewuser->state}}</td>
                          </tr>
                          
                          <tr>
                          <th>Prominent Land Mark</th>
                            <td>{{$vuewuser->land_mark}}</td>
                          </tr>
                          <tr>
                          <tr>
                          <th>Nationality</th>
                            <td>{{$vuewuser->contery}}</td>
                          </tr>
                          <tr>

                          <th>Period of Stay</th>
                            <td>{{$vuewuser->period_stay}}</td>
                          </tr>
                          <tr>
                          <th>Contact Number 1</th>
                            <td>{{$vuewuser->contact}}</td>
                          </tr>
                          <tr>
                          <th>Contact Number 2</th>
                            <td>{{$vuewuser->callnuber}}</td>
                          </tr>
                          <tr>
                          <th>Aadhar Card</th>
                            <td><a href="{{ asset('aadhar/' . $vuewuser->aadhar) }}" download="">  
                                <button type="button" class="btn btn-primary btn-fab demo waves-effect waves-light">
                              <span class="tf-icons ri-check-double-line ri-16px me-2"></span>DOWNLOAD
                            </button>
                            </a></td>
                        </tr>
                        <tr>
                          <th>PAN Card</th>
                            <td><a href="{{ asset('pancerd/' . $vuewuser->pancerd) }}" download="">  
                                <button type="button" class="btn btn-primary btn-fab demo waves-effect waves-light">
                              <span class="tf-icons ri-check-double-line ri-16px me-2"></span>DOWNLOAD
                            </button>
                            </a></td>
                        </tr>
                        <tr>
                          <th>Rent Aggreement (If Rented)</th>
                            <td><a href="{{ asset('attech/' . $vuewuser->attach_aggrment) }}" download="">  
                                <button type="button" class="btn btn-primary btn-fab demo waves-effect waves-light">
                              <span class="tf-icons ri-check-double-line ri-16px me-2"></span>DOWNLOAD
                            </button>
                            </a></td>
                        </tr>
                          
                            <th>Entry Date:</th>
                            <td>{{$vuewuser->created_at}}</td>
                          </tr>
                          
                        
                        </tbody>
                      </table>
                    
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
