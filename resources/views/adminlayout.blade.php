<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="{{asset('css/adminlayout.css')}}">
</head>

<body>

    <!-- Toggle Button -->
    <button class="toggle-btn d-lg-none  text-white border-0 cursor-pointer position-fixed;"
        onclick="document.querySelector('#sidebar').classList.toggle('active')">☰</button>

    <!-- Sidebar -->
    <div class="sidebar position-fixed overflow-auto" id="sidebar">
        <div class="brand text-center text-white fw-bolder">Admin Panel</div>



        <div class="dropdown ">
            <button
                class="btn btn-dropdown text-white border-0 rounded-4 d-block shadow-none cursor-pointer text-start text-decoration-none dropdown-toggle"
                type="button" id="roomDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                🏥 Room Types
            </button>
            <ul class="dropdown-menu  p-0 rounded-3 text-center overflow-hidden">

                <li><a class="dropdown-item p-1 px-2 m-0 text-white" href="{{ route('roomtypes.index') }}">List</a></li>
            </ul>
        </div>


        <div class="dropdown ">
            <button
                class="btn btn-dropdown text-white  border-0 rounded-4 d-block shadow-none cursor-pointer text-start text-decoration-none dropdown-toggle"
                type="button" id="roomDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                🏥 Rooms
            </button>
            <ul class="dropdown-menu  p-0 rounded-3 text-center overflow-hidden">
                <li><a class="dropdown-item  p-1 px-2 m-0 text-white" href="{{ url('admin/createroom') }}">Add Room</a>
                </li>
                <li><a class="dropdown-item p-1 px-2 m-0 text-white" href="{{ url('admin/roomsview') }}">View Rooms</a>
                </li>

            </ul>
        </div>





        <div class="dropdown ">
            <button
                class="btn btn-dropdown text-white border-0 rounded-4 d-block shadow-none cursor-pointer text-start text-decoration-none dropdown-toggle"
                type="button" id="roomDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                👥 Departments
            </button>
            <ul class="dropdown-menu  p-0 rounded-3 text-center overflow-hidden">
                @foreach ($datas as $data)
                    <li><a class="dropdown-item p-1 px-2 m-0 text-white"
                            href="{{ url('admin/staffbydepartment/' . $data->id) }}">{{ $data->name }}</a></li>
                @endforeach
            </ul>
        </div>




        <a href="{{ url('admin/admingbookingpage') }}"
            class="anchor text-white  border-0 shadow-none cursor-pointer rounded-4 d-block text-start text-decoration-none">📅
            Bookings</a>


        <a href="{{ url('admin/services') }}"
            class="anchor text-white  border-0 shadow-none cursor-pointer rounded-4 d-block text-start text-decoration-none">🔧
            Services</a>

             <a href="{{ url('admin/contactpagequeries') }}"
            class="anchor text-white  border-0 shadow-none cursor-pointer rounded-4 d-block text-start text-decoration-none">🗨️ 
             Queries</a>



        <a href="{{ url('logout') }}"
            class="anchor text-white  border-0 shadow-none cursor-pointer rounded-4 d-block text-start text-decoration-none"><i
                class="fa-solid fa-right-from-bracket"></i> Logout</a>


    </div>

    @yield('main')

<script>
    setTimeout(() => {
        let alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            alert.classList.add('fade');
            setTimeout(() => alert.remove(), 500);
        });
    }, 3000); // Auto-dismiss after 3 seconds
</script>
</body>

</html>


