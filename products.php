<?php
$base=''; $pageTitle='Our Products'; require 'includes/data.php'; require 'includes/header.php';
$productVisuals=['service-01.jpg','service-02.jpg','service-03.jpg','service-04.jpg','service-05.jpg','service-06.jpg','service-07.jpg','service-08.jpg','service-09.jpg'];
?>
<main class="products2">
<section class="p2-hero">
 <div class="p2-hero-bg"><span></span><span></span><span></span></div><div class="p2-shade"></div>
 <div class="container p2-hero-inner"><div class="p2-copy reveal"><span class="p2-kicker">BUSINESS SOFTWARE • BEENET INFOTECH</span><h1>Smart software for <em>everyday business.</em></h1><p>Simple billing, inventory and management tools built to keep your work faster and organized.</p><div class="p2-actions"><a href="#solutions" class="btn btn-primary">Explore Products <i class="fa-solid fa-arrow-down"></i></a><a href="contact.php" class="p2-link">Talk to us <i class="fa-solid fa-arrow-right"></i></a></div></div>
 </div>
</section>
<section class="p2-ticker"><div class="p2-ticker-track"><?php for($r=0;$r<2;$r++): foreach(['BILLING SOFTWARE','INVENTORY','BARCODE','CUSTOMER POINTS','MULTI USER','REPORTING','REGIONAL LANGUAGES'] as $t): ?><span><?=$t?> <i>✦</i></span><?php endforeach; endfor;?></div></section>

<section class="section p2-intro"><div class="container p2-intro-grid"><div class="reveal"><span class="eyebrow">MADE FOR REAL BUSINESS</span><h2>Less complexity. More control.</h2><p class="lead">From a busy retail counter to wholesale distribution, the right software should make daily work easier—not add more steps.</p><p>Beenet business software brings billing, stock, customers and reports into a practical workflow. Choose a solution for your business type and adapt it around the way your team works.</p><div class="p2-feature-pills"><span><i class="fa-solid fa-check"></i> Fast Billing</span><span><i class="fa-solid fa-check"></i> Barcode Ready</span><span><i class="fa-solid fa-check"></i> Multi-user</span><span><i class="fa-solid fa-check"></i> Custom Reports</span></div></div><div class="p2-photo-stack reveal delay-1"><img class="main" src="assets/images/business.jpg" alt="Business software"><img class="small" src="assets/images/reports.jpg" alt="Digital business"><div class="p2-float"><strong><span class="p2-count" data-target="25">0</span>+</strong><small>Regional language support</small></div></div></div></section>

<section class="section p2-solutions" id="solutions">
    <div class="container">

        <div class="section-head split-head reveal">
            <div>
                <span class="eyebrow">SOFTWARE SOLUTIONS</span>
                <h2>Pick the software that fits your business.</h2>
            </div>

            <p>
                Focused solutions for retail, medical, wholesale and
                distribution workflows.
            </p>
        </div>

        <div class="p2-product-grid">

            <?php foreach($products as $i => $product): ?>

                <article class="p2-product-card reveal">

                    <div class="p2-card-img">

                        <!-- Product Image -->
                        <img
                            src="assets/images/product<?= $i + 1 ?>.jpg"
                            alt="<?= htmlspecialchars($product[0]) ?>"
                        >

                        <span>
                            <?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?>
                        </span>

                    </div>

                    <div class="p2-card-body">

                        <i class="fa-solid <?= $product[1] ?>"></i>

                        <h3>
                            <?= htmlspecialchars($product[0]) ?>
                        </h3>

                        <p>
                            Billing, inventory, reports and everyday
                            management in one practical setup.
                        </p>

                        <a href="contact.php">
                            Know More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>
</section>

<section class="p2-feature-showcase"><div class="container"><div class="section-head center reveal"><span class="eyebrow light">POWERFUL, YET PRACTICAL</span><h2>Everything your counter needs to keep moving.</h2></div><div class="p2-orbit-wrap reveal"><div class="p2-center"><i class="fa-solid fa-cubes"></i><b>Beenet</b><span>Business Suite</span></div><?php $features=[['fa-language','25 Languages'],['fa-barcode','Barcode'],['fa-users','Multi User'],['fa-receipt','Fast Billing'],['fa-chart-pie','Reports'],['fa-percent','Discounts']]; foreach($features as $i=>$f): ?><div class="p2-orbit-item oi<?=$i+1?>"><i class="fa-solid <?=$f[0]?>"></i><span><?=$f[1]?></span></div><?php endforeach;?></div></div></section>

