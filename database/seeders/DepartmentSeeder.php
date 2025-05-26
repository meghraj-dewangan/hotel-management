<?php

namespace Database\Seeders;
use App\Models\Department;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Department::create(['name' => 'Front Office / Reception', 'description' => 'Handles guest check-in/check-out.']);
        Department::create(['name' => 'Reservation & Booking', 'description' => 'Manages room bookings.']);
        Department::create(['name' => 'Food & Beverage', 'description' => 'Covers restaurant and room service.']);
        Department::create(['name' => 'Accounts / Billing', 'description' => 'Handles payment and invoicing.']);
        
    }
}


