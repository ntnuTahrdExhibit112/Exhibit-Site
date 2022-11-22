<script>
    function confirmDelete(message_id) {
        if (confirm('確定要刪除這個留言嗎？')) {
            window.location = "./sections/delete_message.php?message_id=" + message_id;
        }
    }
</script>
<div class="col-lg-8 pt-4 pt-lg-0 content row justify-content-center mb-4" data-aos="" data-aos-delay="100">
    <a class="btn btn-message btn-primary col-4" href="./?action=new_message">我要留言</a>
</div>
<div class="col-lg-8 pt-4 pt-lg-0 content row justify-content-center" data-aos="" data-aos-delay="100">
    <?php
        $cmd_GetMessage = "SELECT  * FROM messages";
        $GetMessage = mysqli_query($db, $cmd_GetMessage);
        if (isset($_SESSION['message_deleted'])) {
            if ($_SESSION['message_deleted'] == "success") {
                echo("<script>alert('已刪除評論')</script>");
                unset($_SESSION['message_deleted']);
            }
            else if ($_SESSION['message_deleted'] == "failed") {
                echo("<script>alert('無法刪除評論，請稍候重試')</script>");
                unset($_SESSION['message_deleted']);
            }
        }
        if (!mysqli_num_rows($GetMessage)) {
            echo "<center class='mt-5'><h3 style='display: block;'>目前沒有留言喔！</h3></center>";
            unset($_SESSION['message_id']);
        }
        else {
            for ($i = 0; $i < mysqli_num_rows($GetMessage); $i++) {
                $row = mysqli_fetch_assoc($GetMessage);
                include("./sections/message_wrapper.php");
            }
        }
    ?>
</div>