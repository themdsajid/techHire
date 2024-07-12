<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ isset($edit) ? 'Edit Employment' : 'Add Employment' }}</title>


    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
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
    <link rel="stylesheet"
        href="../../assets/vendor/libs/@form-validation/form-validation.css" />

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
              <!-- Default -->
              <div class="row">
                <div class="col-12">
                  <h5>Default</h5>
                </div>

                <!-- Default Wizard -->
                <div class="col-12 mb-6">

                  <div class="bs-stepper wizard-numbered mt-2">
                    <div class="bs-stepper-header">

                      <div class="step" data-target="#social-links">
                        <button type="button" class="step-trigger">
                          <span class="bs-stepper-circle"><i class="ri-check-line"></i></span>
                          <span class="bs-stepper-label">
                            <span class="bs-stepper-number">03</span>
                            <span class="d-flex flex-column gap-1 ms-2">
                              <span class="bs-stepper-title">{{ isset($edit) ? 'Edit Employment' : 'Add Employment' }}</span>
                              <span class="bs-stepper-subtitle">Add work experience</span>
                            </span>
                          </span>
                        </button>
                      </div>
                    </div>
                    <div class="bs-stepper-content">
                        <form  method="POST" action="{{ isset($edit) ? route('employee.update', $edit->user_id) : route('employee.save') }}" enctype="multipart/form-data">
                        @csrf
                        @if (isset($edit))
                        @method('PUT')
                        @endif
                        <input type="hidden" name="emp_id"
                        value="{{ Auth::user()->email }}">

                        <!-- Employment Details  -->
                        <div id="social-links" class="content">
                          <div class="content-header mb-4">
                            <h6 class="mb-0">{{ isset($edit) ? 'Edit Employment' : 'Add Employment' }}</h6>
                            <small>Fresher (Not Required to Fill This Section) Experienced (Please fill this section as instructed below) </small>
                          </div>
                          <hr class="container-m-nx mb-12" />
                          <div class="row g-5">
                            <h6 class="mb-0">Employer 1</h6>

                            @if(Auth::user()->role === 'admin')
                            <div class="col-sm-3">
                                <div class="form-floating form-floating-outline">
                                    <select id="userDropdown" name="username" class="form-control" onchange="updateEmployeeDetails()">
                                        <option value="">Select Employee</option>
                                            @foreach ($employeeData as $emp)
                                                <option value="{{ $emp->emp_name }}" data-email="{{ $emp->email }}" data-id="{{ $emp->id }}">{{ $emp->emp_name }}</option>
                                            @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="col-sm-2">
    <div class="form-floating form-floating-outline">
        <input type="text" id="m_name" class="form-control" name="m_name" placeholder="doe" value=""
            readonly="">
        <label for="middlename">Emp ID</label>
    </div>
    </div>

    <div class="col-sm-6">
        <div class="form-floating form-floating-outline">
            <input type="email" id="email" class="form-control" name="emp_id" placeholder="j" readonly="">
            <label for="email">Email Id</label>
        </div>
    </div>

    <script>
        function updateEmployeeDetails() {
            var dropdown = document.getElementById('userDropdown');
            var selectedOption = dropdown.options[dropdown.selectedIndex];

            var email = selectedOption.getAttribute('data-email');
            var empId = selectedOption.getAttribute('data-id');

            document.getElementById('email').value = email;
            document.getElementById('m_name').value = empId;
        }
    </script>

    @else
    <div class="col-sm-3">
        <div class="form-floating form-floating-outline">
            <input type="text" class="form-control" name="username" value="{{$employeeData->emp_name}}">

        </div>
    </div>

    <div class="col-sm-2">
<div class="form-floating form-floating-outline">
<input type="text" id="m_name" class="form-control" name="m_name" placeholder="doe" value="{{$employeeData->emp_id}}"
readonly="">
<label for="middlename">Emp ID</label>
</div>
</div>

