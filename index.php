<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <?php include 'header.php'; ?>
        </div>
        <div>
            <?php include 'search_bar.php'; ?>
        </div>
    </header>

    <div class="sticky">
        <?php include 'nav.php'; ?>
    </div>

    <div>
        <?php include 'home_content.php'; ?>
    </div>
    <hr>
    <div>
    <?php include 'promo.php'; ?>
    </div>

    <div>
        <?php include 'features.php'; ?>
    </div>
    <div>
        <?php include 'services.php'; ?>
    </div>
    
    <div class="clr"></div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>
