<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolios - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/admin/img/favicon.png')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/ckeditor/ckeditor5.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

@include('admin.components.header')
<!-- End Header -->

<!-- ======= Sidebar ======= -->
@include('admin.components.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Portfolio</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboards.index') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('portfolios.index') }}">Portfolios</a></li>
          <li class="breadcrumb-item active">Create</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New Portfolio</h5>

              <!-- Form Start -->
              <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-5">
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                  </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Service</label>
                    <div class="col-sm-5">
                        <select name="service_id" class="form-select" required>
                        <option value="">-- Select Service --</option>

                        @foreach($services as $service)
                            <option
                                value="{{ $service->id }}"
                                {{ old('service_id') == $service->id ? 'selected' : '' }}
                            >
                                {{ $service->name }}
                            </option>
                        @endforeach

                        </select>

                        @error('service_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cover" class="col-sm-2 col-form-label">Image Cover</label>
                    <div class="col-sm-5">
                        <input type="file" name="cover" id="images" class="form-control">
                        <small class="form-text text-muted">Max image size: 2MB</small>
                        @error('cover') <small class="text-danger">{{ $message }}</small> @enderror

                        <!-- Preview -->
                        <div class="mt-3 d-flex flex-wrap gap-2" id="preview"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="images" class="col-sm-2 col-form-label">Gallery Images</label>
                    <div class="col-sm-5">
                        <input type="file"
                            name="images[]"
                            id="gallery-images"
                            class="form-control"
                            multiple
                            accept="image/*">

                        <small class="form-text text-muted">
                            You can upload multiple images (max 2MB each)
                        </small>

                        @error('images.*')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                        <!-- Preview Gallery -->
                        <div class="mt-3 d-flex flex-wrap gap-2" id="gallery-preview"></div>
                    </div>
                </div>


                <div class="text-end">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a href="{{ route('portfolios.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
              </form><!-- End Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

</main>

  <!-- ======= Footer ======= -->
  @include('admin.components.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/admin/js/main.js')}}"></script>

    <!-- CKEditor 5 Self-hosted -->
    <script type="importmap">
    {
        "imports": {
            "ckeditor5": "/assets/admin/vendor/ckeditor/ckeditor5.js",
            "ckeditor5/": "/assets/admin/vendor/ckeditor/"
        }
    }
    </script>

    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Paragraph,
            Bold,
            Italic,
            Font
        } from 'ckeditor5';

        ClassicEditor
            .create( document.querySelector( '#description' ), {
                licenseKey: 'GPL', // bebas, karena kamu pakai versi GPL
                plugins: [ Essentials, Paragraph, Bold, Italic, Font ],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}",
            timer: 2000,
            showConfirmButton: false
        })
    </script>
    @endif

    @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ session('error') }}",
            timer: 3000,
            showConfirmButton: true
        })
    </script>
    @endif
</body>

</html>
