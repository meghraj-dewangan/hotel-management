@extends("adminlayout")

@section("main")
    <link rel="stylesheet" href="{{ asset('css/staff.css') }}">

    <!-- Main Content -->
    <div class="main-content my-5">



        <h3 class="text-center">{{ $departments->name }}Staffs</h3>
        <div class="container">
            <div class="table-responsive shadow-lg rounded-3">
                <a href="{{ url('admin/createstaff/'.$departments->id) }}" class="btn btn-add-staff btn-success float-end px-3 py-0 rounded-pill shadow-sm">Add New</a>

                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Name.</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($staffs as $index => $staff)

                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $staff->name }}</td>
                                <td>{{ $staff->email }}</td>
                                <td>{{ $staff->phone }}</td>
                                <td>{{ $staff->designation }}</td>


                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ url('admin/staffeditform/' . $staff->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa-solid fa-pen-nib"></i>
                                        </a>
                                        <form action="{{ url('admin/staffdelete/' . $staff->id) }}" method="post"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                        @endforeach

                        @if ($departments->staffs->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center">No staff found for this department.</td>
                            </tr>
                        @endif
                    </tbody>


                </table>


                <!-- Pagination -->
                <div class="d-flex flex-wrap justify-content-center align-items-center mt-3 mb-3  overflow-auto">
                    {{ $staffs->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection