<head>
</head>

<body>

    <video id="player" playsinline controls data-poster="{{ asset('img/MY_VIDEO_POSTER.png') }}">
      <source src="{{ asset('videos/MY_VIDEO.mp4') }}" type="video/mp4" />
      <!-- Captions are optional -->
      <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
    </video>

</body>