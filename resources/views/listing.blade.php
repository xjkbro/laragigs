@extends('layout')
@section('content')
    <section class="grid grid-cols-3 m-12 gap-4">
        <div class="col-span-2">
            <h1 class="font-bold text-3xl text-orange-500">{{ $listing->title }}</h1>
            <h4 class="font-bold text-xl text-neutral-500 mb-4">{{ $listing->company }}</h4>
            <p>{{ $listing->tags }}</p>
            <b>{{ "Estimated Salary$" . number_format($listing->salary) }}</b>
            <p>{{ $listing->description }} </p>

            <p>Please submit your application by emailing HR at <a class="font-semibold text-orange-500"
                    href="mailto:{{ $listing->email }}">{{ $listing->email }}</a>. Please include your resume and a cover
                letter
                and any questions you may have about the postion.</p>
        </div>
        <div class="col-span-1 outline outline-orange-200/20 shadow-xs w-full py-12">
            <h3 class="font-bold text-xl text-orange-500 text-center mb-4">Apply here</h3>
            <div class="flex flex-col mx-12 gap-2">
                <div class="w-full flex items-center">
                    <label for="email">Email:</label>
                    <input name="email" type="email" class="mx-2 w-full outline outline-orange-200/20 p-2"
                        placeholder="youremail@example.com">
                </div>
                <div>
                    <label for="resume">Resume:</label>
                    <input type="file" name="resume" class="p-2">
                </div>
                <button type="submit" class="rounded-full bg-orange-600 text-white text-2xl h-12 ">Submit</button>
            </div>
        </div>
    </section>
@endsection
