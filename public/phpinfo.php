<?php
header('Content-Type: text/plain');
echo extension_loaded('curl') ? 'CURL_ENABLED' : 'CURL_DISABLED';
