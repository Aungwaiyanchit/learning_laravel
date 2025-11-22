<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a class="underline text-blue-300" href="/jobs/{{ $job['id'] }}">
                    <strong>
                        {{ $job['title'] }}:
                    </strong>
                    Pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
