@extends("adminlayout")
<link rel="stylesheet" href="{{ asset('/css/staffcreate.css') }}">

<!-- Main Content -->
@section("main")





    <div class="main-content my-5">
        <h3 class="text-center">Add New Staff</h3>

        <div class="container">
            <div class="card shadow-lg rounded-3 p-4">

                <!-- View All Button -->
                <div class="d-flex justify-content-end   mb-4">

                    <a href="{{ url('admin/staffbydepartment/' . $department->id) }}"
                        class="btn btn-view-staff  btn-success shadow-sm rounded-pill px-4">
                        View All
                    </a>
                </div>

                <!-- Form -->
             
                 
                
                <form action="{{ url('admin/storestaff/' . $department->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <!-- Title Field -->
                        <div class="col-12  mb-3">
                            <label for="staff-name" class="form-label">Name</label>
                            <input type="text" id="staff-name" name="title" class="form-control"
                                placeholder="Enter Staff Name" required>
                        </div>

                        <div class="col-12  mb-3">
                            <label for="staff-email" class="form-label">Email</label>
                            <input type="text" id="staff-email" name="email" class="form-control"
                                placeholder="Enter Staff email" required>
                        </div>

                        <div class="col-12  mb-3">
                            <label for="staff-phone" class="form-label">Phone</label>
                            <input type="text" id="staff-phone" name="phone" class="form-control"
                                placeholder="Enter staff phone number" required>
                        </div>


                        <div class="col-12  mb-3">
                            <label for="staff-department" class="form-label">Staff Department</label>
                            <select name="department" id="staff-department" class="form-select">
                                <option value="">-- Select staff Department --</option>
                                @foreach ($departments as $depart)


                                    <option value="{{ $depart->id }}">{{ $depart->name }}</option>

                                @endforeach

                            </select>
                        </div>




                        <div class="col-12  mb-3">
                            <label for="staff-designation" class="form-label">Staff Designation</label>
                            <select name="designation" id="staff-designation" class="form-select">
                                <option value="">-- Select staff designation --</option>

                                <option value="Front Office Manager">Front Office Manager</option>
                                <option value="Receptionist">Receptionist</option>
                                <option value="Concierge">Concierge</option>
                                <option value="F&B Manager">F&B Manager</option>
                                <option value="Sous Chef">Sous Chef</option>
                                <option value="Waiter">Waiter</option>
                                <option value="Bartender">Bartender</option>
                                <option value="Finance Manager">Finance Manager</option>
                                <option value="Accountant">Accountant</option>
                                <option value="Cashier">Cashier</option>
                                <option value="Reservation Manager">Reservation Manager</option>
                                <option value="Reservation Executive / Agent"> Reservation Executive / Agent</option>
                                <option value="Booking Clerk">Booking Clerk</option>






                            </select>
                        </div>



                    </div>

                    <!-- Submit and Cancel Buttons -->
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary px-2 px-md-5 mb-2 mb-md-0">Add staff</button>

                        <!-- Cancel Button -->
                        <a class="btn btn-staff-cancel btn-warning px-3 px-md-5"
                            href="{{ url('admin/staffbydepartment/' . $department->id) }}">Cancel</a>
                    </div>

                </form>
                
            </div>
        </div>
    </div>
@endsection