<!DOCTYPE html>
<?php $thisPage = "Home"; ?>
<html lang="en">

<head>
    <title>Melinda's Corner</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/mcorner/common/head.php'; ?>

</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/mcorner/common/header.php'; ?>
    </header>
    <div class="content">
        <div class="grid">
            <h2 id="bookTitle">Be the Best You Can Be</h2>
            <div id="ctaButton">
                <a href="/mcorner/?action=comingSoon">
                    <h3 id='callToAction'>Purchase Available Soon</h3>
                </a>
            </div>
            <img id="book" src="pics/small_book_pic.jpg" alt="Front Cover of Book">
            <div id="author">
                <p id="profession">Author and Illustrator:</p>
                <h2 id="authorName">Melinda B. Hicks</h2>
            </div>
            <div class="text">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
        </div>

        <hr class="contentHr">
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/mcorner/common/footer.php'; ?>
        </footer>
    </div>
</body>

</html>