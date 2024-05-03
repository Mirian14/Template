<header>
    <div id="logo"></div>
    <div class="nav">
        <nav class="navheader">
            <?php
            $link = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
            echo ($link == 'index' ? '<a href="home.php" class="link active" >Home</a>' : '<a href="home.php" class="link">Home</a>');
            echo ($link == 'introduction' ? '<a href="introduction.php" class="link active" >Introduction</a>' : '<a href="introduction.php" class="link">Introduction</a>');
            echo ($link == 'contract' ? '<a href="contract.php" class="link active" >Contract</a>' : '<a href="contract.php" class="link">Contract</a>');
            echo ($link == 'brand' ? '<a href="brand.php" class="link active" >Brand</a>' : '<a href="brand.php" class="link">Brand</a>');
            ?>
        </nav>
        <div class="title-main">
            <h1>Mirian Carvalho's Makeup Carmelia |WEB 250</h1>
        </div>
    </div>
</header>
