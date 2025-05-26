@extends('admin')

<link rel="stylesheet" href="{{ asset('/css/serviceedit.css') }}">

<!-- Main Content -->
@section("main")


    <div class="main-content my-5">
        <h3 class="text-center">Edit {{ $serviceedit->title }} service</h3>

        <div class="container">
            <div class="card shadow-lg rounded-3 p-4">

                <!-- View All Button -->
                <div class="d-flex justify-content-end mb-4">
                    <a href="{{ url('admin/services') }}" class="btn btn-view-service btn-success shadow-sm rounded-pill px-4">
                        View All
                    </a>
                </div>

                <!-- Form -->
                <form method="post" action="{{url('admin/serviceupdate/'.$serviceedit->id)  }}"  enctype="multipart/form-data">
                    @csrf
                    @method('put')
                   <input type="hidden" value="">
                    <div class="row">
                        <!-- Title Field -->
                        <div class="col-12 mb-3">
                            <label for="service-title" class="form-label">Title</label>
                            <input type="text" id="service-title" name="title" value="{{$serviceedit->title}}" class="form-control"
                                placeholder="Enter title">
                        </div>

                        <!-- Detail Field -->
                        <div class="col-12 mb-3">
                            <label for="service-detail" class="form-label">Detail</label>
                            <textarea id="service-detail" name="detail"   rows="4" class="form-control"
                                placeholder="Enter details">{{$serviceedit->detail}}</textarea>
                        </div>

                        <!-- Image Field -->
                        <div class="col-12 mb-3">
                            <label for="category-image" class="form-label">Upload image</label>
                            <input type="file" id="category-image" name="image" class="form-control" multiple>

                            <!-- Display existing images -->
                            <div class="mt-3 d-flex flex-wrap gap-2">
                                            
                                    <img src="{{ asset('storage/image/'.$serviceedit->service_image) }}" 
                                         alt="Room Image" 
                                         class="img-thumbnail" 
                                         style="width: 120px; height: 100px;">
                               
                            
                                      
                        </div>
                           
                        </div>
                    </div>

                    <!-- Submit and Cancel Buttons -->
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <!-- Submit Button --> 
                        <button type="submit" class="btn btn-primary px-3 px-md-5 mb-2 mb-md-0">Update</button>

                        <!-- Cancel Button -->
                        <a class="btn btn-service-cancel btn-warning px-3 px-md-5" href="">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection