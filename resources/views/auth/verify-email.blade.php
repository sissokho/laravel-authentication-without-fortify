<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify your email</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-100">
    <main class="flex flex-col justify-start items-center pt-10 min-h-screen">
        @if (session('status') === 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            A new email verification link has been emailed to you!
        </div>
        @endif

        <div class="bg-white text-center p-7 rounded-md">
            <h1 class="text-xl">Verify your Email</h1>
            <p class="text-sm mt-5">
                We have sent an email to <span class="font-semibold">{{ auth()->user()->email }}</span> to verify your email address and activate your account.
                <br>
                Click the button below to have another email sent to you if you did not receive one.
            </p>
            <form action="{{ route('verification.send') }}" method="POST">
                @csrf
                <x-form.submit>Resend verification Email</x-form.submit>
            </form>
        </div>
    </main>
</body>

</html>
