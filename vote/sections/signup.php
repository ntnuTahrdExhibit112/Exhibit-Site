<style>
    #vote_form .inline-block {
        display: inline-block !important;
    }
    #vote_form .group_flex {
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin-bottom: 3%;
    }
</style>
<div class="section-title">
    <h2>觀展回饋＆抽獎</h2>
    <p>入場號碼</p>
</div>
<div class="row flex align-items-center" id="vote_form">
    <div class="col-10 pt-4 pt-lg-0 container" data-aos="" data-aos-delay="100">
        <form class="form-horizontal" method="POST" action="./sections/signup_action.php">
            <div class="flex" id="form_container">
                <div class="form-group group_flex">
                    <label for="entryID" class="control-label col-2">入場號碼</label>
                    <div class="inline-block col-10">
                        <input type="text" class="form-control" id="entryID" name="entryID" aria-describedby="entryID" placeholder="入場號碼 ex: 1a2b" required="1">
                    </div>
                </div>
                <div class="row flex justify-content-end">
                    <input class="btn btn-success col-2" type="submit" value="繼續">
                </div>
            </div>
        </form>
    </div>
</div>