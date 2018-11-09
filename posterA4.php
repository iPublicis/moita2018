<?php

header("Content-disposition: attachment; filename=posterA4.pdf");
header("Content-type: application/pdf");
readfile("/home/softlibre/www/docs/posterA4.pdf");