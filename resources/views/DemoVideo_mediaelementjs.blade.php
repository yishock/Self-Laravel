<head>
    <!-- Import Mediaelement CSS -->
    <link href="https://cdn.jsdelivr.net/npm/mediaelement@latest/build/mediaelementplayer.min.css" rel="stylesheet">
    <!-- Import Mediaelement JS -->
    <script src="https://cdn.jsdelivr.net/npm/mediaelement@latest/build/mediaelement-and-player.min.js"></script>

</head>

<body>


     <p>這一個套件要把他的套件權安裝下來 才有完整功能</p>
    <video id="player" playsinline controls data-poster="{{ asset('img/MY_VIDEO_POSTER.png') }}">
      <source src="{{ asset('videos/MY_VIDEO.mp4') }}" type="video/mp4" />
      <!-- Captions are optional -->
      <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
    </video>

    <script>
        // You can use either a string for the player ID (i.e., `player`), 
        // or `document.querySelector()` for any selector
        const playerCaptions = new MediaElementPlayer('player', {
            iconSprite: '/images/mejs-controls.svg', // path to svg-spritemap for all icons
        });
    </script>
</body>