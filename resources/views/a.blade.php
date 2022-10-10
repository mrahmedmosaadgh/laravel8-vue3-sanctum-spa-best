<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Primary Meta Tags -->
    <title>Animate.css | A cross-browser library of CSS animations.</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Animate.css | A cross-browser library of CSS animations.">
    <meta name="description" content="Animate.css is a library of ready-to-use, cross-browser animations for you to use in your projects. Great for emphasis, home pages, sliders, and attention-guiding hints.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://animate.style">
    <meta property="og:title" content="Animate.css | A cross-browser library of CSS animations.">
    <meta property="og:description" content="Animate.css is a library of ready-to-use, cross-browser animations for you to use in your projects. Great for emphasis, home pages, sliders, and attention-guiding hints.">
    <meta property="og:image" content="https://animate.style/img/animatecss-opengraph.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://animate.style">
    <meta property="twitter:title" content="Animate.css | A cross-browser library of CSS animations.">
    <meta property="twitter:description" content="Animate.css is a library of ready-to-use, cross-browser animations for you to use in your projects. Great for emphasis, home pages, sliders, and attention-guiding hints.">
    <meta property="twitter:image" content="https://animate.style/img/animatecss-opengraph.jpg">

    <!-- Favicon -->
 
 

    <link rel="dns-prefetch" href="{{asset('//fonts.googleapis.com')}}" />
    <link
      href="{{asset('https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,700;1,400&display=swap')}}"
      rel="stylesheet"
    />
    <link
      href="{{asset('animi/prism-tomorrow.min.css')}}"
      rel="stylesheet"
    />

    <!-- Fork Corner Stylesheet -->
    <!-- <link 
      href="{{asset('https://cdn.jsdelivr.net/npm/fork-corner/dist/fork-corner.min.css')}}"
      rel="stylesheet"
    /> -->
    <link 
    href="{{asset('animi/fork-corner.min.css')}}"
    rel="stylesheet"
  />
    <link rel="stylesheet" href="{{asset('animi/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('animi/style.css')}}" />
  </head>
  <body>

    <!-- Fork Corner -->
    <a href="{{asset('animi/animate.css')}}" target="_blank" id="fork-corner" class="fork-corner fc-size-small fc-pos-tl fc-animate-grow fc-theme-github"></a>
    <!-- <a href="{{asset('animi/animate.css')}}" target="_blank" id="fork-corner" class="fork-corner fc-size-small fc-pos-tl fc-animate-grow fc-theme-github"></a> -->

    <article class="intro">
      <section class="callout">
        <h1 class="callout-title">Animate.css</h1>
        <h2 class="callout-subtitle">Just-add-water CSS animations</h2>
        <p class="callout-showList">
          <button class="button button-animations">See animations</button>
        </p>
      </section>

      <section class="animation-list">
        <label for="night-light-checkbox" class="night-light-label">
          <input type="checkbox" id="night-light-checkbox" />
          <span class="night-light-ball"></span>
          <svg viewBox="0 0 512 512" class="sun-svg">
            <path id="sun-svg"
              d="M256 160c-52.9 0-96 43.1-96 96s43.1 96 96 96 96-43.1 96-96-43.1-96-96-96zm246.4 80.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.4-94.8c-6.4-12.8-24.6-12.8-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4c-12.8 6.4-12.8 24.6 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.4-33.5 47.3 94.7c6.4 12.8 24.6 12.8 31 0l47.3-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3c13-6.5 13-24.7.2-31.1zm-155.9 106c-49.9 49.9-131.1 49.9-181 0-49.9-49.9-49.9-131.1 0-181 49.9-49.9 131.1-49.9 181 0 49.9 49.9 49.9 131.1 0 181z">
            </path>
          </svg>
          <svg viewBox="0 0 512 512" class="moon-svg">
            <path id="moon-svg"
              d="M283.211 512c78.962 0 151.079-35.925 198.857-94.792 7.068-8.708-.639-21.43-11.562-19.35-124.203 23.654-238.262-71.576-238.262-196.954 0-72.222 38.662-138.635 101.498-174.394 9.686-5.512 7.25-20.197-3.756-22.23A258.156 258.156 0 0 0 283.211 0c-141.309 0-256 114.511-256 256 0 141.309 114.511 256 256 256z">
            </path>
          </svg>
        </label>
        <button class="callout-hideList button">Close list</button>
        
      <section class="attention_seekers" id="attention_seekers">
        <h3 class="animation-title">Attention seekers</h3>
        <ul class="animation-group">
    <li class="animation-item" data-animation="bounce">
      <span class="animation-item--title">bounce</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="flash">
      <span class="animation-item--title">flash</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="pulse">
      <span class="animation-item--title">pulse</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="rubberBand">
      <span class="animation-item--title">rubberBand</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="shakeX">
      <span class="animation-item--title">shakeX</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="shakeY">
      <span class="animation-item--title">shakeY</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="headShake">
      <span class="animation-item--title">headShake</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="swing">
      <span class="animation-item--title">swing</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="tada">
      <span class="animation-item--title">tada</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="wobble">
      <span class="animation-item--title">wobble</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="jello">
      <span class="animation-item--title">jello</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="heartBeat">
      <span class="animation-item--title">heartBeat</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li></ul>
      </section>
    

      <section class="back_entrances" id="back_entrances">
        <h3 class="animation-title">Back entrances</h3>
        <ul class="animation-group">
    <li class="animation-item" data-animation="backInDown">
      <span class="animation-item--title">backInDown</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="backInLeft">
      <span class="animation-item--title">backInLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="backInRight">
      <span class="animation-item--title">backInRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="backInUp">
      <span class="animation-item--title">backInUp</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li></ul>
      </section>
    

      <section class="back_exits" id="back_exits">
        <h3 class="animation-title">Back exits</h3>
        <ul class="animation-group">
    <li class="animation-item" data-animation="backOutDown">
      <span class="animation-item--title">backOutDown</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="backOutLeft">
      <span class="animation-item--title">backOutLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="backOutRight">
      <span class="animation-item--title">backOutRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="backOutUp">
      <span class="animation-item--title">backOutUp</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li></ul>
      </section>
    

      <section class="bouncing_entrances" id="bouncing_entrances">
        <h3 class="animation-title">Bouncing entrances</h3>
        <ul class="animation-group">
    <li class="animation-item" data-animation="bounceIn">
      <span class="animation-item--title">bounceIn</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="bounceInDown">
      <span class="animation-item--title">bounceInDown</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="bounceInLeft">
      <span class="animation-item--title">bounceInLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="bounceInRight">
      <span class="animation-item--title">bounceInRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="bounceInUp">
      <span class="animation-item--title">bounceInUp</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li></ul>
      </section>
    

      <section class="bouncing_exits" id="bouncing_exits">
        <h3 class="animation-title">Bouncing exits</h3>
        <ul class="animation-group">
    <li class="animation-item" data-animation="bounceOut">
      <span class="animation-item--title">bounceOut</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="bounceOutDown">
      <span class="animation-item--title">bounceOutDown</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="bounceOutLeft">
      <span class="animation-item--title">bounceOutLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="bounceOutRight">
      <span class="animation-item--title">bounceOutRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="bounceOutUp">
      <span class="animation-item--title">bounceOutUp</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li></ul>
      </section>
    

      <section class="fading_entrances" id="fading_entrances">
        <h3 class="animation-title">Fading entrances</h3>
        <ul class="animation-group">
    <li class="animation-item" data-animation="fadeIn">
      <span class="animation-item--title">fadeIn</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeInDown">
      <span class="animation-item--title">fadeInDown</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeInDownBig">
      <span class="animation-item--title">fadeInDownBig</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeInLeft">
      <span class="animation-item--title">fadeInLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeInLeftBig">
      <span class="animation-item--title">fadeInLeftBig</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeInRight">
      <span class="animation-item--title">fadeInRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeInRightBig">
      <span class="animation-item--title">fadeInRightBig</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeInUp">
      <span class="animation-item--title">fadeInUp</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeInUpBig">
      <span class="animation-item--title">fadeInUpBig</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeInTopLeft">
      <span class="animation-item--title">fadeInTopLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeInTopRight">
      <span class="animation-item--title">fadeInTopRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeInBottomLeft">
      <span class="animation-item--title">fadeInBottomLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeInBottomRight">
      <span class="animation-item--title">fadeInBottomRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li></ul>
      </section>
    

      <section class="fading_exits" id="fading_exits">
        <h3 class="animation-title">Fading exits</h3>
        <ul class="animation-group">
    <li class="animation-item" data-animation="fadeOut">
      <span class="animation-item--title">fadeOut</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeOutDown">
      <span class="animation-item--title">fadeOutDown</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeOutDownBig">
      <span class="animation-item--title">fadeOutDownBig</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeOutLeft">
      <span class="animation-item--title">fadeOutLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeOutLeftBig">
      <span class="animation-item--title">fadeOutLeftBig</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeOutRight">
      <span class="animation-item--title">fadeOutRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeOutRightBig">
      <span class="animation-item--title">fadeOutRightBig</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeOutUp">
      <span class="animation-item--title">fadeOutUp</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeOutUpBig">
      <span class="animation-item--title">fadeOutUpBig</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeOutTopLeft">
      <span class="animation-item--title">fadeOutTopLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeOutTopRight">
      <span class="animation-item--title">fadeOutTopRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeOutBottomRight">
      <span class="animation-item--title">fadeOutBottomRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="fadeOutBottomLeft">
      <span class="animation-item--title">fadeOutBottomLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li></ul>
      </section>
    

      <section class="flippers" id="flippers">
        <h3 class="animation-title">Flippers</h3>
        <ul class="animation-group">
    <li class="animation-item" data-animation="flip">
      <span class="animation-item--title">flip</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="flipInX">
      <span class="animation-item--title">flipInX</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="flipInY">
      <span class="animation-item--title">flipInY</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="flipOutX">
      <span class="animation-item--title">flipOutX</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="flipOutY">
      <span class="animation-item--title">flipOutY</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li></ul>
      </section>
    

      <section class="lightspeed" id="lightspeed">
        <h3 class="animation-title">Lightspeed</h3>
        <ul class="animation-group">
    <li class="animation-item" data-animation="lightSpeedInRight">
      <span class="animation-item--title">lightSpeedInRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="lightSpeedInLeft">
      <span class="animation-item--title">lightSpeedInLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="lightSpeedOutRight">
      <span class="animation-item--title">lightSpeedOutRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="lightSpeedOutLeft">
      <span class="animation-item--title">lightSpeedOutLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li></ul>
      </section>
    

      <section class="rotating_entrances" id="rotating_entrances">
        <h3 class="animation-title">Rotating entrances</h3>
        <ul class="animation-group">
    <li class="animation-item" data-animation="rotateIn">
      <span class="animation-item--title">rotateIn</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="rotateInDownLeft">
      <span class="animation-item--title">rotateInDownLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="rotateInDownRight">
      <span class="animation-item--title">rotateInDownRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="rotateInUpLeft">
      <span class="animation-item--title">rotateInUpLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="rotateInUpRight">
      <span class="animation-item--title">rotateInUpRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li></ul>
      </section>
    

      <section class="rotating_exits" id="rotating_exits">
        <h3 class="animation-title">Rotating exits</h3>
        <ul class="animation-group">
    <li class="animation-item" data-animation="rotateOut">
      <span class="animation-item--title">rotateOut</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="rotateOutDownLeft">
      <span class="animation-item--title">rotateOutDownLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="rotateOutDownRight">
      <span class="animation-item--title">rotateOutDownRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="rotateOutUpLeft">
      <span class="animation-item--title">rotateOutUpLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="rotateOutUpRight">
      <span class="animation-item--title">rotateOutUpRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li></ul>
      </section>
    

      <section class="specials" id="specials">
        <h3 class="animation-title">Specials</h3>
        <ul class="animation-group">
    <li class="animation-item" data-animation="hinge">
      <span class="animation-item--title">hinge</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="jackInTheBox">
      <span class="animation-item--title">jackInTheBox</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="rollIn">
      <span class="animation-item--title">rollIn</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="rollOut">
      <span class="animation-item--title">rollOut</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li></ul>
      </section>
    

      <section class="zooming_entrances" id="zooming_entrances">
        <h3 class="animation-title">Zooming entrances</h3>
        <ul class="animation-group">
    <li class="animation-item" data-animation="zoomIn">
      <span class="animation-item--title">zoomIn</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="zoomInDown">
      <span class="animation-item--title">zoomInDown</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="zoomInLeft">
      <span class="animation-item--title">zoomInLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="zoomInRight">
      <span class="animation-item--title">zoomInRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="zoomInUp">
      <span class="animation-item--title">zoomInUp</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li></ul>
      </section>
    

      <section class="zooming_exits" id="zooming_exits">
        <h3 class="animation-title">Zooming exits</h3>
        <ul class="animation-group">
    <li class="animation-item" data-animation="zoomOut">
      <span class="animation-item--title">zoomOut</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="zoomOutDown">
      <span class="animation-item--title">zoomOutDown</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="zoomOutLeft">
      <span class="animation-item--title">zoomOutLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="zoomOutRight">
      <span class="animation-item--title">zoomOutRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="zoomOutUp">
      <span class="animation-item--title">zoomOutUp</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li></ul>
      </section>
    

      <section class="sliding_entrances" id="sliding_entrances">
        <h3 class="animation-title">Sliding entrances</h3>
        <ul class="animation-group">
    <li class="animation-item" data-animation="slideInDown">
      <span class="animation-item--title">slideInDown</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="slideInLeft">
      <span class="animation-item--title">slideInLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="slideInRight">
      <span class="animation-item--title">slideInRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="slideInUp">
      <span class="animation-item--title">slideInUp</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li></ul>
      </section>
    

      <section class="sliding_exits" id="sliding_exits">
        <h3 class="animation-title">Sliding exits</h3>
        <ul class="animation-group">
    <li class="animation-item" data-animation="slideOutDown">
      <span class="animation-item--title">slideOutDown</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="slideOutLeft">
      <span class="animation-item--title">slideOutLeft</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="slideOutRight">
      <span class="animation-item--title">slideOutRight</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li>

    <li class="animation-item" data-animation="slideOutUp">
      <span class="animation-item--title">slideOutUp</span>
      <button class="copy-icon" type="button">
        <span class="tooltip">Copy class name to clipboard</span>
      </button>
    </li></ul>
      </section>
    
      </section>

      <footer class="intro-footer">
 
      </footer>
    </article>

    <main>
      <header class="docs-header">
        <div class="container">
          <h2 class="docs-mainTitle">
            
          </h2>
        </div>
      </header>

      <article class="docs" id="documentation">
        <span class="hamburger">
          <svg
            width="23"
            height="15"
            viewBox="0 0 23 15"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <line y1="1.5" x2="23" y2="1.5" stroke="#351C75" stroke-width="3" />
            <line y1="7.5" x2="23" y2="7.5" stroke="#351C75" stroke-width="3" />
            <line y1="13.5" x2="23" y2="13.5" stroke="#351C75" stroke-width="3" />
          </svg>
        </span>
        <div class="container">
          <div class="content">
            
      <section class="docSection-intro" id="intro">
        <blockquote>
 
      <section class="docSection-usage" id="usage">
        <h2>Installation and Usage</h2>
