<style>
    #sponsers {
        padding: 20px 0 !important;
    }
    #sponsers .clients-slider {
        /* background-color: rgba(255, 255, 255, 1); */
        /* background-image: url("assets/img/clients/sponsor_frame.png"); */
        border-image: url(assets/img/clients/sponsor_frame.png) 0 fill;
        padding: 2rem 2rem;
        /* border-radius: 50px; */
        background-position: center;
        background-size: cover;
    }
    @media screen and (max-width: 768px) {
        #sponsers .clients-slider {
            border-image: url(assets/img/clients/sponsor_frame_mobile.png) 0 fill;
        }
    }
    #sponsers .swiper-slide img {
        filter: unset;
    }
</style>
<section id="sponsers" class="clients">
    <div class="container" data-aos="">
        <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
            </div>
            <div class="swiper-pagination hider"></div>
        </div>
    </div>
</section>
