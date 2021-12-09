<x-layout.app>
    <h1 class="text-center text-xl font-semibold mt-5">Register your account</h1>

    <form action="{{ route('register') }}" method="POST" class="bg-white w-80 px-4 py-6 mt-5 rounded-md shadow-md sm:w-96">
        @csrf
        <div class="space-y-6">
            <div class="flex flex-col">
                <x-form.input name="name" />
            </div>
            <div class="flex flex-col">
                <x-form.input type="email" name="email" />
            </div>
            <div class="flex flex-col">
                <x-form.input type="password" name="password" />
            </div>
            <div class="flex flex-col">
                <x-form.input type="password" name="password_confirmation" label="Confirm Password" />
            </div>
        </div>

        <x-form.submit>Sign Up</x-form.submit>
    </form>
</x-layout.app>
