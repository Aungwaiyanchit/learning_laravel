<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <div>
                <a class="block text-black px-4 py-6 bg-amber-100 rounded-lg shadow-lg" href="/jobs/{{ $job['id'] }}">
                    <div class="text-amber-600 bold">
                        {{ $job->employer->name }}
                    </div>
                    <strong>
                        {{ $job['title'] }}:
                    </strong>
                    Pays {{ $job['salary'] }} per year.
                </a>
            </div>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>


</x-layout>
