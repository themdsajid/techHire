<?php 
$users = auth()->user();  
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Employee Personal Info | TechnoHire</title>

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
                  <small class="text-light fw-medium">Basic</small>
                  <div class="bs-stepper wizard-numbered mt-2">
                    <div class="bs-stepper-header">
                      <div class="step" data-target="#account-details">
                        <button type="button" class="step-trigger">
                          <span class="bs-stepper-circle"><i class="ri-check-line"></i></span>
                          <span class="bs-stepper-label">
                            <span class="bs-stepper-number">01</span>
                            <span class="d-flex flex-column gap-1 ms-2">
                              <span class="bs-stepper-title">Personal Information</span>
                              <span class="bs-stepper-subtitle">
                              {{isset($edit) ? 'Edit  personal info' : 'Add Add personal info' }}</span>
                            </span>
                          </span>
                        </button>
                      </div>
                
                      
                    </div>
                    <div class="bs-stepper-content">
                         <form  method="POST" action="{{ isset($edit) ? route('info.update', $edit->id) : route('save.info') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($edit))
                        @method('PUT')
                        @endif
                        @csrf
                        
                        <?php 
                        if ($users->role == 'admin') 
                        {
                          ?>
                          <div id="account-details" class="content">
                          <div class="content-header mb-4">
                            <h6 class="mb-0">Personal Information</h6>
                            <small>Fill the details below</small>
                          </div>
                          <div class="row g-5">

                            <!-- Colm 1 -->
                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="username" name="username" class="form-control" value="{{ isset($edit) ? $edit->username : '' }}" />
                                <label for="firstname">First Name</label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="m_name" class="form-control" name="m_name" placeholder="doe" value="{{ isset($edit) ? $edit->m_name : '' }}"/>
                                <label for="middlename">Middle Name</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="l_name" class="form-control" name="l_name" placeholder="johndoe" />
                                <label for="lastname">Last Name</label>
                              </div>
                            </div>
                            <!-- Colm 2 -->
                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="contery" class="form-control" name="contery" placeholder="India" />
                                <label for="nationality">Nationality</label>
                              </div>
                            </div>


                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <select id="gender" class="select2 form-select" name="gender" data-allow-clear="true">
                                  <option value="">Select</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Other">Other</option>
                                </select>
                                <label for="marital">Gender</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <select id="unmarried" name="unmarried" class="select2 form-select" data-allow-clear="true">
                                  <option value="">Select</option>
                                  <option value="Unmarried">Unmarried</option>
                                  <option value="Married">Married</option>
                                  <option value="Other">Other</option>
                                </select>
                                <label for="marital">Marital Status</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="number" id="phone" class="form-control" name="phone" placeholder="johndoe" />
                                <label for="phone">Contact Number </label>
                              </div>
                            </div>
                            <!-- Colm 3 -->
                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="email" id="email" class="form-control" name="email" placeholder="j" />
                                <label for="email">Email Id</label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="date" id="dob" placeholder="MM/DD/YYYY" name="dob" class="form-control">
                                <label for="username">Date Of Birth</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="f_name" class="form-control" name="f_name" placeholder="johndoe" />
                                <label for="username">Father's Name</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="identification" class="form-control" name="identification" placeholder="johndoe" />
                                <label for="username">Identification Number</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="identification_type" class="form-control" name="identification_type" placeholder="johndoe" />
                                <label for="username">Identification Type</label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <label for="formFileMultiple" class="form-label">Attach Aadhar Card (PDF)
                              </label>
                              <input class="form-control" type="file" id="formFileMultiple" name="aadhar">
                            </div>

                            <div class="col-sm-6">
                              <label for="formFileMultiple" class="form-label">Attach PAN Card (PDF)
                              </label>
                              <input class="form-control" type="file" id="pancerd" name="pancerd">
                            </div>

                            <hr class="my-12" style="margin:1em 0 !important">
                            <div class="content-header mb-4">
                              <h6 class="mb-0">Current Address Details</h6>
                              <small>Fill the details below</small>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="hose_no" class="form-control" name="hose_no" placeholder="johndoe" />
                                <label for="username">House/Flat No</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="building" class="form-control" name="building" placeholder="johndoe" />
                                <label for="username">Building Number & Name</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="lane" class="form-control" name="lane" placeholder="johndoe" />
                                <label for="username">Cross/Lane/Main Name</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="sector" name="sector" class="form-control" placeholder="johndoe" />
                                <label for="username">Area/Sector Name</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="district" class="form-control" name="district" placeholder="Madhya Pradesh" />
                                <label for="district">District Name</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="city" class="form-control" name="city" placeholder="Jaipur" />
                                <label for="city">City</label>
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-floating form-floating-outline">
                                <input type="number" id="postal" class="form-control" name="postal" placeholder="110044" />
                                <label for="postalcode">Postal Code</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <select id="state" class="select2 form-select" name="state" data-allow-clear="true">
                                  <option value="">Select</option>
                                  <option value="Australia">Australia</option>
                                  <option value="Bangladesh">Bangladesh</option>
                                  <option value="Belarus">Belarus</option>
                                  <option value="Brazil">Brazil</option>
                       
                                </select>
                                <label for="State">State</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="period_stay" class="form-control" name="period_stay" placeholder="In Years" />
                                <label for="stay">Period Of Stay</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="land_mark" class="form-control" name="land_mark" placeholder="Jaipur" />
                                <label for="landmark1">Prominent Land Mark 1(Mandatory)</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="number" id="contact" class="form-control" name="contact" placeholder="9899 565 454" />
                                <label for="contact1">Contact Number 1</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="number" id="callnuber" class="form-control" name="callnuber" placeholder="9899 565 454" />
                                <label for="contact1">Contact Number 2</label>
                              </div>
                            </div>

                            <div class="mb-4">
                              <label for="formFileMultiple" class="form-label">Attach rent aggreement(If rented)
                              </label>
                              <input class="form-control" type="file" id="formFileMultiple" name="attach_aggrment" multiple="">
                            </div>


                            <div class="col-12 d-flex justify-content-between">
                            
                              <button class="btn btn-primary btn-next">
                                <span class="align-middle d-sm-inline-block d-none me-sm-1">Save Data</span>
                                <i class="ri-arrow-right-line"></i>
                              </button>
                            </div>
                          </div>
                        </div>

                          <?php
                        }
                        elseif ($users->role == 'employee') 
                        {
                          ?>
                         <div id="account-details" class="content">
                          <div class="content-header mb-4">
                            <h6 class="mb-0">Personal Information</h6>
                            <small>Fill the details below</small>
                          </div>
                          <div class="row g-5">

                            <!-- Colm 1 -->
                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="username" name="username" class="form-control" 
                                value="{{ Auth::user()->name }}" />
                                <label for="firstname">First Name</label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="m_name" class="form-control" name="m_name" placeholder="doe" />
                                <label for="middlename">Middle Name</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="l_name" class="form-control" name="l_name" placeholder="johndoe" />
                                <label for="lastname">Last Name</label>
                              </div>
                            </div>
                            <!-- Colm 2 -->
                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="contery" class="form-control" name="contery" placeholder="India" />
                                <label for="nationality">Nationality</label>
                              </div>
                            </div>


                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <select id="gender" class="select2 form-select" name="gender" data-allow-clear="true">
                                  <option value="">Select</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Other">Other</option>
                                </select>
                                <label for="marital">Gender</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <select id="unmarried" name="unmarried" class="select2 form-select" data-allow-clear="true">
                                  <option value="">Select</option>
                                  <option value="Unmarried">Unmarried</option>
                                  <option value="Married">Married</option>
                                  <option value="Other">Other</option>
                                </select>
                                <label for="marital">Marital Status</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="number" id="phone" class="form-control" name="phone" placeholder="johndoe" />
                                <label for="phone">Contact Number </label>
                              </div>
                            </div>
                            <!-- Colm 3 -->
                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="email" id="email" class="form-control" name="email" value="{{ Auth::user()->email }}" readonly />
                                <label for="email">Email Id</label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="date" id="dob" placeholder="MM/DD/YYYY" name="dob" class="form-control">
                                <label for="username">Date Of Birth</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="f_name" class="form-control" name="f_name" placeholder="johndoe" />
                                <label for="username">Father's Name</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="identification" class="form-control" name="identification" placeholder="johndoe" />
                                <label for="username">Identification Number</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="identification_type" class="form-control" name="identification_type" placeholder="johndoe" />
                                <label for="username">Identification Type</label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <label for="formFileMultiple" class="form-label">Attach Aadhar Card (PDF)
                              </label>
                              <input class="form-control" type="file" id="formFileMultiple" name="aadhar">
                            </div>

                            <div class="col-sm-6">
                              <label for="formFileMultiple" class="form-label">Attach PAN Card (PDF)
                              </label>
                              <input class="form-control" type="file" id="pancerd" name="pancerd">
                            </div>

                            <hr class="my-12" style="margin:1em 0 !important">
                            <div class="content-header mb-4">
                              <h6 class="mb-0">Current Address Details</h6>
                              <small>Fill the details below</small>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="hose_no" class="form-control" name="hose_no" placeholder="johndoe" />
                                <label for="username">House/Flat No</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="building" class="form-control" name="building" placeholder="johndoe" />
                                <label for="username">Building Number & Name</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="lane" class="form-control" name="lane" placeholder="johndoe" />
                                <label for="username">Cross/Lane/Main Name</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="sector" name="sector" class="form-control" placeholder="johndoe" />
                                <label for="username">Area/Sector Name</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="district" class="form-control" name="district" placeholder="Madhya Pradesh" />
                                <label for="district">District Name</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="city" class="form-control" name="city" placeholder="Jaipur" />
                                <label for="city">City</label>
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-floating form-floating-outline">
                                <input type="number" id="postal" class="form-control" name="postal" placeholder="110044" />
                                <label for="postalcode">Postal Code</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <select id="state" class="select2 form-select" name="state" data-allow-clear="true">
                                  <option value="">Select</option>
                                  <option value="Australia">Australia</option>
                                  <option value="Bangladesh">Bangladesh</option>
                                  <option value="Belarus">Belarus</option>
                                  <option value="Brazil">Brazil</option>
                       
                                </select>
                                <label for="State">State</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="period_stay" class="form-control" name="period_stay" placeholder="In Years" />
                                <label for="stay">Period Of Stay</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="land_mark" class="form-control" name="land_mark" placeholder="Jaipur" />
                                <label for="landmark1">Prominent Land Mark 1(Mandatory)</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="number" id="contact" class="form-control" name="contact" placeholder="9899 565 454" />
                                <label for="contact1">Contact Number 1</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="number" id="callnuber" class="form-control" name="callnuber" placeholder="9899 565 454" />
                                <label for="contact1">Contact Number 2</label>
                              </div>
                            </div>

                            <div class="mb-4">
                              <label for="formFileMultiple" class="form-label">Attach rent aggreement(If rented)
                              </label>
                              <input class="form-control" type="file" id="formFileMultiple" name="attach_aggrment" multiple="">
                            </div>


                            <div class="col-12 d-flex justify-content-between">
                            
                              <button class="btn btn-primary btn-next">
                                <span class="align-middle d-sm-inline-block d-none me-sm-1">Save Data</span>
                                <i class="ri-arrow-right-line"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                          <?php
                        }
                        elseif ($users->role == 'company') 
                        {
                          ?>
                          <div id="account-details" class="content">
                          <div class="content-header mb-4">
                            <h6 class="mb-0">Personal Information</h6>
                            <small>Fill the details below</small>
                          </div>
                          <div class="row g-5">

                            <!-- Colm 1 -->
                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                               <select id="username" class="select2 form-select" name="username" data-allow-clear="true">
                                  <option value="">Select Employee</option>
                                  @foreach($employee as $item)
                                  <option value="{{$item->id}}">{{$item->emp_name}}</option>
                                  @endforeach
                                  
                       
                                </select>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="m_name" class="form-control" name="m_name" placeholder="doe" />
                                <label for="middlename">Middle Name</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="l_name" class="form-control" name="l_name" placeholder="johndoe" />
                                <label for="lastname">Last Name</label>
                              </div>
                            </div>
                            <!-- Colm 2 -->
                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="contery" class="form-control" name="contery" placeholder="India" />
                                <label for="nationality">Nationality</label>
                              </div>
                            </div>


                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <select id="gender" class="select2 form-select" name="gender" data-allow-clear="true">
                                  <option value="">Select</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Other">Other</option>
                                </select>
                                <label for="marital">Gender</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <select id="unmarried" name="unmarried" class="select2 form-select" data-allow-clear="true">
                                  <option value="">Select</option>
                                  <option value="Unmarried">Unmarried</option>
                                  <option value="Married">Married</option>
                                  <option value="Other">Other</option>
                                </select>
                                <label for="marital">Marital Status</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="number" id="phone" class="form-control" name="phone" placeholder="johndoe" />
                                <label for="phone">Contact Number </label>
                              </div>
                            </div>
                            <!-- Colm 3 -->
                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="email" id="email" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="j" readonly />
                                <label for="email">Email Id</label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="date" id="dob" placeholder="MM/DD/YYYY" name="dob" class="form-control">
                                <label for="username">Date Of Birth</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="f_name" class="form-control" name="f_name" placeholder="johndoe" />
                                <label for="username">Father's Name</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="identification" class="form-control" name="identification" placeholder="johndoe" />
                                <label for="username">Identification Number</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="identification_type" class="form-control" name="identification_type" placeholder="johndoe" />
                                <label for="username">Identification Type</label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <label for="formFileMultiple" class="form-label">Attach Aadhar Card (PDF)
                              </label>
                              <input class="form-control" type="file" id="formFileMultiple" name="aadhar">
                            </div>

                            <div class="col-sm-6">
                              <label for="formFileMultiple" class="form-label">Attach PAN Card (PDF)
                              </label>
                              <input class="form-control" type="file" id="pancerd" name="pancerd">
                            </div>

                            <hr class="my-12" style="margin:1em 0 !important">
                            <div class="content-header mb-4">
                              <h6 class="mb-0">Current Address Details</h6>
                              <small>Fill the details below</small>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="hose_no" class="form-control" name="hose_no" placeholder="johndoe" />
                                <label for="username">House/Flat No</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="building" class="form-control" name="building" placeholder="johndoe" />
                                <label for="username">Building Number & Name</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="lane" class="form-control" name="lane" placeholder="johndoe" />
                                <label for="username">Cross/Lane/Main Name</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="sector" name="sector" class="form-control" placeholder="johndoe" />
                                <label for="username">Area/Sector Name</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="district" class="form-control" name="district"  placeholder="Madhya Pradesh" />
                                <label for="district">District Name</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="city" class="form-control" name="city" placeholder="Jaipur" />
                                <label for="city">City</label>
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-floating form-floating-outline">
                                <input type="number" id="postal" class="form-control" name="postal" placeholder="110044" />
                                <label for="postalcode">Postal Code</label>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-floating form-floating-outline">
                                <select id="state" class="select2 form-select" name="state" data-allow-clear="true">
                                  <option value="">Select</option>
                                  <option value="Australia">Australia</option>
                                  <option value="Bangladesh">Bangladesh</option>
                                  <option value="Belarus">Belarus</option>
                                  <option value="Brazil">Brazil</option>
                       
                                </select>
                                <label for="State">State</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="period_stay" class="form-control" name="period_stay" placeholder="In Years" />
                                <label for="stay">Period Of Stay</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="land_mark" class="form-control" name="land_mark" placeholder="Jaipur" />
                                <label for="landmark1">Prominent Land Mark 1(Mandatory)</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="number" id="contact" class="form-control" name="contact" placeholder="9899 565 454" />
                                <label for="contact1">Contact Number 1</label>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <input type="number" id="contact" class="form-control" name="callnuber" placeholder="9899 565 454" />
                                <label for="contact1">Contact Number 2</label>
                              </div>
                            </div>

                            <div class="mb-4">
                              <label for="formFileMultiple" class="form-label">Attach rent aggreement(If rented)
                              </label>
                              <input class="form-control" type="file" id="formFileMultiple" name="attach_aggrment" multiple="">
                            </div>


                            <div class="col-12 d-flex justify-content-between">
                            
                              <button class="btn btn-primary btn-next">
                                <span class="align-middle d-sm-inline-block d-none me-sm-1">Save Data</span>
                                <i class="ri-arrow-right-line"></i>
                              </button>
                            </div>
                          </div>
                        </div>

                          <?php
                        }

                        ?>
                        

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
