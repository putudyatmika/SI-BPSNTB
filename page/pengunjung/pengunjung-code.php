<?php
require "page/settings/user_agent_detected.php";
$user_agent=$_SERVER['HTTP_USER_AGENT'];
detect_browser($user_agent);
detect_os($user_agent);
?>