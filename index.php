<?php
    get_header();
?>
<style>
#cookie-eu {
    background: #000;
    display: none;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 0;
    margin: 0;
    z-index: 999;
    padding: 1em 1.8em;
    box-sizing: border-box;
    box-shadow: 1px 1px 20px rgba(0, 0, 0, .4);
}

.cookie-eu main,
.cookie-eu aside {
    display: flex;
    flex: 1 1 auto;
    justify-content: flex-end;
    align-items: center;
}

.cookie-eu h3,
.cookie-eu a {
    display: inline;
    padding: 0 0 0 8px;
}

.cookie-eu h3 {
    background: transparent;
    padding: 0;
    font-size: 16px;
    color: #c1a468;
    font-weight: 400;
    text-transform: none;
}

.cookie-eu a {
    text-decoration: underline;
    font-size: 16px;
    color: #c1a468;
    font-weight: 400;
    text-transform: none;
}

.cookie-eu main {
    justify-content: flex-start;
    background-image: none;
}

.cookie-eu aside {
    justify-content: flex-end;
    text-align: center;
}

.cookie-eu button {
    background: #c1a468;
    color: white;
    border: none;
    padding: 1em 1.2em;
    cursor: pointer;
    font-size: 16px;
    color: white;
    font-weight: 470;
    white-space: nowrap;
    text-transform: none;
}

.cookie-eu .transparent {
    background: transparent;
    font-weight: 300;
}

@media screen and (max-width: 500px) {
    .cookie-eu {
        display: none;
    }

    .cookie-eu main,
    .cookie-eu aside {
        display: block;
        width: 100%;
        text-align: center;
    }

    .cookie-eu aside {
        padding: 20px 0 0 0;
    }
}
</style>

<div id="cookie-eu" class="cookie-eu">
    <main>
        <h3>This website uses cookies to ensure you the best experience on our website. <a
                href="//www.bbtv.com/privacy-policy">Learn more</a></h3>
    </main>
    <aside>
        <button onclick="notAllowCookies()" class="transparent">Decline</button>
        <button onclick="allowCookies()">Accept</button>
    </aside>
</div>

<script>
var cookiesAllowed = localStorage.getItem('allowCookies-' + 'GTM-5PWKVW');
if (!cookiesAllowed) {
    var cookiesEu = document.getElementById("cookie-eu");
    cookiesEu.style.display = "flex";
}
if (cookiesAllowed === 'true') {
    allowCookies();
}
if (cookiesAllowed === 'false') {
    notAllowCookies();
}

function allowAnalytics() {
    if ('GTM-5PWKVW' !== '') {
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5PWKVW');

        var noScript = document.createElement("noscript");
        var iframe = document.createElement("iframe");
        (document.getElementsByTagName("body")[0]).appendChild(noScript);
        (document.getElementsByTagName("noscript")[0]).appendChild(iframe);
        iframe.src = "https://www.googletagmanager.com/ns.html?id=" + 'GTM-5PWKVW';
        iframe.style.display = "none";
        iframe.style.visibility = "hidden";
    }
}

function allowCookies() {
    allowAnalytics();
    localStorage.setItem('allowCookies-' + 'GTM-5PWKVW', true);

    var cookiesEu = document.getElementById("cookie-eu");
    cookiesEu.style.display = "none";
}

function notAllowCookies() {
    localStorage.setItem('allowCookies-' + 'GTM-5PWKVW', false)

    var cookiesEu = document.getElementById("cookie-eu");
    cookiesEu.style.display = "none";
}
</script>

