<?php
session_start();
session_destroy();
die("<script>setTimeout(\"location.href = 'index.php';\",0);</script>");
