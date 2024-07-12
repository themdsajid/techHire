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

             <!-- Employer 1 -->
             <div class="col-md-6 col-xxl-6">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                    
                    
                    <table class="table">
                      
                      <tbody class="table-border-bottom-0">
                      <tr>
                          <th><h5>Employer 1</h5></th>
                          <td></td>
                        </tr>
                      <tr>
                          <th>Company Name</th>
                          <td>{{$employmentData->company1}}</td>
                        </tr>
                        <tr>
                        <tr>
                        <th>Address</th>
                          <td> {{$employmentData->address1}}</td>
                        </tr>
                        <tr>
                       
                        <th>City</th>
                          <td>{{$employmentData->city1}}</td>
                        </tr>
                        <tr>
                        <th>Postal Code</th>
                          <td>{{$employmentData->post_code1}}</td>
                        </tr>
                        <tr>
                        <th>State</th>
                          <td>{{$employmentData->state1}}</td>
                        </tr>
                        
                        <tr>
                        <th>Company Phone No.</th>
                          <td>{{$employmentData->cphone1}}</td>
                        </tr>
                        <tr>
                        <th>Designation</th>
                          <td>{{$employmentData->designation1}}</td>
                        </tr>
                        <tr>
                          <th>Department</th>
                          <td>{{$employmentData->department1}}</td>
                        </tr>
                        <tr>
                        <th>Remuneration(CTC-PA)</th>
                          <td>{{$employmentData->ctc1}}</td>
                        </tr>
                        <tr>
                        <th>Employee ID</th>
                          <td>{{$employmentData->empid1}}</td>
                        </tr>
                        <tr>
                        <th>Date of Joining</th>
                          <td>{{$employmentData->doj1}}</td>
                        </tr>
                        <tr>
                        <th>Date of Exit</th>
                          <td>{{$employmentData->doe1}}</td>
                        </tr>
                        <tr>
                        
                        
                      
                      </tbody>
                    </table>
                    </div>
                    
                  </div>
                </div>
               


                 <!-- Upgrade Plan -->
                 <div class="col-md-6 col-xxl-6">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                    <table class="table">
                      
                      <tbody class="table-border-bottom-0">
                      
                        <th>Reason For Leaving</th>
                          <td>{{$employmentData->reason1}}</td>
                        </tr>
                        <tr>
                      <th>Employement Type</th>
                          <td>{{$employmentData->emp_type1}}</td>
                        </tr>
                        <tr>
                        <th>Nature of Employement</th>
                          <td>{{$employmentData->emp_nature1}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 1 Name</th>
                          <td>{{$employmentData->supervisor1_name1}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 1 Phone</th>
                          <td>{{$employmentData->supervisor1_phone1}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 1 Email ID</th>
                          <td>{{$employmentData->supervisor2_phone1}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 2 Name</th>
                          <td>{{$employmentData->supervisor2_name1}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 2 Phone</th>
                          <td>{{$employmentData->supervisor2_phone1}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 2 Email ID</th>
                          <td>{{$employmentData->supervisor2_email1}}</td>
                        </tr>
                        <th>Experience Letter</th>
                          <td><a href="{{ asset('exp_letter1/' . $employmentData->exp_letter1) }}" download="">  
                              <button type="button" class="btn btn-primary btn-fab demo waves-effect waves-light">
                            <span class="tf-icons ri-check-double-line ri-16px me-2"></span>DOWNLOAD
                          </button>
                          </a></td>
                        </tr>
                        <th>Offer Letter</th>
                          <td><a href="{{ asset('offer_letter1/' . $employmentData->offer_letter1) }}" download="">  
                              <button type="button" class="btn btn-primary btn-fab demo waves-effect waves-light">
                            <span class="tf-icons ri-check-double-line ri-16px me-2"></span>DOWNLOAD
                          </button>
                          </a></td>
                        </tr>
                        <th>Salary Slips</th>
                          <td><a href="{{ asset('last_salary1/' . $employmentData->last_salary1) }}" download="">  
                              <button type="button" class="btn btn-primary btn-fab demo waves-effect waves-light">
                            <span class="tf-icons ri-check-double-line ri-16px me-2"></span>DOWNLOAD
                          </button>
                          </a></td>
                        </tr>
			
		                  </tbody>
                   </table>
               
                    </div>
                    
                  </div>
                </div>
              <!--/ Employer 1 -->


             <!-- Employer 2 -->
             <div class="col-md-6 col-xxl-6">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                    
                    
                    <table class="table">
                      
                      <tbody class="table-border-bottom-0">
                      <tr>
                          <th><h5>Employer 2</h5></th>
                          <td></td>
                        </tr>
                      <tr>
                          <th>Company Name</th>
                          <td>{{$employmentData->company2}}</td>
                        </tr>
                        <tr>
                        <tr>
                        <th>Address</th>
                          <td> {{$employmentData->address2}}</td>
                        </tr>
                        <tr>
                       
                        <th>City</th>
                          <td>{{$employmentData->city2}}</td>
                        </tr>
                        <tr>
                        <th>Postal Code</th>
                          <td>{{$employmentData->post_code2}}</td>
                        </tr>
                        <tr>
                        <th>State</th>
                          <td>{{$employmentData->state2}}</td>
                        </tr>
                        
                        <tr>
                        <th>Company Phone No.</th>
                          <td>{{$employmentData->cphone2}}</td>
                        </tr>
                        <tr>
                        <th>Designation</th>
                          <td>{{$employmentData->designation2}}</td>
                        </tr>
                        <tr>
                          <th>Department</th>
                          <td>{{$employmentData->department2}}</td>
                        </tr>
                        <tr>
                        <th>Remuneration(CTC-PA)</th>
                          <td>{{$employmentData->ctc2}}</td>
                        </tr>
                        <tr>
                        <th>Employee ID</th>
                          <td>{{$employmentData->empid2}}</td>
                        </tr>
                        <tr>
                        <th>Date of Joining</th>
                          <td>{{$employmentData->doj2}}</td>
                        </tr>
                        <tr>
                        <th>Date of Exit</th>
                          <td>{{$employmentData->doe2}}</td>
                        </tr>
                        <tr>
                        
                        
                      
                      </tbody>
                    </table>
                    </div>
                    
                  </div>
                </div>
               


                 <!-- Upgrade Plan -->
                 <div class="col-md-6 col-xxl-6">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                    <table class="table">
                      
                      <tbody class="table-border-bottom-0">
                      
                        <th>Reason For Leaving</th>
                          <td>{{$employmentData->reason2}}</td>
                        </tr>
                        <tr>
                      <th>Employement Type</th>
                          <td>{{$employmentData->emp_type2}}</td>
                        </tr>
                        <tr>
                        <th>Nature of Employement</th>
                          <td>{{$employmentData->emp_nature2}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 1 Name</th>
                          <td>{{$employmentData->supervisor1_name2}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 1 Phone</th>
                          <td>{{$employmentData->supervisor1_phone2}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 1 Email ID</th>
                          <td>{{$employmentData->supervisor2_phone2}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 2 Name</th>
                          <td>{{$employmentData->supervisor2_name2}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 2 Phone</th>
                          <td>{{$employmentData->supervisor2_phone2}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 2 Email ID</th>
                          <td>{{$employmentData->supervisor2_email2}}</td>
                        </tr>
                        <th>Experience Letter</th>
                          <td><a href="{{ asset('exp_letter2/' . $employmentData->exp_letter2) }}" download="">  
                              <button type="button" class="btn btn-primary btn-fab demo waves-effect waves-light">
                            <span class="tf-icons ri-check-double-line ri-16px me-2"></span>DOWNLOAD
                          </button>
                          </a></td>
                        </tr>
                        <th>Offer Letter</th>
                          <td><a href="{{ asset('offer_letter2/' . $employmentData->offer_letter2) }}" download="">  
                              <button type="button" class="btn btn-primary btn-fab demo waves-effect waves-light">
                            <span class="tf-icons ri-check-double-line ri-16px me-2"></span>DOWNLOAD
                          </button>
                          </a></td>
                        </tr>
                        <th>Salary Slips</th>
                          <td><a href="{{ asset('last_salary2/' . $employmentData->last_salary2) }}" download="">  
                              <button type="button" class="btn btn-primary btn-fab demo waves-effect waves-light">
                            <span class="tf-icons ri-check-double-line ri-16px me-2"></span>DOWNLOAD
                          </button>
                          </a></td>
                        </tr>
			
		                  </tbody>
                   </table>
               
                    </div>
                    
                  </div>
                </div>
              <!--/ Employer 2 -->


              
             <!-- Employer 3 -->
             <div class="col-md-6 col-xxl-6">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                    
                    
                    <table class="table">
                      
                      <tbody class="table-border-bottom-0">
                      <tr>
                          <th><h5>Employer 3</h5></th>
                          <td></td>
                        </tr>
                      <tr>
                          <th>Company Name</th>
                          <td>{{$employmentData->company3}}</td>
                        </tr>
                        <tr>
                        <tr>
                        <th>Address</th>
                          <td> {{$employmentData->address3}}</td>
                        </tr>
                        <tr>
                       
                        <th>City</th>
                          <td>{{$employmentData->city3}}</td>
                        </tr>
                        <tr>
                        <th>Postal Code</th>
                          <td>{{$employmentData->post_code3}}</td>
                        </tr>
                        <tr>
                        <th>State</th>
                          <td>{{$employmentData->state3}}</td>
                        </tr>
                        
                        <tr>
                        <th>Company Phone No.</th>
                          <td>{{$employmentData->cphone3}}</td>
                        </tr>
                        <tr>
                        <th>Designation</th>
                          <td>{{$employmentData->designation3}}</td>
                        </tr>
                        <tr>
                          <th>Department</th>
                          <td>{{$employmentData->department3}}</td>
                        </tr>
                        <tr>
                        <th>Remuneration(CTC-PA)</th>
                          <td>{{$employmentData->ctc3}}</td>
                        </tr>
                        <tr>
                        <th>Employee ID</th>
                          <td>{{$employmentData->empid3}}</td>
                        </tr>
                        <tr>
                        <th>Date of Joining</th>
                          <td>{{$employmentData->doj3}}</td>
                        </tr>
                        <tr>
                        <th>Date of Exit</th>
                          <td>{{$employmentData->doe3}}</td>
                        </tr>
                        <tr>
                        
                        
                      
                      </tbody>
                    </table>
                    </div>
                    
                  </div>
                </div>
               


                 <!-- Upgrade Plan -->
                 <div class="col-md-6 col-xxl-6">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                    <table class="table">
                      
                      <tbody class="table-border-bottom-0">
                      
                        <th>Reason For Leaving</th>
                          <td>{{$employmentData->reason3}}</td>
                        </tr>
                        <tr>
                      <th>Employement Type</th>
                          <td>{{$employmentData->emp_type3}}</td>
                        </tr>
                        <tr>
                        <th>Nature of Employement</th>
                          <td>{{$employmentData->emp_nature3}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 1 Name</th>
                          <td>{{$employmentData->supervisor1_name3}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 1 Phone</th>
                          <td>{{$employmentData->supervisor1_phone3}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 1 Email ID</th>
                          <td>{{$employmentData->supervisor2_phone3}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 2 Name</th>
                          <td>{{$employmentData->supervisor2_name3}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 2 Phone</th>
                          <td>{{$employmentData->supervisor2_phone3}}</td>
                        </tr>
                        <tr>
                        <th>Supervisor 2 Email ID</th>
                          <td>{{$employmentData->supervisor2_email3}}</td>
                        </tr>
                        <tr>
                        <th>Experience Letter</th>
                          <td><a href="{{ asset('exp_letter3/' . $employmentData->exp_letter3) }}" download="">  
                              <button type="button" class="btn btn-primary btn-fab demo waves-effect waves-light">
                            <span class="tf-icons ri-check-double-line ri-16px me-2"></span>DOWNLOAD
                          </button>
                          </a></td>
                        </tr>
                        <tr>
                        <th>Offer Letter</th>
                          <td><a href="{{ asset('offer_letter3/' . $employmentData->offer_letter3) }}" download="">  
                              <button type="button" class="btn btn-primary btn-fab demo waves-effect waves-light">
                            <span class="tf-icons ri-check-double-line ri-16px me-2"></span>DOWNLOAD
                          </button>
                          </a></td>
                        </tr>
                        <tr>
                          <th>Salary Slips</th>
                            <td><a href="{{ asset('last_salary3/' . $employmentData->last_salary3) }}" download="">  
                                <button type="button" class="btn btn-primary btn-fab demo waves-effect waves-light">
                              <span class="tf-icons ri-check-double-line ri-16px me-2"></span>DOWNLOAD
                            </button>
                            </a></td>
                        </tr>
			
		                  </tbody>
                   </table>
               
                    </div>
                    
                  </div>
                </div>
              <!--/ Employer 3 -->


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
