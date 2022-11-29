<style>
    #group-members {
        padding: 5px 0 !important;
    }
    #group-members .group-slider {
        /* border-image: url(../assets/img/clients/sponsor_frame.png) 0 fill; */
        height: auto;
        padding: 0.1rem 0.1rem;
        /* border-radius: 50px; */
        background-position: center;
        background-size: cover;
    }
    @media screen and (min-width: 769px) {
        #group-members .swiper-wrapper {
            <?php if($_GET['project'] == "techspestar" || $_GET['project'] == "techspestar1") {echo "*";} ?>justify-content: center !important;
        } 
    }
    @media screen and (max-width: 768px) {
        #group-members .group-slider {
            /* border-image: url(assets/img/clients/sponsor_frame_mobile.png) 0 fill; */
            /* background-image: url("assets/img/clients/sponsor_frame.png"); */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    }
    #group-members .swiper-slide img {
        filter: unset;
        border-radius: 5px;
    }
    #group-members .swiper-slide img:hover {
        transform: scale(1.1) !important;
    }
    #group-members .member_name {
        
    }
</style>
<div class="container" data-aos="">
    <div class="group-slider swiper">
        <div class="swiper-wrapper align-items-center">
            <?php 
                $member_count = count($members);
                for ($i = 0; $i < $member_count; $i++) {
                    include("./sections/member_wrapper.php");
                }
            ?>
        </div>
        <div class="swiper-pagination hider"></div>
    </div>
</div>