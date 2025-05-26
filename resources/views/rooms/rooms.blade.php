@extends("adminlayout")

@section("main")
<link rel="stylesheet" href="{{asset('css/roomview.css')}}">

<!-- Main Content -->
<div class="main-content my-5">
    <h3 class="text-center">Rooms</h3>
    <div class="container">

        <div class="table-responsive shadow-lg rounded-3">
            <a href="{{ url('admin/createroom') }}" class="btn btn-add-category btn-success float-end px-3 py-0 rounded-pill shadow-sm">Add New</a>
            
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No.</th>
                         <th scope="col">Room No.</th>
                        <th scope="col">Room Category</th>
                       
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($roomsdata as $index=> $roomdata)

                            <tr>
                                <th scope="row">{{ $roomsdata->firstItem()+$index }}</th>
                                <td>{{$roomdata->title}}</td>
                                <td>{{ $roomdata->roomType->title ?? 'N/A' }}</td>
                                
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ url('admin/roomseditform/'.$roomdata->id) }}"
                                            class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-nib"></i></a>
                                            
                                        <form action="{{ url('admin/roomsdelete', $roomdata->id) }}" method="post"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>


                        @endforeach

                    </tbody>
            </table>

            <!--  Pagination -->
            <div class="d-flex flex-wrap justify-content-center align-items-center mt-3 mb-3  overflow-auto">
                    {{ $roomsdata->links('pagination::bootstrap-4') }}
                </div>

        </div>

    </div>
</div>
@endsection
