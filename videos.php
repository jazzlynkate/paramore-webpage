<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Videos</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <?php include('sections/header.php') ?>
    <section id="_videos">
        <div class="container">
            <div class="videos_list">
                <!-- <div
            class="video_preview"
            style="
              background-image: url('https://i.ytimg.com/vi/cW5ueE2vUm0/hqdefault.jpg');
              background-size: cover;
              background-position: center;
            "
          >
            <div class="video_preview_title">Rose-Colored Boy</div>
          </div> -->
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

    <div class="float_container">
        <div class="video_play">
            <iframe width="100%" height="100%" id="video_iframe" src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe>
        </div>
    </div>
</body>

<script>
const videos = [{
        title: "Pressure",
        thumbnailUrl: "https://i.ytimg.com/vi/y-MaaxgdUT4/maxresdefault.jpg",
        videoUrl: "https://youtu.be/GRgdJ-_8r9M",
    },
    {
        title: "Emergency",
        thumbnailUrl: "https://i.ytimg.com/vi/mgJ8BZi3vTA/maxresdefault.jpg",
        videoUrl: "https://youtu.be/mgJ8BZi3vTA",
    },
    {
        title: "All We Know",
        thumbnailUrl: "https://i.ytimg.com/vi/4EHIpDcZvB0/hqdefault.jpg",
        videoUrl: "https://youtu.be/4EHIpDcZvB0",
    },
    {
        title: "Misery Business",
        thumbnailUrl: "https://i.ytimg.com/vi/aCyGvGEtOwc/maxresdefault.jpg",
        videoUrl: "https://youtu.be/aCyGvGEtOwc",
    },
    {
        title: "Hallelujah",
        thumbnailUrl: "https://i.ytimg.com/vi/_TYlOXVdVcQ/hqdefault.jpg",
        videoUrl: "https://youtu.be/_TYlOXVdVcQ",
    },
    {
        title: "crushcrushcrush",
        thumbnailUrl: "https://i.ytimg.com/vi/ei8hPkyJ0bU/maxresdefault.jpg",
        videoUrl: "https://youtu.be/ei8hPkyJ0bU",
    },
    {
        title: "That's What You Get",
        thumbnailUrl: "https://i.ytimg.com/vi/1kz6hNDlEEg/maxresdefault.jpg",
        videoUrl: "https://youtu.be/1kz6hNDlEEg",
    },
    {
        title: "Decode",
        thumbnailUrl: "https://i.ytimg.com/vi/RvnkAtWcKYg/maxresdefault.jpg",
        videoUrl: "https://youtu.be/RvnkAtWcKYg",
    },
    {
        title: "Ignorance",
        thumbnailUrl: "https://i.ytimg.com/vi/OH9A6tn_P6g/maxresdefault.jpg",
        videoUrl: "https://youtu.be/OH9A6tn_P6g",
    },
    {
        title: "Brick By Boring Brick",
        thumbnailUrl: "https://i.ytimg.com/vi/A63VwWz1ij0/maxresdefault.jpg",
        videoUrl: "https://youtu.be/A63VwWz1ij0",
    },
    {
        title: "The Only Exception",
        thumbnailUrl: "https://i.ytimg.com/vi/-J7J_IWUhls/maxresdefault.jpg",
        videoUrl: "https://youtu.be/-J7J_IWUhls",
    },
    {
        title: "Now",
        thumbnailUrl: "https://i.ytimg.com/vi/G133kjKy91U/maxresdefault.jpg",
        videoUrl: "https://youtu.be/G133kjKy91U",
    },
    {
        title: "Still Into You",
        thumbnailUrl: "https://i.ytimg.com/vi/OblL026SvD4/maxresdefault.jpg",
        videoUrl: "https://youtu.be/OblL026SvD4",
    },
    {
        title: "Anklebiters",
        thumbnailUrl: "https://i.ytimg.com/vi/4CWhPozi7Kg/maxresdefault.jpg",
        videoUrl: "https://youtu.be/4CWhPozi7Kg",
    },
    {
        title: "Daydreaming",
        thumbnailUrl: "https://i.ytimg.com/vi/euxXBvdrzxQ/maxresdefault.jpg",
        videoUrl: "https://youtu.be/euxXBvdrzxQ",
    },
    {
        title: "Ain't It Fun",
        thumbnailUrl: "https://i.ytimg.com/vi/EFEmTsfFL5A/maxresdefault.jpg",
        videoUrl: "https://youtu.be/EFEmTsfFL5A",
    },
    {
        title: "Hate To See Your Heart Break ft. Joy Williams",
        thumbnailUrl: "https://i.ytimg.com/vi/QZweyIKNwX4/hqdefault.jpg",
        videoUrl: "https://youtu.be/QZweyIKNwX4",
    },
    {
        title: "Hard Times",
        thumbnailUrl: "https://i.ytimg.com/vi/AEB6ibtdPZc/maxresdefault.jpg",
        videoUrl: "https://youtu.be/AEB6ibtdPZc",
    },
    {
        title: "Told You So",
        thumbnailUrl: "https://i.ytimg.com/vi/yw-RPm1uOM4/maxresdefault.jpg",
        videoUrl: "https://youtu.be/yw-RPm1uOM4",
    },
    {
        title: "Fake Happy",
        thumbnailUrl: "https://i.ytimg.com/vi/w8vsuOXZBXc/maxresdefault.jpg",
        videoUrl: "https://youtu.be/w8vsuOXZBXc",
    },
    {
        title: "Rose-Colored Boy",
        thumbnailUrl: "https://i.ytimg.com/vi/cW5ueE2vUm0/hqdefault.jpg",
        videoUrl: "https://youtu.be/cW5ueE2vUm0",
    },
    {
        title: "Caught In The Middle",
        thumbnailUrl: "https://i.ytimg.com/vi/eFOY6KJlFEg/maxresdefault.jpg",
        videoUrl: "https://youtu.be/eFOY6KJlFEg",
    },
    {
        title: "This Is Why",
        thumbnailUrl: "https://i.ytimg.com/vi/xIYJ7VaSxYY/maxresdefault.jpg",
        videoUrl: "https://youtu.be/xIYJ7VaSxYY",
    },
];

const videoListElement = document.querySelector(".videos_list");

videos.forEach((video) => {
    const videoPreview = document.createElement("div");
    videoPreview.className = "video_preview";
    videoPreview.style = `background-image: url('${video.thumbnailUrl}');`;

    const videoPreviewTitle = document.createElement("div");
    videoPreviewTitle.className = "video_preview_title";
    videoPreviewTitle.innerHTML = video.title;

    videoPreview.onclick = () => {
        const videoId = video.videoUrl.split("/")[3];

        document.querySelector(".float_container").classList.add("visible");
        document.getElementById(
            "video_iframe"
        ).src = `https://www.youtube.com/embed/${videoId}`;
    };

    videoPreview.appendChild(videoPreviewTitle);
    videoListElement.appendChild(videoPreview);
});

document.querySelector(".float_container").onclick = function() {
    this.className = "float_container";
};
</script>

</html>