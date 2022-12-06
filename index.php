<?php require "misc/header.php"; ?>

<title>Gufo</title>

<body>
    <form class="search-container" action="search.php" method="get" autocomplete="off">
        <div style="margin-bottom: 2em;">
            <img style="height: 7em;" src="favicon.svg">
        </div>
        <input type="text" name="q" autofocus />
        <input type="hidden" name="p" value="0" />
        <input type="hidden" name="t" value="0" />
        <input type="submit" class="hide" />
        <div class="search-button-wrapper">
            <button name="t" value="0" type="submit">Search</button>
        </div>
    </form>

    <?php require "misc/footer.php"; ?>