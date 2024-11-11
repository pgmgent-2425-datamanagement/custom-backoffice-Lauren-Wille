<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ($title ?? '') . ' ' . $_ENV['SITE_NAME'] ?></title>
    <link rel="stylesheet" href="/css/main.css?v=<?php if( $_ENV['DEV_MODE'] == "true" ) { echo time(); }; ?>">
</head>
<body>

    <header>
        <div class="brand">Back office</div>

        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/games">Games</a></li>
                <li><a href="/users">Users</a></li>
                <li><a href="/publishers">Publishers</a></li>
                <li><a href="/filemanager">Filemanager</a></li>
            </ul>
        </nav>
    </header> 

    <main>
        <?= $content; ?>
    </main>
    
    <footer>
        &copy; <?= date('Y'); ?> - Backoffice
    </footer>
</body>
</html>