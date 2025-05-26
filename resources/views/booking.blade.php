@extends('bookinglayout')
@section('title', 'Hotel-management')


@section('main')


  <div class="container d-flex justify-content-center align-item-center my-4">
    <div class="booking-container bg-white rounded-4 p-5 shadow-lg ">
    <h2 class="text-center fw-bold mb-5">Room Booking <span class="text-danger"><i class="fa-solid fa-hotel"></i></span>
    </h2>


    {{-- Session Alert Messages --}}
    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form action="{{ route('bookingstore') }}" method="POST" class="row g-3">
      @csrf
      <!-- Full Name -->
      <div class="col-md-6">
      <label for="name" class="form-label"> Full Name<span class="text-danger">*</span></label>
      <input type="text" class="form-control placeholder-sm" id="name" name="name" placeholder="Enter your full name"
        required>
      </div>

      <!-- Email -->
      <div class="col-md-6">
      <label for="email" class="form-label">Email<span class="text-danger">*</span></label>

      <div class="input-group">
        <span class="input-group-text "><i class="fa-solid fa-envelope"></i></span>
        <input type="email" class="form-control placeholder-sm " id="email" name="email"
        placeholder="Enter your email" required>
      </div>

      </div>

      <!-- Phone -->
      <div class="col-md-6">
      <label for="phone" class="form-label">Phone Number<span class="text-danger">*</span></label>
      <div class="input-group">
        <span class="input-group-text "><i class="fa-solid fa-phone"></i></span>
        <input type="tel" class="form-control placeholder-sm" id="phone" name="phone"
        placeholder="Enter your phone number" required>
      </div>

      </div>

      <!-- Guests -->
      <div class="col-md-6">
      <label for="guests" class="form-label">Number of Guests</label>
      <input type="number" class="form-control placeholder-sm" id="guests" name="guest" min="1" max="4" value="1">
      </div>

      <!-- Check-in and Check-out -->
      <div class="col-md-6">
      <label for="checkin" class="form-label">Check-in Date<span class="text-danger">*</span></label>
      <input type="date" class="form-control placeholder-sm" id="checkin" name="checkin" required>
      </div>

      <div class="col-md-6">
      <label for="checkout" class="form-label">Check-out Date<span class="text-danger">*</span></label>
      <input type="date" class="form-control placeholder-sm" id="checkout" name="checkout" required>
      </div>

      <!-- Room Type -->

      <div class="col-md-12">
      <label for="roomtype" class="form-label">Room Type</label>



      <select class="form-select" id="roomtype" name="roomtype">
        <option selected>Select Room Type</option>
        @foreach ($roomtypedatas as $roomtypedata)
      <option value="{{ $roomtypedata->id }}">
      {{ $roomtypedata->title }}
      </option>
      @endforeach

      </select>

      </div>


      <!-- select Room -->

      <div class="col-md-12">
      <label for="room" class="form-label">Available Room </label>
      <select class="form-select" id="room" name="room">
        <option selected disabled>Select Room </option>
        <!-- js query for fill this room based on selected category room -->

      </select>
      </div>



      <!-- Submit Button -->
      <div class="col-12">
      <button type="submit" class="btn btn-custom w-100">Book Now</button>
      </div>

      <!-- Booking Details Button -->

     
      <div class="col-12 mt-3 text-center">
      <a href="{{ route('bookingindex') }}" class="btn btn-outline btn-custom w-100">View Booking Details</a>
      </div>
   


    </form>
    </div>
  </div>


  <script>
    const allRooms = @json($roomdatas);
    const roomTypeSelect = document.getElementById('roomtype');
    const roomSelect = document.getElementById('room');

    roomTypeSelect.addEventListener('change', function () {
    const selectedRoomTypeId = this.value;

    // Clear previous options
    roomSelect.innerHTML = `<option selected disabled>Select Room</option>`;

    // Filter and append new options
    const filteredRooms = allRooms.filter(room => room.room_type_id == selectedRoomTypeId);

    filteredRooms.forEach(room => {
      const option = document.createElement('option');
      option.value = room.id;
      option.textContent = room.title;
      roomSelect.appendChild(option);
    });
    });
  </script>
@endsection