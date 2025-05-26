@extends("adminlayout")
<link rel="stylesheet" href="{{ asset('/css/staffedit.css') }}">


<!-- Main Content -->
@section("main")


    <div class="main-content my-5">
        <h3 class="text-center">{{$staffs->department->name ?? 'Staff'}} Edit</h3>

        <div class="container">
            <div class="card shadow-lg rounded-3 p-4">

                <!-- View All Button -->
                <div class="d-flex justify-content-end mb-4">
                    <a href="{{ url('admin/staffbydepartment/' . $staffs->department_id) }}"
                        class="btn btn-view-category btn-success shadow-sm rounded-pill px-4">
                        View All
                    </a>
                </div>




                <!-- Form -->
                <form method="post" action="{{ url('admin/staffupdate/' . $staffs->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="hidden" value="{{ $staffs->id }}">
                    <div class="row">

                        <!-- Title Field -->
                        <div class="col-12 mb-3">
                            <label for="staff-name" class="form-label">Name</label>
                            <input type="text" id="staff-name" name="title" value="{{ $staffs->name }}" class="form-control"
                                placeholder="Enter staff name">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="staff-email" class="form-label">Email</label>
                            <input type="email" id="staff-email" name="email" value="{{ $staffs->email }}"
                                class="form-control" placeholder="Enter staff email">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="staff-phone" class="form-label">Phone</label>
                            <input type="text" id="staff-phone" name="phone" value="{{ $staffs->phone }}"
                                class="form-control" placeholder="Enter staff phone">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="staff-designation" class="form-label">Designation</label>
                            <input type="text" id="staff-designation" name="designation" value="{{ $staffs->designation }}"
                                class="form-control" placeholder="Enter staff designation">
                        </div>



                    </div>
            </div>

            <!-- Submit and Cancel Buttons -->
            <div class="d-flex flex-column flex-md-row justify-content-between">
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary px-3 px-md-5 mb-2 mb-md-0">Update</button>

                <!-- Cancel Button -->
                <a class="btn btn-roomtype-cancel btn-warning px-3 px-md-5"
                    href="{{ url('admin/staffbydepartment/' . $staffs->department_id) }}">Cancel</a>
            </div>

            </form>


        </div>
    </div>
    </div>

@endsection