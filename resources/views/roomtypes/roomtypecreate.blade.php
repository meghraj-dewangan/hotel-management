@extends("adminlayout")
<link rel="stylesheet" href="{{ asset('/css/roomtypecreate.css') }}">


<!-- Main Content -->
@section("main")





    <div class="main-content my-5">
        <h3 class="text-center">Add RoomType</h3>

        <div class="container">
            <div class="card shadow-lg rounded-3 p-4">

                <!-- View All Button -->
                <div class="d-flex justify-content-end   mb-4">

                    <a href="{{ route('roomtypes.index') }}"
                        class="btn btn-view-category  btn-success shadow-sm rounded-pill px-4">
                        View All
                    </a>
                </div>

                <!-- Form -->
                <form action="{{ route('roomtypes.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <!-- Title Field -->
                        <div class="col-12  mb-3">
                            <label for="category-title" class="form-label">Title</label>
                            <input type="text" id="category-title" name="title" class="form-control"
                                placeholder="Enter room category title" required>
                        </div>

                        <!-- Detail Field -->
                        <div class="col-12  mb-3">
                            <label for="category-detail" class="form-label">Detail</label>
                            <textarea id="category-detail" name="detail" rows="4" class="form-control"
                                placeholder="Enter  details" required></textarea>
                        </div>
                        <!-- image Field -->
                        <div class="col-12  mb-3">
                            <label for="category-image" class="form-label">Upload image</label>
                            <input type="file" id="category-image" name="image[]" class="form-control" multiple required>
                        </div>
                    </div>

                    <!-- Submit and Cancel Buttons -->
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary px-2 px-md-5 mb-2 mb-md-0">Submit</button>

                        <!-- Cancel Button -->
                        <button type="reset" class="btn btn-roomtype-cancel btn-warning px-2 px-md-5">Cancel</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection