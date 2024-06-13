<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include('header.php')?>
    
    </header>
    <main>
    
    <section>
        <h2>ČINJENICE SVIJETA</h2>
        <?php include("WorldSummary.php")?>
    </section>
    <section>
        <h2>ČINJENICE EUROPE</h2>
        <?php include("EuropeSummary.php")?>
    </section>

    </main>


</body>
</html>
