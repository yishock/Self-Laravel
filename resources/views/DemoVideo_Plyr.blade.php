<head>
  <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <!-- <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script> -->
</head>

<body>

    <video id="player" playsinline controls data-poster="{{ asset('img/MY_VIDEO_POSTER.png') }}">
      <source src="{{ asset('videos/MY_VIDEO.mp4') }}" type="video/mp4" />
      <!-- Captions are optional -->
      <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
    </video>

  <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
  <script>
  const player = new Plyr('#player');
</script>
</body>