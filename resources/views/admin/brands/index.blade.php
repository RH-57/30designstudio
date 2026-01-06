<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Brands - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/css/custom.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.components.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.components.sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Brands</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboards.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Brands</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <div class="col-xxl-8 col-xl-12">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">
                                Manage <span>| Brands</span>
                            </h5>
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createBrandModal">
                                <i class="bi bi-plus-lg"></i> Add Brand
                            </button>

                        </div>
                        <div class="row g-4 mt-2">

                            @foreach($brands as $brand)
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="brand-card text-center position-relative">

                                    <!-- Action Buttons -->
                                    <div class="brand-actions">
                                        <button
                                            class="btn btn-sm btn-warning"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editBrandModal{{ $brand->id }}">
                                            <i class="bi bi-pencil"></i>
                                        </button>


                                        <form action="{{ route('brands.destroy', $brand->id) }}"
                                            method="POST"
                                            class="form-delete">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>

                                    </div>

                                    <!-- Logo -->
                                    <div class="brand-logo">
                                        <img src="{{ asset('storage/'.$brand->logo) }}"
                                            alt="{{ $brand->name }}"
                                            class="img-fluid">
                                    </div>

                                    <!-- Name -->
                                    <p class="brand-name mt-2 mb-0 text-sm text-muted fw-medium text-center">
                                        {{ $brand->name }}
                                    </p>

                                </div>
                            </div>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="editBrandModal{{$brand->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-md">
                                    <div class="modal-content border-0 rounded-4">
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title fw-bold">Edit Brand</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <form action="{{ route('brands.update', $brand->id) }}"
                                                method="POST"
                                                enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="modal-body">

                                            <!-- Brand Name -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-semibold">Brand Name</label>
                                                    <input type="text"
                                                        name="name"
                                                        class="form-control"
                                                        value="{{ $brand->name }}"
                                                        required>
                                                </div>

                                                <!-- Current Logo -->
                                                @if($brand->logo)
                                                <div class="mb-3 text-center">
                                                    <img src="{{ asset('storage/'.$brand->logo) }}"
                                                        alt="{{ $brand->name }}"
                                                        class="img-fluid"
                                                        style="max-height:70px">
                                                </div>
                                                @endif

                                                <!-- New Logo -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-semibold">
                                                    Replace Logo <small class="text-muted">(optional)</small>
                                                    </label>
                                                    <input type="file"
                                                        name="logo"
                                                        class="form-control"
                                                        accept="image/*">
                                                </div>

                                            </div>

                                            <!-- Footer -->
                                            <div class="modal-footer border-0">
                                                <button type="button"
                                                        class="btn btn-light"
                                                        data-bs-dismiss="modal">
                                                    Cancel
                                                </button>
                                                <button type="submit"
                                                        class="btn btn-primary">
                                                    Update Brand
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Website Traffic -->
          <div class="card">

            <div class="card-body pb-0">


            </div>
          </div><!-- End Website Traffic -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- Create Modal -->
  <div class="modal fade" id="createBrandModal" tabindex="-1" aria-labelledby="createBrandModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content border-0 rounded-4">

        <!-- Modal Header -->
        <div class="modal-header border-0">
            <h5 class="modal-title fw-bold" id="createBrandModalLabel">
            Create Brand
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal Body -->
        <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="modal-body">

            <!-- Brand Name -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Brand Name</label>
                <input type="text"
                    name="name"
                    class="form-control"
                    placeholder="Enter brand name"
                    required>
            </div>

            <!-- Brand Logo -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Brand Logo</label>
                <input type="file"
                    name="logo"
                    class="form-control"
                    accept="image/*"
                    required>
                <small class="text-muted">
                Allowed: JPG, PNG, SVG | Max 4MB
                </small>
            </div>

            </div>

            <!-- Modal Footer -->
            <div class="modal-footer border-0">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                Cancel
            </button>
            <button type="submit" class="btn btn-primary">
                Save Brand
            </button>
            </div>

        </form>

        </div>
    </div>
    </div>



  <!-- ======= Footer ======= -->
  @include('admin.components.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


  <!-- Template Main JS File -->
  <script src="{{asset('assets/admin/js/main.js')}}"></script>

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
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteForms = document.querySelectorAll('.form-delete');

        deleteForms.forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Delete Brand?',
                    text: 'Data brand dan logo akan dihapus permanen!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Yes, delete it',
                    cancelButtonText: 'Cancel',
                    reverseButtons: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
    </script>

</body>

</html>
