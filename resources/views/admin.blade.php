@extends('adminlayout')


@section('main')


    <!-- Main Content -->
    <div class="main-content">
        <div class="header d-flex flex-column flex-sm-row bg-white">
            <h1>Dashboard</h1>
            <input type="text" class="search-bar" placeholder="Search...">
        </div>
       
        <!-- Cards Section -->
        <div class="cards">
            <div class="card cursor-pointer text-center">
                <h3>Customers</h3>
                <p>Total Registered: 1,245</p>
                <a href="#" class=" btn btn-card">View Details</a>
            </div>

            <div class="card cursor-pointer text-center">
                <h3>Staff</h3>
                <p>Total Staff: 224</p>
                <a href="#" class=" btn btn-card">View Details</a>
            </div>
        </div>
    </div>

    @endsection