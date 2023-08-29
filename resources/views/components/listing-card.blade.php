@props(['listing'])
<x-card>
    <img src="https://via.placeholder.com/150" alt="company logo" class="w-28 h-28 rounded-full">
    <div>
        <h2 class="font-bold text-lg text-orange-500"><a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
        </h2>
        <h4 class="font-bold text-xl text-neutral-500 "><a href="{{ $listing->website }}">{{ $listing->company }}</a></h4>

        <p class="mb-4"><i class="fa-solid fa-location-dot text-orange-500"></i> {{ $listing->location }}</p>
        <div>
            <x-tags :tagsCSV="$listing->tags" />
        </div>
        <p>{{ substr($listing->description, 0, 140) }} </p>
    </div>
</x-card>
