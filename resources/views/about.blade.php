{{-- about.blade.php --}}
@extends('layouts.master')

@section('title', 'About Us')

@section('content')
    <section class="about-us-box">
        <h2>About Us</h2>
        <p>School Lunch Boxes in Multan is a growing service that provides fresh, healthy, and varied lunch options for students and staff. With a focus on expanding its customer base across the Punjab region, the business offers gourmet lunch boxes, freshly baked bread, and daily changing hot lunches, all delivered with punctuality and care.</p>
    </section>

    <section>
        <h2 class="user-reviews-title">What Our Clients Say</h2>
        <div class="line"></div>
        <div>
            @foreach($testimonials as $testimonial)
                <div class="review-box">
                    <p>"{{ $testimonial->content }}"</p>
                    <h3>- {{ $testimonial->author }}</h3>
                </div>
                <div class="line"></div>
            @endforeach
        </div>
    </section>
@endsection