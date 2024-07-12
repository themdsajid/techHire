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

    <title>{{isset($edit) ? 'Edit Employee' : 'Add Employee' }}</title>

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
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/tagify/tagify.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />
     <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

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
              <div class="row mb-6">

              </div>
              <div class="row">
                <!-- FormValidation -->
                <div class="col-12">
                  <div class="card">
                    <h5 class="card-header">{{isset($edit) ? 'Edit Employee' : 'Add Employee' }}</h5>
                    <div class="card-body">

                      <form id="formValidationExamples" class="row g-5" method="POST" action="{{ isset($edit) ? route('employe.update', $edit->id) : route('admin.save') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($edit))
                        @method('PUT')
                        @endif
                        <!-- Account Details -->
                        <div class="col-12">
                          <h6>1. Account Details</h6>
                          <hr class="mt-0" />
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating form-floating-outline">
                            <input
                              type="text"
                              id="formValidationName"
                              class="form-control"
                              placeholder="John Doe"
                              name="add_emp" 
                              value="{{ isset($edit) ? $edit->emp_name : '' }}" />
                            <label for="formValidationName">Employee Name</label>
                            @error('add_emp')
                            <label class="text-danger">{{ $message}}</label>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating form-floating-outline">
                            <input
                              class="form-control"
                              type="email"
                              id="formValidationEmail"
                              placeholder="john.doe" 
                              name="emp_email" 
                              value="{{ isset($edit) ? $edit->email : '' }}"/>
                            <label for="formValidationEmail">Employee Email</label>
                            @error('emp_email')
                            <label class="text-danger">{{ $message}}</label>
                            @enderror
                          </div>
                        </div>
                         @if (!isset($edit))
                        <div class="col-md-6">
                          <div class="form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="password"
                                  id="password"
                                  name="password"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                  aria-describedby="multicol-password2" />
                                <label for="formValidatioPass">Password</label>
                                 @error('password')
                    <label class="text-danger">{{ $message}}</label>
                    @enderror
                              </div>
                              <span class="input-group-text cursor-pointer" id="multicol-password2"
                                ><i class="ri-eye-off-line"></i
                              ></span>
                            </div>
                          </div>
                        </div>
                         @endif
                         @if (!isset($edit))
                        <div class="col-md-6">
                          <div class="form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="password"
                                  id="password_confirmation"
                                  name="password_confirmation"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                  aria-describedby="multicol-confirm-password2" />
                                <label for="formValidationConfirmPass">Confirm Password</label>
                                @error('confrm_password')
                    <label class="text-danger">{{ $message}}</label>
                    @enderror
                              </div>
                              <span class="input-group-text cursor-pointer" id="multicol-confirm-password2"
                                ><i class="ri-eye-off-line"></i
                              ></span>
                            </div>
                          </div>
                        </div>
                         @endif
                        <!-- Personal Info -->
                        <div class="col-12">
                          <h6 class="mt-2">2. Personal Info</h6>
                          <hr class="mt-0" />
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating form-floating-outline">
                            <input class="form-control" 
                            type="file" 
                            id="formValidationFile" 
                            name="images[]" 
                            multiple="multiple"/>
                            <label for="formValidationFile">Upload Document</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating form-floating-outline">
                            <input 
                            type="number" 
                            id="basic-default-phone" 
                            class="form-control phone-mask" 
                            placeholder="658 799 8941"
                            name="emp_phone" 
                            value="{{ isset($edit) ? $edit->phone : '' }}">
                            <label for="formValidationDob">Phone Number</label>
                            @error('emp_phone')
                            <label class="text-danger">{{ $message}}</label>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating form-floating-outline">
                            <select
                              id="formValidationSelect2"
                              name="compny"
                              class="form-select select2"
                              data-allow-clear="true">
                              <option value="">Select Company</option>
                              @foreach($compny as $compy)
                              <option value="{{$compy->id}}">{{$compy->name}}</option>
                              @endforeach             
                            </select>
                            <label for="formValidationSelect2">Company</label>
                          </div>
                        </div>

                        @if (!isset($edit))
                        <div class="col-md-6">
                          <div class="form-floating form-floating-outline">
                            
                            <input
                              type="text"
                              value=""
                              class="form-control"
                              id="formValidationLang"
                              placeholder="Employee Code"
                              name="emp_no" 
                              value="{{ isset($edit) ? $edit->emp_id : '' }}" 
                              readonly/>
                            <label for="formValidationLang">Employee Code</label>
                          </div>
                        </div>
                        @endif
                        

       
                        <div class="col-md-6">
                          <div class="form-floating form-floating-outline">
                            <textarea
                              class="form-control h-px-100"
                              id="formValidationBio"
                              placeholder="My name is john"
                              rows="3" name="address">{{ isset($edit) ? $edit->address : '' }}
                            </textarea>
                            <label for="formValidationBio">Employee Address</label>
                            @error('address')
                            <label class="text-danger">{{ $message}}</label>
                            @enderror
                          </div>
                        </div>

      

                        <div class="col-12">
                          <button type="submit" name="submitButton" class="btn btn-primary">{{ isset($edit) ? 'Update Employee' : 'Add Employee' }}</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /FormValidation -->
              </div>
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
    <script src="../../assets/vendor/libs/select2/select2.js"></script>
    <script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="../../assets/vendor/libs/tagify/tagify.js"></script>
    <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/form-validation.js"></script>
    <script>
  @if(Session::has('message'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.warning("{{ session('warning') }}");
  @endif
</script>

  </body>
</html>
