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

<div class="bg-white w-screen font-sans text-gray-900">
  <div class=" ">
    <div class="mx-auto w-full sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl">
      <!-- ... your existing HTML code ... -->

<div class="mx-2 py-6 text-center md:mx-auto md:w-2/3 md:py-10">
  <h1 class="mb-4 text-base font-black leading-4 text-darkblue sm:text-3xl xl:text-4xl">Create ABHA Number</h1>
  <div class="text-lg sm:text-xl mb-4">
    <p class="mb-1">Enter your details to get started.</p>
  </div>
  @if($errors->any())
    <ul>
      @foreach($errors->all() as $error)
        <li class="text-darkerblue font-bold">{{$error}}</li>
      @endforeach
    </ul>
  @endif
</div>

<!-- ... your existing HTML code ... -->

      </div>
    </div>
  </div>
  <div class="md:w-2/3 mx-auto w-full pb-16 sm:max-w-screen-sm md:max-w-screen-md lg:w-1/3 lg:max-w-screen-lg xl:max-w-screen-xl">
    <form class="shadow-lg mb-4 rounded-lg border border-gray-100 py-10 px-8" method="POST" action="/process">
        @csrf
      <div class="mb-4"><label class="mb-2 block text-sm font-bold" for="name">Name</label><input class="shadow-sm w-full cursor-text appearance-none rounded border border-gray-300 py-2 px-3 leading-tight outline-none ring-blue-500 focus:ring" id="name" name="name" value="{{old('name')}}" type="name" placeholder="Name" required="" /><span class="my-2 block"></span></div>
      <div class="mb-4"><label class="mb-2 block text-sm font-bold" for="aadhar">Aadhar Number</label><input class="shadow-sm w-full cursor-text appearance-none rounded border border-gray-300 py-2 px-3 leading-tight outline-none ring-blue-500 focus:ring" name="aadhar_number" id="aadhar" value="{{old('aadhar_number')}}" type="number" placeholder="Aadhar Number" required="" /><span class="my-2 block"></span></div>
      <div class="mb-4"><label class="mb-2 block text-sm font-bold" for="email">E-mail</label><input class="shadow-sm w-full cursor-text appearance-none rounded border border-gray-300 py-2 px-3 leading-tight outline-none ring-blue-500 focus:ring" id="email" name="email" type="email" placeholder="email" value="{{old('email')}}" required="" /><span class="my-2 block"></span></div>  
      <div class="mb-4"><label class="mb-2 block text-sm font-bold" for="dob">Date of Birth</label><input class="shadow-sm w-full cursor-text appearance-none rounded border border-gray-300 py-2 px-3 leading-tight outline-none ring-blue-500 focus:ring" id="dob" name="dob" type="date" placeholder="DOB" value="{{old('dob')}}" required="" /><span class="my-2 block"></span></div>
      <div class="mb-4"><label class="mb-2 block text-sm font-bold" for="phone">Phone</label><input class="shadow-sm w-full cursor-text appearance-none rounded border border-gray-300 py-2 px-3 leading-tight outline-none ring-blue-500 focus:ring" id="phone" type="phone" name="phone" placeholder="Phone" value="{{old('phone')}} "required="" /><span class="my-2 block"></span></div>
      <div class="mb-4"><label class="mb-2 block text-sm font-bold" for="password">Password</label><input class="shadow-sm w-full cursor-text appearance-none rounded border border-gray-300 py-2 px-3 leading-tight outline-none ring-blue-500 focus:ring" id="password" name="password" type="password" placeholder="******************" required="" /></div>
      <div class="mb-4"></div>
      <div class="mb-6">
        <label class="mb-2 flex text-sm"
          ><input type="checkbox" name="accept" class="mr-2" required="" />
          <div class="text-gray-800">
            <p class="">
              I accept the
              <a href="{{route('terms')}}" class="cursor-pointer text-blue-500 underline">terms of use</a>
            </p>
          </div></label
        >
      </div>
      <div class="flex items-center">
        <div class="flex-1"></div>
        <button class="cursor-pointer rounded bg-orange py-2 px-8 text-center text-lg font-bold  text-white" type="submit">Create account</button>
      </div>
    </form>
  </div>
</div>
</body>
</html>
