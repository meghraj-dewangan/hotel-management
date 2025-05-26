@extends("adminlayout")

@section("main")
    <link rel="stylesheet" href="{{asset('css/roomview.css')}}">

    <!-- Main Content -->
    <div class="main-content my-5">
        <h3 class="text-center">Booked Details</h3>
        <div class="container">

            <div class="table-responsive shadow-lg rounded-3">


                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th>Booking ID</th>
                            <th>logged user</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Guests</th>
                            <th>Check-in</th>
                            <th>Check-out</th>
                            <th>Room Type</th>
                            <th>Room Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $index => $booking)



                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <th>{{ $booking->id }}</th>
                                <th>{{$booking->user_name}}</th>
                                <th>{{$booking->name}}</th>
                                <th>{{$booking->email}}</th>
                                <th>{{$booking->phone}}</th>
                                <th>{{$booking->guests}}</th>
                                <th>{{$booking->checkin}}</th>
                                <th>{{$booking->checkout}}</th>
                                <th>{{$booking->room_type}}</th>
                                <th>{{$booking->room_number}}</th>


                                <td>
                                    <div class="d-flex gap-2">
                                       

                                        <form action="{{ url('admin/admingbookingpage/'.$booking->id) }}" method="post"
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
                    </tbody>
                </table>

                <!--  Pagination -->
                <div class="d-flex flex-wrap justify-content-center align-items-center mt-3 mb-3  overflow-auto">
                    {{ $bookings->links('pagination::bootstrap-4') }}
                </div>

            </div>

        </div>
    </div>
@endsection