@extends("adminlayout")

@section("main")
<link rel="stylesheet" href="{{ asset('css/roomview.css') }}">

<!-- Main Content -->
<div class="main-content my-5">
    <h3 class="text-center mb-4">{{ $roomtype->title }}</h3>

    <div class="container">

        @if($rooms->isEmpty())
            <p class="text-center">No rooms found for this category.</p>
        @else
            <div class="table-responsive shadow-lg rounded-3">
                <table class="table table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Room No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $index => $room)
                            <tr>
                                <th scope="row">{{ $rooms->firstItem() + $index }}</th>
                                <td>{{ $room->title }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="d-flex flex-wrap justify-content-center align-items-center mt-3 mb-3 overflow-auto">
                    {{ $rooms->links('pagination::bootstrap-4') }}
                </div>
            </div>
        @endif

        <!-- Back Button -->
        <div class="text-center mt-4">
            <a href="{{ route('roomtypes.index') }}" class="btn btn-secondary px-4 py-2 rounded-pill shadow-sm">Back</a>
        </div>

    </div>
</div>
@endsection
