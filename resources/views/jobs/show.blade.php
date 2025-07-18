<x-layout>
    <x-slot:heading>
        Job Details Page
    </x-slot:heading>
    <h1 class="text-3xl font-bold">{{ $job->title }}</h1>
    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>

    <p>
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>

</x-layout>
