@extends("adminlayout")
<link rel="stylesheet" href="{{ asset('/css/roomcreate.css') }}">


<!-- Main Content -->
@section("main")





    <div class="main-content my-5">
        <h3 class="text-center">Add Rooms</h3>

        <div class="container">
            <div class="card shadow-lg rounded-3 p-4">

                <!-- View All Button -->
                <div class="d-flex justify-content-end   mb-4">

                    <a href="{{ url('admin/roomsview') }}"
                        class="btn btn-view-category  btn-success shadow-sm rounded-pill px-4">
                        View All
                    </a>
                </div>

                <!-- Form -->
                <form action="{{ url('admin/storeroom') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <!-- Title Field -->
                        <div class="col-12  mb-3">
                            <label for="category-title" class="form-label">Title</label>
                            <input type="text" id="category-title" name="title" class="form-control"
                                placeholder="Enter room title" required>
                        </div>

                        <!-- room category dropdown-->
                        <div class="col-12  mb-3">
                            <label for="room-category" class="form-label">Room Category</label>
                            <select name="room_category" id="room-category" class="form-select">
                                <option value="">-- Select Room Category --</option>
                                @foreach ($roomtypesdata as $roomtypes )
                                <option value="{{ $roomtypes->id }}">{{$roomtypes->title}}</option>
                                @endforeach
                                
                               
                            </select>
                        </div>

                      

                    </div>

                    <!-- Submit and Cancel Buttons -->
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary px-2 px-md-5 mb-2 mb-md-0">Create Room</button>

                        <!-- Cancel Button -->
                        <a class="btn btn-roomtype-cancel btn-warning px-3 px-md-5" href="{{ url('admin/roomsview') }}">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection