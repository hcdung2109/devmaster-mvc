<?php

// ham chuyen huong trang
function redirect($url)
{
    header("Location: $url");
    exit;
}
