<script>
    window.location.href = "./?vote=result";
</script>
<?php 
    
    if ($_SESSION['status'] == "unset" || $_SESSION['status'] == "not_verified" || $_SESSION['status'] == "verified" || $_SESSION['status'] == "voted") {
        echo "<script>showVoteBtn();</script>";
    }
?>
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

    #vote_CallToAction {
        padding: 1% 3%;
        line-height:auto;
        border: 3px solid rgb(112,239,239);
        border-radius: 5px;
        background-color: rgb(112,239,239);
    }
    #vote_CallToAction span {
        color: black !important;
    }
</style>
<div class="section-title">
    <h2>專題票選</h2>
    <p id="countdown_section_title"></p>
    <img src="../assets/img/lu_deco.png" alt="" class="section_title_deco">
</div>
<div class="row flex align-items-center mt-2"> <!--活動理念-->
    <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="" data-aos-delay="100">
        <center>
            <div class="mb-5<?php if($_GET['vote'] != 'done') {echo ' hider';} ?>">
                <h3>抽獎資訊</h3>
                <p>
                    抽獎時領獎人需在閉幕式現場，否則將會自動棄權喔！
                </p>
            </div>
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
                <a href="./?vote=signup" id="vote_CallToAction" class="btn" style="display: none;">
                    <span id="vote_btn_title" class="h3">我要投票</span>
                </a>
                <script>
                    var vote_btn = document.getElementById("vote_CallToAction");
                    var vote_btn_title = document.getElementById("vote_btn_title");
                    function showVoteBtn() {
                        if (vote_started == 1) {
                            vote_btn.style.display = "inline-block";
                        }
                    }
                    function hideVote() {
                        var countdown_title_root = document.getElementById('countdown_title_root');
                        var countdown_counter = document.getElementById('countdown_counter');
                        if (vote_ended == 1) {
                            // vote_btn.style.display = "none";
                            countdown_title_root.innerHTML = "投票已結束！請靜待結果公布～";
                            // countdown_counter.style.display = "none";
                            vote_btn_title.innerHTML = "我要抽獎";
                            <?php 
                                $_SESSION['lottery_only1'] = 1;
                            ?>
                        }
                    }
                </script>
            </div>
            <script src="../assets/js/countdown.js"></script>
        </center>
    </div>
</div>