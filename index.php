<?php include 'include/header.php' ?>
<title>Home </title>
</head>

<body class="imagetag">
    <?php include 'include/menu.php' ?>
    <section class="hero-slider">
        <img src="images/banner-img.jpg" alt="" class="w-100">
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <a href="#"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
        <div class="position-absolute w-100 bottom-0">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="moving-waves">
                    <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40)" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
                    <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
                    <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
                    <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1)" />
                </g>
            </svg>
        </div>
    </section>
    <section class="member-main">
       <div class="after-bg">
         <img src="images/after-bg-01.png" alt="">
       </div>
       <div class="container-wrap">
        <div class="row">
          <div class="col-lg-6 col-sm-6 col-xs-12">
             <article>
                <h5>Northstar Yacht Club</h5>
                <h2>A WELCOMING GOLF & BOATING COMMUNITY IN VERO BEACH, THE HEART OF FLORIDA’S TREASURE COAST.</h2>
                <p>Established over 40 years ago, Northstar Yacht Club is one of Vero Beach’s most prestigious, private clubs. Located on the shores of the Indian River Lagoon, a piece of paradise awaits you.</p>
                <h5 class="mission">Our Mission</h5>
                <p>Provide a memorable and positive experience for our members via exemplary service, first-class facilities, engaging programs, and dedicated and friendly staff within an environment of mutual respect and open communication. Respect and enhance the beauty of our riverfront and mainland campuses while providing excellence in dining, athletic, recreational, boating, wellness, and social amenities within a framework of fiscal stability.</p>
            </article>
          </div>
        </div>
       </div>
    </section>

    <?php include 'include/footer.php' ?>