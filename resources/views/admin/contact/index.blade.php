<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Setting Contacts - Admin</title>
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

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/css/custom.css')}}" rel="stylesheet">
  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </noscript>

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
      <h1>Contacts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboards.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Contacts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Update <span>| Contacts</span></h5>

                  <form action="{{route('contacts.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{old('phone', $contacts->phone ?? '')}}" placeholder="+628987654321" required>
                            @error('phone')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="emai;" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email', $contacts->email ?? '')}}" placeholder="yourmail@yourdomain.com" required>
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" name="address" id="address">{{old('address', $contacts->address ?? '')}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Google Maps</label>
                        <textarea class="form-control" name="maps" id="maps">{{old('maps', $contacts->maps ?? '')}}</textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success" type="submite">Update</button>
                    </div>
                  </form>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">
                                Manage <span>| Social Media</span>
                            </h5>
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#socialmedia">Add</button>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Url</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mediasocials as $key => $medsoc)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$medsoc->name}}</td>
                                    <td><a href="{{$medsoc->url}}">{{$medsoc->url}}</a></td>
                                    <td>
                                        <form class="form-delete" action="{{route('mediasocial.destroy', $medsoc->id)}}" method="POST">
                                            <a href="" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#updatesocialmedia{{$medsoc->id}}"><i class="bi bi-pencil-square"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

          </div>
        </div><!-- End Left side columns -->

        <!-- Modal -->
        <div class="modal fade" id="socialmedia" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <form action="{{ route('mediasocial.store') }}" method="POST">
                        @csrf

                        <div class="modal-header">
                            <h5 class="modal-title">Add Social Media</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Name</label>
                                <input type="text"
                                    class="form-control"
                                    name="name"
                                    placeholder="e.g. Instagram"
                                    required>
                            </div>

                            <!-- URL -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">URL</label>
                                <input type="url"
                                    class="form-control"
                                    name="url"
                                    placeholder="https://instagram.com"
                                    required>
                            </div>

                            <!-- Icon Picker -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Choose Icon</label>

                                <div class="social-icon-picker">

                                    <button type="button"
                                            class="social-icon-option"
                                            data-fa="fa-instagram"
                                            title="Instagram">
                                        <i class="bi bi-instagram"></i>
                                    </button>

                                    <button type="button"
                                            class="social-icon-option"
                                            data-fa="fa-facebook-f"
                                            title="Facebook">
                                        <i class="bi bi-facebook"></i>
                                    </button>

                                    <button type="button"
                                            class="social-icon-option"
                                            data-fa="fa-tiktok"
                                            title="TikTok">
                                        <i class="bi bi-tiktok"></i>
                                    </button>

                                    <button type="button"
                                            class="social-icon-option"
                                            data-fa="fa-youtube"
                                            title="YouTube">
                                        <i class="bi bi-youtube"></i>
                                    </button>

                                </div>

                                <small class="text-muted d-block mt-2">
                                    Click one icon to select
                                </small>
                            </div>


                            <!-- Hidden Icon Value -->
                            <input type="hidden" name="icon" id="selectedIcon" required>

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button class="btn btn-primary" type="submit">
                                Save
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>


        @foreach ($mediasocials as $media)
        <div class="modal fade"
            id="updatesocialmedia{{ $media->id }}"
            tabindex="-1"
            aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <form action="{{ route('mediasocial.update', $media->id) }}"
                        method="POST">
                        @csrf
                        @method('PUT')

                        <div class="modal-header">
                            <h5 class="modal-title fw-semibold">Edit Social Media</h5>
                            <button type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Name</label>
                                <input type="text"
                                    class="form-control"
                                    name="name"
                                    value="{{ $media->name }}"
                                    required>
                            </div>

                            <!-- URL -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">URL</label>
                                <input type="url"
                                    class="form-control"
                                    name="url"
                                    value="{{ $media->url }}"
                                    required>
                            </div>

                            <!-- Icon Picker -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Choose Icon</label>

                                <div class="social-icon-picker"
                                    data-selected="{{ $media->icon }}">

                                    <button type="button"
                                            class="social-icon-option"
                                            data-fa="fa-brands fa-instagram">
                                        <i class="bi bi-instagram"></i>
                                    </button>

                                    <button type="button"
                                            class="social-icon-option"
                                            data-fa="fa-brands fa-facebook-f">
                                        <i class="bi bi-facebook"></i>
                                    </button>

                                    <button type="button"
                                            class="social-icon-option"
                                            data-fa="fa-brands fa-tiktok">
                                        <i class="bi bi-tiktok"></i>
                                    </button>

                                    <button type="button"
                                            class="social-icon-option"
                                            data-fa="fa-brands fa-youtube">
                                        <i class="bi bi-youtube"></i>
                                    </button>

                                </div>

                                <small class="text-muted d-block mt-2">
                                    Selected icon will be saved automatically
                                </small>
                            </div>

                            <!-- Hidden icon input -->
                            <input type="hidden"
                                name="icon"
                                class="selected-icon-input"
                                value="{{ $media->icon }}"
                                required>

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-light"
                                    type="button"
                                    data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button class="btn btn-primary"
                                    type="submit">
                                Update
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        @endforeach
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

  <!-- ======= Footer ======= -->
  @include('admin.components.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
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
        document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('.social-icon-option');
            const input = document.getElementById('selectedIcon');

            buttons.forEach(btn => {
                btn.addEventListener('click', () => {
                    buttons.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    input.value = btn.dataset.fa;
                });
            });
        });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', () => {

        document.querySelectorAll('.social-icon-picker').forEach(picker => {
            const selectedValue = picker.dataset.selected;
            const hiddenInput = picker.closest('.modal-body')
                                    .querySelector('.selected-icon-input');

            picker.querySelectorAll('.social-icon-option').forEach(btn => {

                // Auto select existing icon
                if (btn.dataset.fa === selectedValue) {
                    btn.classList.add('active');
                }

                btn.addEventListener('click', () => {
                    picker.querySelectorAll('.social-icon-option')
                        .forEach(b => b.classList.remove('active'));

                    btn.classList.add('active');
                    hiddenInput.value = btn.dataset.fa;
                });
            });
        });

    });
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteForms = document.querySelectorAll('.form-delete');

        deleteForms.forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Delete Media Social?',
                    text: 'Data Media Social akan dihapus permanen!',
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
