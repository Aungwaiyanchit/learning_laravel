<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>


    <form method="POST" action="/register" class="bg-gray-800 p-5 rounded-lg">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="name">Username</x-form-label>
                        <x-form-input name="name" id="name" placeholder="username" :value="old('name)" required />
                        <x-form-error name="name" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <x-form-input name="email" id="email" placeholder="example@email.com" :value="old('email')" required />
                        <x-form-error name="email" />
                    </x-form-field>


                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <x-form-input name="password" id="password" type="password" :value="old('password')" required />
                        <x-form-error name="password" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password_confirmation">Confirm password</x-form-label>
                        <x-form-input name="password_confirmation" type="password" id="password_confirmation" required />
                        <x-form-error name="password_confirmation" />
                    </x-form-field>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-white">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
</x-layout>
