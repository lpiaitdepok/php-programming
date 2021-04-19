<?php
echo 'Default Timezone: ' . date('d-m-Y H:i:s');

$timezone = time() + (60 * 60 * 7);
echo 'Indonesian Timezone: ' . gmdate('d-m-Y H:i:s', $timezone);
?>
