<x-layout>
    @include('partials._hero')
    @include('partials._search')

    @unless (count($listings) == 0)
        <div class="grid grid-cols-2  mx-12">
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach
        </div>
    @else
        <p>There are no listings.</p>
    @endunless

</x-layout>
