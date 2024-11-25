<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Ranking System</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1E3A8A',
                        secondary: '#FACC15',
                        light: '#E5E7EB',
                    },
                },
            },
            plugins: [require('daisyui')],
            daisyui: {
                themes: ['corporate'],
            },
        };
    </script>
</head>

<body>
    <!-- Navbar -->
    <header>
        <?php include 'components/navbar.php'; ?>
    </header>

    <section class="bg-gray-50 text-gray-800 font-sans">
        <!-- Hero Section -->
        <section 
        class="bg-cover h-[600px] mt-8 bg-center bg-fixed relative" 
        style="background-image: url('/img/DALL·E\ 2024-11-21\ 01.04.50\ -\ A\ minimalistic\ and\ sleek\ design\ for\ a\ resource\ page\ banner\ for\ a\ university\ ranking\ system\ website.\ The\ image\ has\ a\ width\ of\ 150\ pixels\ and\ a\ height\ o.webp');">
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="max-w-[600px] m-auto  h-full flex flex-col items-center justify-center relative z-10 gap-10">
                <h1 class="text-teal-400 text-3xl">Our Commitment to Excellence</h1>
                <p class="text-teal-400 text-xl text-center">We are dedicated to fostering excellence in education by providing accessible, equitable, and unbiased rankings that align with the values of innovation and knowledge.</p>
                <a href="/signup.php" class="btn border-[1px] border-teal-400 bg-teal-400 border-0 hover:bg-white hover:shadow-lg hover:shadow-teal-400 transition-all duration-300">Register Now</a>
            </div>
        </section>

        <!-- Main Content -->
        <main class="container mx-auto px-6 py-10 space-y-20">
            <!-- Data Sources Section -->
            <section id="data-sources" class="space-y-6">
                <h2 class="text-3xl font-bold text-black text-center">Trusted Data Sources</h2>
                <p class="text-center text-gray-600">We gather data from reliable institutions to maintain the highest standards.</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php 
                        $sources = [
                            ['img' => '/img/Capture-removebg-preview.png', 'title' => 'Academic Journals', 'desc' => 'Peer-reviewed journals ensure accuracy and trustworthiness.'],
                            ['img' => '/img/Capture2-removebg-preview.png', 'title' => 'University Reports', 'desc' => 'Key metrics from institutions guide our rankings.'],
                            ['img' => '/img/Capture3-removebg-preview.png', 'title' => 'Public Data Sets', 'desc' => 'Credible sources like UNESCO and government datasets.'],
                        ];
                        foreach ($sources as $source): ?>
                        <div class="card bg-white shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                            <div class="card-body items-center hover:shadow-lg hover:rounded-xl hover:shadow-teal-400 transition-all duration-300">
                                <img src="<?= $source['img'] ?>" alt="Source" class="w-24 rounded-full mx-auto mb-4">
                                <h3 class="card-title text-lg font-semibold text-center"><?= $source['title'] ?></h3>
                                <p class="text-sm text-gray-600 text-center"><?= $source['desc'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- Sponsors Section -->
            <section id="sponsors" class="space-y-6 flex flex-col items-center">
                <h2 class="text-3xl font-bold text-black text-center">Our Esteemed Sponsors</h2>
                <p class="text-center text-gray-600">We are proud to collaborate with these organizations.</p>
                <div class="grid grid-cols-4 flex-wrap gap-24 ">
                    <?php 
                        $sponsors = ['sponsor1.png', 'sponsor2.jpg', 'sponsor3.png', 'sponsor4.jpg', 'sponsor5.jpg', 'sponsor6.jpg', 'sponsor7.jpg', 'sponsor8.jpeg', 'sponsor9.png', 'sponsor10.png', 'sponsor11.svg', 'sponsor12.png'];
                        foreach ($sponsors as $sponsor): ?>
                        <img class="w-[120px] h-[100px]" src="/img/<?= $sponsor ?>" alt="Sponsor">
                    <?php endforeach; ?>
                </div>
            </section>
        </main>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>
</body>
</html>
