<?php
$acf_field_files = glob(__DIR__ . '/acf-fields/*.php');

foreach ($acf_field_files as $file) {
    require_once $file;
}
