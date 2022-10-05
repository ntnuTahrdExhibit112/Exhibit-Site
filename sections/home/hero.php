<style>
    #hero {
        height: 100vh;
    }
    #hero #title_img {
        width: 100%;
    }
    #hero h1 {
        font-family: "Cyberpunk";
        letter-spacing: 0.5rem !important;
    }
    #hero {
        /* background: url("../assets/img/hero-bg.jpg"); */
        background-color: #000 !important;
        background-size: contain;
        background-position: 100% !important;
        background-repeat: no-repeat !important;
    }
    @media screen and (max-width: 768px) {
        #hero {
            background: url("../img/hero-bg-mobile.jpg") top center;
            background-size: 100%;
        }
        #hero #title_br {
            display: inline !important;
        }
    }
    #hero:before {
        background-color: rgba(0, 0, 0, 0.4);
    }
    #hero #title_container div {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>

<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        <div id="title_container" class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-8 col-lg-10" style="z-index: 999;">
                <!-- <h1 class="hider">TECH PUNK</h1> -->
                <img src="assets/img/title.png" id="title_img">
                <h2 style="line-height: 1.5;"> 
                    2022 國立臺灣師範大學 <br id="title_br" style="display: none;">
                    科技應用與人力資源發展學系<br>
                    112級畢業專題成果展
                </h2>
            </div>
            <div class="col-xl-4 col-lg-10">
                <!-- <h1 class="hider">TECH PUNK</h1> -->
                <img src="assets/img/hero-bg.jpg" id="hero-bg" width="200%">
            </div>
        </div>
    </div>
</section>