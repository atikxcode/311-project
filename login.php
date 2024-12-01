<?php
session_start();
if (isset($_SESSION['message'])) {
    echo "<div class='text-center text-red-500 mb-4'>{$_SESSION['message']}</div>";
    unset($_SESSION['message']);
}
?>


<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  
  <!-- Header -->
 
    <?php include 'components/navbar.php'; ?>


  <!-- Login Form -->
  <div class="flex min-h-screen items-center justify-center bg-gray-100">
    <div class="w-full shadow-teal-400 max-w-md bg-white rounded-lg shadow-lg p-8">
      <h2 class="text-2xl font-bold text-center mb-6 underline underline-offset-4">Login</h2>
      <form action="process_login.php" method="POST">
        <!-- Email Field -->
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
            class="w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500" />
        </div>
        <!-- Username Field -->
        <div class="mb-4">
          <label for="full_name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
          <input
            type="text"
            id="full_name"
            name="full_name"
            placeholder="Enter your Full Name"
            class="w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500" />
        </div>
        <!-- Password Field -->
        <div class="mb-6">
          <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            class="w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500" />
        </div>
        <!-- Submit Button -->
        <button
          type="submit"
          class="w-full text-[14px] px-4 py-3 font-semibold rounded-lg bg-teal-400 border-0 hover:bg-black hover:text-white hover:shadow-lg hover:shadow-black transition-all duration-300">
          Login
        </button>
        <!-- Sign Up -->
        <div class="mt-4 text-center">
          <a href="/signup.php" class="text-sm text-blue-500 hover:underline">Sign Up</a>
        </div>
      </form>
    </div>
  </div>
  
  <!-- Footer -->
  
    <?php include 'components/footer.php'; ?>
  

</body>
</html>
