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

    <title>{{isset($edit) ? 'Edit Company' : 'Add Company' }}</title>

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
                    <h5 class="card-header">{{isset($edit) ? 'Edit Company' : 'Add Company' }}</h5>
                    <div class="card-body">


                      <form id="formValidationExamples" class="row g-5" method="POST" action="{{ isset($edit) ? route('company.update', $edit->id) : route('save.company') }}">
                 @csrf
                @if(isset($edit))
                @method('PUT')
                @endif
                        <!-- Account Details -->
                        <div class="col-12">
                          <h6>Fill Company Details</h6>
                          <hr class="mt-0" />
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating form-floating-outline">
                            <input
                              type="text"
                              id="formValidationName"
                              class="form-control"
                              placeholder="ABC Pvt Ltd."
                              name="c_name" value="{{ isset($edit) ? $edit->name : '' }}"/>
                            <label for="formValidationName">Company Name</label>
                            @error('c_name')
                    <label class="text-danger">{{ $message}}</label>
                    @enderror
                          </div>
                        </div>

						<div class="col-md-6">
                          <div class="form-floating form-floating-outline">
                            <input
                              type="text"
                              id="formValidationName basic-default-phone"
                              class="form-control phone-mask"
                              placeholder="658 799 8941"
                              name="c_phone" value="{{ isset($edit) ? $edit->phone : '' }}"/>
                            <label for="formValidationPhone">Phone Number</label>
                            @error('c_phone')
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
                              name="email"
                              placeholder="john.doe" value="{{ isset($edit) ? $edit->email : '' }}"/>
                            <label for="formValidationEmail">Company Email</label>
                            @error('email')
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
                                  id="formValidationPass"
                                  name="password"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                  aria-describedby="multicol-password2" value="{{ isset($edit) ? $edit->password : '' }}" />
                                <label for="formValidationPass">Password</label>
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
                                  id="formValidationConfirmPass"
                                  name="password_confirmation"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                  aria-describedby="multicol-confirm-password2" value="{{ isset($edit) ? $edit->password : '' }}"/>
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


						      <div class="col-md-6">
                          <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="formValidationBio"  name="address"  placeholder="My name is john"  rows="3">{{ isset($edit) ? $edit->address : '' }}</textarea>
                            <label for="formValidationBio">Address</label>
                            @error('address')
                            <label class="text-danger">{{ $message}}</label>
                            @enderror
                          </div>
                        </div>

						<div class="col-12">
                          <button type="submit" name="submitButton" class="btn btn-primary">{{ isset($edit) ? 'Update Company' : 'Add Company' }}</button>
                        </div>

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
  </body>
</html>
