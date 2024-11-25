<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer</title>
</head>
<body>
  <footer class="p-4 lg:p-10 bg-[#030712] text-white">
    <div class="mx-auto flex justify-between w-full mb-6 lg:mb-12">

      <div class="flex flex-col">
        <h2 class="font-raleway text-2xl lg:text-4xl font-extrabold mb-4">Campus ScoreCard</h2>
        <p class="w-[190px] lg:w-[290px] text-gray-400 font-inter">Choosing the best university is now even more easy and reliable.</p>
      </div>

      <div class="flex flex-col">
        <a href="#" class="font-raleway text-lg lg:text-xl font-semibold mb-5">Download our app</a>
        <img class="h-20px w-[150px] lg:h-auto lg:w-auto" src="images/Group 104.png" alt="Download our app">
      </div>
      
    </div>

    <hr class="border-[1px] border-gray-100 mb-8">

    <div class="flex flex-row justify-between mb-24">
      <div>
        <p class="text-gray-400">All rights reserved by Campus ScoreCard. <?= date('Y'); ?></p>
      </div>
      <div class="flex gap-7">
        <a href="#" class="text-gray-400">Terms & Conditions</a>
        <a href="#" class="text-gray-400">Return & Refund Policy</a>
        <a href="#" class="text-gray-400">Privacy Policy</a>
      </div>
    </div>
  </footer>
</body>
</html>
