<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Campus ScoreCard</title>
</head>
<body>

  <!-- Navbar -->
  <?php include 'components/navbar.php'; ?>

  <!-- Carousel Section -->
  <section>
    <div class="carousel w-full">
      <div id="slide1" class="carousel-item relative w-full">
        <img src="/img/pixelcut-export.jpeg" class="w-full h-[800px]" />
        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
          <a href="#slide2" class="btn btn-circle">❮</a>
          <a href="#slide2" class="btn btn-circle">❯</a>
        </div>
        <div class="absolute text-white bottom-[15%] left-[5%]">
          <h2 class="text-[48px] font-semibold  w-[60%]">Unleashing Potential Fostering Excellence</h2>
        </div>
      </div>
      <div id="slide2" class="carousel-item relative w-full">
        <img src="/img/DALL·E 2024-11-13 16.44.11 - A modern university ranking website interface displayed on a laptop screen. The design features a sleek and professional look with a clean white and b.webp" class="w-full h-[800px]" />
        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
          <a href="#slide1" class="btn btn-circle">❮</a>
          <a href="#slide1" class="btn btn-circle">❯</a>
        </div>
        <div class="absolute text-white bottom-[15%] left-[5%]">
          <h2 class="text-[48px] font-bold  w-[60%]">Unleashing Potential Fostering Excellence</h2>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 2 -->
  <section class="bg-cover h-[400px] mt-20 bg-center bg-fixed relative" style="background-image: url('/img/duke-university-west-campus-union-grimshaw_dezeen_sq.webp');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="max-w-[600px] m-auto h-full flex flex-col items-center justify-center relative z-10 gap-10">
      <h1 class="text-teal-400 text-3xl">Welcome to Campus ScoreCard</h1>
      <p class="text-teal-400 text-xl text-center">Your comprehensive guide to the UGC University Ranking System.</p>
      <a href="/ranking.php" class="text-[14px] px-4 py-3 font-semibold rounded-lg border-teal-400 bg-teal-400 border-0 hover:bg-white hover:shadow-lg hover:shadow-teal-400 transition-all duration-300">
        Explore Rankings
      </a>
    </div>
  </section>

  <!-- Section 3 -->
  <section class="bg-gray-100 mb-20 py-10 flex flex-col items-center justify-center gap-5">
    <h2 class="text-black font-bold text-4xl text-center">About UGC Rankings</h2>
    <p class="w-[600px] text-center font-medium">This ranking system aims to evaluate and enhance the quality of education across all universities. Learn about the criteria, methodology, and benefits of the ranking system.</p>
    <a href="/ranking.php" class="text-[14px] px-4 py-3 font-semibold rounded-lg bg-teal-400 border-0 hover:bg-black hover:text-white hover:shadow-lg hover:shadow-black transition-all duration-300">
      Learn More
    </a>
  </section>

  <!-- Section 4 -->
  <section class="flex mb-20 flex-col items-center gap-10">
    <div>
      <h2 class="text-4xl font-extrabold">Key Features Of the Ranking System</h2>
    </div>
    <div class="flex flex-row flex-wrap gap-8 items-center justify-center">
      <!-- First Card -->
      <div class="card bg-base-100 w-96 shadow-xl hover:shadow-lg hover:rounded-xl hover:scale-105 hover:shadow-teal-400 transition-all duration-300">
        <div class="card-body">
          <h2 class="card-title">Comprehensive Criteria</h2>
          <p>UGC rankings are based on diverse factors like research, faculty, and employability.</p>
        </div>
        <figure>
          <img src="/img/1.avif" alt="Criteria Image" />
        </figure>
      </div>
      <!-- Second Card -->
      <div class="card bg-base-100 w-96 shadow-xl hover:shadow-lg hover:rounded-xl hover:scale-105 hover:shadow-teal-400 transition-all duration-300">
        <div class="card-body">
          <h2 class="card-title">Reliable and Transparent</h2>
          <p>Our ranking system ensures accuracy and transparency for fair university assessments.</p>
        </div>
        <figure>
          <img class="h-[220px] w-full" src="/img/2.jpg" alt="Transparency Image" />
        </figure>
      </div>
      <!-- Third Card -->
      <div class="card bg-base-100 w-96 shadow-xl hover:shadow-lg hover:rounded-xl hover:scale-105 hover:shadow-teal-400 transition-all duration-300">
        <div class="card-body">
          <h2 class="card-title">Student-Centric Information</h2>
          <p>Providing students with reliable data to make informed academic choices.</p>
        </div>
        <figure>
          <img class="h-[220px] w-full" src="/img/3.webp" alt="Student-Centric Image" />
        </figure>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'components/footer.php'; ?>

</body>
</html>
