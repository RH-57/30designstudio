<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Service - Admin</title>

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
    <h1>Edit Service</h1>
  </div>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

            {{-- ERROR --}}
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            {{-- ================= FORM UPDATE SERVICE ================= --}}
            <form id="updateForm"
                  action="{{ route('services.update', $service->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

              @csrf
              @method('PUT')

              <h5 class="card-title">Page</h5>

              <div class="mb-3">
                <label class="form-label">Headline</label>
                <input type="text"
                       name="headline"
                       class="form-control"
                       value="{{ old('headline', $service->headline) }}"
                       required>
              </div>

              <div class="mb-3">
                <label class="form-label">Header Background</label><br>
                @if($service->hero_image)
                  <img src="{{ asset('storage/'.$service->hero_image) }}"
                       class="img-thumbnail mb-2"
                       width="200">
                @endif
                <input type="file" name="hero_image" class="form-control">
              </div>

              <h5 class="card-title">Service</h5>

              <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text"
                       name="name"
                       class="form-control"
                       value="{{ old('name', $service->name) }}"
                       required>
              </div>

              <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" id="editor" rows="6">
{{ old('description', $service->description) }}
                </textarea>
              </div>

              <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select" required>
                  <option value="active" {{ $service->status === 'active' ? 'selected' : '' }}>Active</option>
                  <option value="inactive" {{ $service->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
              </div>

              {{-- UPLOAD NEW GALLERY --}}
              <h5 class="card-title">Add Gallery Images</h5>

              <div class="mb-3">
                <input type="file"
                       name="gallery_images[]"
                       id="galleryInput"
                       class="form-control"
                       multiple
                       accept="image/*">
                <div id="preview" class="d-flex flex-wrap gap-2 mt-3"></div>
              </div>

              <h5 class="card-title">SEO Meta</h5>

              <div class="mb-3">
                <label class="form-label">Meta Title</label>
                <input type="text"
                       name="meta_title"
                       class="form-control"
                       value="{{ old('meta_title', $service->meta_title) }}">
              </div>

              <div class="mb-3">
                <label class="form-label">Meta Description</label>
                <textarea name="meta_description"
                          class="form-control"
                          rows="2">{{ old('meta_description', $service->meta_description) }}</textarea>
              </div>

              <div class="mb-3">
                <label class="form-label">Meta Image</label><br>
                @if($service->meta_image)
                  <img src="{{ asset('storage/'.$service->meta_image) }}"
                       class="img-thumbnail mb-2"
                       width="200">
                @endif
                <input type="file" name="meta_image" class="form-control">
              </div>

              <div class="text-end mt-4">
                <button class="btn btn-primary">Update</button>
                <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancel</a>
              </div>

            </form>
            {{-- ================= END FORM ================= --}}

            {{-- ================= EXISTING GALLERY (OUTSIDE FORM) ================= --}}
            @if($service->images->count())
              <hr>
              <h5 class="mt-4 mb-3">Existing Gallery Images</h5>

              <div class="row g-3">
                @foreach($service->images as $img)
                  <div class="col-md-2 col-sm-4">
                    <div class="position-relative border rounded overflow-hidden">
                      <img src="{{ asset('storage/'.$img->image_path) }}"
                           class="w-100"
                           style="height:120px; object-fit:cover;">

                      <form action="{{ route('service-images.destroy', $img->id) }}"
                            method="POST"
                            class="position-absolute top-0 end-0 m-1"
                            onsubmit="return confirm('Hapus gambar ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">&times;</button>
                      </form>
                    </div>
                  </div>
                @endforeach
              </div>
            @endif
            {{-- ================= END GALLERY ================= --}}

          </div>
        </div>

      </div>
    </div>
  </section>

</main>

@include('admin.components.footer')

<script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/main.js') }}"></script>

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

ClassicEditor.create(document.querySelector('#editor'), {
  licenseKey: 'GPL',
  plugins: [Essentials, Paragraph, Bold, Italic, Font],
  toolbar: ['undo','redo','|','bold','italic','|','fontSize','fontColor']
}).then(editor => window.editor = editor);
</script>

<script>
document.getElementById('galleryInput')?.addEventListener('change', e => {
  const preview = document.getElementById('preview');
  preview.innerHTML = '';
  [...e.target.files].forEach(file => {
    const reader = new FileReader();
    reader.onload = ev => {
      const img = document.createElement('img');
      img.src = ev.target.result;
      img.style.width = '120px';
      img.style.height = '80px';
      img.style.objectFit = 'cover';
      img.classList.add('border','rounded');
      preview.appendChild(img);
    };
    reader.readAsDataURL(file);
  });
});
</script>

<script>
document.getElementById('updateForm').addEventListener('submit', () => {
  if (window.editor) {
    document.querySelector('#editor').value = window.editor.getData();
  }
});
</script>

</body>
</html>
