<nav>
    <div class="main_logo">
        <img src="./assets/paramore-logo.png" />
    </div>
    <ul class="nav_link-list">
        <li>
            <a href="index.php" class="nav_link-anchor link_hover-effect link_hover-effect-black">
                Home</a>
        </li>
        <li>
            <a href="./videos.php" class="nav_link-anchor link_hover-effect link_hover-effect-black">
                Videos</a>
        </li>
        <li>
            <a href="./achievements.php" class="nav_link-anchor link_hover-effect link_hover-effect-black">
                Achievements</a>
        </li>
        <li>
            <a href="./store.php" class="nav_link-anchor link_hover-effect link_hover-effect-black">
                Store</a>
        </li>
        <?php


        if ($_SESSION && isset($_SESSION['user'])) {
            echo "
             <li>
                <a href='./logout.php' class='nav_link-anchor link_hover-effect link_hover-effect-black'>
                    Log out</a>
            </li>
            ";
        } else {
            echo "
            <li>
                <a href='./register.php' class='nav_link-anchor link_hover-effect link_hover-effect-black'>
                    Register</a>
            </li>
        ";
        } ?>

    </ul>
</nav>