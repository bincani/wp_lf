<?php

$filename = 'C:\\Windows\\Temp';
//$filename = 'C:\\projects\\wordpress\\dev_wp_lf_4_4_1\\wp-content\\uploads';

if (is_writable($filename)) {
    echo $filename . ' is writable';
}
else {
    echo $filename . ' is not writable';
}

phpinfo();
?>