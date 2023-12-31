<!DOCTYPE html>
<html class="h-full bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="h-full">
    <!-- Header -->
    <header class="bg-darkerblue text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo and Portal Link -->
            <div class="flex items-center">
                <div class="text-2xl font-bold mr-4">
                    <a href="#" class="text-white hover:text-gray-300">ABHA Portal</a>
                </div>
            </div>
            
            <!-- Logout Button -->
            <form action="{{route('logoutSession')}}" method="POST">
                @csrf
                <button type="submit" class="flex w-full justify-center rounded-md bg-orange px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Logout</button>
            </form>
        </div>
    </header>

    <div class="bg-white overflow-hidden shadow rounded-lg border w-full md:w-1/2 mx-auto mt-8 mb-10">
        <div class="px-4 py-5 sm:px-6 text-center bg-darkblue text-white">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
            Ayushman Bharat Health Account (ABHA)
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
            आयुष्मान भारत स्वास्थ्य खाता (आभा)
            </p>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
                <!-- User profile details go here -->
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm text-grey font-bold">
                    Name/नाम
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 font-bold sm:mt-0 sm:col-span-2">
                    {{ $user->name }}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-bold text-grey">
                    ABHA number/आभा-संख्या
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 font-bold sm:col-span-2">
                    {{ $user->abha_number }}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-bold text-grey">
                    ABHA address/आभा पता
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 font-bold sm:col-span-2">
                    {{ $user->abha_number }}@doc
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-bold text-grey">
                    UID/यूआईडी
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 font-bold sm:col-span-2">
                    {{ $user->uid}}
                    </dd>
                </div>
            </dl>
        </div>
    </div>

    
    <div class="flex justify-evenly mb-7">
    <a href="{{ route('writeprescript', ['abha_number' => $user->abha_number]) }}" class="flex flex-col items-center w-96 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900">Write Prescriptions</h5>
        <div class="mb-3">
            <img src="{{ asset('/assets/write.svg') }}" class="h-20 w-20 mx-auto">
        </div>
    </a>

    <a href="{{ route('history')}}" class="flex flex-col items-center w-96 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900">Check Health Record</h5>
        <div class="mb-3">
            <img src="{{ asset('/assets/history.svg') }}" alt="Health Record" class="h-20 w-20 mx-auto">
        </div>
    </a>
</div>


    <div style="height: 50px;"></div>

    <!-- Footer container -->
<footer
  class="bg-darkerblue text-center text-white    dark:bg-neutral-600 dark:text-neutral-200 lg:text-left">
  <div
    class="flex items-center justify-center border-b-2 border-neutral-200 p-6 dark:border-neutral-500 lg:justify-between">
    <div class="mr-12 hidden lg:block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Social network icons container -->
    <div class="flex justify-center">
      <a href="https://www.facebook.com/AyushmanNHA" class="mr-6 text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
        </svg>
      </a>
      <a href="https://twitter.com/AyushmanNHA" class="mr-6 text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
        </svg>
      </a>
      <a href="https://www.instagram.com/ayushmannha/" class="mr-6 text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
        </svg>
      </a>
      <a href="https://www.linkedin.com/company/ayushmannha/" class="mr-6 text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
        </svg>
      </a>
      <a href="https://github.com/Korosukke" class="text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
        </svg>
      </a>
    </div>
  </div>

  <!-- Main container div: holds the entire content of the footer, including four sections (TW elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
  <div class="mx-6 py-10 text-center md:text-left ">
    <div class="grid-1 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
      <!-- TW elements section -->
      <div class="">
        <h6
          class="mb-4 flex items-center justify-center font-semibold uppercase md:justify-start">
          <img src="{{ asset('/assets/logo.png') }}" alt="TW Elements Icon" class="mr-3 h-20 w-20">
          <img src="{{ asset('/assets/digitalInd.jpg') }}" alt="TW Elements Icon" class="mr-3 h-20 w-30">
          
        </h6>
      </div>
      <!-- Products section -->
      <div class="">
        <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
          Policies
        </h6>
        <p class="mb-4">
          <a href="https://abdm.gov.in/terms-condition" class="text-neutral-600 dark:text-neutral-200"
            >Terms and Conditions</a
          >
        </p>
        <p class="mb-4">
          <a href="https://abdm.gov.in/website-policy" class="text-neutral-600 dark:text-neutral-200"
            >Website Policies</a
          >
        </p>
        <p class="mb-4">
          <a href="https://abdm.gov.in:8081/uploads/privacypolicy_178041845b.pdf" class="text-neutral-600 dark:text-neutral-200"
            >Data Privacy Policy</a
          >
        </p>
        <p>
          <a href="https://abdm.gov.in:8081/uploads/health_management_policy_bac9429a79.pdf" class="text-neutral-600 dark:text-neutral-200"
            >Health Data Management Policy</a
          >
        </p>
      </div>
      <!-- Useful links section -->
      <div class="">
        <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
          Important Links
        </h6>
        <p class="mb-4">
          <a href="https://abdm.gov.in/" class="text-neutral-600 dark:text-neutral-200"
            >Ayushman Bharat Digital Mission</a
          >
        </p>
        <p class="mb-4">
          <a href="https://abha.abdm.gov.in/abha/v3" class="text-neutral-600 dark:text-neutral-200"
            >Ayushman Bharat Health Account(ABHA)</a
          >
        </p>
        <p class="mb-4">
          <a href="https://hpr.abdm.gov.in/en" class="text-neutral-600 dark:text-neutral-200"
            >Healthcare Professionals Registry</a
          >
        </p>
        <p>
          <a href="https://grievance.abdm.gov.in/" class="text-neutral-600 dark:text-neutral-200"
            >Grievance Portal</a
          >
        </p>
      </div>
      <!-- Contact section -->
      <div>
        <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
          Contact
        </h6>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          National Health Authority 9th Floor, Tower-1, Jeevan Bharati Building, Connought Place, New Delhi - 110 001
        </p>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="mr-3 h-5 w-5">
            <path
              d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
            <path
              d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
          </svg>
          abdm@nha.gov.in
        </p>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="mr-3 h-5 w-5">
            <path
              fill-rule="evenodd"
              d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
              clip-rule="evenodd" />
          </svg>
          1800-11-4477
        </p>
      </div>
    </div>
  </div>

  <!--Copyright section-->
  <div class="bg-neutral-200 p-6 text-center text-sm dark:bg-neutral-700">
    <p>This Website belongs to National Health Authority, Ministry of Health and Family Welfare, Government of India</p>
  </div>
</footer>

</body>

</html>