<div class="col-sm-6">
<div class="form-floating form-floating-outline">
<input type="email" id="email" class="form-control" name="emp_id" placeholder="j" readonly=""  value="{{$employeeData->email}}">
<label for="email">Email Id</label>
</div>
</div>

    @endif


    <div class="col-sm-4">
        <div class="form-floating form-floating-outline">
            <input type="text" id="company1" class="form-control" value="{{ isset($edit) ? $edit->company1 : '' }}"
                placeholder="Abc Pvt. Ltd." name="company1" />
            <label for="company">Company Name</label>
        </div>
    </div>

    <div class="col-sm-8">
        <div class="form-floating form-floating-outline">
            <input type="text" id="address" class="form-control" placeholder="Mumbai, BOX 110022"
                value="{{ isset($edit) ? $edit->address1 : '' }}" name="address1" />
            <label for="address">Address</label>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-floating form-floating-outline">
            <input type="text" name="city1" id="city" class="form-control"
                value="{{ isset($edit) ? $edit->city1 : '' }}" placeholder="Noida" />
            <label for="city">City</label>
        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-floating form-floating-outline">
            <input type="number" id="code"
                class="form-control"value="{{ isset($edit) ? $edit->post_code1 : '' }}" placeholder="110045"
                name="post_code1" />
            <label for="code">Postal Code</label>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-floating form-floating-outline">
            <input type="text" id="State" class="form-control" placeholder="Uttrakhand" name="state1"
                value="{{ isset($edit) ? $edit->state1 : '' }}" />
            <label for="state">State</label>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-floating form-floating-outline">
            <input type="Number" name="cphone1" id="CompanyPhone" class="form-control"
                placeholder="+91 0120 3434343" value="{{ isset($edit) ? $edit->cphone1 : '' }}" />
            <label for="state">Company Phone No.</label>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-floating form-floating-outline">
            <input type="text" id="Designation" class="form-control" placeholder="Executive" name="designation1"
                value="{{ isset($edit) ? $edit->designation1 : '' }}" />
            <label for="designation">Designation</label>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-floating form-floating-outline">
            <input type="text" id="Department" class="form-control" placeholder="Digital Marketing"
                name="department1" value="{{ isset($edit) ? $edit->department1 : '' }}" />
            <label for="department">Department</label>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-floating form-floating-outline">
            <input type="text" id="Remuneration" class="form-control" placeholder="12LPA" name="ctc1"
                value="{{ isset($edit) ? $edit->ctc1 : '' }}" />
            <label for="state">Remuneration (CTC-PA)</label>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-floating form-floating-outline">
            <input type="text" id="Employeeid" class="form-control" placeholder="EMP001" name="empid1"
                value="{{ isset($edit) ? $edit->empid1 : '' }}" />
            <label for="emplyeeid">Employee ID </label>
        </div>
    </div>

    <div class="col-sm-2">
        <label for="formFileMultiple" class="form-label">Date Of Joining</label>
        <div class="input-group input-daterange" id="bs-datepicker-daterange">

            <input type="date" placeholder="MM/YYYY" class="form-control" id="html5-month-input" name="doj1"
                value="{{ isset($edit) ? $edit->doj1 : '' }}" />
        </div>
    </div>

    <div class="col-sm-2">
        <label for="formFileMultiple" class="form-label">Date Of Exit</label>
        <div class="input-group input-daterange" id="bs-datepicker-daterange">

            <input type="date" placeholder="MM/YYYY" class="form-control" id="html5-month-input" name="doe1"
                value="{{ isset($edit) ? $edit->doe1 : '' }}" />
        </div>
    </div>


    <div class="col-sm-8 ">
        <label for="formFileMultiple" class="form-label">Reason For Leaving</label>
        <input type="text" id="username" class="form-control" placeholder="xyz reason" name="reason1"
            value="{{ isset($edit) ? $edit->reason1 : '' }}" />

    </div>

    {{-- <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <select id="multicol-country" class="select2 form-select" data-allow-clear="true" name="emp_type1">
                                  <option value="">Select</option>
                                  <option value="Full Time">Full Time</option>
                                  <option value="Part Time">Part Time</option>
                                </select>
                                <label for="State">Employment Type</label>
                              </div>
                            </div> --}}

    <div class="col-sm-3">
        <div class="form-floating form-floating-outline">
            <select id="multicol-country" class="select2 form-select" data-allow-clear="true" name="emp_type1">
                <option value="" {{ isset($edit) && $edit->emp_type1 == '' ? 'selected' : '' }}>Select</option>
                <option value="Full Time" {{ isset($edit) && $edit->emp_type1 == 'Full Time' ? 'selected' : '' }}>Full
                    Time</option>
                <option value="Part Time" {{ isset($edit) && $edit->emp_type1 == 'Part Time' ? 'selected' : '' }}>Part
                    Time</option>
            </select>
            <label for="multicol-country">Employment Type</label>
        </div>
    </div>


    {{-- <div class="col-sm-3">
                              <div class="form-floating form-floating-outline">
                                <select id="multicol-country" class="select2 form-select" data-allow-clear="true" name="emp_nature1">
                                  <option value="">Select</option>
                                  <option value="Probation">Probation</option>
                                  <option value="Permanent">Permanent </option>
                                  <option value="Contractual">Contractual</option>
                                  <option value="Temporary">Temporary</option>
                                </select>
                                <label for="State">Nature Of Employment</label>
                              </div>
                            </div> --}}

    <div class="col-sm-3">
        <div class="form-floating form-floating-outline">
            <select id="multicol-country" class="select2 form-select" data-allow-clear="true" name="emp_nature1">
                <option value="" {{ isset($edit) && $edit->emp_nature1 == '' ? 'selected' : '' }}>Select
                </option>
                <option value="Probation" {{ isset($edit) && $edit->emp_nature1 == 'Probation' ? 'selected' : '' }}>
                    Probation</option>
                <option value="Permanent" {{ isset($edit) && $edit->emp_nature1 == 'Permanent' ? 'selected' : '' }}>
                    Permanent</option>
                <option value="Contractual"
                    {{ isset($edit) && $edit->emp_nature1 == 'Contractual' ? 'selected' : '' }}>Contractual</option>
                <option value="Temporary" {{ isset($edit) && $edit->emp_nature1 == 'Temporary' ? 'selected' : '' }}>
                    Temporary</option>
            </select>
            <label for="multicol-country">Nature Of Employment</label>
        </div>
    </div>


    <div class="col-sm-12"></div>

    <div class="col-sm-4">
        <div class="mb-4">
            <label for="formFileMultiple" class="form-label">Attach Experience Letter (PDF)
            </label>
            <input class="form-control" type="file" id="formFileMultiple" multiple="" name="exp_letter1">
        </div>
    </div>

    <div class="col-sm-4">
        <div class="mb-4">
            <label for="formFileMultiple" class="form-label">Attach Offer Letter (PDF)
            </label>
            <input class="form-control" type="file" id="formFileMultiple" multiple="" name="offer_letter1">
        </div>
    </div>

    <div class="col-sm-4">
        <div class="mb-4">
            <label for="formFileMultiple" class="form-label">Attach Last 3 Salary Slips (PDF)
            </label>
            <input class="form-control" type="file" id="formFileMultiple" multiple="" name="last_salary1">
        </div>
    </div>

    </div>


    <div class="row">
        <div class="col-sm-12 g-5">
            <div class="input-group">
                <span class="input-group-text ">Supervisor 1</span>

                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                                 name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Supervisor Name" name="supervisor1_name1"
                        value="{{ isset($edit) ? $edit->supervisor1_name1 : '' }}" />
                    <label for="district">Supervisor Name</label>
                </div>
                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                                name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Phone Number" name="supervisor1_phone1"
                        value="{{ isset($edit) ? $edit->supervisor1_phone1 : '' }}" />
                    <label for="district">Supervisor's Phone Number</label>
                </div>

                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                                name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Supervisor's Email Id
                                " name="supervisor1_email1"
                        value="{{ isset($edit) ? $edit->supervisor1_email1 : '' }}" />
                    <label for="district">Supervisor's Email Id
                    </label>
                </div>
            </div>
        </div>

        <div class="col-sm-12 g-5">
            <div class="input-group">
                <span class="input-group-text ">Supervisor 2</span>

                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                               name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Supervisor Name" name="supervisor2_name1"
                        value="{{ isset($edit) ? $edit->supervisor2_name1 : '' }}" />
                    <label for="district">Supervisor Name</label>
                </div>
                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                              name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Phone Number" name="supervisor2_phone1"
                        value="{{ isset($edit) ? $edit->supervisor2_phone1 : '' }}" />
                    <label for="district">Supervisor's Phone Number</label>
                </div>

                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                              name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Email Id
                              " name="supervisor2_email1"
                        value="{{ isset($edit) ? $edit->supervisor2_email1 : '' }}" />
                    <label for="district">Supervisor's Email Id
                    </label>
                </div>
            </div>
        </div>

    </div>
    <br>

    <!-------------------------------------------
                        --------- -Employeer 2----------------------->
    <hr class="container-m-nx mb-12" />
    <div class="row g-5">
        <h6 class="mb-0">Employer 2</h6>

        <input type="hidden" name="emp_id" value="{{ Auth::user()->email }}">

        <div class="col-sm-4">
            <div class="form-floating form-floating-outline">
                <input type="text" id="Company" class="form-control"
                    value="{{ isset($edit) ? $edit->company2 : '' }}" placeholder="Abc Pvt. Ltd." name="company2" />
                <label for="Company">Company Name</label>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="form-floating form-floating-outline">
                <input type="text" id="Address" class="form-control"
                    value="{{ isset($edit) ? $edit->address2 : '' }}" placeholder="Abc Pvt. Ltd." name="address2" />
                <label for="Address">Address</label>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="text" id="City" class="form-control"
                    value="{{ isset($edit) ? $edit->city2 : '' }}" placeholder="Noida" name="city2" />
                <label for="city">City</label>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-floating form-floating-outline">
                <input type="number" value="{{ isset($edit) ? $edit->post_code2 : '' }}" id="postalcode"
                    class="form-control" placeholder="110045" name="post_code2" />
                <label for="Postal Code">Postal Code</label>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-floating form-floating-outline">
                <input type="text" id="State" class="form-control" placeholder="Uttrakhand" name="state2"
                    value="{{ isset($edit) ? $edit->state2 : '' }}" />
                <label for="state">State</label>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="Number" id="phone" class="form-control" placeholder="+91 0120 3434343"
                    name="cphone2"value="{{ isset($edit) ? $edit->cphone2 : '' }}" />
                <label for="Company Phone No">Company Phone No.</label>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="text" id="Designation" class="form-control" placeholder="Executive"
                    name="designation2" value="{{ isset($edit) ? $edit->designation2 : '' }}" />
                <label for="designation">Designation</label>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="text" id="Department" class="form-control" placeholder="Digital Marketing"
                    name="department2" value="{{ isset($edit) ? $edit->department2 : '' }}" />
                <label for="department">Department</label>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="text" id="ctc" class="form-control" placeholder="12LPA" name="ctc2"
                    value="{{ isset($edit) ? $edit->ctc2 : '' }}" />
                <label for="state">Remuneration (CTC-PA)</label>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="text" id="empid" class="form-control" placeholder="EMP001" name="empid2"
                    value="{{ isset($edit) ? $edit->empid2 : '' }}" />
                <label for="emplyeeid">Employee ID </label>
            </div>
        </div>

        <div class="col-sm-2">
            <label for="formFileMultiple" class="form-label">Date Of Joining</label>
            <div class="input-group input-daterange" id="bs-datepicker-daterange">

                <input type="date" placeholder="MM/YYYY" class="form-control" id="html5-month-input"
                    name="doj2" value="{{ isset($edit) ? $edit->doj2 : '' }}" />
            </div>
        </div>

        <div class="col-sm-2">
            <label for="formFileMultiple" class="form-label">Date Of Exit</label>
            <div class="input-group input-daterange" id="bs-datepicker-daterange">

                <input type="date" placeholder="MM/YYYY" class="form-control" id="html5-month-input"
                    name="doe2" value="{{ isset($edit) ? $edit->doe2 : '' }}" />
            </div>
        </div>


        <div class="col-sm-8 ">
            <label for="formFileMultiple" class="form-label">Reason For Leaving</label>
            <input type="text" id="reason" class="form-control" placeholder="xyz reason" name="reason2"
                value="{{ isset($edit) ? $edit->reason2 : '' }}" />

        </div>

        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <select id="multicol-country" class="select2 form-select" data-allow-clear="true" name="emp_type2">
                    <option value="" {{ isset($edit) && $edit->emp_type2 == '' ? 'selected' : '' }}>Select
                    </option>
                    <option value="Full Time" {{ isset($edit) && $edit->emp_type2 == 'Full Time' ? 'selected' : '' }}>
                        Full Time</option>
                    <option value="Part Time" {{ isset($edit) && $edit->emp_type2 == 'Part Time' ? 'selected' : '' }}>
                        Part Time</option>
                </select>
                <label for="State">Employment Type</label>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <select id="multicol-country" class="select2 form-select" data-allow-clear="true"
                    name="emp_nature2">
                    <option value="" {{ isset($edit) && $edit->emp_nature2 == '' ? 'selected' : '' }}>Select
                    </option>
                    <option value="Probation"
                        {{ isset($edit) && $edit->emp_nature2 == 'Probation' ? 'selected' : '' }}>Probation</option>
                    <option value="Permanent"
                        {{ isset($edit) && $edit->emp_nature2 == 'Permanent' ? 'selected' : '' }}>Permanent</option>
                    <option value="Contractual"
                        {{ isset($edit) && $edit->emp_nature2 == 'Contractual' ? 'selected' : '' }}>Contractual
                    </option>
                    <option value="Temporary"
                        {{ isset($edit) && $edit->emp_nature2 == 'Temporary' ? 'selected' : '' }}>Temporary</option>
                </select>
                <label for="State">Nature Of Employment</label>
            </div>
        </div>

        <div class="col-sm-12"></div>

        <div class="col-sm-4">
            <div class="mb-4">
                <label for="formFileMultiple" class="form-label">Attach Experience Letter (PDF)
                </label>
                <input class="form-control" type="file" id="formFileMultiple" multiple="" name="exp_letter2">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="mb-4">
                <label for="formFileMultiple" class="form-label">Attach Offer Letter (PDF)
                </label>
                <input class="form-control" type="file" id="formFileMultiple" multiple=""
                    name="offer_letter2">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="mb-4">
                <label for="formFileMultiple" class="form-label">Attach Last 3 Salary Slips (PDF)
                </label>
                <input class="form-control" type="file" id="formFileMultiple" multiple=""
                    name="last_salary2">
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-12 g-5">
            <div class="input-group">
                <span class="input-group-text ">Supervisor 1</span>

                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                               name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Supervisor Name" name="supervisor1_name2"
                        value="{{ isset($edit) ? $edit->supervisor1_name2 : '' }}" />
                    <label for="district">Supervisor Name</label>
                </div>
                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                              name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Phone Number" name="supervisor1_phone2"
                        value="{{ isset($edit) ? $edit->supervisor1_phone2 : '' }}" />
                    <label for="district">Supervisor's Phone Number</label>
                </div>

                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                              name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Supervisor's Email Id
                              " name="supervisor1_email2"
                        value="{{ isset($edit) ? $edit->supervisor1_email2 : '' }}" />
                    <label for="district">Supervisor's Email Id
                    </label>
                </div>
            </div>
        </div>

        <div class="col-sm-12 g-5">
            <div class="input-group">
                <span class="input-group-text ">Supervisor 2</span>

                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                             name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Supervisor Name" name="supervisor2_name2"
                        value="{{ isset($edit) ? $edit->supervisor2_name2 : '' }}" />
                    <label for="district">Supervisor Name</label>
                </div>
                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                            name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Phone Number" name="supervisor2_phone2"
                        value="{{ isset($edit) ? $edit->supervisor2_phone2 : '' }}" />
                    <label for="district">Supervisor's Phone Number</label>
                </div>

                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                            name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Supervisor's Email Id
                            " name="supervisor2_email2"
                        value="{{ isset($edit) ? $edit->supervisor2_email2 : '' }}" />
                    <label for="district">Supervisor's Email Id
                    </label>
                </div>
            </div>
        </div>

    </div>

    <!-------------------------------------------
                        --------- -Employeer 3----------------------->
    <br>
    <hr class="container-m-nx mb-12" />
    <div class="row g-5">
        <h6 class="mb-0">Employer 3</h6>

        <div class="col-sm-4">
            <div class="form-floating form-floating-outline">
                <input type="text" id="username" class="form-control" placeholder="Abc Pvt. Ltd."
                    name="company3" value="{{ isset($edit) ? $edit->company3 : '' }}" />
                <label for="company">Company Name</label>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="form-floating form-floating-outline">
                <input type="text" id="username" class="form-control" placeholder="ABC Road,  Delhi"
                    name="address3" value="{{ isset($edit) ? $edit->address3 : '' }}" />
                <label for="address">Address</label>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="text" id="username" class="form-control" placeholder="Noida" name="city3"
                    value="{{ isset($edit) ? $edit->city3 : '' }}" />
                <label for="city">City</label>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-floating form-floating-outline">
                <input type="number" id="username" class="form-control" placeholder="110045" name="post_code3"
                    value="{{ isset($edit) ? $edit->post_code3 : '' }}" />
                <label for="username">Postal Code</label>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-floating form-floating-outline">
                <input type="text" id="username" class="form-control" placeholder="Uttrakhand" name="state3"
                    value="{{ isset($edit) ? $edit->state3 : '' }}" />
                <label for="state">State</label>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="Number" id="username" class="form-control" placeholder="+91 0120 3434343"
                    name="cphone3" value="{{ isset($edit) ? $edit->cphone3 : '' }}" />
                <label for="state">Company Phone No.</label>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="text" id="username" class="form-control" placeholder="Executive"
                    name="designation3" value="{{ isset($edit) ? $edit->designation3 : '' }}" />
                <label for="designation">Designation</label>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="text" id="username" class="form-control" placeholder="Digital Marketing"
                    name="department3" value="{{ isset($edit) ? $edit->department3 : '' }}" />
                <label for="department">Department</label>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="text" id="username" class="form-control" placeholder="12LPA" name="ctc3"
                    value="{{ isset($edit) ? $edit->ctc3 : '' }}" />
                <label for="state">Remuneration (CTC-PA)</label>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="text" id="username" class="form-control" placeholder="EMP001" name="empid3"
                    value="{{ isset($edit) ? $edit->empid3 : '' }}" />
                <label for="emplyeeid">Employee ID </label>
            </div>
        </div>

        <div class="col-sm-2">
            <label for="formFileMultiple" class="form-label">Date Of Joining</label>
            <div class="input-group input-daterange" id="bs-datepicker-daterange">

                <input type="date" placeholder="MM/YYYY" class="form-control" id="html5-month-input"
                    name="doj3" value="{{ isset($edit) ? $edit->doj3 : '' }}" />
            </div>
        </div>

        <div class="col-sm-2">

            <label for="formFileMultiple" class="form-label">Date Of Exit</label>
            <div class="input-group input-daterange" id="bs-datepicker-daterange">

                <input type="date" name="doe3" placeholder="MM/YYYY" class="form-control"
                    id="html5-month-input" value="{{ isset($edit) ? $edit->doe3 : '' }}" />
            </div>
        </div>


        <div class="col-sm-8 ">
            <label for="formFileMultiple" class="form-label">Reason For Leaving</label>
            <input type="text" id="username" class="form-control" placeholder="xyz reason" name="reason3"
                value="{{ isset($edit) ? $edit->reason3 : '' }}" />

        </div>

        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <select id="multicol-country" class="select2 form-select" data-allow-clear="true" name="emp_type3">
                    <option value="" {{ isset($edit) && $edit->emp_type3 == '' ? 'selected' : '' }}>Select
                    </option>
                    <option value="Full Time" {{ isset($edit) && $edit->emp_type3 == 'Full Time' ? 'selected' : '' }}>
                        Full Time</option>
                    <option value="Part Time" {{ isset($edit) && $edit->emp_type3 == 'Part Time' ? 'selected' : '' }}>
                        Part Time</option>
                </select>
                <label for="State">Employment Type</label>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <select id="multicol-country" class="select2 form-select" data-allow-clear="true"
                    name="emp_nature3">
                    <option value="" {{ isset($edit) && $edit->emp_nature3 == '' ? 'selected' : '' }}>Select
                    </option>
                    <option value="Probation"
                        {{ isset($edit) && $edit->emp_nature3 == 'Probation' ? 'selected' : '' }}>Probation</option>
                    <option value="Permanent"
                        {{ isset($edit) && $edit->emp_nature3 == 'Permanent' ? 'selected' : '' }}>Permanent</option>
                    <option value="Contractual"
                        {{ isset($edit) && $edit->emp_nature3 == 'Contractual' ? 'selected' : '' }}>Contractual
                    </option>
                    <option value="Temporary"
                        {{ isset($edit) && $edit->emp_nature3 == 'Temporary' ? 'selected' : '' }}>Temporary</option>
                </select>
                <label for="State">Nature Of Employment</label>
            </div>
        </div>

        <div class="col-sm-12"></div>

        <div class="col-sm-4">
            <div class="mb-4">
                <label for="formFileMultiple" class="form-label">Attach Experience Letter (PDF)
                </label>
                <input class="form-control" type="file" id="formFileMultiple" multiple="" name="exp_letter3">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="mb-4">
                <label for="formFileMultiple" class="form-label">Attach Offer Letter (PDF)
                </label>
                <input class="form-control" type="file" id="formFileMultiple" multiple=""
                    name="offer_letter3">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="mb-4">
                <label for="formFileMultiple" class="form-label">Attach Last 3 Salary Slips (PDF)
                </label>
                <input class="form-control" type="file" id="formFileMultiple" multiple=""
                    name="last_salary3">
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-12 g-5">
            <div class="input-group">
                <span class="input-group-text ">Supervisor 1</span>

                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                               name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Supervisor Name" name="supervisor1_name3"
                        value="{{ isset($edit) ? $edit->supervisor1_name3 : '' }}" />
                    <label for="district">Supervisor Name</label>
                </div>
                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                              name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Phone Number" name="supervisor1_phone3"
                        value="{{ isset($edit) ? $edit->supervisor1_phone3 : '' }}" />
                    <label for="district">Supervisor's Phone Number</label>
                </div>

                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                              name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Supervisor's Email Id
                              " name="supervisor1_email3"
                        value="{{ isset($edit) ? $edit->supervisor1_email3 : '' }}" />
                    <label for="district">Supervisor's Email Id
                    </label>
                </div>
            </div>
        </div>

        <div class="col-sm-12 g-5">
            <div class="input-group">
                <span class="input-group-text ">Supervisor 2</span>

                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                             name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Supervisor Name" name="supervisor2_name3"
                        value="{{ isset($edit) ? $edit->supervisor2_name3 : '' }}" />
                    <label for="supervisor">Supervisor Name</label>
                </div>
                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                            name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Phone Number" name="supervisor2_phone3"
                        value="{{ isset($edit) ? $edit->supervisor2_phone3 : '' }}" />
                    <label for="Phone">Supervisor's Phone Number</label>
                </div>

                <div class="form-floating form-floating-outline">
                    <input type="text" aria-label="First
                            name"
                        class="form-control form-control form-floating form-floating-outline"
                        placeholder="Supervisor's Email Id
                            " name="supervisor2_email3"
                        value="{{ isset($edit) ? $edit->supervisor2_email3 : '' }}" />
                    <label for="district">Supervisor's Email Id
                    </label>
                </div>
            </div>
        </div>

    </div>

    <br>


    <div class="col-12 d-flex justify-content-between">
        <button class="btn btn-outline-secondary btn-prev">
            <i class="ri-arrow-left-line me-sm-1 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
        </button>
        <button type="submit" class="btn btn-primary btn-submit">Submit</button>
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
                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                        target="_blank">License</a>
                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank"
                        class="footer-link me-4">More Themes</a>

                    <a href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/"
                        target="_blank" class="footer-link me-4">Documentation</a>

                    <a href="https://pixinvent.ticksy.com/" target="_blank"
                        class="footer-link d-none d-sm-inline-block">Support</a>
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
  @if (Session::has('message'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.success("{{ session('message') }}");
  @endif

  @if (Session::has('error'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.error("{{ session('error') }}");
  @endif

  @if (Session::has('info'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.info("{{ session('info') }}");
  @endif

  @if (Session::has('warning'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.warning("{{ session('warning') }}"); @endif
</script>
  </body>
</html>
