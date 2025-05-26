@extends('admin')

<link rel="stylesheet" href="{{ asset('/css/roomtypeedit.css') }}">

<!-- Main Content -->
@section("main")


    <div class="main-content my-5">
        <h3 class="text-center">Edit RoomType</h3>

        <div class="container">
            <div class="card shadow-lg rounded-3 p-4">

                <!-- View All Button -->
                <div class="d-flex justify-content-end mb-4">
                    <a href="{{ route('roomtypes.index') }}" class="btn btn-view-category btn-success shadow-sm rounded-pill px-4">
                        View All
                    </a>
                </div>

                <!-- Form -->
                <form method="post" action="{{ route('roomtypes.update',"$editdata->id") }}"  enctype="multipart/form-data">
                    @csrf
                    @method('put')
                   <input type="hidden" value="{{ "$editdata->id" }}">
                    <div class="row">
                        <!-- Title Field -->
                        <div class="col-12 mb-3">
                            <label for="category-title" class="form-label">Title</label>
                            <input type="text" id="category-title" name="title" value="{{ $editdata->title }}" class="form-control"
                                placeholder="Enter room category title">
                        </div>

                        <!-- Detail Field -->
                        <div class="col-12 mb-3">
                            <label for="category-detail" class="form-label">Detail</label>
                            <textarea id="category-detail" name="detail"  rows="4" class="form-control"
                                placeholder="Enter room category details">{{ $editdata->detail }}</textarea>
                        </div>

                        <!-- Image Field -->
                        <div class="col-12 mb-3">
                            <label for="category-image" class="form-label">Upload image</label>
                            <input type="file" id="category-image" name="image[]" class="form-control" multiple>

                            <!-- Display existing images -->
                            <div class="mt-3 d-flex flex-wrap gap-2">
                            @php
                                $images = json_decode($editdata->category_image, true);
                            @endphp

                            @if($images && is_array($images))
                                @foreach($images as $image)
                                    <img src="{{ asset('storage/image/' . $image) }}" 
                                         alt="Room Image" 
                                         class="img-thumbnail" 
                                         style="width: 120px; height: 100px;">
                                @endforeach
                            @else
                                <p>No images available</p>
                            @endif
                        </div>
                           
                        </div>
                    </div>

                    <!-- Submit and Cancel Buttons -->
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <!-- Submit Button --> 
                        <button type="submit" class="btn btn-primary px-3 px-md-5 mb-2 mb-md-0">Update</button>

                        <!-- Cancel Button -->
                        <a class="btn btn-roomtype-cancel btn-warning px-3 px-md-5" href="{{ route('roomtypes.index') }}">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection