<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>


    <form method="POST" action="/jobs/{{ $job->id }}" class="bg-gray-800 p-5 rounded-lg">
        @csrf
        @method('PATCH')

        <div>
            <h2 class="font-semibold text-2xl">Edit Job</h2>
        </div>
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <x-form-input name="title" id="title" placeholder="Teacher" value="{{ $job->title }}"
                            required />
                        <x-form-error name="title" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <x-form-input name="salary" id="salary" placeholder="$30,000" value="{{ $job->salary }}"
                            required />
                        <x-form-error name="salary" />
                    </x-form-field>

                </div>
            </div>
        </div>



        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div>
                <button form="delete-form"
                    class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Delete</button>
            </div>

            <div class="flex gap-x-6 items-center">
                <a href="/jobs" class="text-sm/6 font-semibold text-white">Cancel</a>
                <x-form-button>Update</x-form-button>
            </div>
        </div>
    </form>


    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" name="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