<h3>Installing</h3>
<p>Install with npm:</p>
<pre><code class="language-shell">$ npm install animate.css --save
</code></pre>
<p>Or install with Yarn (this will only work with appropriate tooling like Webpack, Parcel, etc. If you are not using any tool for packing or bundling your code, you can simply use the CDN method below):</p>
<pre><code class="language-shell">$ yarn add animate.css
</code></pre>
<p>Import it into your file:</p>
<pre><code class="language-js">import 'animate.css';
</code></pre>
<p>Or add it directly to your webpage using a CDN:</p>
<pre><code class="language-html">&lt;head&gt;
  &lt;link
    rel=&quot;stylesheet&quot;
    href=&quot;animate.min.css&quot;
  /&gt;
&lt;/head&gt;
</code></pre>
 
  
   
          </div>
          <aside class="sidebar">
            <div class="meta">
              <a href="{{asset('animate.css')}}" target="_blank" class="icon-github">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 18 18"
                  width="18"
                  height="18"
                >
                  <path
                    fill="#000000"
                    d="M16.793 4.703a8.96 8.96 0 00-3.276-3.276A8.803 8.803 0 009 .22a8.804 8.804 0 00-4.518 1.207 8.96 8.96 0 00-3.275 3.276A8.803 8.803 0 000 9.22c0 1.96.572 3.724 1.717 5.29 1.144 1.567 2.623 2.651 4.435 3.252.211.04.367.012.469-.081a.458.458 0 00.152-.352l-.006-.633c-.004-.398-.006-.746-.006-1.042l-.27.046a3.434 3.434 0 01-.65.041 4.958 4.958 0 01-.814-.082 1.82 1.82 0 01-.785-.351 1.487 1.487 0 01-.516-.72l-.117-.27a2.93 2.93 0 00-.369-.598c-.168-.219-.338-.367-.51-.445l-.082-.059a.865.865 0 01-.152-.14.643.643 0 01-.105-.165c-.024-.054-.004-.1.058-.135.063-.035.176-.052.34-.052l.234.035c.157.031.35.125.58.281.23.156.42.36.569.61.18.32.396.564.65.732.254.168.51.252.768.252.257 0 .48-.02.667-.059a2.33 2.33 0 00.528-.175c.07-.524.262-.927.574-1.208a8.026 8.026 0 01-1.201-.21 4.779 4.779 0 01-1.102-.458 3.153 3.153 0 01-.943-.785c-.25-.312-.455-.723-.615-1.23-.16-.508-.24-1.094-.24-1.758 0-.946.308-1.75.925-2.414-.289-.711-.261-1.508.082-2.39.227-.071.563-.018 1.008.157.446.176.772.327.979.452.207.125.373.23.498.316A8.32 8.32 0 019 4.568c.773 0 1.523.101 2.25.304l.445-.281c.305-.188.664-.36 1.078-.516.414-.156.73-.199.95-.129.351.883.382 1.68.093 2.39.617.665.926 1.47.926 2.415 0 .664-.08 1.252-.24 1.764-.16.511-.367.921-.62 1.23-.255.309-.572.569-.95.78-.38.21-.747.362-1.102.456a8.013 8.013 0 01-1.201.212c.406.351.61.906.61 1.664v2.472c0 .14.048.258.146.351.097.094.252.121.463.082 1.812-.601 3.29-1.685 4.435-3.252C17.427 12.944 18 11.18 18 9.22a8.81 8.81 0 00-1.207-4.517z"
                  />
                </svg>
              </a>
              <span class="animate-version">v4.1.1</span>
            </div>
          </aside>
        </div>
      </article>
    </main>

    <footer class="main-footer">
   
    </footer>

 
    <script type="module" src="{{asset('animi/main.js')}}"></script>
    <script src="{{asset('animi/prism.min.js')}}"></script>
    <script src="{{asset('animi/prism-autoloader.min.js')}}"></script>

    <!-- Fork Corner Scripts -->
    <script src="{{asset('animi/fork-corner.min.js')}}" defer></script>
  </body>
</html>
