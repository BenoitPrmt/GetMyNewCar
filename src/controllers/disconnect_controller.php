<?php

session_destroy();
ob_clean();
header('Location: ?page=home');
exit;