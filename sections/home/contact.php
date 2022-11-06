<style>
    #contact {
        background-color: #000;
    }
    #contact .sub_container {
        width: 60% !important;
    }
    #contact .member {
        overflow: hidden; */
        border-radius: unset !important;
        background: unset !important;
        box-shadow: unset !important;
    }
    #contact .member-info * {
        *color: #000 !important;
    }
    #contact .contact_img {
        border-radius: 100%;
        /* border: rgb(70, 249, 253) solid 6px; */
        border-image: url(./assets/img/person_frame.png) 0 fill;
        width: 70%;
        padding: 25px;
        padding-left: 35px;
        padding-right: 20px;
    }
    @media screen and (max-width: 768px) {
        #contact .sub_container {
            flex-direction: column;
        }
        #contact .member_parent {
            width: 100% !important;
        }
    }
</style>

<section id="contact" class="team">
    <div class="container" data-aos="">
        <div class="section-title">
            <img src="assets/img/lu_deco.png" alt="" class="section_title_deco">
            <h2>聯絡我們</h2>
            <p>專展總籌</p>
        </div>
        <center>
            <div class="sub_container row justify-content-center">
                <div class="member_parent col-sm-6 col-12 d-flex align-items-stretch justify-content-center">
                    <div class="member">
                        <div class="member-img d-flex justify-content-center">
                            <img src="assets/img/contact/William_Chang.jpg" class="img-fluid contact_img" alt="" loading="lazy">
                        </div>
                        <div class="member-info">
                            <h3>張子濰</h3>
                            <span><a href="mailto:tzuwei0116@gmail.com" target="_blank">tzuwei0116@gmail.com</a></span> 
                        </div>
                    </div>
                </div>
                <div class="member_parent col-sm-6 col-12 d-flex align-items-stretch justify-content-center">
                    <div class="member">
                        <div class="member-img d-flex justify-content-center">
                            <img src="assets/img/contact/Stefan_Lee.jpg" class="img-fluid contact_img" alt="" loading="lazy">
                        </div>
                        <div class="member-info">
                            <h3>李軒騰</h3>
                            <span><a href="mailto:stefanlee1221@gmail.com" target="_blank">stefanlee1221@gmail.com</a></span> 
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>
</section>
