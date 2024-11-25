<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="/css/navbar.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
</head>
<body>
  
  <div class="navbar bg-base-100 px-20 py-5">
    <!-- Navbar Start -->
    <div class="navbar-start">
      <!-- Dropdown for smaller screens -->
      <div class="dropdown lg:hidden">
        <button tabindex="0" class="btn btn-ghost">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
        </button>
        <ul tabindex="0" class="menu bg menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
          <li><a href="/" class="hover:bg-white hover:text-teal-500">Home</a></li>
          <li><a href="/about.php" class="hover:bg-white hover:text-teal-500">About</a></li>
          <li><a href="/ranking.php" class="hover:bg-white hover:text-teal-500">Ranking</a></li>
          <li><a href="/resources.php" class="hover:bg-white hover:text-teal-500">Resources</a></li>
        </ul>
      </div>

      <!-- Branding -->
      <div class="flex items-center gap-8">
        <img src="/img/Capture.JPG" alt="Logo" class="w-32 h-26">
        <a class="font-bold text-2xl">Campus ScoreCard</a>
      </div>
    </div>

    <!-- Navbar Center -->
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1 gap-8">
        <li><a href="/" class="hover:bg-white hover:text-teal-500">Home</a></li>
        <li><a href="/about.php" class="hover:bg-white hover:text-teal-500">About</a></li>
        <li><a href="/ranking.php" class="hover:bg-white hover:text-teal-500">Ranking</a></li>
        <li><a href="/resources.php" class="hover:bg-white hover:text-teal-500">Resources</a></li>
      </ul>
    </div>

    <!-- Navbar End -->
    <div class="navbar-end">
      <a href="/login.php" class="text-[14px] px-4 py-3 font-semibold rounded-lg bg-teal-400 border-0 hover:bg-black hover:text-white hover:shadow-lg hover:shadow-black transition-all duration-300">
        Get Started
      </a>
    </div>
  </div>
  
</body>
</html>
