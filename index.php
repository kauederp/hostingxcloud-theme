<?php
  include("assets/components/Mural.php");
  include("assets/components/SmallCards.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="INEBUR is owner of Antler">
  <link href="assets/img/favicon.ico" rel="shortcut icon">
  <title>Antler - Hosting Provider & WHMCS Template</title>
  <!-- Font Style -->
  <link href="assets/fonts/fontawesome/css/all.min.css" rel='stylesheet'>
  <link href="assets/fonts/fonts.min.css" rel='stylesheet'>
  <link rel="stylesheet" href="assets/css/custom.css">
  <!-- RTL Style -->
  <link type="text/css" href="assets/css/rtl/bootstrap-rtl.min.css" rel='stylesheet' class="rtl" disabled>
  <link type="text/css" href="assets/css/rtl/theme-rtl.min.css" rel='stylesheet' class="rtl" disabled>
  <!-- CSS Style -->
  <link type="text/css" href="assets/css/bootstrap.min.css" rel='stylesheet' class="ltr">
  <link type="text/css" href="assets/css/aos.min.css" rel='stylesheet' class="ltr">
  <link type="text/css" href="assets/css/vendors.min.css" rel='stylesheet'>
  <link type="text/css" href="assets/css/theme.min.css" rel='stylesheet'>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  <!-- Javascript -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/gdpr-cookie.min.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script defer type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script defer type="text/javascript" src="assets/js/slick.min.js"></script>
  <script defer type="text/javascript" src="assets/js/aos.min.js"></script>
  <script defer type="text/javascript" src="assets/js/swiper.min.js"></script>
  <script defer type="text/javascript" src="assets/js/jquery.lazyload-any.min.js"></script>
  <script defer type="text/javascript" src="assets/js/scripts.min.js"></script>
  <script defer type="text/javascript" src="assets/js/settings-init.js"></script>
  <script defer type="text/javascript" src="assets/js/custom.js"></script>
</head>

<body>
  <div class="box-container limit-width">
    <!-- ***** SETTINGS ****** -->
    <section id="settings"> </section>
    <!-- ***** LOADING PAGE ****** -->
    <div id="spinner-area">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
        <div class="spinner-txt">Antler...</div>
      </div>
    </div>
    <!-- ***** FRAME MODE ****** -->
    <div class="body-borders" data-border="20">
      <div class="top-border bg-white"></div>
      <div class="right-border bg-white"></div>
      <div class="bottom-border bg-white"></div>
      <div class="left-border bg-white"></div>
    </div>
    <!-- ***** UPLOADED MENU FROM HEADER.HTML ***** -->
    <header id="header"> </header>
    <!-- BANNER -->
    <section class="top-header d-md-flex flex-md-row justify-content-center sec-bg6 pb-150 bg-colorstyle">
      <video class="cover-video" autoplay loop muted>
        <source src="assets/videos/planet2.mp4" type="video/mp4">
        <track src="captions_en.vtt" kind="captions" srclang="en" label="english_captions">
      </video>
      <div class="container bg-dark ps-5 py-4 bg-opacity-50 position-absolute top-50">
        <div class="row">
          <div class="col-md-7">
            <div class="wrapper">
              <h1 class="heading mergecolor pb-2" data-aos="fade-up" data-aos-duration="800">High-Performance Dedicated
                Servers</h1>
              <h2 class="subheading fw-normal lh-42 text-light mb-5" data-aos="fade-up" data-aos-duration="1200">By
                trusting us with your business and projects needs, we promise a <span class="c-pink">99.9% uptime</span>
                on any services we provide, outside of any standard maintenance we may provide.
              </h2>
              <a href="hosting" class="btn btn-default-yellow-fill me-2" title="Hosting Order Now">Order Now <i
                  class="fas fa-cart-plus ps-1 f-15"></i></a>
              <a href="hosting" class="btn btn-default-grad-purple-fill" title="Hosting Overview">Hosting Overview</a>
            </div>
          </div>
          <div class="col-md-1 mb-5"></div>
          <div class="col-md-4">
            <div class="service-section text-center mt-0 d-none767">
              <div class="lazyload">
                <!-- <svg class="svg" x="0" y="0" version="1.1" viewBox="0 0 650 650" width="420" height="420"><style>.st0,.st1,.st2{fill:none;stroke:#ee5586;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.st1,.st2{stroke:gray;stroke-width:2}.st2{stroke:#ee5586}</style><path id="svg-concept" d="M572.7 642.6H67.5a15 15 0 0 1-15-15V269.4a15 15 0 0 1 15-15h505.2a15 15 0 0 1 15 15v358.1a15 15 0 0 1-14.9 15.1h-.1zm17.5-437.9c0 7.8-6.3 14.2-14.2 14.2H69.1c-7.8 0-14.2-6.3-14.2-14.2v-184c0-7.8 6.3-14.2 14.2-14.2H576c7.8 0 14.2 6.3 14.2 14.2v184z" class="st0"/><path d="M173.3 35.2h347.9c4.8 0 8.6 4.3 8.6 9.5v46.9h0c0 5.3-3.8 9.5-8.6 9.5h-402c-4.8 0-8.6-4.3-8.6-9.5V44.7c0-5.3 3.8-9.5 8.6-9.5h54.1" class="st1"/><path d="M174.3 56.8h243.6c6.3 0 11.3 5.1 11.3 11.3v0c0 6.3-5.1 11.3-11.3 11.3H174.3c-6.3 0-11.3-5.1-11.3-11.3v0c-.1-6.2 5-11.3 11.3-11.3z" class="st1"/><circle id="svg-concept" cx="407.3" cy="68.2" r="4.3" class="st2"/><circle cx="390.5" cy="68.2" r="4.3" class="st1"/><path d="M174.3 144.8h243.6c6.3 0 11.3 5.1 11.3 11.3v0c0 6.3-5.1 11.3-11.3 11.3H174.3c-6.3 0-11.3-5.1-11.3-11.3v0c-.1-6.2 5-11.3 11.3-11.3z" class="st1"/><circle id="svg-concept" cx="407.3" cy="156.1" r="4.3" class="st2"/><circle cx="390.5" cy="156.1" r="4.3" class="st1"/><path d="M173.3 123.2h347.9c4.8 0 8.6 4.3 8.6 9.5v46.9h0c0 5.3-3.8 9.5-8.6 9.5h-402c-4.8 0-8.6-4.3-8.6-9.5v-46.9c0-5.3 3.8-9.5 8.6-9.5h54.1" class="st1"/><circle id="svg-concept" cx="482.2" cy="156.1" r="17" class="st0"/><path id="svg-concept" d="M488.6 156.1c0 3.5-2.8 6.3-6.3 6.3a6.3 6.3 0 0 1-6.3-6.3c0-3.6 2.8-6.3 6.3-6.3 3.4 0 6.3 2.8 6.3 6.3z" class="st2"/><circle id="svg-concept" cx="482.2" cy="68.1" r="17" class="st0"/><path id="svg-concept" d="M488.6 68.1c0 3.5-2.8 6.3-6.3 6.3a6.3 6.3 0 0 1-6.3-6.3c0-3.6 2.8-6.3 6.3-6.3 3.4 0 6.3 2.8 6.3 6.3z" class="st2"/><path d="M173.3 283h347.9c4.8 0 8.6 4.3 8.6 9.5v46.9h0c0 5.3-3.8 9.5-8.6 9.5h-402c-4.8 0-8.6-4.3-8.6-9.5v-46.9c0-5.3 3.8-9.5 8.6-9.5h54.1" class="st1"/><path d="M174.3 304.6h243.6c6.3 0 11.3 5.1 11.3 11.3v0c0 6.3-5.1 11.3-11.3 11.3H174.3c-6.3 0-11.3-5.1-11.3-11.3v0c-.1-6.2 5-11.3 11.3-11.3z" class="st1"/><circle id="svg-concept" cx="407.3" cy="316" r="4.3" class="st2"/><circle cx="390.5" cy="316" r="4.3" class="st1"/><path d="M174.3 392.6h243.6c6.3 0 11.3 5.1 11.3 11.3v0c0 6.3-5.1 11.3-11.3 11.3H174.3c-6.3 0-11.3-5.1-11.3-11.3v0c-.1-6.2 5-11.3 11.3-11.3z" class="st1"/><circle id="svg-concept" cx="407.3" cy="403.9" r="4.3" class="st2"/><circle cx="390.5" cy="403.9" r="4.3" class="st1"/><path d="M173.3 371h347.9c4.8 0 8.6 4.3 8.6 9.5v46.9h0c0 5.3-3.8 9.5-8.6 9.5h-402c-4.8 0-8.6-4.3-8.6-9.5v-46.9c0-5.3 3.8-9.5 8.6-9.5h54.1" class="st1"/><circle id="svg-concept" cx="482.2" cy="403.9" r="17" class="st0"/><path id="svg-concept" d="M488.6 403.9c0 3.5-2.8 6.3-6.3 6.3a6.3 6.3 0 0 1-6.3-6.3c0-3.6 2.8-6.3 6.3-6.3 3.4 0 6.3 2.8 6.3 6.3z" class="st2"/><circle id="svg-concept" cx="482.2" cy="315.9" r="17" class="st0"/><path id="svg-concept" d="M488.6 315.9c0 3.5-2.8 6.3-6.3 6.3a6.3 6.3 0 0 1-6.3-6.3c0-3.6 2.8-6.3 6.3-6.3 3.4 0 6.3 2.8 6.3 6.3z" class="st2"/><path d="M173.3 460.8h347.9c4.8 0 8.6 4.3 8.6 9.5v46.9h0c0 5.3-3.8 9.5-8.6 9.5h-402c-4.8 0-8.6-4.3-8.6-9.5v-46.9c0-5.3 3.8-9.5 8.6-9.5h54.1" class="st1"/><path d="M174.3 482.4h243.6c6.3 0 11.3 5.1 11.3 11.3v0c0 6.3-5.1 11.3-11.3 11.3H174.3c-6.3 0-11.3-5.1-11.3-11.3v0c-.1-6.2 5-11.3 11.3-11.3z" class="st1"/><circle id="svg-concept" cx="407.3" cy="493.8" r="4.3" class="st2"/><circle cx="390.5" cy="493.8" r="4.3" class="st1"/><path d="M174.3 570.4h243.6c6.3 0 11.3 5.1 11.3 11.3h0c0 6.3-5.1 11.3-11.3 11.3H174.3c-6.3 0-11.3-5.1-11.3-11.3h0c-.1-6.2 5-11.3 11.3-11.3z" class="st1"/><circle id="svg-concept" cx="407.3" cy="581.7" r="4.3" class="st2"/><circle cx="390.5" cy="581.7" r="4.3" class="st1"/><path d="M173.3 548.8h347.9c4.8 0 8.6 4.3 8.6 9.5v46.9h0c0 5.3-3.8 9.5-8.6 9.5h-402c-4.8 0-8.6-4.3-8.6-9.5v-46.9c0-5.3 3.8-9.5 8.6-9.5h54.1" class="st1"/><circle id="svg-concept" cx="482.2" cy="581.7" r="17" class="st0"/><path id="svg-concept" d="M488.6 581.7c0 3.5-2.8 6.3-6.3 6.3a6.3 6.3 0 0 1-6.3-6.3c0-3.6 2.8-6.3 6.3-6.3 3.4 0 6.3 2.8 6.3 6.3z" class="st2"/><circle id="svg-concept" cx="482.2" cy="493.7" r="17" class="st0"/><path id="svg-concept" d="M488.6 493.7c0 3.5-2.8 6.3-6.3 6.3a6.3 6.3 0 0 1-6.3-6.3c0-3.6 2.8-6.3 6.3-6.3 3.4 0 6.3 2.8 6.3 6.3z" class="st2"/></svg> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** PRICING TABLES ***** -->
    <section class="pricing special sec-bg2 bg-colorstyle specialposition">
      <div class="container">
        <div class="sec-up-slider nopadding">
          <div class="row">
            <div class="col-md-12 col-lg-4">
              <div class="wrapper first">
                <div class="top-content bg-seccolorstyle topradius">
                  <div class="lazyload">
                    <!-- <svg class="svg mb-3" viewBox="0 0 32 32"><path id="svg-ico" d="M21.294 1.969h-.232c-5.325.087-10.656 3.756-10.656 10.688 0 .238.194.425.425.425.238 0 .425-.194.425-.425 0-6.719 5.125-9.8 9.912-9.838 5.387.038 9.762 4.438 9.762 9.838 0 5.425-4.412 9.837-9.838 9.837H7.767c-3.725 0-6.756-3.031-6.756-6.756s3.031-6.756 6.756-6.756c.238 0 .425-.194.425-.425s-.194-.425-.425-.425c-4.2-.006-7.612 3.412-7.612 7.606s3.413 7.613 7.612 7.613h13.331c5.894 0 10.694-4.794 10.694-10.694 0-5.825-4.694-10.581-10.5-10.688z"/><path fill="#5e686c" d="M24.413 28.15h-6.781c-.156-.6-.631-1.075-1.231-1.231v-2.194c0-.238-.194-.425-.425-.425-.238 0-.425.194-.425.425v2.194c-.6.156-1.075.631-1.231 1.231H7.539c-.237 0-.425.194-.425.425s.194.425.425.425h6.781c.188.738.863 1.281 1.656 1.281s1.469-.544 1.656-1.281h6.781c.238 0 .425-.194.425-.425s-.188-.425-.425-.425zm-8.438 1.281c-.469 0-.856-.381-.856-.856 0-.469.381-.856.856-.856s.856.381.856.856-.387.856-.856.856zM21.238 6.931c.238 0 .425-.194.425-.431-.006-.237-.219-.444-.431-.425-3.381.044-6.375 2.719-6.675 6.044l.006.075c.006.156.012.313.012.463 0 .238.194.425.425.425.238 0 .425-.194.425-.425 0-.162-.006-.331-.012-.525l-.012-.019c.269-2.819 2.888-5.144 5.838-5.181z"/></svg> -->
                  </div>
                  <div class="title">Shared Hosting</div>
                  <div class="fromer seccolor">Starting at:</div>
                  <div class="price seccolor"><sup>$</sup>8.19 <span class="period">/month</span></div>
                  <a href="hosting" class="btn btn-default-yellow-fill" title="Hosting Overview">All Plans</a>
                </div>
                <ul class="list-info bg-purple">
                  <li><i class="icon-drives"></i> <span class="f-14">DISK</span><br> <span>250GB SSD</span></li>
                  <li><i class="icon-speed"></i> <span class="f-14">DATA</span><br> <span>1TB Bandwidth</span></li>
                  <li><i class="icon-emailopen"></i> <span class="f-14">EMAIL</span><br> <span>120 Emails</span></li>
                  <li><i class="icon-domains"></i> <span class="f-14">TLD</span><br> <span>30 Domains</span></li>
                </ul>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <div class="wrapper">
                <div class="plans badge feat bg-dark">recommended</div>
                <div class="top-content bg-seccolorstyle topradius">
                  <div class="lazyload">
                    <!-- <svg class="svg mb-3" viewBox="0 0 32 32" width="60" height="60"><path id="svg-ico" fill="#ee5586" d="M24.68 17.74a1.68 1.68 0 1 0 0 3.36 1.68 1.68 0 0 0 0-3.36zm0 2.53a.84.84 0 1 1 0-1.68.84.84 0 1 1 0 1.68z"/><path fill="#5e686c" d="M29.54 13.54H2.46c-1.12 0-2.02.84-2.02 1.86v8.05c0 1.03.9 1.86 2.02 1.86h27.08c1.12 0 2.02-.83 2.02-1.86V15.4c0-1.02-.9-1.86-2.02-1.86zm1.18 9.91c0 .56-.53 1.02-1.18 1.02H2.46c-.65 0-1.18-.45-1.18-1.02V15.4c0-.56.53-1.03 1.18-1.03h27.08c.65 0 1.18.46 1.18 1.03v8.05z"/><path id="svg-ico" fill="#ee5586" d="M24.68 4.66a1.68 1.68 0 1 0 0 3.36 1.68 1.68 0 0 0 0-3.36zm0 2.53c-.46 0-.84-.38-.84-.85s.37-.83.84-.83.85.37.85.83c0 .47-.39.85-.85.85z"/><path fill="#5e686c" d="M29.54.46H2.46C1.34.46.44 1.29.44 2.32v8.05c0 1.02.9 1.86 2.02 1.86h27.08c1.12 0 2.02-.84 2.02-1.86V2.32c0-1.03-.9-1.86-2.02-1.86zm1.18 9.9c0 .57-.53 1.03-1.18 1.03H2.46c-.65 0-1.18-.45-1.18-1.02V2.32c0-.56.53-1.03 1.18-1.03h27.08c.65 0 1.18.46 1.18 1.03v8.05zM25.99 29.8h-8.36a1.7 1.7 0 0 0-1.2-1.21V26.7a.42.42 0 0 0-.84 0v1.88c-.59.15-1.06.62-1.2 1.21H6a.42.42 0 0 0 0 .84h8.36a1.69 1.69 0 0 0 3.26 0H26a.42.42 0 0 0 0-.84zM16 31.06a.84.84 0 1 1 0-1.69.84.84 0 0 1 0 1.7z"/></svg> -->
                  </div>
                  <div class="title">Dedicated Server</div>
                  <div class="fromer seccolor">annually get (20% discount)</div>
                  <div class="price seccolor"><sup>$</sup>82.00 <span class="period">/month</span></div>
                  <a href="configurator" class="btn btn-default-yellow-fill" title="Configure">Configure</a>
                </div>
                <ul class="list-info bg-purple">
                  <li><i class="icon-cpu"></i> <span class="f-14">CPU</span><br> <span>4x 3.20Ghz 2 Cores</span></li>
                  <li><i class="icon-ram"></i> <span class="f-14">RAM</span><br> <span>16GB (up to 32GB)</span></li>
                  <li><i class="icon-drivessd"></i> <span class="f-14">DRIVES</span><br> <span>2 x 1TB SATA 3.5</span>
                  </li>
                  <li><i class="icon-git"></i> <span class="f-14">UPLINK</span><br> <span>1Gbps - 20TB</span></li>
                </ul>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <div class="wrapper third">
                <div class="top-content bg-seccolorstyle topradius">
                  <div class="lazyload">
                    <!-- <svg class="svg mb-3" width="32" height="32" viewBox="0 0 32 32"><path fill="#5e686b" d="M29.55 13.35H13.37a.42.42 0 0 0 0 .84h16.18c.65 0 1.18.45 1.18 1.02v8.05c0 .57-.53 1.03-1.18 1.03H2.47c-.65 0-1.18-.46-1.18-1.03v-8.05c0-.56.53-1.02 1.18-1.02h4.17a.42.42 0 0 0 0-.84H2.47c-1.11 0-2.03.84-2.03 1.86v8.05c0 1.03.91 1.87 2.03 1.87h27.08c1.11 0 2.02-.84 2.02-1.87v-8.05c0-1.02-.9-1.86-2.02-1.86zM29.55.27H13.37a.42.42 0 0 0 0 .84h16.18c.65 0 1.18.45 1.18 1.02v8.05c0 .57-.53 1.03-1.18 1.03H2.47c-.65 0-1.18-.46-1.18-1.03V2.13c0-.56.53-1.02 1.18-1.02h4.17a.42.42 0 0 0 0-.84H2.47C1.36.27.45 1.1.45 2.13v8.05c0 1.03.9 1.86 2.03 1.86h27.08c1.1 0 2.02-.83 2.02-1.86V2.13c0-1.02-.92-1.86-2.03-1.86z"/><path id="svg-ico" d="M25.77 19.66a.42.42 0 0 0 0-.84h-2.16a.42.42 0 0 0 0 .84h2.16zM25.77 6.58a.42.42 0 0 0 0-.84h-2.16a.42.42 0 0 0 0 .83h2.16z"/><path fill="#5e686b" d="M26 29.61h-8.36a1.7 1.7 0 0 0-1.2-1.2v-1.88a.42.42 0 0 0-.85 0v1.87c-.58.15-1.05.62-1.2 1.21H6.02a.42.42 0 0 0 0 .84h8.36a1.69 1.69 0 0 0 3.26 0H26c.23 0 .42-.19.42-.42 0-.23-.2-.42-.43-.42zM16 30.88a.84.84 0 1 1 0-1.7.84.84 0 0 1 0 1.7z"/></svg> -->
                  </div>
                  <div class="title">Cloud VPS</div>
                  <div class="fromer seccolor">Starting at:</div>
                  <div class="price seccolor"><sup>$</sup>9.99 <span class="period">/month</span></div>
                  <a href="vps" class="btn btn-default-yellow-fill" title="All Plans">All Plans</a>
                </div>
                <ul class="list-info bg-purple">
                  <li><i class="icon-cpu"></i> <span class="f-14">CPU</span><br> <span>2 Cores</span></li>
                  <li><i class="icon-ram"></i> <span class="f-14">RAM</span><br> <span>2GB Memory</span></li>
                  <li><i class="icon-drives"></i> <span class="f-14">DISK</span><br> <span>20GB SSD Space</span></li>
                  <li><i class="icon-speed"></i> <span class="f-14">DATA</span><br> <span>1TB Bandwidth</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** MAP ***** -->
    <!-- <section class="services maping sec-normal sec-grad-grey-to-grey bg-colorstyle pb-5">
      <div class="container">
        <div class="service-wrap">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="section-heading text-white mergecolor">Our Datacenters are Located in 7 Regions</h2>
              <p class="section-subheading text-light mergecolor"><span class="golink">Lorem ipsum dolor</span> sit
                amet, consectetur adipiscing elit sed, do eiusmod tempor <span class="c-pink">incididunt lorem
                  ipsum</span> dolor sit amet</p>
            </div>
            <div class="col-md-12 pt-5 position-relative">
              <div class="lazyload">
                < !--<img src="assets/patterns/map.svg" class="w-10" alt="Load Balancing">-- >
              </div>
              <span class="datacenters montreal" data-bs-toggle="popover" data-bs-container="body"
                data-bs-trigger="hover" data-bs-placement="top" title="Montreal"
                data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." role="button"
                aria-label="Montreal"></span>
              <span class="datacenters newyork" data-bs-toggle="popover" data-bs-container="body"
                data-bs-trigger="hover" data-bs-placement="top" title="New York"
                data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." role="button"
                aria-label="New York"></span>
              <span class="datacenters portugal" data-bs-toggle="popover" data-bs-container="body"
                data-bs-trigger="hover" data-bs-placement="top" title="Portugal"
                data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." role="button"
                aria-label="Portugal"></span>
              <span class="datacenters london" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover"
                data-bs-placement="top" title="London"
                data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." role="button"
                aria-label="London"></span>
              <span class="datacenters moskow" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover"
                data-bs-placement="top" title="Moskow"
                data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." role="button"
                aria-label="Moskow"></span>
              <span class="datacenters hongkong" data-bs-toggle="popover" data-bs-container="body"
                data-bs-trigger="hover" data-bs-placement="top" title="Hong Kong"
                data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." role="button"
                aria-label="Hong Kong"></span>
              <span class="datacenters singapure" data-bs-toggle="popover" data-bs-container="body"
                data-bs-trigger="hover" data-bs-placement="top" title="Singapure"
                data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." role="button"
                aria-label="Singapure"></span>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!--  mapa -->

    <section id="cdn-map-section" class="bg-grey">
      <div class="container py-35">
        <section id="main-map">
          <div>
            <div class="row">
              <div class="col">
                <h2 class="text-center">Global CDN locations</h2>
                <p class="text-center max-width-800--center">
                  Our global CDN nodes deliver lightning-fast speeds wherever your traffic is coming from.
                </p>
                <div class="bold-line mx-auto"></div>
              </div>
            </div>
            <div id="map" tabindex="2" class="bg-body-secondary z-0 leaflet-container leaflet-fade-anim" style="">
              <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(-328px, 0px, 0px);">
                <div class="leaflet-pane leaflet-tile-pane">
                  <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                    <div class="leaflet-tile-container leaflet-zoom-animated"
                      style="z-index: 19; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt=""
                        src="https://tile.openstreetmap.org/3/3/4.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(748px, 316px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/4/4.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1004px, 316px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/3/3.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(748px, 60px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/4/3.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1004px, 60px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/3/5.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(748px, 572px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/4/5.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1004px, 572px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/2/4.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(492px, 316px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/5/4.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1260px, 316px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/2/3.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(492px, 60px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/5/3.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1260px, 60px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/2/5.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(492px, 572px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/5/5.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1260px, 572px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/3/2.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(748px, -196px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/4/2.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1004px, -196px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/3/6.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(748px, 828px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/4/6.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1004px, 828px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/2/2.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(492px, -196px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/5/2.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1260px, -196px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/1/4.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(236px, 316px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/6/4.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1516px, 316px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/2/6.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(492px, 828px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/5/6.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1260px, 828px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/1/3.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(236px, 60px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/6/3.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1516px, 60px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/1/5.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(236px, 572px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/6/5.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1516px, 572px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/1/2.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(236px, -196px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/6/2.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1516px, -196px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/1/6.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(236px, 828px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/6/6.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1516px, 828px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/0/4.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(-20px, 316px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/7/4.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1772px, 316px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/0/3.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(-20px, 60px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/7/3.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1772px, 60px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/0/5.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(-20px, 572px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/7/5.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1772px, 572px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/0/2.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(-20px, -196px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/7/2.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1772px, -196px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/0/6.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(-20px, 828px, 0px); opacity: 1;"><img
                        alt="" src="https://tile.openstreetmap.org/3/7/6.png" class="leaflet-tile leaflet-tile-loaded"
                        style="width: 256px; height: 256px; transform: translate3d(1772px, 828px, 0px); opacity: 1;">
                    </div>
                  </div>
                </div>
                <div class="leaflet-pane leaflet-overlay-pane"></div>
                <div class="leaflet-pane leaflet-shadow-pane"></div>
                <div class="leaflet-pane leaflet-marker-pane"></div>
                <div class="leaflet-pane leaflet-tooltip-pane"></div>
                <div class="leaflet-pane leaflet-popup-pane"></div>
                <div class="leaflet-proxy leaflet-zoom-animated"
                  style="transform: translate3d(980px, 1163.5px, 0px) scale(4);"></div>
              </div>

              <div class="leaflet-contextmenu"
                style="z-index: 10000; position: absolute; inset: 351px auto auto 928px; display: none;"><a
                  class="leaflet-contextmenu-item" href="#">Início de rota a partir daqui</a><a
                  class="leaflet-contextmenu-item" href="#">Fim de rota até daqui</a><a
                  class="leaflet-contextmenu-item leaflet-contextmenu-item-disabled" href="#">Adicionar uma nota
                  aqui</a><a class="leaflet-contextmenu-item" href="#">Mostrar endereço</a><a
                  class="leaflet-contextmenu-item leaflet-contextmenu-item-disabled" href="#">Consultar elementos</a><a
                  class="leaflet-contextmenu-item" href="#">Centralizar o mapa aqui</a></div>
            </div>
            <!-- <div class="position-relative w-100 h-auto container">
              <div>
                <div data-toggle="tooltip" data-placement="top" title="Seattle, WA, USA"
                  class="cdn-map-pin cdn-map-pin--red position-absolute" style="bottom: 62.2%; left: 13.6%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/usa.svg"
                    alt="Pin locating data centre Chicago, IL, USA" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Chicago, IL, USA"
                  class="cdn-map-pin cdn-map-pin--red position-absolute" style="bottom: 60%; left: 24%;"><img width="40"
                    height="40" src="/assets/images/components/cdn-map/usa.svg"
                    alt="Pin locating data centre Seattle, WA, USA" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="New York, NY, USA"
                  class="cdn-map-pin cdn-map-pin--red position-absolute" style="bottom: 60%; left: 28.5%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/usa.svg"
                    alt="Pin locating data centre New York, NY, USA" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Ashburn, VA, USA"
                  class="cdn-map-pin cdn-map-pin--red position-absolute" style="bottom: 57%; left: 26%;"><img width="40"
                    height="40" src="/assets/images/components/cdn-map/usa.svg"
                    alt="Pin locating data centre Ashburn, VA, USA" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Los Angeles, CA, USA"
                  class="cdn-map-pin cdn-map-pin--red position-absolute" style="bottom: 54%; left: 13.9%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/usa.svg"
                    alt="Pin locating data centre Los Angeles, CA, USA" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Dallas, TX, USA"
                  class="cdn-map-pin cdn-map-pin--red position-absolute" style="bottom: 52.3%; left: 19.5%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/usa.svg"
                    alt="Pin locating data centre Dallas, TX, USA" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Miami, FL, USA"
                  class="cdn-map-pin cdn-map-pin--red position-absolute" style="bottom: 48.5%; left: 24.6%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/usa.svg"
                    alt="Pin locating data centre Miami, FL, USA" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Santiago, Chile"
                  class="cdn-map-pin cdn-map-pin--chile position-absolute" style="bottom: 20.5%; left: 26.8%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/chile.svg"
                    alt="Pin locating data centre Santiago, Chile" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Amsterdam, Netherlands"
                  class="cdn-map-pin cdn-map-pin--neth position-absolute" style="bottom: 63%; left: 48%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/netherlands.svg"
                    alt="Pin locating data centre Amsterdam, Netherlands" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="London, UK"
                  class="cdn-map-pin cdn-map-pin--uk position-absolute" style="bottom: 61.5%; left: 45.5%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/united-kingdom.svg"
                    alt="Pin locating data centre London, UK" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Frankfurt, Germany"
                  class="cdn-map-pin cdn-map-pin--black position-absolute" style="bottom: 62.5%; left: 50.5%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/germany.svg"
                    alt="Pin locating data centre Frankfurt, Germany" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Paris, France"
                  class="cdn-map-pin cdn-map-pin--france position-absolute" style="bottom: 58.5%; left: 46.9%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/france.svg"
                    alt="Pin locating data centre Paris, France" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Madrid, Spain"
                  class="cdn-map-pin cdn-map-pin--spain position-absolute" style="bottom: 55.5%; left: 45.3%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/spain.svg"
                    alt="Pin locating data centre Madrid, Spain" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Mumbai, India"
                  class="cdn-map-pin cdn-map-pin--india position-absolute" style="bottom: 43.6%; left: 67.8%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/india.svg"
                    alt="Pin locating data centre Mumbai, India" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Tokyo, Japan"
                  class="cdn-map-pin cdn-map-pin--red position-absolute" style="bottom: 55.5%; left: 86%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/japan.svg"
                    alt="Pin locating data centre Tokyo, Japan" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Hong Kong, Asia Pacific"
                  class="cdn-map-pin cdn-map-pin--red position-absolute" style="bottom: 47.7%; left: 79%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/hong-kong.svg"
                    alt="Pin locating data centre Hong Kong" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Singapore, Asia Pacific"
                  class="cdn-map-pin cdn-map-pin--red position-absolute" style="bottom: 32%; left: 78.5%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/singapore.svg"
                    alt="Pin locating data centre Singapore" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Sydney, Australia"
                  class="cdn-map-pin cdn-map-pin--australia position-absolute" style="bottom: 16.5%; left: 88.4%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/australia.svg"
                    alt="Pin locating data centre Sydney, Australia" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Cape Town, South Africa"
                  class="cdn-map-pin cdn-map-pin--green position-absolute" style="bottom: 20.5%; left: 52.1%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/south-africa.svg"
                    alt="Pin locating data centre South Africa" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="São Paulo, Brazil"
                  class="cdn-map-pin cdn-map-pin--brazil position-absolute" style="bottom: 25%; left: 33.9%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/brazil.svg"
                    alt="Pin locating data centre São Paulo, Brazil" loading="lazy"></div>
                <div data-toggle="tooltip" data-placement="top" title="Mexico City, Mexico"
                  class="cdn-map-pin cdn-map-pin--brazil position-absolute" style="bottom: 45%; left: 20%;"><img
                    width="40" height="40" src="/assets/images/components/cdn-map/mexico.svg"
                    alt="Pin locating data centre Mexico City, Mexico" loading="lazy"></div>
              </div>
            </div>
            <div>
              <div class="d-none d-lg-block container mt-3" hidetabs="true">
                <div class="mt-1 row">
                  <div class="col-md-9">
                    <div class="row">
                      <ul class="list-unstyled col-6 col-lg-4">
                        <li>
                          <h5 class="text-center">Europe</h5>
                          <ul>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/united-kingdom.svg" alt="Map of UK" width="20"
                                height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> London,
                                UK</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/ireland.svg" alt="Map of Ireland" width="20"
                                height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Dublin,
                                Ireland</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/france.svg" alt="Map of France" width="20"
                                height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Paris,
                                France</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/germany.svg" alt="Map of Germany" width="20"
                                height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Frankfurt,
                                Germany</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/italy.svg" alt="Map of Italy" width="20"
                                height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Milan,
                                Italy</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/switzerland.svg" alt="Map of Switzerland"
                                width="20" height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                Zurich, Switzerland</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/sweden.svg" alt="Map of Stockholm, Sweden"
                                width="20" height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                Stockholm, Sweden</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/poland.svg" alt="Map of Warsaw, Poland"
                                width="20" height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                Warsaw, Poland</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/finland.svg" alt="Map of Finland" width="20"
                                height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Hamina,
                                Finland</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/spain.svg" alt="Map of Spain" width="20"
                                height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Madrid,
                                Spain</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/netherlands.svg" alt="Map of Netherlands"
                                width="20" height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                Eemshaven, Netherlands</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/belgium.svg" alt="Map of Saint-Ghislain, Belgium"
                                width="20" height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                Saint-Ghislain, Belgium</span></li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="list-unstyled col-6 col-lg-4">
                        <li>
                          <h5 class="text-center">North America</h5>
                          <ul>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20" height="20"
                                loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Dallas TX, USA</span>
                            </li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20" height="20"
                                loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Ohio, USA</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20" height="20"
                                loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Northern California,
                                USA</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20" height="20"
                                loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Oregon, USA</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/canada.svg" alt="Map of Montreal, Quebec"
                                width="20" height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                Montreal, Quebec</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20" height="20"
                                loading="lazy" class="me-2"> <span class="text-dark fw-normal"> lowa, USA</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/canada.svg" alt="Map of Canada" width="20"
                                height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Toronto,
                                Ontario</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20" height="20"
                                loading="lazy" class="me-2"> <span class="text-dark fw-normal"> South Carolina,
                                USA</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20" height="20"
                                loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Virginia, USA</span>
                            </li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20" height="20"
                                loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Texas, USA</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20" height="20"
                                loading="lazy" class="me-2"> <span class="text-dark fw-normal"> California, USA</span>
                            </li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20" height="20"
                                loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Utah, USA</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20" height="20"
                                loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Nevada, USA</span></li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="list-unstyled col-6 col-lg-4">
                        <li>
                          <h5 class="text-center">Asia &amp; Oceania</h5>
                          <ul>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/india.svg" alt="Map of India" width="20"
                                height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Mumbai,
                                India</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/japan.svg" alt="Map of Japan" width="20"
                                height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Tokyo,
                                Japan</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/south-korea.svg" alt="Map of South Korea"
                                width="20" height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                Seoul, South Korea</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/japan.svg" alt="Map of Japan" width="20"
                                height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Osaka,
                                Japan</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/singapore.svg"
                                alt="Map of Singapore, Asia-Pacific" width="20" height="20" loading="lazy" class="me-2">
                              <span class="text-dark fw-normal"> Singapore, Asia-Pacific</span>
                            </li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/australia.svg" alt="Map of Sydney, Australia"
                                width="20" height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                Sydney, Australia</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/hong-kong.svg"
                                alt="Map of Hong Kong, Asia-Pacific" width="20" height="20" loading="lazy" class="me-2">
                              <span class="text-dark fw-normal"> Hong Kong, Asia-Pacific</span>
                            </li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/indonesia.svg" alt="Map of Jakarta, Indonesia"
                                width="20" height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                Jakarta, Indonesia</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/taiwan.svg" alt="Map of Taiwan, Asia-Pacific"
                                width="20" height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                Taiwan, Asia-Pacific</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/india.svg" alt="Map of India" width="20"
                                height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Delhi,
                                India</span></li>
                            <li class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/australia.svg" alt="Map of Australia" width="20"
                                height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Melbourne,
                                Australia</span></li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="list-unstyled col-6 col-lg-4"></ul>
                      <ul class="list-unstyled col-6 col-lg-4"></ul>
                      <ul class="list-unstyled col-6 col-lg-4"></ul>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="row">
                      <ul class="col-12 list-unstyled"></ul>
                      <ul class="col-12 list-unstyled"></ul>
                      <ul class="col-12 list-unstyled"></ul>
                      <ul class="col-12 list-unstyled">
                        <li>
                          <h5 class="text-center">Middle East</h5>
                          <ul><span class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/bahrain.svg" alt="Map of Bahrain, Middle East"
                                width="20" height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                Bahrain, Middle East</span></span><span
                              class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/uae.svg" alt="Map of United Arab Emirates"
                                width="20" height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                United Arab Emirates</span></span><span
                              class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/israel.svg" alt="Map of USA" width="20"
                                height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Tel Aviv,
                                Israel</span></span></ul>
                        </li>
                      </ul>
                      <ul class="col-12 list-unstyled">
                        <li>
                          <h5 class="text-center">South America</h5>
                          <ul><span class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/brazil.svg" alt="Map of São Paulo, Brazil"
                                width="20" height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                São Paulo, Brazil</span></span><span
                              class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/chile.svg" alt="Map of São Paulo, Brazil"
                                width="20" height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                Santiago, Chile</span></span></ul>
                        </li>
                      </ul>
                      <ul class="col-12 list-unstyled">
                        <li>
                          <h5 class="text-center">Africa</h5>
                          <ul><span class="rounded-pill fs-14 w-100 px-2 py-1 mb-1 text-left d-flex align-items-center"
                              style="background: rgb(238, 238, 238);"><img
                                src="/assets/images/components/cdn-map/south-africa.svg" alt="Map of Cape Town, SA"
                                width="20" height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                Cape Town, SA</span></span></ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>   
              </div>
              <div class="d-lg-none mt-3" id="mobile-cdn">
                <div class="container px-3">
                  <div class="row">
                    <div class="col-12">
                      <div id="accordion">
                        <div class="mt-1 row">
                          <ul class="list-unstyled col-12 mb-2">
                            <li>
                              <div class="content-tab mb-2 "><a data-bs-toggle="collapse" href="#collapseOne-0"
                                  aria-expanded="true" aria-controls="collapseOne-0">Europe
                                </a> <i class="fas fa-angle-down ms-1"></i></div>
                              <ul id="collapseOne-0" aria-labelledby="NaN" data-bs-parent="#accordion"
                                class="collapse show">
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/united-kingdom.svg" alt="Map of UK"
                                    width="20" height="20" loading="lazy" class="me-2"> <span
                                    class="text-dark fw-normal"> London, UK</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/ireland.svg" alt="Map of Ireland" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Dublin,
                                    Ireland</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/france.svg" alt="Map of France" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Paris,
                                    France</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/germany.svg" alt="Map of Germany" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                    Frankfurt, Germany</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/italy.svg" alt="Map of Italy" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Milan,
                                    Italy</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/switzerland.svg" alt="Map of Switzerland"
                                    width="20" height="20" loading="lazy" class="me-2"> <span
                                    class="text-dark fw-normal"> Zurich, Switzerland</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/sweden.svg" alt="Map of Stockholm, Sweden"
                                    width="20" height="20" loading="lazy" class="me-2"> <span
                                    class="text-dark fw-normal"> Stockholm, Sweden</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/poland.svg" alt="Map of Warsaw, Poland"
                                    width="20" height="20" loading="lazy" class="me-2"> <span
                                    class="text-dark fw-normal"> Warsaw, Poland</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/finland.svg" alt="Map of Finland" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Hamina,
                                    Finland</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/spain.svg" alt="Map of Spain" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Madrid,
                                    Spain</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/netherlands.svg" alt="Map of Netherlands"
                                    width="20" height="20" loading="lazy" class="me-2"> <span
                                    class="text-dark fw-normal"> Eemshaven, Netherlands</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/belgium.svg"
                                    alt="Map of Saint-Ghislain, Belgium" width="20" height="20" loading="lazy"
                                    class="me-2"> <span class="text-dark fw-normal"> Saint-Ghislain, Belgium</span></li>
                              </ul>
                            </li>
                          </ul>
                          <ul class="list-unstyled col-12 mb-2">
                            <li>
                              <div class="content-tab mb-2 "><a data-bs-toggle="collapse" href="#collapseOne-1"
                                  aria-expanded="true" aria-controls="collapseOne-1">North America
                                </a> <i class="fas fa-angle-down ms-1"></i></div>
                              <ul id="collapseOne-1" aria-labelledby="NaN" data-bs-parent="#accordion" class="collapse">
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Dallas
                                    TX, USA</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Ohio,
                                    USA</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Northern
                                    California, USA</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Oregon,
                                    USA</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/canada.svg" alt="Map of Montreal, Quebec"
                                    width="20" height="20" loading="lazy" class="me-2"> <span
                                    class="text-dark fw-normal"> Montreal, Quebec</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> lowa,
                                    USA</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/canada.svg" alt="Map of Canada" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Toronto,
                                    Ontario</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> South
                                    Carolina, USA</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                    Virginia, USA</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Texas,
                                    USA</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal">
                                    California, USA</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Utah,
                                    USA</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/usa.svg" alt="Map of USA" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Nevada,
                                    USA</span></li>
                              </ul>
                            </li>
                          </ul>
                          <ul class="list-unstyled col-12 mb-2">
                            <li>
                              <div class="content-tab mb-2 "><a data-bs-toggle="collapse" href="#collapseOne-2"
                                  aria-expanded="true" aria-controls="collapseOne-2">Asia &amp; Oceania
                                </a> <i class="fas fa-angle-down ms-1"></i></div>
                              <ul id="collapseOne-2" aria-labelledby="NaN" data-bs-parent="#accordion" class="collapse">
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/india.svg" alt="Map of India" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Mumbai,
                                    India</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/japan.svg" alt="Map of Japan" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Tokyo,
                                    Japan</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/south-korea.svg" alt="Map of South Korea"
                                    width="20" height="20" loading="lazy" class="me-2"> <span
                                    class="text-dark fw-normal"> Seoul, South Korea</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/japan.svg" alt="Map of Japan" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Osaka,
                                    Japan</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/singapore.svg"
                                    alt="Map of Singapore, Asia-Pacific" width="20" height="20" loading="lazy"
                                    class="me-2"> <span class="text-dark fw-normal"> Singapore, Asia-Pacific</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/australia.svg" alt="Map of Sydney, Australia"
                                    width="20" height="20" loading="lazy" class="me-2"> <span
                                    class="text-dark fw-normal"> Sydney, Australia</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/hong-kong.svg"
                                    alt="Map of Hong Kong, Asia-Pacific" width="20" height="20" loading="lazy"
                                    class="me-2"> <span class="text-dark fw-normal"> Hong Kong, Asia-Pacific</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/indonesia.svg"
                                    alt="Map of Jakarta, Indonesia" width="20" height="20" loading="lazy" class="me-2">
                                  <span class="text-dark fw-normal"> Jakarta, Indonesia</span>
                                </li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/taiwan.svg" alt="Map of Taiwan, Asia-Pacific"
                                    width="20" height="20" loading="lazy" class="me-2"> <span
                                    class="text-dark fw-normal"> Taiwan, Asia-Pacific</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/india.svg" alt="Map of India" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Delhi,
                                    India</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/australia.svg" alt="Map of Australia"
                                    width="20" height="20" loading="lazy" class="me-2"> <span
                                    class="text-dark fw-normal"> Melbourne, Australia</span></li>
                              </ul>
                            </li>
                          </ul>
                          <ul class="list-unstyled col-12 mb-2">
                            <li>
                              <div class="content-tab mb-2 "><a data-bs-toggle="collapse" href="#collapseOne-3"
                                  aria-expanded="true" aria-controls="collapseOne-3">Middle East
                                </a> <i class="fas fa-angle-down ms-1"></i></div>
                              <ul id="collapseOne-3" aria-labelledby="NaN" data-bs-parent="#accordion" class="collapse">
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/bahrain.svg"
                                    alt="Map of Bahrain, Middle East" width="20" height="20" loading="lazy"
                                    class="me-2"> <span class="text-dark fw-normal"> Bahrain, Middle East</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/uae.svg" alt="Map of United Arab Emirates"
                                    width="20" height="20" loading="lazy" class="me-2"> <span
                                    class="text-dark fw-normal"> United Arab Emirates</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/israel.svg" alt="Map of USA" width="20"
                                    height="20" loading="lazy" class="me-2"> <span class="text-dark fw-normal"> Tel
                                    Aviv, Israel</span></li>
                              </ul>
                            </li>
                          </ul>
                          <ul class="list-unstyled col-12 mb-2">
                            <li>
                              <div class="content-tab mb-2 "><a data-bs-toggle="collapse" href="#collapseOne-4"
                                  aria-expanded="true" aria-controls="collapseOne-4">South America
                                </a> <i class="fas fa-angle-down ms-1"></i></div>
                              <ul id="collapseOne-4" aria-labelledby="NaN" data-bs-parent="#accordion" class="collapse">
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/brazil.svg" alt="Map of São Paulo, Brazil"
                                    width="20" height="20" loading="lazy" class="me-2"> <span
                                    class="text-dark fw-normal"> São Paulo, Brazil</span></li>
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/chile.svg" alt="Map of São Paulo, Brazil"
                                    width="20" height="20" loading="lazy" class="me-2"> <span
                                    class="text-dark fw-normal"> Santiago, Chile</span></li>
                              </ul>
                            </li>
                          </ul>
                          <ul class="list-unstyled col-12 mb-2">
                            <li>
                              <div class="content-tab mb-2 "><a data-bs-toggle="collapse" href="#collapseOne-5"
                                  aria-expanded="true" aria-controls="collapseOne-5">Africa
                                </a> <i class="fas fa-angle-down ms-1"></i></div>
                              <ul id="collapseOne-5" aria-labelledby="NaN" data-bs-parent="#accordion" class="collapse">
                                <li class="rounded-pill px-2 py-1 mb-1 text-left d-flex align-items-center"
                                  style="background: rgb(238, 238, 238);"><img
                                    src="/assets/images/components/cdn-map/south-africa.svg" alt="Map of Cape Town, SA"
                                    width="20" height="20" loading="lazy" class="me-2"> <span
                                    class="text-dark fw-normal"> Cape Town, SA</span></li>
                              </ul>
                            </li>
                          </ul>
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </section>
      </div>
    </section>


    <!-- mapa fim -->
    <!-- ***** FEATURES ***** -->
    <svg class="division-ontop bg-white d-none" viewBox="0 0 1440 150">
      <path fill="#fdd700" fill-opacity="1"
        d="M0,96L120,85.3C240,75,480,53,720,53.3C960,53,1200,75,1320,85.3L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
      </path>
    </svg>
    <!-- <section class="services sec-normal sec-bg4">
    <div class="container">
      <div class="service-wrap">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2 class="section-heading">Why Choose Antler?</h2>
            <p class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
          </div>
          <div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="service-section bg-colorstyle">
              <div class="plans badge feat bg-purple">Premium</div>
              <div class="lazyload">
                < !-- <svg class="svg" viewBox="0 0 32 32" width="60" height="60"><path fill="#5e686c" d="M12 20.76a1.72 1.72 0 1 1 0-3.43 1.72 1.72 0 0 1 0 3.43zm0-2.57c-.48 0-.86.38-.86.86s.38.86.85.86a.86.86 0 0 0 0-1.72zm8.54 2.57a1.71 1.71 0 1 1 0-3.43 1.71 1.71 0 0 1 0 3.43zm0-2.57c-.47 0-.85.38-.85.86s.38.86.85.86a.86.86 0 0 0 0-1.72z"/><path id="svg-ico" fill="#ee5586" d="M18.5 28.79a2.15 2.15 0 1 1 0-4.3 2.15 2.15 0 0 1 0 4.3zm0-3.43a1.29 1.29 0 0 0 0 2.58 1.29 1.29 0 0 0 0-2.58z"/><path fill="#5e686c" d="M24.83 15.38a17.47 17.47 0 0 1-12.75-5.37c-.16-.2-.26-.18-.37-.02L7.1 15.2a.43.43 0 0 1-.6.04.43.43 0 0 1-.04-.6l4.57-5.2c.37-.5 1.29-.53 1.7.02.03.03 4.8 5.45 13 5.03.26-.01.44.17.45.4s-.17.44-.4.46l-.96.02zM16.37 31.8c-6.05 0-10.44-4.55-10.44-10.83a.43.43 0 0 1 .86 0c0 5.78 4.03 9.98 9.58 9.98s9.58-4.05 9.58-9.63a.43.43 0 0 1 .87 0A10.25 10.25 0 0 1 16.37 31.8z"/><path id="svg-ico" fill="#ee5586" d="M28.79 21.72h-1.71c-.93 0-1.72-.79-1.72-1.71v-6c0-.93.8-1.72 1.72-1.72h1.7c.94 0 1.72.8 1.72 1.72v6c0 .93-.79 1.7-1.71 1.7zm-1.71-8.57c-.45 0-.86.4-.86.86v6c0 .45.4.85.85.85h1.72c.45 0 .85-.4.85-.85v-6c0-.45-.4-.86-.85-.86h-1.72z"/><path id="svg-ico" fill="#ee5586" d="M20.3 27.06a.43.43 0 0 1 0-.86h1.6c.13-.01 4.05-.35 4.05-5.13a.43.43 0 0 1 .86 0c0 5.6-4.84 5.98-4.89 5.99h-1.61zM5.5 21.75H3.77c-.93 0-1.72-.79-1.72-1.73V14c0-.93.79-1.73 1.73-1.73h.51A12.17 12.17 0 0 1 16.46.2c6.7 0 12.15 5.61 12.15 12.5a.43.43 0 0 1-.87 0c0-6.42-5.06-11.65-11.29-11.65-6.2 0-11.26 5.03-11.3 11.23h.35c.93 0 1.73.79 1.73 1.72v6.04c-.01.93-.8 1.72-1.73 1.72zm-1.73-8.63a.9.9 0 0 0-.86.87v6.03c0 .45.41.87.86.87H5.5a.9.9 0 0 0 .87-.87V14a.9.9 0 0 0-.87-.87H3.77z"/></svg> -- >
              </div>
              <div class="title mergecolor">Support 24x7x365</div>
              <p class="subtitle seccolor">
                Excepteur sint occaecat cupidatat non proident voluptate
              </p>
              <a href="#" class="btn btn-default-yellow-fill" title="Read More">Read More</a>
            </div>
          </div>
          <div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-duration="800">
            <div class="service-section bg-colorstyle">
              <div class="plans badge feat bg-purple">Control Panel</div>
              <div class="lazyload">
                < !-- <svg class="svg" viewBox="0 0 32 32" width="60" height="60"><path id="svg-ico" fill="#ee5586" d="M11.41 13.74H5.47a.42.42 0 0 0-.42.43v10.17c0 .24.19.43.42.43h5.94c.24 0 .43-.19.43-.43V14.17a.42.42 0 0 0-.43-.43zM11 23.92H5.9v-9.33h5.09v9.33z"/><path fill="#5e686b" d="M31.72 10.2V4.03a.42.42 0 0 0-.43-.42H.71a.42.42 0 0 0-.42.42V28.5c0 .24.19.43.42.43H31.3c.23 0 .42-.19.42-.43V10.2zM1.13 4.46h29.75v5.27H1.13V4.47zm0 23.62v-17.5h29.75v17.5H1.13z"/><path fill="#5e686b" d="M5.19 5.3a1.7 1.7 0 1 0 0 3.4 1.7 1.7 0 0 0 0-3.4zm0 2.54a.85.85 0 0 1-.85-.85.85.85 0 0 1 1.7.01c0 .47-.38.84-.85.84zM10 5.3a1.7 1.7 0 1 0 0 3.4 1.7 1.7 0 0 0 0-3.4zm0 2.54a.85.85 0 1 1 0-1.7.85.85 0 0 1 0 1.7zm4.8-2.54a1.7 1.7 0 1 0 0 3.4 1.7 1.7 0 0 0 0-3.4zm0 2.54a.85.85 0 1 1 0-1.7.85.85 0 0 1 0 1.7z"/><path id="svg-ico" fill="#ee5586" d="M26.18 17.2H16.01c-.24 0-.43.19-.43.42s.19.43.43.43h10.17c.24 0 .43-.19.43-.42 0-.24-.2-.43-.43-.43zm0 3.29H16.01a.43.43 0 0 0 0 .85h10.17a.42.42 0 1 0 0-.85zm-2.47 3.29h-7.64c-.23 0-.42.19-.42.43s.19.42.42.42h7.64c.23 0 .42-.19.42-.42a.42.42 0 0 0-.42-.43z"/></svg> -- >
              </div>
              <div class="title mergecolor">Free WHM &amp; cPanel</div>
              <p class="subtitle seccolor">
                Excepteur sint occaecat cupidatat non proident dolor
              </p>
              <a href="#" class="btn btn-default-yellow-fill" title="Read More">Read More</a>
            </div>
          </div>
          <div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-duration="900">
            <div class="service-section bg-colorstyle">
              <div class="lazyload">
                < !-- <svg class="svg" viewBox="0 0 32 32" width="60" height="60"><path fill="#5e686c" d="M5.76 17.57a.42.42 0 0 1-.42-.41v-.4l-.71-.7-2.84-.01a.43.43 0 0 1-.38-.26l-.84-2.05a.43.43 0 0 1 .08-.45l1.97-2.08v-.98L.65 8.2a.41.41 0 0 1-.1-.46l.86-2.04a.42.42 0 0 1 .37-.25l2.86-.08.7-.7.03-2.83c0-.17.1-.32.26-.39L7.66.62a.43.43 0 0 1 .45.08l2.08 1.98h1l2-1.99c.12-.12.3-.15.46-.08l2.04.85c.15.06.25.2.25.37l.08 2.86.7.7 2.83.02c.17 0 .32.1.39.26l.84 2.05c.06.15.03.33-.09.45l-1.97 2.07v.87a.42.42 0 0 1-.84 0v-1.04c0-.1.04-.21.12-.29l1.9-2-.63-1.53-2.73-.02a.4.4 0 0 1-.3-.12l-.93-.94a.45.45 0 0 1-.12-.29l-.07-2.75-1.53-.64-1.94 1.91a.52.52 0 0 1-.3.12h-1.33a.44.44 0 0 1-.29-.12l-2-1.9-1.53.64-.02 2.72a.4.4 0 0 1-.13.3l-.94.94a.43.43 0 0 1-.29.12l-2.75.07-.64 1.53 1.91 1.94c.08.08.12.19.12.3v1.32c0 .1-.05.22-.12.29l-1.9 2 .63 1.54 2.73.02a.4.4 0 0 1 .3.12l.94.95c.07.07.12.18.12.28l.02.56c0 .23-.18.42-.42.43z"/><path fill="#5e686c" d="M10.67 14.51a3.76 3.76 0 0 1-3.48-5.24 3.78 3.78 0 1 1 3.48 5.24zm.01-6.72a2.94 2.94 0 1 0-.01 5.88 2.94 2.94 0 0 0 .01-5.88zm4.42 13.44a.42.42 0 0 1-.42-.42l-.01-.45v-.08a6.73 6.73 0 0 1 6.55-5.94c.22 0 .42.18.42.42a.4.4 0 0 1-.4.42c-2.9.04-5.48 2.32-5.74 5.1l.01.01.01.52c0 .23-.19.42-.42.42z"/><path id="svg-ico" fill="#ee5586" d="M21.09 31.31H7.99a7.48 7.48 0 0 1 0-14.95.42.42 0 0 1 0 .84 6.64 6.64 0 0 0 0 13.28h13.1a9.67 9.67 0 0 0 .07-19.33c-4.7.03-9.73 3.06-9.73 9.66a.42.42 0 0 1-.84 0c0-6.81 5.24-10.42 10.47-10.5h.22a10.51 10.51 0 0 1-.2 21z"/></svg> -- >
              </div>
              <div class="title mergecolor">Perfomance Optimized</div>
              <p class="subtitle seccolor">
                Excepteur sint occaecat cupidatat non proident voluptate
              </p>
              <a href="#" class="btn btn-default-yellow-fill" title="Read More">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
    <!--
      cards inicio
    -->
    <section class="sec-bg2">
      <?php echo getSmallCards(); ?>
    </section>
    <!--
      cards fim
    -->
    <!-- mural -->

    <section class="py-5">
      <div class="container pt-3 pb-35">
        <div class="row gx-sm-4 gy-3 mt-0">
          <?php echo getMural();?>
  
        </div>
      </div>
    </section>
    <!--mural fim -->
    <!-- ***** CASE STUDY ***** -->
    <section class="casestudy sec-bg2 bg-colorstyle pt-150">
      <div class="container">
        <div class="sec-main sec-up bg-white mb-0 nomargin p-80 br-12">
          <div class="lazyload">
            <!-- <svg class="svg img-casestudy d-none767" width="450" height="400" x="0" y="0" style="enable-background:new 0 0 543.5 398.4" version="1.1" viewBox="0 0 544 398"><style>.ranking0{fill:none;stroke:gray;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.ranking1{stroke:#ee5586;stroke-width:2}.ranking1,.ranking2,.ranking3{fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.ranking2{stroke:gray;stroke-dasharray:5}.ranking3{stroke:#ee5586;stroke-width:3}</style><path d="m456 286 61 18-244 90-244-90 61-18" class="ranking0"/><path id="svg-concept" d="m320 188 223 67-270 98L3 255l169-51" class="ranking1"/><path d="M373 255h164m-525 0h185m76 95v-67" class="ranking2"/><g><path id="svg-concept" d="M263 113V31l-45-16-44 16v215l44 17 9-4M174 31l44 17m0 0 45-17m-45 17v215" class="ranking3"/><animate attributeName="opacity" begin="0s" dur="2s" repeatCount="indefinite" values="0;1;0"/></g><path d="M284 286v-63l45-16 44 16v63l-44 16-45-16z" class="ranking0"/><path d="m329 207-45 16 45 16" class="ranking0"/><path d="m274 282-45-15V127l45-16 44 16v84m11 28 44-16m-44 16v63M229 127l45 16m44-16-44 16" class="ranking0"/><path d="M274 143v139l10-5" class="ranking0"/></svg> -->
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-9">
              <div class="slider-container slider-filter">
                <div class="slider-wrap">
                  <div class="swiper-container main-slider" data-autoplay="4000" data-touch="1" data-mouse="0"
                    data-slides-per-view="responsive" data-loop="1" data-speed="1200" data-mode="horizontal"
                    data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <h3 class="author">Everth Group</h3>
                        <div class="content-info text-muted">
                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totamer rem aperiam, eaque ipsa quae ab illo.</p>
                          <div class="mb-3"> Michael Jones - Executive Director</div>
                          <a href="./assets/casestudy/casestudy-everthgroup.pdf"
                            class="btn btn-default-yellow-fill mb-2" title="Case Study">Case Study Download</a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <h3 class="author">Growtop Company</h3>
                        <div class="content-info text-muted">
                          <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                            pain was born and I will give you a complete.</p>
                          <div class="mb-3"> Matt Radford - President &amp; Managing Director"</div>
                          <a href="./assets/casestudy/casestudy-growtop.pdf" class="btn btn-default-yellow-fill mb-2"
                            title="Case Study">Case Study Download</a>
                        </div>
                      </div>
                    </div>
                    <div class="pagination vertical-mode pagination-index"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** HELP ***** -->
    <section class="services help sec-bg2 pt-4 pb-80 bg-colorstyle">
      <div class="container">
        <div class="service-wrap">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="help-container bg-seccolorstyle">
                <a href="#" class="help-item" title="Live Chat">
                  <div class="img">
                    <div class="lazyload">
                      <!-- <svg class="svg ico" viewBox="0 0 32 32" width="60" height="60"><path fill="#5e686c" d="M12.82 9.14a.46.46 0 0 1-.46-.43c-.18-2.55-2.62-4.55-5.54-4.55a.46.46 0 0 1 0-.91c3.4 0 6.24 2.37 6.46 5.4a.46.46 0 0 1-.43.5l-.03-.01z"/><path fill="#5e686c" d="M3.4 14.99a.65.65 0 0 1-.66-.64l-.15-.94A5.53 5.53 0 0 1 .36 9.03c0-3.2 2.9-5.79 6.47-5.79.26 0 .46.21.46.46 0 .26-.2.46-.46.46-3.06 0-5.55 2.18-5.55 4.87 0 1.45.73 2.81 2 3.75.1.06.17.18.19.3l.14.87.87-.37c.1-.05.22-.05.33-.02 1.07.37 2.27.43 3.37.2a.46.46 0 0 1 .2.9c-1.2.25-2.51.2-3.7-.16l-1 .43a.67.67 0 0 1-.27.06z"/><path id="svg-ico" fill="#ee5586" d="M26.22 28.8a.88.88 0 0 1-.43-.13l-2.08-.88c-1.37.44-2.8.67-4.24.67-6.77 0-12.28-4.9-12.28-10.94s5.5-10.94 12.28-10.94c6.77 0 12.28 4.9 12.28 10.94 0 3.24-1.59 6.28-4.37 8.37l-.34 2.14c0 .4-.36.76-.82.76zm-2.49-1.96c.06 0 .13 0 .18.03l2.25.97.35-2.28a.47.47 0 0 1 .18-.3 9.58 9.58 0 0 0 4.14-7.74c0-5.52-5.1-10.01-11.36-10.01S8.1 12 8.1 17.52s5.1 10.02 11.36 10.02a12.78 12.78 0 0 0 4.26-.7z"/><path fill="#5e686c" d="M24.56 14.99H13.83c-.25 0-.45-.2-.45-.46s.2-.45.45-.45h10.73c.26 0 .46.2.46.45s-.2.46-.46.46zm0 3.19H13.83c-.25 0-.45-.2-.45-.45s.2-.46.45-.46h10.73c.26 0 .46.2.46.46s-.2.45-.46.45zm0 3.13H13.83a.45.45 0 0 1-.45-.45c0-.26.2-.46.45-.46h10.73c.26 0 .46.2.46.46 0 .25-.2.45-.46.45z"/></svg> -->
                    </div>
                  </div>
                  <div class="inform">
                    <div class="title mergecolor">Live Chat</div>
                    <div class="description seccolor">At vero eos et accusamus et iusto odio dignissimos.</div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="help-container bg-seccolorstyle">
                <a href="contact" class="help-item" title="Contact Us">
                  <div class="img">
                    <div class="lazyload">
                      <!-- <svg class="svg ico" viewBox="0 0 32 32" width="60" height="60"><path fill="#5e686c" d="M29.6 31.9H2.4A2 2 0 0 1 .5 30V12c0-1 .9-1.8 1.9-1.8.2 0 .4.2.4.4s-.2.5-.4.5a1 1 0 0 0-1 1V30c0 .6.4 1 1 1h27.2c.6 0 1-.4 1-1V12c0-.5-.4-1-1-1-.2 0-.4-.1-.4-.4s.2-.4.4-.4c1 0 1.9.9 1.9 1.9v18c0 1-.8 1.8-1.9 1.8z"/><path fill="#5e686c" d="M1.7 31.1h-.3a.4.4 0 0 1 0-.6l10-13c.1-.1.4-.2.6 0 .2.1.2.4 0 .6L2 31l-.3.1zm28.7 0L30 31 20 18a.4.4 0 0 1 0-.5c.2-.2.5-.1.7 0l10 13v.5l-.3.1z"/><path id="svg-ico" fill="#ee5586" d="M16 21.1h-.2L2 11a.4.4 0 0 1 0-.6c0-.2.4-.2.6 0L16 20.1l13.4-9.9h.6c.2 0 0 .6-.1.7L16.3 21l-.3.1z"/><path id="svg-ico" fill="#ee5586" d="M29.6 11h-.2L16 1 2.6 11c-.1.1-.4 0-.5-.1v-.6L15.8.3h.5l13.6 10c.2.1.2.4 0 .6 0 .1-.1.2-.3.2z"/></svg> -->
                    </div>
                  </div>
                  <div class="inform">
                    <div class="title mergecolor">Send Ticket</div>
                    <div class="description seccolor">Lorem Ipsum is simply dummy text printing.</div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="help-container bg-seccolorstyle">
                <a href="knowledgebase-list" class="help-item" title="Knowledge List">
                  <div class="img">
                    <div class="lazyload">
                      <!-- <svg class="svg ico" viewBox="0 0 32 32" width="60" height="60"><path fill="#5e686c" d="M15.09 30.07c-.22 0-.45-.05-.67-.14-.52-.24-1.98-.84-2.7-.92a48.8 48.8 0 0 0-4.4-.15c-2.64 0-5.18.1-5.2.1a1.9 1.9 0 0 1-1.98-1.91V3.9c0-1.08.88-1.96 1.96-1.96h12.36c1.08 0 1.96.88 1.96 1.96v24.7c0 .87-.55 1.47-1.33 1.47zm-7.77-2.05c1.92 0 3.43.06 4.47.16 1.02.1 2.89.94 2.96.98.11.05.23.07.33.07.44 0 .5-.44.5-.64V3.9c0-.62-.5-1.13-1.12-1.13H2.1c-.62 0-1.12.51-1.12 1.13v23.15c0 .6.47 1.07 1.06 1.07.07 0 2.63-.1 5.28-.1z"/><path id="svg-ico" fill="#ee5586" d="M16.9 30.07c-.26 0-.5-.07-.72-.21a1.5 1.5 0 0 1-.6-1.27h.84c0 .27.08.47.23.57s.36.1.6 0c.07-.04 1.94-.88 2.95-.98 3.16-.32 9.44-.07 9.71-.06a1.05 1.05 0 0 0 1.1-1.07V3.9c0-.62-.5-1.12-1.12-1.12H17.54c-.62 0-1.12.5-1.12 1.12h-.84c0-1.08.88-1.96 1.96-1.96H29.9c1.08 0 1.96.88 1.96 1.96v23.15a1.9 1.9 0 0 1-1.97 1.91c-.07 0-6.5-.25-9.6.05-.73.08-2.2.68-2.7.92-.23.1-.47.14-.68.14z"/></svg> -->
                    </div>
                  </div>
                  <div class="inform">
                    <div class="title mergecolor">Knowledge base</div>
                    <div class="description seccolor">On the other hand, we denounce with righteous.</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** UPLOADED FOOTER FROM FOOTER.HTML ***** -->
    <footer id="footer"> </footer>
  </div>
  <!-- ***** BUTTON GO TOP ***** -->
  <a href="#0" class="cd-top" title="Go Top"> <i class="fas fa-angle-up"></i> </a>
</body>

</html>