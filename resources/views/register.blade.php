{{-- register.blade.php --}}
@extends('layouts.master')

@section('title', 'Register')

@section('content')
    <section>
        <h2 class="text-center small-h2">Register for Our Services</h2>
        <form action="" method="post">
            @csrf
            
            <label for="name">Full Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="phone">Phone Number:</label><br>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{2}-3[0-9]{2}-[0-9]{7}" placeholder="92-3XX-XXXXXXX" required><br><br>

            <label for="select">Select Plan:</label><br>
            <select name="select" id="select">
                <option value="Plan1">Gourmet Lunch Boxes</option>
                <option value="Plan2">Freshly Baked Bread and Breakfast</option>
                <option value="Plan3">Hot Lunches (Daily Changing Menu)</option>
                <option value="Plan4">Picnic Packages (Local School Trips)</option>
                <option value="Plan5">Special Events Finger Food Platters</option>
            </select><br><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" placeholder="What kind of food do you enjoy."></textarea><br><br>

            <input type="submit" value="Register">
        </form>
    </section>
@endsection