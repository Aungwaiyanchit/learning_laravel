<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h2 class="font-bold text-xl">
        {{ $job['title'] }}
    </h2>
    <p>
        The job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>
