<div class="col-lg-8 pt-4 pt-lg-0 content row" data-aos="" data-aos-delay="100">
    <form class="form-horizontal" method="POST" action="./sections/new_message_action.php">
        <div class="flex form_container" id="form_container">
            <div class="form-group group_flex h5">
                <label for="name" class="control-label col-25p">姓名</label>
                <div class="inline-block col-75p">
                    <input type="text" class="form-control" id="name" name="name" placeholder="例：小明" required>
                </div>
            </div>
            <div class="form-group group_flex h5">
                <label for="message" class="control-label col-25p">留言內容</label>
                <div class="inline-block col-75p">
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
            </div>

            <div class="row flex justify-content-end mt-5">
                <a class="btn btn-secondary col-3 col-lg-2 mr-3" href="./">取消</a>
                <div style="width: 1rem;"></div>
                <input class="btn btn-success col-3 col-lg-2" type="submit" value="送出">
            </div>
        </div>
    </form>
</div>