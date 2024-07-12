<?php 
$compny = DB::table('users')->where('role','company')->get();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>View</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../../assets/vendors/core/core.css">
	<link rel="stylesheet" href="../../../assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="../../../assets/vendors/flag-icon-css/css/flag-icon.min.css">  
	<link rel="stylesheet" href="../../../assets/css/demo2/style.css">
  <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          <span>View</span>
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
						<li class="breadcrumb-item"><a href="{{ route('admin.userview')}}">View User</a></li>
						<li class="breadcrumb-item active" aria-current="page">
						View</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Add Employee</h6>
								<form  method="POST">
								<div class="row">
								<div class="col-sm-6">
								<div class="mb-3">
								<label class="form-label">Employee Name:</label>
						<input type="text" class="form-control" name="
                        add_emp" value="{{$vuewuser->emp_name}}" readonly>
						
												</div>
											</div><!-- Col -->
											<div class="col-sm-6">
										<div class="mb-3">
								<label class="form-label">Employee Email</label>
							<input type="email" class="form-control" name="emp_email" value="{{$vuewuser->email}}">
								
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Employee Phone</label>
                          <input type="text" class="form-control" name="emp_phone" value="{{$vuewuser->phone}}">
                     
                        </div>
                      </div><!-- Col -->
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Employee No</label>
                          <input type="text" class="form-control" name="emp_no" value="{{$vuewuser->emp_id}}" readonly>
                     
                        </div>
                      </div><!-- Col -->
                    </div><!-- Row -->
                    
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Employee Address:</label>
                          <textarea class="form-control" id="address" rows="5" name="address">{{$vuewuser->address}}</textarea>
                    
                        </div>
                      </div><!-- Col -->
                      <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Select Company</label>
                      <select class="form-select form-select-sm mb-3" name="compny">
                        <option selected>Select Company</option>
                        @foreach($compny as $compy)
                        <option value="{{$compy->id}}">{{$compy->name}}</option>
                        @endforeach
                      </select>
                        </div>
                      </div><!-- Col -->
                    </div><!-- Row -->

                    <div class="row">
                      
                     <div class="col-sm-6">
    <div class="mb-3">
        <label class="form-label">Upload Pdf</label>
        <input type="file" class="form-control" name="images[]" id="images" multiple="multiple">
        <div class="user-image mb-3 text-center">
            <div class="imgPreview" style="height: 50px;"></div>
        </div>
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
                        <embed src="{{ asset('/pdf/' . $pdf) }}" type="application/pdf" width="70%" height="80px" />
                    @else
                        <p>PDF file not found: {{ $pdf }}</p>
                    @endif
                @endforeach
            @else
                <p>No PDF files found for display.</p>
            @endif
    </div>
            
         </div><!-- Col -->

                    </div><!-- Row -->
						
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };
        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
        });    
    </script>
</body>
</html>