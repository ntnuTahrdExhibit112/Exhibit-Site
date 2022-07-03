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
</style>

<section id="countdown" class="features">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>專題票選</h2>
            <p>開票倒數</p>
        </div>
        <div class="row flex align-items-center mt-2"> <!--活動理念-->
            <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="zoom-in" data-aos-delay="100">
                <center>
                    <h3>距離開票時間還有</h3>
                    <div id="countdown_counter" class="h2 col-lg-10 col-12">
                        <div class="countdown_block h4">
                            <div class="countdown_digits" id="countdown_days"></div>
                            日
                        </div>
                        <div class="countdown_block h4">
                            <div class="countdown_digits" id="countdown_hours"></div>
                            時
                        </div>
                        <div class="countdown_block h4">
                            <div class="countdown_digits" id="countdown_mins"></div>
                            分
                        </div>
                        <div class="countdown_block h4">
                            <div class="countdown_digits" id="countdown_secs"></div>
                            秒
                        </div>
                    </div>
                    <script>
                        var timer = null;
                        var countdown_days = document.getElementById("countdown_days");
                        var countdown_hours = document.getElementById("countdown_hours");
                        var countdown_mins = document.getElementById("countdown_mins");
                        var countdown_secs = document.getElementById("countdown_secs");
                        function show_date_time() {   
                            var target = new Date(2022, 12-1, 3, 12, 0, 0);  // Y/M/D/h/m/s
                            var today = new Date();
                            var timeold = (target.getTime()-today.getTime());
                            var sectimeold = timeold / 1000;
                            var secondsold = Math.floor(sectimeold);
                            var msPerDay = 24 * 60 * 60 * 1000;
                            var e_daysold = timeold / msPerDay;
                            var daysold = Math.floor(e_daysold);
                            var e_hrsold = (e_daysold - daysold) * 24;
                            var hrsold = Math.floor(e_hrsold);
                            var e_minsold = (e_hrsold - hrsold) * 60;
                            var minsold = Math.floor((e_hrsold - hrsold) * 60);
                            var seconds = Math.floor((e_minsold - minsold) * 60);
                            if (daysold < 0) {
                                document.getElementById("time").innerHTML="逾期,倒數計時已經失效";
                                clearInterval(timer);
                            }
                            else{
                                if (daysold < 10) {daysold = "0" + daysold;}
                                if (hrsold < 10) {hrsold = "0" + hrsold;}
                                if (minsold < 10) {minsold = "0" + minsold;}
                                if (seconds < 10) {seconds="0" + seconds;}
                                //show.innerHTML = daysold + "天, " + hrsold + "時" + minsold + "分" + seconds + "秒";
                                countdown_days.innerHTML = daysold;
                                countdown_hours.innerHTML = hrsold;
                                countdown_mins.innerHTML = minsold;
                                countdown_secs.innerHTML = seconds;
                            }
                        }
                        timer = setInterval(show_date_time, 1000);
                    </script>
                </center>
            </div>
        </div>
    </div>
</section>
