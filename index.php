<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/index.css" />
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <title>The Sparks Bank</title>
  
</head>

<body>
  <!-- This example requires Tailwind CSS v2.0+ -->
  <div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
      <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
        <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
          <polygon points="50,0 100,0 50,100 0,100" />
        </svg>
        <!-- php code to include navabr -->
        <?php
        include 'navbar.php';
        ?>
        <!-- php ends -->

        <!-- dollar Photo section -->
        <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
          <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="px-5 pt-4 flex items-center justify-between">
              <div>
                <img class="h-12 w-auto" src="img/logo.png" alt="" />
              </div>
            </div>
          </div>
        </div>

        <!-- heading section -->
        <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
          <div class="sm:text-center lg:text-left">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
              <span class="block xl:inline">The Sparks Bank</span>
              <!-- <span class="block text-indigo-600 xl:inline">online business</span> -->
            </h1>
            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
              The Gateway to all your baking problems.
            </p>
          </div>
        </main>
      </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
      <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="img/bank.png" alt="" />
    </div>
  </div>

  <!-- aboutUS section  -->
  <div class="aboutUs sm:text-center lg:text-left"></div>

  <div class="aboutUs">
    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
      <span class="block xl:inline">About Us</span>
    </h1>
    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
      The Sparks Bank Ltd is one of India's premier banks. Headquartered in
      Singapore The Sparks Bank is a new generation private sector bank
      providing a wide range of banking services covering commercial and
      investment banking on the wholesale side and transactional/branch
      banking on the retail side.
    </p>
  </div>
  <!-- services container -->
  <div class="services-container">
    <div>
      <h1 class="h-primary text-center text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
        Our Services
      </h1>
    </div>
    <div id="services">
      <div class="box">
        <img src="img/transfer.jpg" alt="" />
        <h2 class="h-secondary text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
          Transfer Money
        </h2>
        <a href="transfer_money.php" id="btn1" class="btn inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
          Transfer money
        </a>
      </div>
      <div class="box">
        <img src="img/history.jpg" alt="" />
        <h2 class="h-secondary text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
          Transaction history
        </h2>

        <a href="TransHistory.php" id="btn2" class="btn inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
          Transaction History
        </a>
      </div>
    </div>
  </div>
  <!-- footer section -->
  <div class="footer">
    <footer>
      <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">©2020 Aashutosh Shrivastava.All Rights Reserved.
      </p>
    </footer>
  </div>
</body>

</html>