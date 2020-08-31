<h1 class="logo">Lindy's Corner</h1>
<nav>
    <ul id="navList">
        <li <?php if ($thisPage == "Home")echo " id=\"currentpage\""; ?>>
            <a href="/mcorner/">Home</a>
        </li>
        <li <?php if ($thisPage == "About Me")echo " id=\"currentpage\""; ?>>
            <a href="/mcorner/?action=aboutMe">About Me</a>
        </li>
    </ul>
</nav>
<hr>