<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sevices - Admin</title>
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
      <h1>Create Service</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboards.index') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Services</a></li>
          <li class="breadcrumb-item active">Create</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Page</h5>

              <!-- Form Start -->
              <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Headline</label>
                  <div class="col-sm-10">
                    <input type="text" name="headline" value="{{ old('headline') }}" class="form-control" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Headline Description</label>
                  <div class="col-sm-10">
                    <textarea name="headline_description" class="form-control">{{ old('headline_description') }}</textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Headline Background</label>
                  <div class="col-sm-10">
                    <input type="file" name="hero_image" class="form-control">
                    <small class="text-muted">Max 4 Mb</small>
                  </div>
                </div>

                <h5 class="card-title">Service</h5>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea name="description" id="editor" class="form-control" rows="6">
                            {{old('description')}}
                        </textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-4">
                        <select name="status" class="form-select">
                            <option value="active" {{ old('status') == "active" ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status') == "inactive" ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                </div>

                <h5 class="card-title">Images</h5>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Service Images (Gallery)</label>
                    <div class="col-sm-10">

                        <input type="file"
                            name="gallery_images[]"
                            id="galleryInput"
                            multiple
                            accept="image/*"
                            class="form-control">

                        <small class="text-muted">You can upload multiple images (JPG, PNG, WEBP), Max 4MB</small>

                        <!-- Preview container -->
                        <div id="preview" class="d-flex flex-wrap gap-2 mt-3"></div>

                    </div>
                </div>


                <h5 class="card-title">SEO Meta</h5>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Meta Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="meta_title" value="{{ old('meta_title') }}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Meta Description</label>
                  <div class="col-sm-10">
                    <textarea name="meta_description" class="form-control" rows="2">{{ old('meta_description') }}</textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Meta Image</label>
                  <div class="col-sm-10">
                    <input type="file" name="meta_image" class="form-control">
                    <small class="text-muted">Max 4 Mb</small>
                  </div>
                </div>

                <div class="text-end">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancel</a>
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
  <script src="{{asset('assets/admin/js/main.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
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
            Font,
            List,
            Table,
            TableToolbar
        } from 'ckeditor5';

        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                licenseKey: 'GPL', // bebas, karena kamu pakai versi GPL
                plugins: [ Essentials, Paragraph, Bold, Italic, Font, List, Table, TableToolbar ],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'bulletedList', 'numberedList', '|',     // ul / ol
                    'insertTable', '|',                      // table
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ],
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells'
                    ]
                }
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
