@extends("adminlayout")

@section("main")
    <link rel="stylesheet" href="{{asset('css/roomtype.css')}}">

    <!-- Main Content -->
    <div class="main-content my-5">
        <h3 class="text-center">Roomtypes</h3>
        <div class="container ">

            <div class="table-responsive shadow-lg rounded-3 ">
                <a href="{{ route('roomtypes.create') }}"
                    class="btn btn-add-category  btn-success float-end px-3 py-0 rounded-pill shadow-sm">Add New</a>
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roomtypedata as $index=> $roomcategory)

                            <tr>
                                <th scope="row">{{ $roomtypedata->firstItem()+$index }}</th>
                             <td><a class="text-black" style="text-decoration:none" href="{{ route('roomtypes.show', $roomcategory->id) }}">{{ $roomcategory->title }}</a></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('roomtypes.edit', $roomcategory->id) }}"
                                            class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-nib"></i></a>
                                            
                                        <form action="{{ route('roomtypes.destroy', $roomcategory->id) }}" method="POST"
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
                <div class="d-flex flex-wrap justify-content-center align-items-center mt-3 mb-3  overflow-auto">
                    {{ $roomtypedata->links('pagination::bootstrap-4') }}
                </div>


            </div>

        </div>
    </div>
@endsection