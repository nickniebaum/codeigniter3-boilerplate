<?php echo doctype('html5') ?>
<html lang="en">
<head>
    <?php echo $yield_head ?>
</head>
<body>
    <header>
        <h1><?php echo $app_title ?></h1>
    </header>
    <main>
        <?php echo $yield ?>
    </main>
    <?php echo $yield_foot ?>
</body>
</html>