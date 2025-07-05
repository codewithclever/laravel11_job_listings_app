<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1 class="text-3xl">Listed Jobs Available</h1>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block border border-gray-300 px-4 py-6 rounded-lg">
                <div class="font-bold text-blue-400 text-sm">{{ $job->employer->name}}</div>
                <div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach
        <div>
            {{ $jobs->links()}}
        </div>
    </div>
</x-layout>
