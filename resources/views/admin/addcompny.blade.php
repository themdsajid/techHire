<!DOCTYPE html>
 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>{{isset($edit) ? 'Edit Company' : 'Add Company' }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="../../../assets/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="../../../assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="../../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="../../../assets/css/demo2/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:../../partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Add<span>Company</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        @include('admin.layout.sidebar')
      </div>
    </nav>
  
		<!-- partial -->
	
		<div class="page-wrapper">
				
			<!-- partial:../../partials/_navbar.html -->
			@include('admin.layout.header')
			<!-- partial -->

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('admin.add_company')}}">Company</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{isset($edit) ? 'Edit Company' : 'Add Company' }}  </li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">
          {{isset($edit) ? 'Edit Company' : 'Add Company' }}        
                </h6>
                  <form  method="POST" action="{{ isset($edit) ? route('company.update', $edit->id) : route('save.company') }}">
                 @csrf
                @if(isset($edit))
                @method('PUT')
                @endif
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Name Company:</label>
													<input type="text" name="c_name" class="form-control"  value="{{ isset($edit) ? $edit->name : '' }}">
                      @error('c_name')
                    <label class="text-danger">{{ $message}}</label>
                    @enderror
												</div>
											</div><!-- Col -->
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Company Email:</label>
													<input type="email" name="email" class="form-control" value="{{ isset($edit) ? $edit->email : '' }}">
                    @error('email')
                    <label class="text-danger">{{ $message}}</label>
                    @enderror
												</div>
											</div><!-- Col -->
										</div><!-- Row -->

                      <div class="row">
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Company Phone:</label>
                          <input type="text" name="c_phone" class="form-control" value="{{ isset($edit) ? $edit->phone : '' }}">
                      @error('c_phone')
                    <label class="text-danger">{{ $message}}</label>
                    @enderror
                        </div>
                      </div><!-- Col -->
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Company Address:</label>
                          <textarea class="form-control" id="address" rows="5" name="address">{{ isset($edit) ? $edit->address : '' }}</textarea>
                    @error('address')
                    <label class="text-danger">{{ $message}}</label>
                    @enderror
                        </div>
                      </div><!-- Col -->
                    </div><!-- Row -->

                     <div class="row">
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Password:</label>
                          <input type="password"  id="password" name="password" class="form-control" value="{{ isset($edit) ? $edit->password : '' }}" >
                          @error('password')
                    <label class="text-danger">{{ $message}}</label>
                    @enderror
                        </div>
                      </div><!-- Col -->
                      <div class="col-sm-6">
                        <div class="mb-3">
                         <label class="form-label">Re-enter Password:</label>
                          <input type="text" id="password_confirmation" name="password_confirmation" class="form-control" value="{{ isset($edit) ? $edit->password : '' }}">
                          @error('confrm_password')
                    <label class="text-danger">{{ $message}}</label>
                    @enderror
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary">{{ isset($edit) ? 'Update Company' : 'Add Company' }}</button>
										
									</form>
									
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- partial:../../partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
				<p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
				<p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->
	
		</div>
	</div>

	<!-- core:js -->
	<script src="../../../assets/vendors/core/core.js"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="../../../assets/vendors/feather-icons/feather.min.js"></script>
	<script src="../../../assets/js/template.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<!-- End custom js for this page -->
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