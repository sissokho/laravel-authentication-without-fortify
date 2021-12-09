<x-layout.app>
    <h1 class="text-center text-xl font-semibold mt-5">Change Password</h1>

    <form action="{{ route('password.update') }}" method="POST" class="bg-white w-80 px-4 py-6 mt-5 mx-auto rounded-md shadow-md sm:w-96">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="space-y-6">
            <div class="flex flex-col">
                <label for="email">Email address</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="border border-gray-200 bg-gray-100 text-gray-700 p-1 rounded-sm focus:outline-none focus:border-gray-300">

                @error('email')
                <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="password">New Password</label>
                <input type="password" name="password" id="password" class="border border-gray-200 bg-gray-100 text-gray-700 p-1 rounded-sm focus:outline-none focus:border-gray-300">

                @error('password')
                <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="border border-gray-200 bg-gray-100 text-gray-700 p-1 rounded-sm focus:outline-none focus:border-gray-300">
            </div>
        </div>

        <x-form.submit>Change Password</x-form.submit>
    </form>
</x-layout.app>
