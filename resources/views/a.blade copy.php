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
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <link
      href="prism-tomorrow.min.css"
      rel="stylesheet"
    />

    <!-- Fork Corner Stylesheet -->
    <!-- <link 
      href="https://cdn.jsdelivr.net/npm/fork-corner/dist/fork-corner.min.css"
      rel="stylesheet"
    /> -->
    <link 
    href="fork-corner.min.css"
    rel="stylesheet"
  />
    <link rel="stylesheet" href="animate.min.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

    <!-- Fork Corner -->
    <a href="animate.css" target="_blank" id="fork-corner" class="fork-corner fc-size-small fc-pos-tl fc-animate-grow fc-theme-github"></a>
    <!-- <a href="animate.css" target="_blank" id="fork-corner" class="fork-corner fc-size-small fc-pos-tl fc-animate-grow fc-theme-github"></a> -->

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
        <p>
          Another thing from
          <a href="https://daneden.me" target="_blank" title="Daniel Eden">Daniel Eden</a> and
          <a href="#contributors" title="Contributors">friends</a>
        </p>
      </footer>
    </article>

    <main>
      <header class="docs-header">
        <div class="container">
          <h2 class="docs-mainTitle">
            <a href="#documentation" title="Documentation">Documentation</a>
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
<p>Animate.css v4 brought some <strong>breaking changes</strong>, please refer to the <a href="#migration">migration guide</a> before updating from v3.x and under.</p>
</blockquote>
<p><strong>Animate.css</strong> is a library of ready-to-use, cross-browser animations for use in your web projects. Great for emphasis, home pages, sliders, and attention-guiding hints.</p>

        <p class="edit-github"><a href="animate.css/blob/main/docsSource/sections/00-intro.md" title="Edit this on GitHub">Edit this on GitHub</a></p>
      </section>
    

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
<h3>Basic usage</h3>
<p>After installing Animate.css, add the class <code>animate__animated</code> to an element, along with any of the <a href="#attention_seekers">animation names</a> (don't forget the <code>animate__</code> prefix!):</p>
<pre><code class="language-html">&lt;h1 class=&quot;animate__animated animate__bounce&quot;&gt;An animated element&lt;/h1&gt;
</code></pre>
<p>That's it! You've got a CSS animated element. Super!</p>
<blockquote>
<p>Animations can improve the UX of an interface, but keep in mind that they can also get in the way of your users! Please read the <a href="#best-practices">best practices</a> and <a href="#gotchas">gotchas</a> sections to bring your web-things to life in the best way possible.</p>
</blockquote>
<h4>Using <code>@keyframes</code></h4>
<p>Even though the library provides you a few helper classes like the <code>animated</code> class to get you up running quickly, you can directly use the provided animations <code>keyframes</code>. This provides a flexible way to use Animate.css with your current projects without having to refactor your HTML code.</p>
<p>Example:</p>
<pre><code class="language-css">.my-element {
  display: inline-block;
  margin: 0 0.5rem;

  animation: bounce; /* referring directly to the animation's @keyframe declaration */
  animation-duration: 2s; /* don't forget to set a duration! */
}
</code></pre>
<p>Be aware that some animations are dependent on the <code>animation-timing</code> property set on the animation's class. Changing or not declaring it might lead to unexpected results.</p>
<h4>CSS Custom Properties (CSS Variables)</h4>
<p>Since version 4, Animate.css uses custom properties (also known as CSS variables) to define the animation's duration, delay, and iterations. This makes Animate.css very flexible and customizable. Need to change an animation duration? Just set a new value globally or locally.</p>
<p>Example:</p>
<pre><code class="language-css">/* This only changes this particular animation duration */
.animate__animated.animate__bounce {
  --animate-duration: 2s;
}

/* This changes all the animations globally */
:root {
  --animate-duration: 800ms;
  --animate-delay: 0.9s;
}
</code></pre>
<p>Custom properties also make it easy to change all your animation's time-constrained properties on the fly. It means that you can have a slow-motion or time-lapse effect with a javascript one-liner:</p>
<pre><code class="language-javascript">// All animations will take twice the time to accomplish
document.documentElement.style.setProperty('--animate-duration', '2s');

// All animations will take half the time to accomplish
document.documentElement.style.setProperty('--animate-duration', '.5s');
</code></pre>
<p>Even though some aging browsers do not support custom properties, Animate.css provides a proper fallback, widening its support for any browser that supports CSS animations.</p>

        <p class="edit-github"><a href="animate.css/blob/main/docsSource/sections/01-usage.md" title="Edit this on GitHub">Edit this on GitHub</a></p>
      </section>
    

      <section class="docSection-utilities" id="utilities">
        <h2>Utility Classes</h2>
<p>Animate.css comes packed with a few utility classes to simplify its use.</p>
<h3>Delay classes</h3>
<p>You can add delays directly on the element's class attribute, just like this:</p>
<pre><code class="language-html">&lt;div class=&quot;animate__animated animate__bounce animate__delay-2s&quot;&gt;Example&lt;/div&gt;
</code></pre>
<p>Animate.css provides the following delays:</p>
<table>
<thead>
<tr>
<th>Class name</th>
<th>Default delay time</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>animate__delay-2s</code></td>
<td><code>2s</code></td>
</tr>
<tr>
<td><code>animate__delay-3s</code></td>
<td><code>3s</code></td>
</tr>
<tr>
<td><code>animate__delay-4s</code></td>
<td><code>4s</code></td>
</tr>
<tr>
<td><code>animate__delay-5s</code></td>
<td><code>5s</code></td>
</tr>
</tbody>
</table>
<p>The provided delays are from 1 to 5 seconds. You can customize them setting the <code>--animate-delay</code> property to a longer or a shorter duration:</p>
<pre><code class="language-css">/* All delay classes will take 2x longer to start */
:root {
  --animate-delay: 2s;
}

/* All delay classes will take half the time to start */
:root {
  --animate-delay: 0.5s;
}
</code></pre>
<h3>Slow, slower, fast, and Faster classes</h3>
<p>You can control the speed of the animation by adding these classes, as below:</p>
<pre><code class="language-html">&lt;div class=&quot;animate__animated animate__bounce animate__faster&quot;&gt;Example&lt;/div&gt;
</code></pre>
<table>
<thead>
<tr>
<th>Class name</th>
<th>Default speed time</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>animate__slow</code></td>
<td><code>2s</code></td>
</tr>
<tr>
<td><code>animate__slower</code></td>
<td><code>3s</code></td>
</tr>
<tr>
<td><code>animate__fast</code></td>
<td><code>800ms</code></td>
</tr>
<tr>
<td><code>animate__faster</code></td>
<td><code>500ms</code></td>
</tr>
</tbody>
</table>
<p>The <code>animate__animated</code> class has a default speed of <code>1s</code>. You can also customize the animations duration through the <code>--animate-duration</code> property, globally or locally. This will affect both the animations and the utility classes. Example:</p>
<pre><code class="language-css">/* All animations will take twice as long to finish */
:root {
  --animate-duration: 2s;
}

/* Only this element will take half the time to finish */
.my-element {
  --animate-duration: 0.5s;
}
</code></pre>
<p>Notice that some animations have a duration of less than 1 second. As we used the CSS <code>calc()</code> function, setting the duration through the <code>--animation-duration</code> property will respect these ratios. So, when you change the global duration, all the animations will respond to that change!</p>
<h3>Repeating classes</h3>
<p>You can control the iteration count of the animation by adding these classes, like below:</p>
<pre><code class="language-html">&lt;div class=&quot;animate__animated animate__bounce animate__repeat-2&quot;&gt;Example&lt;/div&gt;
</code></pre>
<table>
<thead>
<tr>
<th>Class Name</th>
<th>Default iteration count</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>animate__repeat-1</code></td>
<td><code>1</code></td>
</tr>
<tr>
<td><code>animate__repeat-2</code></td>
<td><code>2</code></td>
</tr>
<tr>
<td><code>animate__repeat-3</code></td>
<td><code>3</code></td>
</tr>
<tr>
<td><code>animate__infinite</code></td>
<td><code>infinite</code></td>
</tr>
</tbody>
</table>
<p>As with the delay and speed classes, the <code>animate__repeat</code> class is based on the <code>--animate-repeat</code> property and has a default iteration count of <code>1</code>. You can customize them by setting the <code>--animate-repeat</code> property to a longer or a shorter value:</p>
<pre><code class="language-css">/* The element will repeat the animation 2x
   It's better to set this property locally and not globally or
   you might end up with a messy situation */
.my-element {
  --animate-repeat: 2;
}
</code></pre>
<p>Notice that <code>animate__infinite</code> doesn't use any custom property, and changes to <code>--animate-repeat</code> will have no effect. Don't forget to read the <a href="#best-practices">best practices</a> section to make the best use of repeating animations.</p>

        <p class="edit-github"><a href="animate.css/blob/main/docsSource/sections/02-utilities.md" title="Edit this on GitHub">Edit this on GitHub</a></p>
      </section>
    

      <section class="docSection-best-practices" id="best-practices">
        <h2>Best Practices</h2>
<p>Animations can greatly improve an interface's UX, but it's important to follow some guidelines to not overdo it and deteriorate the user experience on your web-things. Following the following rules should provide a good start.</p>
<h3>Meaningful animations</h3>
<p>You should avoid animating an element just for the sake of it. Keep in mind that animations should make an intention clear. Animations like attention seekers (bounce, flash, pulse, etc) should be used to bring the user's attention to something special in your interface and not only as a way to bring &quot;flashiness&quot; to it.</p>
<p>Entrances and exit animations should be used to orientate what is happening in the interface, clearly signaling that it's transitioning into a new state.</p>
<p>It doesn't mean that you should avoid adding playfulness to the interface, just be sure that the animations are not getting in the way of your user and that the page's performance is not affected by an exaggerated use of animations.</p>
<h3>Don't animate large elements</h3>
<p>Avoid it as it won't bring much value to the user and will probably only cause confusion. Besides that, there is a good chance that the animations will be junky, culminating in bad UX.</p>
<h3>Don't animate root elements</h3>
<p>Animating the <code>&lt;html/&gt;</code> or <code>&lt;body/&gt;</code> tags is possible, but you should avoid it. There were some reports pointing out that this could trigger some weird browser bugs. Besides, making the whole page bounce would hardly provide good value to your UX. If you indeed need this sort of effect, wrap your page in an element and animate it, like this:</p>
<pre><code class="language-html">&lt;body&gt;
  &lt;main class=&quot;animate__animated animate__fadeInLeft&quot;&gt;
    &lt;!-- Your code --&gt;
  &lt;/main&gt;
&lt;/body&gt;
</code></pre>
<h3>Infinite animations should be avoided</h3>
<p>Even though Animate.css provides utility classes for repeating animations, including an infinite one, you should avoid endless animations. It will just distract your users and might annoy a good slice of them. So, use it wisely!</p>
<h3>Mind the initial and final state of your elements</h3>
<p>All the Animate.css animations include a CSS property called <code>animation-fill-mode</code>, which controls the states of an element before and after animation. You can read more about it <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/animation-fill-mode">here</a>. Animate.css defaults to <code>animation-fill-mode: both</code>, but you can change it to suit your needs.</p>
<h3>Don't disable the <code>prefers-reduced-motion</code> media query</h3>
<p>Since version 3.7.0 Animate.css supports the <code>prefers-reduced-motion</code> media query which disables animations based on the OS system's preference on supporting browsers (most current browsers support it). This is a <strong>critical accessibility feature</strong> and should never be disabled! This is built into browsers to help people with vestibular and seizure disorders. You can read more about it <a href="https://css-tricks.com/revisiting-prefers-reduced-motion-the-reduced-motion-media-query/">here</a>. If your web-thing needs the animations to function, warn users, but don't disable the feature. You can do it easily with CSS only. Here's a simple example:</p>
<p class="codepen" data-height="265" data-theme-id="dark" data-default-tab="css,result" data-user="eltonmesquita" data-slug-hash="oNjGGbw" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Prefers-reduce-motion media query">
  <span>See the Pen <a href="https://codepen.io/eltonmesquita/pen/oNjGGbw">
  Prefers-reduce-motion media query</a> by Elton Mesquita (<a href="https://codepen.io/eltonmesquita">@eltonmesquita</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="ei.js"></script>
<!-- <script async src="https://static.codepen.io/assets/embed/ei.js"></script> -->
<h2 id="gotchas">Gotchas</h2>
<h3>You can't animate inline elements</h3>
<p>Even though some browsers can animate inline elements, this goes against the CSS animation specs and will break on some browsers or eventually cease to work. Always animate block or inline-block level elements (grid and flex containers and children are block-level elements too). You can set an element to <code>display: inline-block</code> when animating an inline-level element.</p>
<h3>Overflow</h3>
<p>Most of the Animate.css animations will move elements across the screen and might create scrollbars on your web-thing. This is manageable using the <code>overflow: hidden</code> property. There's no recipe to when and where to use it, but the basic idea is to use it in the parent holding the animated element. It's up to you to figure out when and how to use it, <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/overflow">this guide</a> can help you understand it.</p>
<h3>Intervals between repeats</h3>
<p>Unfortunately, this isn't possible with pure CSS right now. You have to use Javascript to achieve this result.</p>

        <p class="edit-github"><a href="animate.css/blob/main/docsSource/sections/03-best-practices.md" title="Edit this on GitHub">Edit this on GitHub</a></p>
      </section>
    

      <section class="docSection-javascript" id="javascript">
        <h2>Usage with Javascript</h2>
<p>You can do a whole bunch of other stuff with animate.css when you combine it with Javascript. A simple example:</p>
<pre><code class="language-javascript">const element = document.querySelector('.my-element');
element.classList.add('animate__animated', 'animate__bounceOutLeft');
</code></pre>
<p>You can detect when an animation ends:</p>
<pre><code class="language-javascript">const element = document.querySelector('.my-element');
element.classList.add('animate__animated', 'animate__bounceOutLeft');

element.addEventListener('animationend', () =&gt; {
  // do something
});
</code></pre>
<p>or change its duration:</p>
<pre><code class="language-javascript">const element = document.querySelector('.my-element');
element.style.setProperty('--animate-duration', '0.5s');
</code></pre>
<p>You can also use a simple function to add the animations classes and remove them automatically:</p>
<pre><code class="language-javascript">const animateCSS = (element, animation, prefix = 'animate__') =&gt;
  // We create a Promise and return it
  new Promise((resolve, reject) =&gt; {
    const animationName = `${prefix}${animation}`;
    const node = document.querySelector(element);

    node.classList.add(`${prefix}animated`, animationName);

    // When the animation ends, we clean the classes and resolve the Promise
    function handleAnimationEnd(event) {
      event.stopPropagation();
      node.classList.remove(`${prefix}animated`, animationName);
      resolve('Animation ended');
    }

    node.addEventListener('animationend', handleAnimationEnd, {once: true});
  });
</code></pre>
<p>And use it like this:</p>
<pre><code class="language-javascript">animateCSS('.my-element', 'bounce');

// or
animateCSS('.my-element', 'bounce').then((message) =&gt; {
  // Do something after the animation
});
</code></pre>
<p>If you had a hard time understanding the previous function, have a look at <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/const">const</a>, <a href="https://developer.mozilla.org/en-US/docs/Web/API/Element/classList">classList</a>, <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Functions/Arrow_functions">arrow functions</a>, and <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise">Promises</a>.</p>

        <p class="edit-github"><a href="animate.css/blob/main/docsSource/sections/04-javascript.md" title="Edit this on GitHub">Edit this on GitHub</a></p>
      </section>
    

      <section class="docSection-migration" id="migration">
        <h2>Migration from v3.x and Under</h2>
<p>Animate.css v4 brought some improvements, improved animations, and new animations, which makes it worth upgrading. However, it also comes with a breaking change: we have added a prefix for all of the Animate.css classes - defaulting to <code>animate__</code> - so a direct migration is impossible.</p>
<p>But fear not! Although the default build, <code>animate.min.css</code>, brings the <code>animate__</code> prefix we also provide the <code>animate.compat.css</code> file which brings no prefix at all, like the previous versions (3.x and under).</p>
<p>If you're using a bundler, update your import:</p>
<p>from:</p>
<pre><code class="language-js">import 'animate.min.css';
</code></pre>
<p>to</p>
<pre><code class="language-js">import 'animate.compat.css';
</code></pre>
<p>Notice that depending on your project's configuration, this might change a bit.</p>
<p>In case of using a CDN, update the link in your HTML:</p>
<p>from:</p>
<pre><code class="language-html">&lt;head&gt;
  &lt;link
    rel=&quot;stylesheet&quot;
    href=&quot;animate.min.css&quot;
  /&gt;
&lt;/head&gt;
</code></pre>
<p>to</p>
<pre><code class="language-html">&lt;head&gt;
  &lt;link
    rel=&quot;stylesheet&quot;
    href=&quot;animate.compat.css&quot;
  /&gt;
&lt;/head&gt;
</code></pre>
<p>In the case of a new project, it's highly recommended to use the default prefixed version as it'll make sure that you'll hardly have classes conflicting with your project. Besides, in later versions, we might decide to discontinue the <code>animate.compat.css</code> file.</p>

        <p class="edit-github"><a href="animate.css/blob/main/docsSource/sections/06-migration.md" title="Edit this on GitHub">Edit this on GitHub</a></p>
      </section>
    

      <section class="docSection-custom-builds" id="custom-builds">
        <h2>Custom Builds</h2>
<p class="warning">Custom builds are not possible from a node_modules folder as we don't ship the building tools in the npm module.</p>
<p>Animate.css is powered by npm, postcss + postcss-preset-env, which means you can create custom builds pretty easily, using future CSS with proper fallbacks.</p>
<p>First of all, you’ll need Node and all other dependencies:</p>
<pre><code class="language-shell">$ git clone animate.css.git
$ cd animate.css
$ npm install
</code></pre>
<p>Next, run <code>npm start</code> to compile your custom build. Three files will be generated:</p>
<ul>
<li><code>animate.css</code>: raw build, easy to read and without any optimization</li>
<li><code>animate.min.css</code>: minified build ready for production</li>
<li><code>animate.compat.css</code>: minified build ready for production <strong>without class prefix</strong>. This should only be used as an easy path for migrations.</li>
</ul>
<p>For example, if you'll only use some of the “attention seekers” animations, simply edit the <code>animate.css</code> file, delete every <code>@import</code> and the ones you want to use.</p>
<pre><code class="language-css">@import 'attention_seekers/bounce.css';
@import 'attention_seekers/flash.css';
@import 'attention_seekers/pulse.css';
@import 'attention_seekers/rubberBand.css';
@import 'attention_seekers/shake.css';
@import 'attention_seekers/headShake.css';
@import 'attention_seekers/swing.css';
@import 'attention_seekers/tada.css';
@import 'attention_seekers/wobble.css';
@import 'attention_seekers/jello.css';
@import 'attention_seekers/heartBeat.css';
</code></pre>
<p>Now, just run <code>npm start</code> and your highly optimized build will be generated at the root of the project.</p>
<h3>Changing the default prefix</h3>
<p>It's pretty straight forward to change animate's prefix on your custom build. Change the <code>animateConfig</code>'s <code>prefix</code> property in the <code>package.json</code> file and rebuild the library with <code>npm start</code>:</p>
<pre><code class="language-json">/* on Animate.css package.json */
&quot;animateConfig&quot;: {
  &quot;prefix&quot;: &quot;myCustomPrefix__&quot;
},
</code></pre>
<p>then:</p>
<pre><code class="language-shell">$ npm start
</code></pre>
<p>Easy peasy!</p>

        <p class="edit-github"><a href="animate.css/blob/main/docsSource/sections/07-custom-builds.md" title="Edit this on GitHub">Edit this on GitHub</a></p>
      </section>
    

      <section class="docSection-accessibility" id="accessibility">
        <h2>Accessibility</h2>
<p>Animate.css supports the <a href="https://webkit.org/blog/7551/responsive-design-for-motion/"><code>prefers-reduced-motion</code> media query</a> so that users with motion sensitivity can opt out of animations. On supported platforms (currently all the major browsers and OS, including mobile), users can select &quot;reduce motion&quot; on their operating system preferences, and it will turn off CSS transitions for them without any further work required.</p>

        <p class="edit-github"><a href="animate.css/blob/main/docsSource/sections/08-accessibility.md" title="Edit this on GitHub">Edit this on GitHub</a></p>
      </section>
    

      <section class="docSection-contributors" id="contributors">
        <h2>Core Team</h2>
<table>
<thead>
<tr>
<th><img src="https://avatars2.githubusercontent.com/u/439365?s=460&amp;u=512b4cc5324938ae40bbb8f3b7769d335953cd3a&amp;v=4" alt=""></th>
<th><img src="https://avatars2.githubusercontent.com/u/5007208?s=460&amp;u=418401ee605824272e5dcb955fd64ea24546a857&amp;v=4" alt=""></th>
<th><img src="https://avatars1.githubusercontent.com/u/15052701?s=460&amp;u=9e58364978379536d3f26c4ce5cae1a2a449a0e4&amp;v=4" alt=""></th>
</tr>
</thead>
<tbody>
<tr>
<td><a href="https://github.com/daneden">Daniel Eden</a></td>
<td><a href="https://github.com/eltonmesquita">Elton Mesquita</a></td>
<td><a href="https://github.com/warengonzaga">Waren Gonzaga</a></td>
</tr>
<tr>
<td>Animate.css Creator</td>
<td>Maintainer</td>
<td>Core Contributor</td>
</tr>
</tbody>
</table>

        <p class="edit-github"><a href="animate.css/blob/main/docsSource/sections/09-contributors.md" title="Edit this on GitHub">Edit this on GitHub</a></p>
      </section>
    

      <section class="docSection-license-contributing" id="license-contributing">
        <h2>License and Contributing</h2>
<p>Animate.css is licensed under the <a href="http://firstdonoharm.dev">Hippocratic License</a>.</p>
<h3>Contributing</h3>
<p>Pull requests are the way to go here. We only have two rules for submitting a pull request: match the naming convention (camelCase, categorized [fades, bounces, etc.]) and let us see a demo of submitted animations in a <a href="https://codepen.io">pen</a>. That <strong>last one is important</strong>.</p>
<h3>Code of Conduct</h3>
<p>This project and everyone participating in it is governed by the <a href="animate.css/blob/main/CODE_OF_CONDUCT.md">Contributor Covenant Code of Conduct</a>. By participating, you are expected to uphold this code. Please report unacceptable behavior to <a href="mailto:animate@eltonmesquita.com">animate@eltonmesquita.com</a>.</p>

        <p class="edit-github"><a href="animate.css/blob/main/docsSource/sections/09-license-contributing.md" title="Edit this on GitHub">Edit this on GitHub</a></p>
      </section>
    
          </div>
          <aside class="sidebar">
            <div class="meta">
              <a href="animate.css" target="_blank" class="icon-github">
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
      <p>
        Animate.css is a Hippocratic-2.1 licensed library.
        You can use it freely, respecting the terms included in the <a href="animate.css/blob/main/LICENSE" title="license">license file.</a>
      </p>
    </footer>

    <aside class="motionless__banner">
      <p class="motionless__paragraph">
        <b>Hey!</b> It seems that you have animations disabled on your OS, turning Animate.css
        off.<br />
        Animate.css supports the
        <a
          title="prefers-reduced-motion CSS media feature on MDN"
          target="_blank"
          rel="noopener noreferrer"
          href="https://developer.mozilla.org/en-US/docs/Web/CSS/@media/prefers-reduced-motion"
        >
          prefers-reduced-motion CSS media feature</a
        >. You can read more about it
        <a
          title="Move Ya! Or maybe, don't, if the user prefers-reduced-motion! on Google Developers"
          target="_blank"
          rel="noopener noreferrer"
          href="https://developers.google.com/web/updates/2019/03/prefers-reduced-motion"
        >
          here</a
        >.
      </p>
    </aside>
    <script type="module" src="main.js"></script>
    <script src="prism.min.js"></script>
    <script src="prism-autoloader.min.js"></script>

    <!-- Fork Corner Scripts -->
    <script src="fork-corner.min.js" defer></script>
  </body>
</html>
