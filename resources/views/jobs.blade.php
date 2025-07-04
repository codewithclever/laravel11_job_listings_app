<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1 class="text-3xl">Listed Jobs Available</h1>

    <ul>
        @foreach ($jobs as $job)
        <li class="hover:underline hover:text-blue-600">
            <a href="/jobs/{{ $job['id'] }}">
                <span>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </span>
            </a>
        </li>
        @endforeach
    </ul>
</x-layout>
