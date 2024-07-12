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

    <title>{{isset($edit) ? 'Edit Academics' : 'Add Academics' }}</title>

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
    <link rel="stylesheet" href="../../assets/vendor/libs/bs-stepper/bs-stepper.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/jquery-timepicker/jquery-timepicker.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/pickr/pickr-themes.css" />


    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/jquery-timepicker/jquery-timepicker.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/pickr/pickr-themes.css" />

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
              <!-- Default -->
              <div class="row">
                <div class="col-12">
                  <h5>Default</h5>
                </div>

                <!-- Default Wizard -->
                <div class="col-12 mb-6">
                  <div class="bs-stepper wizard-numbered mt-2">
                    <div class="bs-stepper-header">
                      
                      <div class="step" data-target="#personal-info">
                        <button type="button" class="step-trigger">
                          <span class="bs-stepper-circle"><i class="ri-check-line"></i></span>
                          <span class="bs-stepper-label">
                            <span class="bs-stepper-number">02</span>
                            <span class="d-flex flex-column gap-1 ms-2">
                              <span class="bs-stepper-title">Education History</span>
                              <span class="bs-stepper-subtitle">Add education info</span>
                            </span>
                          </span>
                        </button>
                      </div>
                  
                      
                    </div>
                    <div class="bs-stepper-content">
                     
                         <form  method="POST" action="{{ isset($edit) ? route('employe.update', $edit->id) : route('save.edu') }}" enctype="multipart/form-data">
                          @csrf
                          @if(isset($edit))
                          @method('PUT')
                          @endif


                        <input type="hidden" name="empid" 
                        value="{{ Auth::user()->email }}">

                        <!-- Education History-->
                        <div id="personal-info" class="content">
                          <div class="content-header mb-4">
                            <h6 class="mb-0">Education History</h6>
                            <small>Enter your education details</small>
                          </div>

                          <div class="row g-5">
                            <div class="col-sm-12">
                              <div class="input-group">
                                 <span class="input-group-text">10th Std</span>
                                 <input type="text" aria-label="First 
                                 name"  class="form-control" 
                                 value="{{ isset($edit) ? $edit->board10th : '' }}"
                                 placeholder="University /Board Name" name="board10th"/>
                                 <div class="form-floating form-floating-outline">

                                 <input class="form-control form-floating 
                                 form-floating-outline" type="date" id="html5-date-input"  name="passing10" value="{{ isset($edit) ? $edit->passing10 : '' }}"/>
                                 <label for="district">Year Of Passing</label>
                               </div>
                           </div>                  
                         </div>

                
                            <div class="col-sm-12">
                               <div class="input-group">
                                  <span class="input-group-text">12th Std</span>
                                  <input type="text" 
                                  aria-label="First" name ="board12th" class="form-control" placeholder="University /Board Name " value="{{ isset($edit) ? $edit->board12th : '' }}"/>
                                  <div class="form-floating form-floating-outline" >

                                    <input class="form-control form-floating form-floating-outline" type="date"  id="html5-date-input" name="passing12"/>
                                    <label for="district" value="{{ isset($edit) ? $edit->passing12 : '' }}">Year Of Passing</label>
                                  </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="mb-4">
                                <label for="formFileMultiple" class="form-label">Attach 10th Marksheet (PDF)
                                </label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple="" name="pdf10th" value="{{ isset($edit) ? $edit->pdf10th : '' }}">
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="mb-4">
                                <label for="formFileMultiple" class="form-label">Attach 12th Marksheet (PDF)
                                </label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple="" name="pdf12th" value="{{ isset($edit) ? $edit->pdf12th : '' }}">
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="username" class="form-control" placeholder="In Years" name="qualification" value="{{ isset($edit) ? $edit->qualification : '' }}"/>
                                <label for="stay">Name Of Qualification Obtained</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="username" class="form-control" placeholder="In Years" name="specialization" value="{{ isset($edit) ? $edit->specialization : '' }}"/>
                                <label for="stay">Area Of Specialization(s)</label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="username" class="form-control" placeholder="(School/College/Institute)" name="institute" value="{{ isset($edit) ? $edit->institute : '' }}"/>
                                <label for="stay">Institute Name & Contact Details </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="username" class="form-control" placeholder="University / Board" name="board" value="{{ isset($edit) ? $edit->board : '' }}"/>
                                <label for="stay">Name & Address Of University / Board</label>
                              </div>
                            </div>


                            <div class="col-sm-6">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="username" class="form-control" placeholder="(School/College/Institute)" name="enrolment" value="{{ isset($edit) ? $edit->enrolment : '' }}"/>
                                <label for="stay">Enrolment / Roll / Registration No. </label>
                              </div>
                            </div>

                            <div class="col-sm-6 col-12 mb-6">
                              <label for="formFileMultiple" class="form-label">Period Of Study From 

                              </label>
                              <div class="input-group input-daterange" id="bs-datepicker-daterange">
                                
                                <input type="month" name="study_to" id="dateRangePicker" placeholder="MM/DD/YYYY" class="form-control" value="{{ isset($edit) ? $edit->study_from : '' }}"/>

                                <span class="input-group-text">to</span>
                                <input type="month" name="study_from" placeholder="MM/DD/YYYY" class="form-control" value="{{ isset($edit) ? $edit->study_to : '' }}"/>
                              </div>
                            </div>

                            <div class="col-sm-6 col-12 mb-6">
                              <label for="formFileMultiple" class="form-label">Year Of Passing 

                              </label>
                              <div class="input-group input-daterange" id="bs-datepicker-daterange">
                                                                
                                <input type="month" placeholder="MM/YYYY" class="form-control" id="html5-month-input" name="passingyear" value="{{ isset($edit) ? $edit->passingyear : '' }}"/>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <small class="text-light fw-medium d-block">Graduated </small>
                              <div class="form-check form-check-inline mt-4">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  id="inlineRadio1"
                                  value="Yes" 
                                  name="graduated" value="{{ isset($edit) ? $edit->graduated : 'selected' }}"/>
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  id="inlineRadio2"
                                  value="No" 
                                  name="graduated" value="{{ isset($edit) ? $edit->graduated : 'selected' }}"/>
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  id="inlineRadio3"
                                  value="Pursuing" 
                                  name="graduated" value="{{ isset($edit) ? $edit->graduated : 'selected' }}"/>
                                <label class="form-check-label" for="inlineRadio2">Pursuing</label>
                              </div>
                              
                            </div>

                            <div class="col-sm-4">
                              <small class="text-light fw-medium d-block">Course Attended </small>
                              <div class="form-check form-check-inline mt-4">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  id="inlineRadio4"
                                  value="Regular" 
                                  name="cattended" value="{{ isset($edit) ? $edit->cattended : 'selected' }}"/>
                                <label class="form-check-label" for="inlineRadio1">Regular</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  id="inlineRadio5"
                                  value="Evening" 
                                  name="cattended" value="{{ isset($edit) ? $edit->cattended : 'selected' }}"/>
                                <label class="form-check-label" for="inlineRadio2">Evening</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  id="inlineRadio6"
                                  value="Correspondence" 
                                  name="cattended" value="{{ isset($edit) ? $edit->cattended : 'selected' }}"/>
                                <label class="form-check-label" for="inlineRadio2">Correspondence</label>
                              </div>
                           </div>

                           <div class="col-sm-4">
                            <div class="mb-4">
                              <label for="formFileMultiple" class="form-label">Attach Highest Qualification Degree (PDF)
                              </label>
                              <input class="form-control" type="file" id="formFileMultiple" multiple="" name="highest_degree" value="{{ isset($edit) ? $edit->highest_degree : '' }}">
                            </div>
                          </div>

                    
                                          
                            <div class="col-12 d-flex justify-content-between">
                             
                              <button type="submit" class="btn btn-primary btn-next">
                                <span class="align-middle d-sm-inline-block d-none me-sm-1">Submit Details</span>
                                <i class="ri-arrow-right-line"></i>
                              </button>
                            </div>
                          </div>
                        </div>

                          
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Default Wizard -->


              </div>
              <hr class="container-m-nx mb-12" />

            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                  <div class="text-body mb-2 mb-md-0">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with <span class="text-danger"><i class="tf-icons ri-heart-fill"></i></span> by
                    <a href="https://pixinvent.com" target="_blank" class="footer-link">Pixinvent</a>
                  </div>
                  <div class="d-none d-lg-inline-block">
                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank"
                      >License</a
                    >
                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4"
                      >More Themes</a
                    >

                    <a
                      href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block"
                      >Support</a
                    >
                  </div>
                </div>
              </div>
            </footer>
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
    <script src="../../assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
    <script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
    <script src="../../assets/vendor/libs/select2/select2.js"></script>
    <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>

     <!-- Vendors JS -->
        <script src="../../assets/vendor/libs/moment/moment.js"></script>
        <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
        <script src="../../assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <script src="../../assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>
        <script src="../../assets/vendor/libs/jquery-timepicker/jquery-timepicker.js"></script>
        <script src="../../assets/vendor/libs/pickr/pickr.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->

    <script src="../../assets/js/form-wizard-numbered.js"></script>
    <script src="../../assets/js/form-wizard-validation.js"></script>
    <script src="../../assets/js/forms-pickers.js"></script>
  </body>
</html>
