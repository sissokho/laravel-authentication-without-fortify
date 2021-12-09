<x-layout.app>
    <h1 class="text-center text-xl font-semibold mt-5">Forgot Password ?</h1>
    <p class="text-center text-gray-500">Enter your email and we will send you a link to reset your password</p>

    @if (session('status'))
    <div class="mt-4 mb-4 font-medium text-sm text-green-600 text-center">
        {{ session('status') }}
    </div>
    @endif

    <form action="{{ route('password.email') }}" method="POST" class="bg-white w-80 px-4 py-6 mt-5 mx-auto rounded-md shadow-md sm:w-96">
        @csrf
        <div class="space-y-6">
            <div class="flex flex-col">
                <x-form.input type="email" name="email" />
            </div>
        </div>

        <x-form.submit>Request reset link</x-form.submit>
    </form>
    </x-layout.ap>
