<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Portfolio - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{ asset('assets/admin/img/favicon.png') }}" rel="icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Nunito:300,400,600,700|Poppins:300,400,500,600,700" rel="stylesheet">

  <link href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/admin/vendor/ckeditor/ckeditor5.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
</head>

<body>
@include('admin.components.header')
@include('admin.components.sidebar')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Edit Portfolio</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboards.index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('portfolios.index') }}">Portfolios</a></li>
        <li class="breadcrumb-item active">Edit</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit Portfolio</h5>

            <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- NAME --}}
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text"
                        name="name"
                        value="{{ old('name', $portfolio->name) }}"
                        class="form-control"
                        required>
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Service</label>
                <div class="col-sm-10">
                    <select name="service_id" class="form-select" required>
                    <option value="">-- Select Service --</option>

                    @foreach($services as $service)
                        <option value="{{ $service->id }}"
                        {{ old('service_id', $portfolio->service_id) == $service->id ? 'selected' : '' }}>
                        {{ $service->name }}
                        </option>
                    @endforeach
                    </select>

                    @error('service_id')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>


            {{-- COVER --}}
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Image Cover</label>
                <div class="col-sm-10">

                    @if($portfolio->cover)
                    <div class="mb-2">
                        <img src="{{ asset('storage/'.$portfolio->cover) }}"
                            class="img-thumbnail"
                            style="max-height:150px">
                    </div>
                    @endif

                    <input type="file" name="cover" class="form-control">
                    <small class="text-muted">
                    Kosongkan jika tidak ingin mengganti cover
                    </small>

                    @error('cover') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>

            {{-- GALLERY --}}
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Gallery Images</label>
                <div class="col-sm-10">

                    {{-- existing images --}}
                    @if($portfolio->images->count())
                    <div class="row g-3 mb-3">
                        @foreach($portfolio->images as $img)
                        <div class="col-md-2 col-sm-4">
                            <div class="card shadow-sm">
                            <img src="{{ asset('storage/'.$img->image) }}"
                                class="card-img-top"
                                style="height:120px; object-fit:cover;">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <p class="text-muted">Belum ada gallery image</p>
                    @endif

                    {{-- upload new images --}}
                    <input type="file"
                        name="images[]"
                        class="form-control"
                        multiple
                        accept="image/*">

                    <small class="text-muted">
                    Upload gambar baru untuk ditambahkan ke gallery
                    </small>

                    @error('images.*')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- ACTION --}}
            <div class="text-end">
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
                <a href="{{ route('portfolios.index') }}" class="btn btn-secondary">
                    Cancel
                </a>
            </div>

            </form>


          </div>
        </div>

      </div>
    </div>
  </section>

</main>

@include('admin.components.footer')

<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/main.js') }}"></script>

<!-- CKEditor -->
<script type="importmap">
{
  "imports": {
    "ckeditor5": "/assets/admin/vendor/ckeditor/ckeditor5.js",
    "ckeditor5/": "/assets/admin/vendor/ckeditor/"
  }
}
</script>

<script type="module">
import { ClassicEditor, Essentials, Paragraph, Bold, Italic, Font } from 'ckeditor5';

ClassicEditor.create(document.querySelector('#description'), {
  licenseKey: 'GPL',
  plugins: [ Essentials, Paragraph, Bold, Italic, Font ],
  toolbar: ['undo', 'redo', '|', 'bold', 'italic', '|', 'fontSize', 'fontColor', 'fontBackgroundColor']
})
.catch(error => console.error(error));
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
