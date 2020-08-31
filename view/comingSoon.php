<!doctype html>
<?php $thisPage="Coming Soon"; ?>
<html lang="en-us">

<head>
<title>Coming Soon</title>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/mcorner/common/head.php'; ?>
<style>
    .error{
        color: red;
        background-color: #F2E2D2;
        border-radius: 10px;
        padding: 1%;
    }
</style>
</head>

<body>
    <header id="page_header"> <?php include $_SERVER['DOCUMENT_ROOT'] . '/mcorner/common/header.php'; ?> </header>
    <div class="content">
    <main class='error'>
        <h1>This Feature is Coming Soon</h1>
        <p>Unfortunately we aren't quite ready for you yet.  We are making some changes and should have this up and running soon. Thank you for your patience.</p>
    </main>
    <hr class='contentHr'>
    <footer id="footer"> <?php include $_SERVER['DOCUMENT_ROOT'] . '/mcorner/common/footer.php'; ?>
        <p>Last Updated: <?php echo date('F, Y', getlastmod()) ?></p>
    </footer>
    </div>
</body>

</html>