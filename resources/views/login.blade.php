<!DOCTYPE html>
<html class="h-full bg-white">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="h-full">

  
<header class="bg-darkerblue text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo and Portal Link -->
            <div class="flex items-center">
                <div class="text-2xl font-bold mr-4">
                    <a href="#" class="text-white hover:text-gray-300">ABHA Portal</a>
                </div>
            </div>
            
        </div>
    </header>

  <div class="flex min-h-full flex-col justify-center px-6 py-5 lg:px-8">
        
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-32 w-auto" src="{{ asset('/assets/logo.jpg') }}" alt="logo">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign In</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{route('loginSession')}}" method="POST">
        @csrf
        <div>
          <label for="abha" class="block text-sm font-medium leading-6 text-gray-900">ABHA Number</label>
          <div class="mt-2">
            <input id="abha" name="abha" type="number" value="{{session('form_data')}}" required class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" value="{{session('form_data')}}"  required class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-darkblue px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm">
        Not having an ABHA number?
        <a href="{{route('signup')}}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Create one now</a>
      </p>
      <p class="mt-5 text-center text-sm">
        <a href="{{route('docsignup')}}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Doctor Signup</a>
      </p>
    </div>
    
  </div>
</body>

</html>
