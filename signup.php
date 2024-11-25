<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
</head>
<body>
  
  <!-- Header -->
  <?php include 'components/navbar.php'; ?>

  <!-- Sign Up Form -->
  <div class="flex min-h-screen items-center justify-center bg-gray-100">
    <div class="w-full shadow-teal-400 max-w-md bg-white rounded-lg shadow-lg p-8">
      <h2 class="text-2xl font-bold text-center mb-6 underline underline-offset-4">Sign Up</h2>
      <form action="process_signup.php" method="POST">
        <!-- Full Name Field -->
        <div class="mb-4">
          <label for="full_name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
          <input
            type="text"
            id="full_name"
            name="full_name"
            placeholder="Enter your full name"
            class="w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500" />
        </div>
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
        <!-- Password Field -->
        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            class="w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500" />
        </div>
        <!-- Phone Number Field -->
        <div class="mb-6">
          <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
          <input
            type="tel"
            id="phone_number"
            name="phone_number"
            placeholder="Enter your phone number"
            class="w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500" />
        </div>
        <!-- Submit Button -->
        <button
          type="submit"
          class="w-full text-[14px] px-4 py-3 font-semibold rounded-lg bg-teal-400 border-0 hover:bg-black hover:text-white hover:shadow-lg hover:shadow-black transition-all duration-300">
          Sign Up
        </button>
        <!-- Already Have an Account -->
        <div class="mt-4 text-center">
          <a href="/login.php" class="text-sm text-blue-500 hover:underline">Already have an account? Login</a>
        </div>
      </form>
    </div>
  </div>
  
  <!-- Footer -->
  <?php include 'components/footer.php'; ?>

</body>
</html>
