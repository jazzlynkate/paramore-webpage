<?php require_once('connect.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Achievements</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <?php include('sections/header.php') ?>
    <div class="slider-parent">
        <div class="CSSgal">

            <!-- Don't wrap targets in parent -->
            <s id="s1"></s>
            <s id="s2"></s>
            <s id="s3"></s>
            <s id="s4"></s>

            <div class="slider">
                <div class="image1">
                    <img src="./assets/awards/award1.jpg" alt="" />
                </div>
                <span class="members_name">Hayley Williams</span>
                <div class="image1">
                    <img src="./assets/awards/award2.jpg" alt="" />
                    <span class="members_name">Hayley Williams</span>
                </div>
                <div class="image1">
                    <img src="./assets/awards/award3.jpg" alt="" />
                    <span class="members_name">Hayley Williams</span>
                </div>
                <div class="image1">
                    <img src="./assets/awards/award4.jpg" alt="" />
                    <span class="members_name">Hayley Williams</span>
                </div>
            </div>

            <div class="prevNext">
                <div><a href="#s4"></a><a href="#s2"></a></div>
                <div><a href="#s1"></a><a href="#s3"></a></div>
                <div><a href="#s2"></a><a href="#s4"></a></div>
                <div><a href="#s3"></a><a href="#s1"></a></div>
            </div>

            <div class="bullets">
                <a href="#s1">1</a>
                <a href="#s2">2</a>
                <a href="#s3">3</a>
                <a href="#s4">4</a>
            </div>

        </div>
    </div>
    <div class="achievements">
        <table class="content">
            <thead>
                <tr>
                    <th>Award</th>
                    <th>Year</th>
                    <th>Nominee/Work</th>
                    <th>Category</th>
                    <th>Results</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Alternative Press Music Award</td>
                    <td>2014</td>
                    <td>Paramore</td>
                    <td>Artist of the Year</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Alternative Press Music Award</td>
                    <td>2014</td>
                    <td>"Still Into You"</td>
                    <td>Song of the Year</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Alternative Press Music Award</td>
                    <td>2014</td>
                    <td>Hayley Williams</td>
                    <td>Best Vocalist</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Alternative Press Music Award</td>
                    <td>2014</td>
                    <td>Jeremy Davis</td>
                    <td>Best Bassist</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Alternative Press Music Award</td>
                    <td>2015</td>
                    <td>Paramore</td>
                    <td>Best Live Band</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Alternative Press Music Award</td>
                    <td>2015</td>
                    <td>Paramore</td>
                    <td>Most Dedicated Fans</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Alternative Press Music Award</td>
                    <td>2015</td>
                    <td>Hayley Williams</td>
                    <td>Best Vocalist</td>
                    <td>Won</td>
                </tr>
                <tr>
                    <td>American Music Award</td>
                    <td>2008</td>
                    <td>Paramore</td>
                    <td>New Artist of the Year</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Billboard Music Awards</td>
                    <td>2015</td>
                    <td>"Ain't It Fun"</td>
                    <td>Top Rock Song</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Grammy Award</td>
                    <td>2008</td>
                    <td>Paramore</td>
                    <td>Best New Artist</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Grammy Award</td>
                    <td>2010</td>
                    <td>"Decode"</td>
                    <td>Best Song Written for a Motion Picture, Television or Other Visual Media</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Grammy Award</td>
                    <td>2011</td>
                    <td>"The Only Exception"</td>
                    <td>Best Pop Performance by a Duo or Group with Vocals</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Grammy Award</td>
                    <td>2015</td>
                    <td>"Ain't It Fun"</td>
                    <td>Best Rock Song</td>
                    <td>Won</td>
                </tr>
                <tr>
                    <td>International Dance Music Award</td>
                    <td>2014</td>
                    <td>"Ain't It Fun"</td>
                    <td>Best Alternative/Indie Rock Dance Track</td>
                    <td>Won</td>
                </tr>
                <tr>
                    <td>Kerrang! Award</td>
                    <td>2010</td>
                    <td>Paramore</td>
                    <td>Best Live Band</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Kerrang! Award</td>
                    <td>2010</td>
                    <td>Paramore</td>
                    <td>Best International Band</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Kerrang! Award</td>
                    <td>2010</td>
                    <td>Brand New Eyes</td>
                    <td>Best Album</td>
                    <td>Won</td>
                </tr>
                <tr>
                    <td>Kerrang! Award</td>
                    <td>2012</td>
                    <td>"Monster"</td>
                    <td>Best Video</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Kerrang! Award</td>
                    <td>2012</td>
                    <td>Hayley Williams</td>
                    <td>Hottest Female Artist</td>
                    <td>Won</td>
                </tr>
                <tr>
                    <td>Kerrang! Award</td>
                    <td>2013</td>
                    <td>"Now"</td>
                    <td>Best Video</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Kerrang! Award</td>
                    <td>2013</td>
                    <td>"Now"</td>
                    <td>Best Single</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Los Premios MTV Latinoamérica</td>
                    <td>2008</td>
                    <td>Paramore</td>
                    <td>Best New Artist — International</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Los Premios MTV Latinoamérica</td>
                    <td>2008</td>
                    <td>Paramore</td>
                    <td>Best Rock Artist — International</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>Los Premios MTV Latinoamérica</td>
                    <td>2009</td>
                    <td>Hayley Williams</td>
                    <td>Fashionista — Female</td>
                    <td>Won</td>
                </tr>
                <tr>
                    <td>MTV Australia Award</td>
                    <td>2009</td>
                    <td>"Decode"</td>
                    <td>Best Rock Video</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>MTV Europe Music Award</td>
                    <td>2008</td>
                    <td>Paramore</td>
                    <td>Best Rock</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>MTV Europe Music Award</td>
                    <td>2009</td>
                    <td>Paramore</td>
                    <td>Best Alternative Rock</td>
                    <td>Nominated</td>
                </tr>
                <tr>
                    <td>MTV Europe Music Award</td>
                    <td>2010</td>
                    <td>Paramore</td>
                    <td>Best Alternative Rock</td>
                    <td>Won</td>
                </tr>
            </tbody>
        </table>
    </div>

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