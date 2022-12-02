<?php
    session_destroy();
    header("Location: ./?vote=signup");
    echo '<script type="text/javascript">
           window.location = "./?vote=signup";
      </script>';
?>