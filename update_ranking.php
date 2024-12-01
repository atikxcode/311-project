<?php
session_start(); // Start session to check logged-in user

// Define admin email
$adminEmail = "astaroth2077@gmail.com";

// Check if user is logged in
$isLoggedIn = isset($_SESSION['email']);
$isAdmin = $isLoggedIn && $_SESSION['email'] === $adminEmail;
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Rankings</title>
</head>
<body>
  
  <!-- Header -->
  <?php include './components/navbar.php'; ?>

  <!-- Update/Add University -->
  <div class="bg-gray-100 min-h-screen p-6">
    <div class="max-w-4xl mx-auto">
      <!-- Page Title -->
      <h2 class="text-3xl font-bold text-center mb-8 underline underline-offset-4">Update or Add University</h2>
      
      <!-- Warning for non-admin users -->
      <?php if (!$isAdmin): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6" role="alert">
          <strong>Access Denied:</strong> You are not an admin and cannot make any changes.
        </div>
      <?php endif; ?>

      <!-- Form for Adding/Updating -->
      <div class="bg-white shadow-md rounded-lg p-6">
        <h3 class="text-xl font-semibold mb-4">Update/Add University</h3>
        <form 
          action="process_update.php" 
          method="POST" 
          class="grid grid-cols-1 sm:grid-cols-2 gap-4"
          <?= !$isAdmin ? 'style="pointer-events: none; opacity: 0.6;"' : '' ?>>
          <!-- Rank -->
          <div>
            <label for="rank" class="block text-sm font-medium text-gray-700 mb-1">Rank</label>
            <input type="number" id="rank" name="rank" class="w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500" required>
          </div>
          <!-- University Name -->
          <div>
            <label for="university_name" class="block text-sm font-medium text-gray-700 mb-1">University Name</label>
            <input type="text" id="university_name" name="university_name" class="w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500" required>
          </div>
          <!-- Country -->
          <div>
            <label for="country" class="block text-sm font-medium text-gray-700 mb-1">Country</label>
            <input type="text" id="country" name="country" class="w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500" required>
          </div>
          <!-- Subject Area -->
          <div>
            <label for="subject_area" class="block text-sm font-medium text-gray-700 mb-1">Subject Area</label>
            <input type="text" id="subject_area" name="subject_area" class="w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500" required>
          </div>
          <!-- Year -->
          <div>
            <label for="year" class="block text-sm font-medium text-gray-700 mb-1">Year</label>
            <input type="number" id="year" name="year" min="2000" max="<?= date("Y") ?>" class="w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500" required>
          </div>
          <!-- QS Ranking -->
          <div>
            <label for="qs_ranking" class="block text-sm font-medium text-gray-700 mb-1">QS Ranking</label>
            <input type="number" id="qs_ranking" name="qs_ranking" class="w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500" required>
          </div>
          <!-- Submit Button -->
          <div class="col-span-2 text-right">
            <button 
              type="submit" 
              class="px-4 py-2 text-white font-semibold bg-teal-400 rounded-lg hover:bg-black transition-all duration-300">
              Save University
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include 'components/footer.php'; ?>

</body>
</html>
