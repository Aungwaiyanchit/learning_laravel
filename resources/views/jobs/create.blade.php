<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>


    <form method="POST" action="/jobs" class="bg-gray-800 p-5 rounded-lg">
        @csrf
        <div>
            <h2 class="font-semibold text-2xl">Create a new Job</h2>
        </div>
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="username" class="block text-sm/6 font-medium text-white">Title</label>
                        <div class="mt-2">
                            <input id="title" type="text" name="title" placeholder="Teacher"
                                class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" required />
                        </div>
                        @error('title')
                            <p class="text-sm text-red-500 mt-3"> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-white">Salary</label>
                        <div class="mt-2">
                            <input id="salary" type="salary" name="salary" placeholder="$30,000"
                                class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" required />
                        </div>
                        @error('salary')
                            <p class="text-sm text-red-500 mt-3"> {{ $message }}</p>
                        @enderror

                    </div>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
    </form>
</x-layout>
