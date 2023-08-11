<?php

session_start();

session_destroy();

header("Location: Webpage03-new.html");

exit;