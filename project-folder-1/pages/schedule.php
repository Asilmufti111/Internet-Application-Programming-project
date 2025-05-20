<!-- 
    Names: Asil Mufti, Hayat Alzahrani, Shrooq Kaabi
    IDs: 2106122, 2105101, 2205003
    Section: IAR
    Date: 22-03-2025
-->
    <?php
$page_title = "Prayer Schedule";
$page_description = "Stay updated with the daily prayer timings.";
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Prayer Schedule - Al-Noor</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../global/main.css">
    <link rel="stylesheet" href="../global/print.css" media="print">
</head>
<body>

    <!-- Include Header & Navigation -->
    <?php include "../includes/header.php"; ?>
    <?php include "../includes/links.php"; ?>

    <!-- Content Section -->
    <div id="content">
        <h2>Today's Prayer Timings</h2>

        <!-- City Dropdown -->
        <div id="city-container">
            <label for="city">Select City:</label>
            <select id="city">
                <option value="Jeddah">Jeddah</option>
                <option value="Makkah">Makkah</option>
                <option value="Riyadh" selected>Riyadh</option>
                <option value="Dammam">Dammam</option>
                <option value="Medina">Medina</option>
                <option value="Abha">Abha</option>
                <option value="Tabuk">Tabuk</option>
                <option value="Hail">Hail</option>
                <option value="Al Khobar">Al Khobar</option>
                <option value="Al Baha">Al Baha</option>
            </select>
        </div>

        <!-- Prayer Times Table -->
        <table id="schedule-table">
            <thead>
                <tr>
                    <th colspan="3">Daily Prayer Schedule</th>
                </tr>
                <tr>
                    <th>Recitation</th>
                    <th>Prayer</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody id="schedule-body">
                <!-- JS will inject rows here -->
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" style="text-align:center; font-style:italic;">
                        NOTE: Times are based on your selected city.
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- Include Footer -->
    <?php include "../includes/footer.php"; ?>

    <!-- JavaScript -->
    <script src="../scripts/prayer-times.js"></script>

</body>
</html>
