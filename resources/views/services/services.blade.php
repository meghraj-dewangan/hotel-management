@extends("adminlayout")

@section("main")
    <link rel="stylesheet" href="{{asset('css/service.css')}}">

    <!-- Main Content -->
    <div class="main-content my-5">
        <h3 class="text-center">Services</h3>

        <div class="container ">

            <div class="table-responsive shadow-lg rounded-3 ">
                <a href="{{ url('admin/servicecreate') }}"
                    class="btn btn-add-service  btn-success float-end px-3 py-0 rounded-pill shadow-sm">Add New</a>

                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Title</th>
                            <th scope="col">image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($servicedatas->isEmpty())
                            <tr>
                                <td colspan="3" class="text-center">No services found.</td>
                            </tr>
                        @else

                            @foreach ($servicedatas as $index => $data)



                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $data->title }}</td>
                                  <td> <img src="{{ asset('storage/image/'.$data->service_image) }}" 
                                         alt="service Image" 
                                         class="img-thumbnail" 
                                         style="width: 120px; height: 100px;"></td>  

                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ url('admin/serviceedit/'.$data->id) }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-nib"></i></a>

                                            <form action="{{ url('admin/servicedelete/'.$data->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure?')"><i
                                                        class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>


                                </tr>



                            @endforeach
                        @endif
                    </tbody>

                </table>




            </div>

        </div>
    </div>
@endsection