{{-- services.blade.php --}}
@extends('layouts.master')

@section('title', 'Our Services')

@section('content')
    <section>
        <h2 class="text-center small-h2">Our Gourmet Lunch Boxes</h2>
        <table>
            <thead>
                <tr>
                    <th>Lunch Box</th>
                    <th>Price (PKR)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lunchboxes as $lunchbox)
                    <tr>
                        <td>{{ $lunchbox->name }}</td>
                        <td>{{ $lunchbox->price }}</td>
                        <td>
                            <button class="details-btn" data-details-id="details-{{ $lunchbox->id }}">Show Details</button>
                            <button class="hide-btn" data-hide-id="details-{{ $lunchbox->id }}">Hide Details</button>
                        </td>
                    </tr>
                    <tr class="details-row" id="details-{{ $lunchbox->id }}" style="display: none;">
                        <td colspan="3">
                            <div class="details-content">
                                <strong>Ingredients:</strong> {{ $lunchbox->ingredients ?? 'N/A' }} <br>
                                <strong>Nutritional Info:</strong> {{ $lunchbox->nutritional_info ?? 'N/A' }} <br>
                                <strong>Available:</strong> {{ $lunchbox->is_available ? 'Yes' : 'No' }}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection