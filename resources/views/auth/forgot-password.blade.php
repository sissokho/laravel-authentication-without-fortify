<x-layout.app>
    <h1 class="text-center text-xl font-semibold mt-5">Forgot Password ?</h1>
    <p class="text-center text-gray-500">Enter your email and we will send you a link to reset your password</p>

    <form action="#" method="POST" class="bg-white w-80 px-4 py-6 mt-5 mx-auto rounded-md shadow-md sm:w-96">
        @csrf
        <div class="space-y-6">
            <div class="flex flex-col">
                <label for="email">Email address</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="border border-gray-200 bg-gray-100 text-gray-700 p-1 rounded-sm focus:outline-none focus:border-gray-300">

                @error('email')
                    <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <button type="submit" class="w-full bg-green-400 text-white py-2 mt-10 hover:bg-green-500 transition-colors">Request reset link</button>
    </form>
</x-layout.ap>