<main class="page-content" aria-label="Content">
    <div class="wrapper">
        <section id="home">
            <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Opposition_Hero_Logo_v3.png" />
            </h1>
            <ul class="social-media">
                <li><a href="https://twitter.com/weareopposition" target="_blank"><span class="icon-twitter"></span></a>
                </li>
                <li><a href="https://www.instagram.com/weareopposition/" target="_blank"><span
                            class="icon-instagram"></span></a></li>
                <li><a href="https://www.facebook.com/WeAreOpposition/" target="_blank"><span
                            class="icon-facebook"></span></a></li>
            </ul>
            <a class="arrow-down page-link" href="/#about"></a>
        </section>

        <section id="about">
            <h2><span>For the artists.</span><span>For the music.</span><span>No compromise.</span></h2>
            <p>Forget the endless fine print and mass scale, Opposition offers the tools and resources to succeed on
                your terms. Whether we’re developing talent or opening new doors for existing stars, our innovative
                digital strategies and hands-on management put artists and their work first, always.</p>
        </section>

        <section id="services">
            <h3 class="section-title">Services</h3>
            <div class="services-container">
                <ul class="services-list">
                    <li>Distribution &<br /> Label Services</li>
                    <li>Content<br /> Funding</li>
                    <li>Influencer<br /> Marketing</li>
                    <li>DSP Strategy &<br /> Playlisting</li>
                    <li>Social Strategy &<br /> Brand Development </li>
                    <li>PR & Creative<br /> Placements</li>
                    <li>Rights<br /> Management</li>
                    <li>New<br /> Revenue Streams</li>
                    <li>Creative<br /> Services</li>
                </ul>
            </div>
        </section>

        <section id="partners">
            <h3 class="section-title">Talent</h3>
            <div class="artists-container">
                <ul class="artists">
                    <li>
                        <a href="https://maddecent.com/" target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Mad-Decent.jpg"
                                    alt="Mad Decent" />
                                <figcaption></figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=5DAwY85_gYQ" target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Juice-WRLD-bb16-2018-beat-billboard-ewrqook-1548.jpg"
                                    alt="Juice Wrld" />
                                <figcaption>Juice Wrld</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.billboard.com/articles/columns/hip-hop/8039094/logic-1-800-273-8255-national-suicide-prevention-lifeline-statistics-tweet"
                            target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logic-bb30-2017-feat-billboard-lssa-1240.jpg"
                                    alt="Logic" />
                                <figcaption>Logic</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.billboard.com/articles/columns/chart-beat/8491748/21-savages-i-am-i-was-album-debuts-at-no-1-on-billboard-200"
                            target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/21savage.jpg"
                                    alt="21 Savage" />
                                <figcaption>21 Savage</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=YqeW9_5kURI" target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maxresdefault.jpg"
                                    alt="Major Lazer" />
                                <figcaption>Major Lazer</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=7iBliM6jbWs" target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/killy-toronto-surrender.jpg"
                                    alt="Killy" />
                                <figcaption>Killy</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=ZJu98-r7DHw" target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vancouver.jpg"
                                    alt="Vancouver Sleep Clinic" />
                                <figcaption>Vancouver Sleep Clinic</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://cinematicworldwide.com/roster/" target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cinematic.jpg"
                                    alt="Cinematic" />
                                <figcaption></figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=CIjXUg1s5gc" target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t.jpg" alt="T-Pain" />
                                <figcaption>T-Pain</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="http://mtheory.com/" target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mtheory.jpg"
                                    alt="MTheory" />
                                <figcaption>MTheory</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.spin.com/2019/10/tisakorean-interview-rap-monthly-dababy-hobo-johnson/"
                            target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tisakorean.jpg"
                                    alt="Tisakorean" />
                                <figcaption>Tisakorean</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=VnxYrNRSxQM" target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flume.jpg"
                                    alt="Flume" />
                                <figcaption>Flume</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://earmilk.com/2019/07/17/shreya-channels-gluttony-in-indian-influenced-rb-single/"
                            target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Shreya.jpg"
                                    alt="Shreya" />
                                <figcaption>Shreya</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=i-ggzJqTnE4" target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/leroy-sanchez.jpg"
                                    alt="Leroy Sanchez" />
                                <figcaption>Leroy Sanchez</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://bbtv.lnk.to/pain" target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/honors.jpg"
                                    alt="Honors" />
                                <figcaption>Honors</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/p/BvMtPwNABan/" target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Lyrical.jpg"
                                    alt="Lyrical Lemonade" />
                                <figcaption>Lyrical Lemonade</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.rollingstone.com/music/music-features/meet-adam22-underground-hip-hops-major-tastemaker-203781/"
                            target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/No-Jump.jpg"
                                    alt="No Jumper" />
                                <figcaption>No Jumper</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=tUBQ1nXDbdY" target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Gdash.jpg"
                                    alt="G-Herbo" />
                                <figcaption>G-Herbo</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=V2EqhrfBR5A" target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Emma-Heesters-Euro-Entertainment-1.jpg"
                                    alt="Emma Heesters" />
                                <figcaption>Emma Heesters</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="https://hypebeast.com/2019/10/lil-durk-bora-bora-music-video-release-love-songs-4-the-streets-2"
                            target="_blank">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/durk@2x.jpg"
                                    alt="Lil Durk" />
                                <figcaption>Lil Durk</figcaption>
                            </figure>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.ba-throttle-debounce.min.js">
        </script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lory.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/all.js"></script>


    </div>
</main>

<?php
    get_footer();
?>