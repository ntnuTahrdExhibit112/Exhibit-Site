<style>
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

    #countdown .vote_CallToAction {
        padding: 1% 3%;
        line-height:auto;
        border: 3px solid rgb(112,239,239);
        border-radius: 5px;
        background-color: rgb(112,239,239);
    }
    #countdown .vote_CallToAction span {
        color: black !important;
    }
</style>

<section id="countdown" class="features">
    <div class="container" data-aos="">
        <div class="section-title">
            <h2>專題票選</h2>
            <p>投票結果</p>
            <img src="assets/img/lu_deco.png" alt="" class="section_title_deco">
        </div>
        <div class="row flex align-items-center mt-2"> <!--活動理念-->
            <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="" data-aos-delay="100">
                <center>
                    <h3 id="countdown_title_root">
                        投票結果出爐囉！
                    </h3>
                    <!-- <div id="countdown_counter" class="h2 col-12"></div> -->
                    <div class="col-12">
                        <a href="./vote/?vote=signup" class="btn m-1 mt-4 vote_CallToAction">
                            <span class="h3">我要抽獎</span>
                        </a>
                        <a href="./vote/?vote=result" class="btn m-1 mt-4 vote_CallToAction">
                            <span class="h3">查看結果</span>
                        </a>
                        <script>
                            // var vote_btn = document.getElementById("vote_CallToAction");
                            // var vote_btn_title = document.getElementById("vote_btn_title");
                            // function showVoteBtn() {
                            //     if (vote_started == 1) {
                            //         vote_btn.style.display = "inline-block";
                            //     }
                            // }
                            // function hideVote() {
                            //     var countdown_title_root = document.getElementById('countdown_title_root');
                            //     var countdown_counter = document.getElementById('countdown_counter');
                            //     if (vote_ended == 1) {
                            //         // vote_btn.style.display = "none";
                            //         countdown_title_root.innerHTML = "投票已結束！請靜待結果公布～";
                            //         // countdown_counter.style.display = "none";
                            //         vote_btn_title.innerHTML = "我要抽獎";
                            //         <?php 
                            //             $_SESSION['lottery_only1'] = 1;
                            //         ?>
                            //     }
                            // }
                        </script>
                    </div>
                    <script async src="./assets/js/countdown.js"></script>
                </center>
            </div>
        </div>
    </div>
</section>
