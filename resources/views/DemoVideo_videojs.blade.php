<head>
  <link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <!-- <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script> -->
</head>

<body>
  <video
    id="my-video"
    class="video-js"
    controls
    preload="auto"
    width="640"
    height="264"
    poster="{{ asset('img/MY_VIDEO_POSTER.png') }}"
    data-setup="{}"
  >
    <source src="{{ asset('videos/MY_VIDEO.mp4') }}" type="video/mp4" />
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank"
        >supports HTML5 video</a
      >
    </p>
  </video>

  <script src="https://unpkg.com/video.js/dist/video.min.js"></script>
</body>