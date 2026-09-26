<?php
$base=''; $pageTitle='Portfolio'; require 'includes/data.php'; require 'includes/header.php';
$showcase = [

    [
        'Digital Experiences That Work',
        'Website Design',
        'Modern, responsive websites designed to present businesses clearly and professionally.',
        'assets/images/webdesign1.jpg',
        '01'
    ],

    [
        'Commerce That Converts',
        'E-Commerce',
        'Product discovery, mobile-first shopping and a streamlined checkout experience built for everyday customers.',
        'assets/images/ecommerce.jpg',
        '02'
    ],

    [
        'Business In Your Pocket',
        'Mobile Experience',
        'Clean mobile interfaces that keep important actions, services and customer journeys simple.',
        'assets/images/mobile.jpg',
        '03'
    ]

];
?>
<section class="pf-hero" id="top">
  <div class="pf-hero-media"><img src="assets/images/portfolio.jpg" alt="Creative digital portfolio workspace"></div>
  <div class="container pf-hero-inner">
    <div class="pf-hero-copy"><span class="eyebrow light">SELECTED DIGITAL WORK</span><h1>Ideas turned into <em>digital experiences.</em></h1><p>Websites, commerce, applications and campaigns shaped around real business goals.</p><a href="#work" class="pf-scroll">Explore work <i class="fa-solid fa-arrow-down"></i></a></div>
    <div class="pf-hero-number"><strong>06</strong><span>project directions<br>in this showcase</span></div>
  </div>
  <div class="pf-marquee"><div class="pf-marquee-track"><span>WEB DESIGN</span><i>✦</i><span>E-COMMERCE</span><i>✦</i><span>MOBILE UI</span><i>✦</i><span>BUSINESS SOFTWARE</span><i>✦</i><span>DIGITAL GROWTH</span><i>✦</i><span>WEB APPS</span><i>✦</i><span>WEB DESIGN</span><i>✦</i><span>E-COMMERCE</span><i>✦</i><span>MOBILE UI</span><i>✦</i></div></div>
</section>

<section class="pf-intro" id="work"><div class="container pf-intro-grid"><div><span class="eyebrow">OUR APPROACH TO WORK</span><h2>Every project gets its own visual language.</h2></div><div><p>Instead of forcing every business into the same layout, we combine brand, content, usability and technology to create a digital experience that feels specific to the project.</p><div class="pf-mini-stats"><span><b>20+</b> years experience</span><span><b>1000+</b> establishments</span></div></div></div></section>

<section class="pf-featured">
 <div class="container">
  <?php foreach($showcase as $i=>$p): ?>
  <article class="pf-project <?= $i%2?'reverse':'' ?> reveal">
    <div class="pf-project-image"><img src="<?= $p[3] ?>" alt="<?= htmlspecialchars($p[0]) ?>" loading="lazy"><span class="pf-project-no"><?= $p[4] ?></span><div class="pf-image-line"></div></div>
    <div class="pf-project-copy"><span class="pf-category"><?= $p[1] ?></span><h2><?= $p[0] ?></h2><p><?= $p[2] ?></p><div class="pf-tags"><span>Strategy</span><span>Design</span><span>Development</span></div><a href="quote.php">Build something similar <i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
  </article>
  <?php endforeach; ?>
 </div>
</section>

<section class="pf-reel">

    <div class="container">
        <div class="pf-reel-head">
            <div>
                <span class="eyebrow light">MORE DIRECTIONS</span>
                <h2>A moving reel of digital possibilities.</h2>
            </div>
            <p>Hover over the reel to pause and explore each direction.</p>
        </div>
    </div>

    <div class="pf-reel-window">
        <div class="pf-reel-track">

            <?php for($r=0; $r<2; $r++): ?>

                <?php foreach($portfolio as $i=>$item): ?>

                    <?php if($i < 7): ?>

                        <article class="pf-reel-card">

                            <img
                                src="assets/images/portfolio<?= $i + 1 ?>.jpg"
                                alt="<?= htmlspecialchars($item[0]) ?>"
                                loading="lazy"
                            >

                            <div>
                                <span><?= htmlspecialchars($item[1]) ?></span>
                                <h3><?= htmlspecialchars($item[0]) ?></h3>
                            </div>

                        </article>

                    <?php endif; ?>

                <?php endforeach; ?>

            <?php endfor; ?>

        </div>
    </div>

</section>

<section class="pf-process"><div class="container"><div class="pf-process-title"><span class="eyebrow">FROM IDEA TO LAUNCH</span><h2>Good work is built in layers.</h2></div><div class="pf-process-grid"><article><b>01</b><i class="fa-regular fa-comments"></i><h3>Discover</h3><p>Understand the business, audience and goal.</p></article><article><b>02</b><i class="fa-solid fa-compass-drafting"></i><h3>Shape</h3><p>Turn the brief into a clear visual direction.</p></article><article><b>03</b><i class="fa-solid fa-code"></i><h3>Build</h3><p>Develop responsive, practical experiences.</p></article><article><b>04</b><i class="fa-solid fa-rocket"></i><h3>Launch</h3><p>Test, refine and move confidently to production.</p></article></div></div></section>
<?php require 'includes/footer.php'; ?>
