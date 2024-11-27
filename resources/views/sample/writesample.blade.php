@extends('layouts.app')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div id="kt_content_container" class="container-xxl">

      
        <div class="toolbar mb-5" id="kt_toolbar">
            <div class="container-fluid d-flex flex-stack" id="kt_toolbar_container">
                <div class="page-title d-flex align-items-center flex-wrap me-3">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Type Of Services</h1>
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">Assignment In Need</small>
                </div>
            </div>
        </div>

    
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        

     
        <div class="row g-5 g-xl-12">
            <div class="col-xl-12">
                <div class="card card-xxl-stretch mb-5 mb-xl-8">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">All Categories</span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                    @if(isset($sample) && $sample)
                        <form action="{{ route('services.update', $sample->id) }}" method="POST">
                        @method('PUT')
                    @else
                        <form action="{{ route('services.store') }}" method="POST">
                    @endif
                        
                            @csrf
                            <div class="mt-4 mb-4">
                                <label for="title" class="form-label fw-bold">Title</label>
                                <input type="text"  value=" {{$sample->title ?? ''}}" class="form-control " name="title">
                            </div>
                            <!-- Quill Editor -->
                            <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
                            <div id="editor" style="height: 200px;">
                                <p><br /> {!!$sample->content ?? ''!!}</p>
                            </div>

                            <!-- Hidden Field for Editor Content -->
                            <input type="hidden" value="{{$sample->content ?? ''}}"  name="editorContent" id="editorContent">
                            

                            <!-- Category Dropdown -->
                            <div class="mt-4">
                                <label for="category" class="form-label fw-bold">Category</label>
                                <select name="category" class="form-control" id="category" required>
                                    <option value="">Select Category</option>
                                    @foreach ($sampleCategory as $obj)
                                        <option value="{{ $obj->id }}" {{ $obj->id == ($sample->category ?? '') ? 'selected' : '' }}>
                                            {{ $obj->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                              <!-- type Dropdown -->
                              <div class="mt-4">
                                <label for="type" class="form-label fw-bold">Type</label>
                                <select name="type" class="form-control" id="category" required>
                                    <option value="">Select Category</option>
                                    @foreach ($type as $obj)
                                        <option value="{{ $obj->id }}" {{ $obj->id == ($sample->type_id ?? '') ? 'selected' : '' }}>
                                            {{ $obj->name }}
                                        </option>
                                    @endforeach
                                </select>
                             </div>

                            <!-- Submit Button -->
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">@if(isset($sample) && $sample) 
                                        Update 
                                    @else 
                                        Submit 
                                    @endif
                                </button>
                            </div>
                        </form>

                        <!-- Include Quill Library -->
                        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

                        <!-- Initialize Quill Editor and Update Hidden Input in Real-time -->
                        <script>
                            // Initialize Quill editor
                            const quill = new Quill('#editor', {
                                theme: 'snow'
                            });

                            // Update hidden field with editor content on each text change
                            quill.on('text-change', function() {
                                document.getElementById('editorContent').value = quill.root.innerHTML;
                            });

                            // Store HTML content in hidden input on form submission as a fallback
                            document.querySelector('form').onsubmit = function () {
                                document.getElementById('editorContent').value = quill.root.innerHTML;
                            };
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
