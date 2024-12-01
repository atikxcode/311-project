<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University Rankings</title>
</head>
<body>
  
  <!-- Header -->
  <?php include 'components/navbar.php'; ?>

  <!-- Ranking Page Content -->
  <div class="bg-gray-100 min-h-screen p-6">
    <div class="max-w-7xl mx-auto">
      <!-- Page Title -->
      <h2 class="text-3xl font-bold text-center mb-8 underline underline-offset-4">University Rankings</h2>
      
      <!-- Filters -->
      <div class="bg-white shadow-md rounded-lg p-6 mb-8">
        <h3 class="text-xl font-semibold mb-4">Filter Rankings</h3>
        <form action="ranking.php" method="GET" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
          <!-- Country Filter -->
          <div>
            <label for="country" class="block text-sm font-medium text-gray-700 mb-1">Country</label>
            <select id="country" name="country" class="w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500">
              <option value="">Select Country</option>
              <option value="usa">USA</option>
              <option value="uk">UK</option>
              <option value="canada">Canada</option>
              <option value="australia">Australia</option>
              <option value="india">India</option>
            </select>
          </div>
          <!-- Subject Filter -->
          <div>
            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject Area</label>
            <select id="subject" name="subject" class="w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500">
              <option value="">Select Subject Area</option>
              <option value="engineering">Engineering</option>
              <option value="business">Business</option>
              <option value="medicine">Medicine</option>
              <option value="arts">Arts & Humanities</option>
              <option value="science">Science</option>
            </select>
          </div>
          <!-- Year Filter -->
          <div>
            <label for="year" class="block text-sm font-medium text-gray-700 mb-1">Year</label>
            <select id="year" name="year" class="w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500">
              <option value="">Select Year</option>
              <?php for ($i = date("Y"); $i >= 2000; $i--): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
              <?php endfor; ?>
            </select>
          </div>
          <!-- QS Ranking Filter -->
          <div>
            <label for="qs_ranking" class="block text-sm font-medium text-gray-700 mb-1">QS Ranking</label>
            <select id="qs_ranking" name="qs_ranking" class="w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500">
              <option value="">Select QS Ranking</option>
              <option value="1-50">1-50</option>
              <option value="51-100">51-100</option>
              <option value="101-200">101-200</option>
              <option value="201-500">201-500</option>
              <option value="500+">500+</option>
            </select>
          </div>
          <!-- Apply Filters Button -->
          <div class="col-span-1 sm:col-span-2 lg:col-span-3 text-right">
            <button 
              type="submit" 
              class="px-4 py-2 text-white font-semibold bg-teal-400 rounded-lg hover:bg-black transition-all duration-300">
              Apply Filters
            </button>
          </div>
        </form>
      </div>

      <!-- Rankings Table -->
      <div class="bg-white shadow-md rounded-lg p-6">
        <h3 class="text-xl font-semibold mb-4">Ranking Results</h3>
        <table class="min-w-full border-collapse block lg:table">
          <thead class="block lg:table-header-group">
            <tr class="border-b bg-gray-50 block lg:table-row">
              <th class="text-left p-4 font-semibold text-sm block lg:table-cell">Rank</th>
              <th class="text-left p-4 font-semibold text-sm block lg:table-cell">University</th>
              <th class="text-left p-4 font-semibold text-sm block lg:table-cell">Country</th>
              <th class="text-left p-4 font-semibold text-sm block lg:table-cell">Subject Area</th>
              <th class="text-left p-4 font-semibold text-sm block lg:table-cell">Year</th>
            </tr>
          </thead>
          <tbody class="block lg:table-row-group">
            <?php
            // Include the database connection
            include './db.php';

            // Build the SQL query based on the filters
            $sql = "SELECT * FROM rankings WHERE 1=1"; // Base query

            // Apply filters to the query if set
            if (!empty($_GET['country'])) {
                $country = $_GET['country'];
                $sql .= " AND country = '$country'";
            }
            if (!empty($_GET['subject'])) {
                $subject = $_GET['subject'];
                $sql .= " AND subject_area = '$subject'";
            }
            if (!empty($_GET['year'])) {
                $year = $_GET['year'];
                $sql .= " AND year = '$year'";
            }
            if (!empty($_GET['qs_ranking'])) {
                $qs_ranking = $_GET['qs_ranking'];
                $sql .= " AND qs_ranking BETWEEN " . str_replace("-", " AND ", $qs_ranking);
            }

            // Execute the query
            $result = $conn->query($sql);

            // Check if there are any results
            if ($result->num_rows > 0) {
                // Output the data for each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr class='border-b block lg:table-row'>";
                    echo "<td class='p-4 text-sm block lg:table-cell'>{$row['rank']}</td>";
                    echo "<td class='p-4 text-sm block lg:table-cell'>{$row['university_name']}</td>";
                    echo "<td class='p-4 text-sm block lg:table-cell'>{$row['country']}</td>";
                    echo "<td class='p-4 text-sm block lg:table-cell'>{$row['subject_area']}</td>";
                    echo "<td class='p-4 text-sm block lg:table-cell'>{$row['year']}</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='text-center p-4'>No results found.</td></tr>";
            }

            // Close the connection
            $conn->close();
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include 'components/footer.php'; ?>

</body>
</html>
