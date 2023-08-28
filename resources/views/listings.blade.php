@extends('layout')

@section('content')
    {{-- @php
        var_dump($listings);
    @endphp --}}

    {{-- @if (count($listings) == 0)
        <p>No listings found.</p>
    @endif --}}

    @unless (count($listings) == 0)
        <div class="grid grid-cols-2">
            @foreach ($listings as $listing)
                <div
                    class="p-4 m-4 rounded-lg outline outline-orange-300/20 hover:bg-orange-50 transition-colors flex gap-3 items-center">
                    {{-- dummy company logo --}}
                    <img src="https://via.placeholder.com/150" alt="company logo" class="w-28 h-28 rounded-full">
                    <div>
                        <h2 class="font-bold text-lg text-orange-500"><a
                                href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a></h2>
                        <b>{{ "Salary: $" . number_format($listing['salary']) }}</b>
                        <p>{{ $listing['description'] }} </p>
                    </div>

                </div>
            @endforeach
        </div>
    @else
        <p>There are no listings.</p>
    @endunless

@endsection
