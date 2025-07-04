<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <h1 class="text-3xl font-bold">{{ $job['title'] }}</h1>
    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>

</x-layout>
