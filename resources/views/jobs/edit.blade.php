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
                    <div class="sm:col-span-4">
                        <label for="username" class="block text-sm/6 font-medium text-white">Title</label>
                        <div class="mt-2">
                            <input id="title" type="text" name="title" placeholder="Teacher"
                                value="{{ $job->title }}"
                                class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
                                required />
                        </div>
                        @error('title')
                            <p class="text-sm text-red-500 mt-3"> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-white">Salary</label>
                        <div class="mt-2">
                            <input id="salary" type="salary" name="salary" placeholder="$30,000"
                                value="{{ $job->salary }}"
                                class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
                                required />
                        </div>
                        @error('salary')
                            <p class="text-sm text-red-500 mt-3"> {{ $message }}</p>
                        @enderror

                    </div>

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
                <button type="submit"
                    class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Update</button>
            </div>
        </div>
    </form>


    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" name="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
