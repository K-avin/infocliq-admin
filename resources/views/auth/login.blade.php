
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/manifest.json')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/login.min.css')}}">
</head>
<body class="h-screen overflow-hidden items-center justify-center" style="background: #edf2f7;">
    <div class="h-screen flex">
        <div
        class="sm:w-1/2 xl:w-3/5 h-full hidden md:flex flex-auto items-center justify-center p-10 overflow-hidden bg-red-900 text-white bg-no-repeat bg-cover relative"
        style="background-image: url(https://images.unsplash.com/photo-1518001215135-ff041c7054b6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80);">
        <div class="absolute bg-gradient-to-b from-red-600 to-red-600 opacity-80 inset-0 z-0"></div>
        <div class="w-full  max-w-md z-10">
            <div>
                <h1 class="text-white font-bold text-4xl font-sans">DoTâche</h1>
                <p class="text-white mt-1">This is our project management software</p>
                <button type="submit" class="block w-28 bg-white text-red-500 mt-4 py-2 rounded-2xl font-bold mb-2">Read More</button>
              </div>
        </div>
        <!---remove custom style-->
        @include('auth.components.animateCircles')
  
  <div class="flex w-1/2 justify-center items-center bg-white">
    
    <form class="bg-white" method="POST" action="{{ route('login') }}">
        @csrf
      <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
      <p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>
      <div class="flex items-center @error('email') border-red-500 @enderror border-2 py-2 px-3 rounded-2xl mb-4">
        <div class="text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 @error('email') text-red-500 @enderror" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
              </svg>
        </div>
        <input class="pl-2 outline-none border-none"
         type="email"
         id="email" 
         name="email" 
         placeholder="Email Address" 
         value="{{ old('email') }}" 
         required 
         autocomplete="email" 
         autofocus/>        
      </div>
      {{-- @error('email')
        <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror --}}

      <div class="flex items-center border-2 @error('password') border-red-500 @enderror py-2 px-3 rounded-2xl">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
        </svg>
        <input 
        class="pl-2 outline-none border-none"
        type="text"
        name="password"
        id="password"
        type="password"
        placeholder="Password"
        required/>        
      </div>
      {{-- @error('password')
        <p class="text-red-500 text-xs">
            {{ $message }}
        </p>
        @enderror --}}
    </p>
      <button type="submit" class="block w-full bg-red-500 overflow-hidden mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
      @if (Route::has('password.request'))
      <a  class="text-sm ml-2 hover:text-red-500 cursor-pointer">Forgot Password ?</a>
      {{-- href="{{ route('password.request') }}" --}}
      @endif
    </form>

  </div>
</div>
</body>
</html>
