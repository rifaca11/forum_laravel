<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brief7</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
    <div>
    <ul>
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="" class="p-3">Home</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                </li>
                <li> 
                    <a href="{{ route('posts') }}" class="p-3">Post</a>
                </li>
            </ul>


            <ul class="flex items-center">
                @auth
                <li>
                    <a href="" class="p-3">{{auth()->user()->name}}</a>
                </li>

                <li>
                    <form action="{{ route('logout') }}" method="post" class="inline p-3">
                        @csrf
                    <button type="submit" class="p-3">Logout</a>
                    </form>
                </li>

                @endauth

                @guest
                <li>
                    <a href="{{ route('login') }}" class="p-3">Login</a>
                </li>

                <li>
                    <a href="{{ route('register') }}" class="p-3">Registre</a>
                </li>
                @endguest

                
            </ul>

        </nav>
    </ul>
    </div>
   <!-- to extends this layout to other views -->
    @yield('content')
</body>
</html>