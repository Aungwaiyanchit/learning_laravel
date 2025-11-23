<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <div class="text-black">
        <h2 class="font-bold text-xl ">
            {{ $job->title }}
        </h2>
        <p>
            The job pays {{ $job->salary }} per year.
        </p>
        <x-button href="/jobs/{{ $job->id }}/edit" class="mt-2">Edit Job</x-button>
    </div>
</x-layout>
