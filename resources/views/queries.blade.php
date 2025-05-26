@extends("adminlayout")

@section("main")
    <link rel="stylesheet" href="{{asset('css/queries.css')}}">

    <!-- Main Content -->
    <div class="main-content my-5">
        <h3 class="text-center">Queries</h3>
        <div class="container">
            @if (session('success'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="table-responsive shadow-lg rounded-3">

                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Guest</th>
                            <th scope="col">Email</th>
                            <th scope="col">Query</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                       
@if ($queries -> isEmpty())
<tr>
    <td colspan="5" class="text-center text-muted fw-bold py-4" >
        <i class="fa-solid fa-circle-info me-2 text-primary"></i> No Queries Found
    </td>
</tr>
@else


                       
                        @foreach ($queries as $index => $query)


                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $query->name }}</td>
                                <td>{{ $query->email }}</td>
                                <td>{{ $query->query }}</td>

                                <td>
                                    <div class="d-flex gap-2">


                                        <form action="{{ url('admin/contactpagequeries' . $query->id) }}" method="post"
                                            style="display:inline;">
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

                <!--  Pagination -->
                <div class="d-flex flex-wrap justify-content-center align-items-center mt-3 mb-3  overflow-auto">
                    {{ $queries->links('pagination::bootstrap-4') }}
                </div>

            </div>

        </div>
    </div>
@endsection