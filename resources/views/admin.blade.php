@extends('adminlayout')


@section('main')


    <!-- Main Content -->
    <div class="main-content ">
         <div class="header text-center mb-5">
            
        <h1>Dashboard</h1>
         
    </div>
       
        <!-- Cards Section -->
        <div class="cards">
            
            <div class="card cursor-pointer text-center">
                <h3>Customers</h3>
                
                           
                <p>Total Registered: {{ count($bookings) }}</p>
               
            </div>
              

            
            <div class="card cursor-pointer text-center">
                <h3>Staff</h3>

                <p>Total Staff: {{ count($staffs) }}</p>
               
            </div>
             
        </div>
    </div>

    @endsection