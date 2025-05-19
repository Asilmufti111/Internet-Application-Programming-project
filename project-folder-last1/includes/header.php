<?php
// Default page title and description if not set
$page_title = isset($page_title) ? $page_title : 'Al-Noor Islamic Center';
$page_description = isset($page_description) ? $page_description : '';
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo htmlspecialchars($page_title); ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="../global/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<body>
    <div id="header">
        <img src="../images/logo.png" alt="Al-Noor Logo" class="logo" style="max-height: 70px; vertical-align: middle; margin-right: 10px;" />
        <h1 style="display: inline-block; vertical-align: middle;"><?php echo htmlspecialchars($page_title); ?></h1>
        <?php if ($page_description): ?>
            <p style="text-align: center;"><?php echo htmlspecialchars($page_description); ?></p>
        <?php endif; ?>
    </div>
   