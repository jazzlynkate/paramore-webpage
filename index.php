<?php require_once('connect.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Paramore</title>
    <link rel="stylesheet" href="./style.css" />

</head>

<body>
    <?php include('sections/header.php') ?>

    <div class="flex flex-1">
        <div class="about_info row">
            <div class="about_info-container"></div>
            <figure class="about_photo-mask">
                <img src="./assets/paramore-new.jpg" class="about_photo" alt="Group photo" />
            </figure>
            <p class="about_info-parag">
                <strong class="text-highlight">Paramore</strong> is an American rock
                band from Franklin, Tennessee, formed in 2004. The band currently
                consists of lead vocalist Hayley Williams, guitarist Taylor York and
                drummer Zac Farro. Williams and Farro are founding members of the
                group, while York, a high school friend of the original lineup, joined
                in 2007. The band is signed to Fueled by Ramen, a subsidiary of
                Atlantic Records, both owned by Warner Music Group.
            </p>
        </div>
    </div>
    <section id="_members">
        <div class="container">
            <div class="row">
                <h1 class="section title">Members</h1>
                <div class="members_list">
                    <div class="members">
                        <figure class="members_img-container">
                            <img src="./assets/member-1.jpg" alt="" class="members_img" />
                        </figure>
                        <span class="members_name">Hayley Williams</span>
                    </div>
                    <div class="members">
                        <figure class="members_img-container">
                            <img src="./assets/member-2.jpg" alt="" class="members_img" />
                        </figure>
                        <span class="members_name">Zac Farro</span>
                    </div>
                    <div class="members">
                        <figure class="members_img-container">
                            <img src="./assets/member-3.jpg" alt="" class="members_img" />
                        </figure>
                        <span class="members_name">Taylor York</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="_discography">
        <div class="container">
            <div class="row">
                <h1 class="section title">Discography</h1>
                <div class="album_list">
                    <div class="album">
                        <figure class="album_img-container">
                            <img src="./assets/album-1.jpg" alt="" class="album_img" />
                        </figure>
                        <span class="album_name">All We Know Is Falling</span>
                    </div>
                    <div class="album">
                        <figure class="album_img-container">
                            <img src="./assets/album-2.jpg" alt="" class="album_img" />
                        </figure>
                        <span class="album_name">Riot!</span>
                    </div>
                    <div class="album">
                        <figure class="album_img-container">
                            <img src="./assets/album-3.jpg" alt="" class="album_img" />
                        </figure>
                        <span class="album_name">brand new eyes</span>
                    </div>
                    <div class="album">
                        <figure class="album_img-container">
                            <img src="./assets/album-4.jpg" alt="" class="album_img" />
                        </figure>
                        <span class="album_name">Paramore</span>
                    </div>
                    <div class="album">
                        <figure class="album_img-container">
                            <img src="./assets/album-5.jpg" alt="" class="album_img" />
                        </figure>
                        <span class="album_name">After Laughter</span>
                    </div>
                    <div class="album">
                        <figure class="album_img-container">
                            <img src="./assets/album-6.jpg" alt="" class="album_img" />
                        </figure>
                        <span class="album_name">This Is Why</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="_footer">
        <div class="about_links">
            <a href="https://open.spotify.com/artist/74XFHRwlV6OrjEM0A2NCMF" class="about_link">
                <img src="./assets/spotify.png" class="logo" />
            </a>
            <a href="https://www.youtube.com/channel/UCc7_woMAIVIW2mAr1rPCsFQ" class="about_link">
                <img src="./assets/youtube.png" class="logo" />
            </a>
            <a href="https://www.twitter.com/paramore" class="about_link">
                <img src="./assets/twitter.png" class="logo" />
            </a>
            <a href="https://www.instagram.com/paramore/" class="about_link">
                <img src="./assets/instagram.png" class="logo" />
            </a>
        </div>
    </section>
</body>

</html>