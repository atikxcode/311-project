<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University Rankings</title>
</head>
<body>

<!-- Navbar -->
<?php include 'components/navbar.php'; ?>

  <!-- First section -->
  <section 
    class="bg-cover h-[400px] mt-20 bg-center bg-fixed relative" 
    style="background-image: url('/img/DALL·E 2024-11-11 01.20.32 - A realistic digital image for a university ranking system website. It should feature a professional interface with a ranking chart displaying top univ.webp');">
  
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="max-w-[600px] m-auto h-full flex flex-col items-center justify-center relative z-10 gap-10">
      <h1 class="text-teal-400 text-3xl">About University Rankings</h1>
      <p class="text-teal-400 text-xl text-center">We provide a comprehensive, transparent, and data-driven ranking system for universities, designed to help students, educators, and institutions make informed decisions.</p>
      <a href="/ranking.html" class="btn border-[1px] border-teal-400 bg-teal-400 border-0 hover:bg-white hover:shadow-lg hover:shadow-teal-400 transition-all duration-300">
        Explore Rankings
      </a>
    </div>
  </section>

  <!-- Second section -->
  <section class="container mx-auto my-12 px-4">
    <div class="flex flex-col gap-36">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Text Content -->
        <div>
          <h2 class="text-3xl font-bold text-gray-800">Who We Are</h2>
          <p class="mt-4 text-gray-700 leading-relaxed">
              At UniRank, we are committed to providing students with the most reliable and up-to-date information
              about universities across the globe. Our team of experts uses transparent methodologies to create
              unbiased rankings tailored to student needs.
          </p>
          <p class="mt-4 text-gray-700 leading-relaxed">
              With a focus on inclusivity and accuracy, we aim to empower students in making well-informed
              decisions about their education and career paths.
          </p>
        </div>
        <!-- Image -->
        <div>
          <img src="/img/DALL·E 2024-11-20 23.49.42 - A university campus designed in the architectural style of the Cologne Cathedral. The building features grand Gothic architecture, with towering spire.webp" alt="About Us" class="rounded-lg shadow-lg w-[90%] hover:scale-95 transition-all duration-300">
        </div>
      </div>

      <!-- Second part -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div>
          <img src="/img/uni2.avif" alt="About Us" class="rounded-lg shadow-lg w-[90%] hover:scale-95 transition-all duration-300">
        </div>
        <div>
          <h2 class="text-3xl font-bold text-gray-800">What We Stand For</h2>
          <p class="mt-4 text-gray-700 leading-relaxed">
            We believe in the transformative power of education to shape lives and communities. Our mission is to provide clear, accurate, and unbiased information that helps students navigate the complex world of higher education with confidence.
          </p>
          <p class="mt-4 text-gray-700 leading-relaxed">
            By upholding the values of integrity, inclusivity, and innovation, we strive to be a trusted partner in your academic journey, ensuring that every student has access to the tools they need to achieve their dreams.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Mission Section -->
  <section class="bg-gray-100 py-16">
    <div class="container mx-auto text-center">
      <h2 class="text-4xl font-bold text-gray-900">Our Mission</h2>
      <p class="mt-6 text-lg text-gray-600 leading-relaxed max-w-2xl mx-auto">
          We strive to create a world where every student can discover and achieve their educational aspirations
          with confidence and clarity.
      </p>
      <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Cards -->
        <?php 
          $cards = [
            ['img' => '/img/about1.webp', 'title' => 'Transparency', 'desc' => 'We prioritize clear and unbiased rankings to empower informed decisions for students worldwide.'],
            ['img' => '/img/about2.webp', 'title' => 'Accessibility', 'desc' => 'Our mission is to make vital educational data accessible to students from all walks of life.'],
            ['img' => '/img/about3.webp', 'title' => 'Excellence', 'desc' => 'We continuously innovate and refine our methodologies to ensure the best for aspiring students.']
          ];
          foreach ($cards as $card) {
            echo "
              <div class='card bg-white shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300'>
                <div class='card-body items-center hover:shadow-lg hover:rounded-xl hover:shadow-teal-400 transition-all duration-300'>
                  <img src='{$card['img']}' alt='{$card['title']}' class='w-24 rounded-full mx-auto mb-4'>
                  <h3 class='card-title text-lg font-semibold text-center'>{$card['title']}</h3>
                  <p class='text-sm text-gray-600 text-center'>{$card['desc']}</p>
                </div>
              </div>";
          }
        ?>
      </div>
    </div>
  </section>

<!-- Footer -->
<?php include 'components/footer.php'; ?>

</body>
</html>
