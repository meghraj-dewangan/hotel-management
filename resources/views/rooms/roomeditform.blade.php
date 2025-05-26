@extends("adminlayout")
<link rel="stylesheet" href="{{ asset('/css/roomsedit.css') }}">


<!-- Main Content -->
@section("main")

    
    <div class="main-content my-5">
        <h3 class="text-center">Edit Room</h3>

        <div class="container">
            <div class="card shadow-lg rounded-3 p-4">

                <!-- View All Button -->
                <div class="d-flex justify-content-end mb-4">
                    <a href="{{ url('admin/roomsview') }}" class="btn btn-view-category btn-success shadow-sm rounded-pill px-4">
                        View All
                    </a>
                </div>
             

            

                <!-- Form -->
                <form method="post" action="{{ url('admin/roomsupdate/' . $editdata->id) }}"  enctype="multipart/form-data">
                    @csrf
                    @method('put')
                   <input type="hidden" value="">
                    <div class="row">
                        <!-- Title Field -->
                        <div class="col-12 mb-3">
                            <label for="category-title" class="form-label">Title</label>
                            <input type="text" id="category-title" name="title" value="{{ $editdata->title }}" class="form-control"
                                placeholder="Enter room title">
                        </div>

                       
      
                        </div>
                    </div>

                    <!-- Submit and Cancel Buttons -->
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <!-- Submit Button --> 
                        <button type="submit" class="btn btn-primary px-3 px-md-5 mb-2 mb-md-0">Update</button>

                        <!-- Cancel Button -->
                        <a class="btn btn-roomtype-cancel btn-warning px-3 px-md-5" href="{{ url('admin/roomsview') }}">Cancel</a>
                    </div>

                </form>

                
            </div>
        </div>
    </div>

@endsection