@extends('layouts.app')
@section('content')
<style>
  /* Set the height of the Quill editor for desktop view */
 
    #kt_docs_quill_autosave {
      height: 400px; /* Adjust the height as needed */
    
  }
</style>

<div class="docs-content d-flex flex-column flex-column-fluid" id="kt_docs_content">
    <div class="container" id="kt_docs_content_container">
        <div class="card card-docs mb-2">
            <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                <div class="pt-10">
                        <form action="{{ route('blog.update', $data['blog']->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Thumbnail</label>
                            <div class="col-lg-8">
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
                                    @if ($data['blog']->images)
                                    <div class="image-input-wrapper w-125px h-125px" style="width: 200px !important; height:150px; background-image:  url{{ asset($data['blog']->images) }}"></div>
                                    @else
                                    <div class="image-input-wrapper w-125px h-125px" style="width: 200px !important; height:150px; background-image:  url(assets/media/avatars/blank.png)"></div>
                                    @endif

                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="photo" accept=".png, .jpg, .jpeg" value="{{ asset($data['blog']->images) }}"    onchange="showImageDimensionsAlert(this)">

                                    </label>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="blogTitle" class="form-label">Blog URL</label>
                            <input type="text" class="form-control" name="blogUrl" required value="{{$data['blog']->slug}}">
                        </div>
                        <div class="mb-3">
                            <label for="blogTitle" class="form-label">Blog Title</label>
                            <input type="text" class="form-control" id="blogTitle" name="blogTitle" required value="{{$data['blog']->tittle}}">
                            <!-- Hidden input field to store type  -->
                            <input type="hidden" name="type" value="blog">
                        </div>
                        <div class="mb-3">
                            <label for="blogContent" class="form-label">Blog Content</label>
                            <!-- Quill editor container -->
                            <div id="kt_docs_quill_editor" style="height: 400px;">{!! $data['blog']['content'] !!}</div>
                            <!-- Hidden input field to store Quill editor content -->
                            <input type="hidden" id="blogContent" value="{{$data['blog']['content']}}" name="blogContent" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                    <!-- End of Blog submission form -->
                </div>
            </div>
        </div>
    </div>
</div>

   
    @endsection