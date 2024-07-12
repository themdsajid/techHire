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
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Employee List</title>

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
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
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


              <!-- Responsive Datatable -->
              <div class="card">
                <h5 class="card-header text-center text-md-start">Employee List</h5>
                <div class="card-datatable table-responsive">
                  <?php 
                  if ($users->role == 'admin') 
                  {
                    ?>
                    <table class="dt-responsive table table-bordered">
                  <thead>
                  <tr>
                        <th>SNo.</th>
                        <th>Company Name</th>
                        <th>Address</th>
                        <th>Emp ID</th>
                        <th>phone no</th>
                        <th>Company 2</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                     @foreach($admin as $key=> $items)
                      <tr>
                        <td>{{ $key+1}}</td>
                        <td>{{$items->company1}}</td>
                        <td>{{$items->address1}}</td>
                        <td>{{$items->empid1}}</td>
                        <td>{{$items->supervisor2_phone1}}</td>
                        <td>{{$items->company2}}</td>
                        <td>
                        <a href="{{ route('view.emplyer', encrypt($items->user_id))}}"><button type="button" class="btn btn-icon btn-primary btn-fab demo waves-effect waves-light">
                            <span class="tf-icons ri-eye-line ri-22px"></span>
                          </button></a>

                          <a href="{{ route('employee.edit', encrypt($items->user_id))}}"><button type="button" class="btn btn-icon btn-primary btn-fab demo waves-effect waves-light">
                            <span class="tf-icons ri-edit-box-line ri-22px"></span>
                          </button></a>
                           <form method="POST" action="">
                           @csrf
                          <input name="_method" type="hidden" value="DELETE">
                          <button type="button" class="btn btn-icon btn-danger btn-fab demo waves-effect waves-light">
                            <span class="tf-icons ri-delete-bin-line ri-22px"></span>
                          </button>
                         </form>
                        </td>
                     </tr>
                     @endforeach
                    </tbody>
                    
                    <tfoot>
                      <tr>
                        <th>SNo.</th>
                        <th>Company Name</th>
                        <th>Address</th>
                        <th>Emp ID</th>
                        <th>phone no</th>
                        <th>Company 2</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>

                    <?php
                  }else
                  {
                    ?>
                    <table class="dt-responsive table table-bordered">
                  <thead>
                  <tr>
                        <th>SNo.</th>
                        <th>Company Name</th>
                        <th>Address</th>
                        <th>Emp ID</th>
                        <th>phone no</th>
                        <th>Company 2</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                     @foreach($results as $key=> $items)
                      <tr>
                        <td>{{ $key+1}}</td>
                        <td>{{$items->company1}}</td>
                        <td>{{$items->address1}}</td>
                        <td>{{$items->empid1}}</td>
                        <td>{{$items->supervisor2_phone1}}</td>
                        <td>{{$items->company2}}</td>
                        <td>
                        <a href="{{ route('view.emplyer', encrypt($items->user_id))}}"><button type="button" class="btn btn-icon btn-primary btn-fab demo waves-effect waves-light">
                            <span class="tf-icons ri-eye-line ri-22px"></span>
                          </button></a>

                          <a href="{{ route('employee.edit', encrypt($items->user_id))}}"><button type="button" class="btn btn-icon btn-primary btn-fab demo waves-effect waves-light">
                            <span class="tf-icons ri-edit-box-line ri-22px"></span>
                          </button></a>
                        </td>
                     </tr>
                     @endforeach
                    </tbody>
                    
                    <tfoot>
                      <tr>
                        <th>SNo.</th>
                        <th>Company Name</th>
                        <th>Address</th>
                        <th>Emp ID</th>
                        <th>phone no</th>
                        <th>Company 2</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>

                    <?php
                  }


                  ?>
                </div>
              </div>
              <!--/ Responsive Datatable -->
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
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <!-- Flat Picker -->
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/tables-datatables-advanced.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
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

