<!doctype html>
<html lang="en-us">

<head>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/mcorner/common/head.php'; ?>
<style>
    .error{
        color: red;
    }
    .follow {
        color: black;
    }
</style>
</head>

<body>
    <header id="page_header"> <?php include $_SERVER['DOCUMENT_ROOT'] . '/mcorner/common/header.php'; ?> </header>
    <main class='error'>
        <h1>Server Error</h1>
        <p>Sorry, the server experienced a problem.</p>
    </main>
    <footer id="footer"> <?php include $_SERVER['DOCUMENT_ROOT'] . '/mcorner/common/footer.php'; ?>
        <p>Last Updated: <?php echo date('F, Y', getlastmod()) ?></p>
    </footer>
</body>

</html>