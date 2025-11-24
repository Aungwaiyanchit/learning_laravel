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
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <x-form-input name="title" id="title" placeholder="Teacher" required />
                        <x-form-error name="title" />
                    </x-form-field>


                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <x-form-input name="salary" id="salary" placeholder="$30,000" required />
                        <x-form-error name="salary" />
                    </x-form-field>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>
</x-layout>
