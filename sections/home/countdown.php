<style>
    /* #countdown .p-5 {
        line-height: 2.3 !important;
        font-size: 1.1rem !important;
    }
    @media screen and (max-width:768px) {
        #countdown .p-5 {
            line-height: 1.8 !important;
            color: rgba(255,255,255,0.8) !important;
        }
    } */
    #countdown #countdown_counter {
        display: flex;
        flex-direction: row;
        margin-bottom: 2rem;
    }
    #countdown .countdown_block {
        border: 3px solid rgb(112,239,239);
        color: rgb(112,239,239) !important;
        border-radius: 15px;
        height: 18vh;
        width: 23%;
        margin: 1% 1%;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
    }
    #countdown .countdown_block .countdown_digits {
        color: rgb(228, 51, 238) !important;
    }
    #countdown .countdown_block div {
        font-size: 200% !important;
        color: rgb(112,239,239) !important;
    }

    #countdown #vote_CallToAction {
        padding: 1% 3%;
        line-height:auto;
        border: 3px solid rgb(112,239,239);
        border-radius: 5px;
        background-color: rgb(112,239,239);
    }
    #countdown #vote_CallToAction span {
        color: black !important;
    }
</style>

<section id="countdown" class="features">
    <div class="container" data-aos="">
        <div class="section-title">
            <h2>專題票選</h2>
            <p><span id="countdown_section_title"></span></p>
            <img src="assets/img/lu_deco.png" alt="" class="section_title_deco">
        </div>
        <div class="row flex align-items-center mt-2"> <!--活動理念-->
            <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="" data-aos-delay="100">
                <center>
                    <h3 id="countdown_title_root">
                        距離<span id="countdown_title"></span>時間還有
                        <script>
                            var countdown_section_title = document.getElementById("countdown_section_title");
                            var countdown_title = document.getElementById("countdown_title");
                            countdown_section_title.innerHTML = "投票倒數";
                            countdown_title.innerHTML = "投票";

                            var vote_started = 0;
                            var vote_ended = 0;
                        </script>
                    </h3>
                    <div id="countdown_counter" class="h2 col-12"></div>
                    <div class="col-12">
                        <a href="./vote/?vote=signup" id="vote_CallToAction" class="btn" style="display: none;">
                            <span class="h3">我要投票</span>
                        </a>
                        <script>
                            var vote_btn = document.getElementById("vote_CallToAction");
                            function showVoteBtn() {
                                if (vote_started == 1) {
                                    vote_btn.style.display = "inline-block";
                                }
                            }
                            function hideVote() {
                                var countdown_title_root = document.getElementById('countdown_title_root');
                                var countdown_counter = document.getElementById('countdown_counter');
                                if (vote_ended == 1) {
                                    vote_btn.style.display = "none";
                                    countdown_title_root.innerHTML = "投票已結束！請靜待結果公布～";
                                    countdown_counter.style.display = "none";
                                }
                            }
                        </script>
                    </div>
                    <script src="./assets/js/countdown.js"></script>
                </center>
            </div>
        </div>
    </div>
</section>