<section class="section p2-flow"><div class="container"><div class="section-head center reveal"><span class="eyebrow">A SMOOTHER WORKDAY</span><h2>From sale to insight in four simple steps.</h2></div><div class="p2-flow-grid"><article class="reveal"><b>01</b><i class="fa-solid fa-cart-shopping"></i><h3>Bill</h3><p>Create and edit bills quickly.</p></article><article class="reveal delay-1"><b>02</b><i class="fa-solid fa-boxes-stacked"></i><h3>Track</h3><p>Keep stock and products organized.</p></article><article class="reveal delay-2"><b>03</b><i class="fa-solid fa-user-group"></i><h3>Connect</h3><p>Manage customer details and points.</p></article><article class="reveal delay-3"><b>04</b><i class="fa-solid fa-chart-column"></i><h3>Understand</h3><p>Turn daily activity into useful reports.</p></article></div></div></section>



<section class="p2-domains">
    <div class="container">
        <div class="p2-domain-head reveal">
            <span class="eyebrow">DOMAIN SERVICES</span>
            <h2>Buy Domains With Us</h2>
            <p>Choose a domain extension that fits your business, brand or next digital idea.</p>
        </div>

        <div class="p2-domain-marquee">
            <div class="p2-domain-track">
                <?php
                $domains = [
                    '.club','.design','.global','.guru','.life','.media','.news','.online','.photography','.rocks',
                    '.shop','.site','.solutions','.space','.store','.tech','.today','.website','.xyz','.academy',
                    '.accountant','.actor','.agency','.airforce','.army','.associates','.attorney','.auction','.band','.bar',
                    '.bargains','.beer','.best','.bike','.builders','.career','.church','.college','.computer','.country',
                    '.fashion','.finance','.garden','.management','.money','.pizza','.social','.team','.wedding','.vision',
                    '.webcam','.work','.zone','.voyage','.vip','.toys','.theater','.theatre','.study'
                ];
                for($r=0;$r<2;$r++):
                    foreach($domains as $domain):
                ?>
                    <div class="p2-domain-item">
                        <i class="fa-solid fa-globe"></i>
                        <strong><?= htmlspecialchars($domain) ?></strong>
                    </div>
                <?php endforeach; endfor; ?>
            </div>
        </div>

        <div class="p2-domain-bottom reveal">
            <div class="p2-domain-icon"><i class="fa-solid fa-globe"></i></div>
            <div class="p2-domain-content">
                <span>DOMAIN REGISTRATION</span>
                <h3>Have a domain name in mind?</h3>
                <p>Tell us the name and extension you need. Our team can help with domain registration and setup.</p>
            </div>
            <a href="contact.php" class="p2-domain-btn">Enquire for Domain <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<section class="section p2-support"><div class="container p2-support-grid"><div class="p2-support-photo reveal"><img src="assets/images/support.jpg" alt="Business support"><div><i class="fa-solid fa-headset"></i><b>Support that stays connected.</b></div></div><div class="reveal delay-1"><span class="eyebrow">SERVICE & SUPPORT</span><h2>Software is better when help is close by.</h2><p>Our support options include online assistance, phone support, onsite support, email and chat—so businesses have practical ways to get help when they need it.</p><div class="p2-support-list"><span>Online Support</span><span>Phone Support</span><span>Onsite Support</span><span>Mail Support</span><span>Chat Support</span></div><a href="contact.php" class="btn btn-primary">Discuss Your Requirement <i class="fa-solid fa-arrow-right"></i></a></div></div></section>

<section class="p2-cta"><div class="container reveal"><span class="eyebrow light">READY FOR A BETTER WORKFLOW?</span><h2>Tell us how your business works.<br>We’ll help you choose the right setup.</h2><a href="quote.php" class="btn btn-primary">Get a Quote <i class="fa-solid fa-arrow-right"></i></a></div></section>
</main>
<script>
(()=>{const els=document.querySelectorAll('.p2-count');if(!els.length)return;const io=new IntersectionObserver(es=>es.forEach(e=>{if(!e.isIntersecting)return;const el=e.target,t=+el.dataset.target,s=performance.now(),d=1200;function tick(n){let p=Math.min((n-s)/d,1);el.textContent=Math.floor(t*(1-Math.pow(1-p,3)));if(p<1)requestAnimationFrame(tick)}requestAnimationFrame(tick);io.unobserve(el)}),{threshold:.5});els.forEach(x=>io.observe(x))})();
</script>
<?php require 'includes/footer.php'; ?>
