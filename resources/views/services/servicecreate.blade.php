@extends("adminlayout")

@section("main")
    <link rel="stylesheet" href="{{asset('css/servicescreate.css')}}">

    <!-- Main Content -->
   
    <div class="main-content my-5">
        <h3 class="text-center">Add Services</h3>

        <div class="container">
            <div class="card shadow-lg rounded-3 p-4">

                <!-- View All Button -->
                <div class="d-flex justify-content-end   mb-4">

                    <a href="{{ url('admin/services') }}"
                        class="btn btn-view-service  btn-success shadow-sm rounded-pill px-4">
                        View All
                    </a>
                </div>

                <!-- Form -->
                <form action="{{ url('admin/servicesstore') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <!-- Title Field -->
                        <div class="col-12  mb-3">
                            <label for="service-title" class="form-label">Title</label>
                            <input type="text" id="service-title" name="title" class="form-control"
                                placeholder="Enter title" required>
                        </div>

                        <!-- Detail Field -->
                        <div class="col-12  mb-3">
                            <label for="service-detail" class="form-label">Detail</label>
                            <textarea id="service-detail" name="detail" rows="4" class="form-control"
                                placeholder="Enter  details" required></textarea>
                        </div>
                        <!-- image Field -->
                        <div class="col-12  mb-3">
                            <label for="service-image" class="form-label">Upload image</label>
                            <input type="file" id="service-image" name="image" class="form-control" multiple required>
                        </div>
                    </div>

                    <!-- Submit and Cancel Buttons -->
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary px-2 px-md-5 mb-2 mb-md-0">Submit</button>

                        <!-- Cancel Button -->
                       <a class="btn btn-service-cancel btn-warning px-3 px-md-5"
                           href="{{ url('admin/services') }}">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection