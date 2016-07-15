<?php
include ('vendor/autoload.php');
use FacebookAds\Object\Page;
$page = new Page(1713029962291359);
$leadgen_forms = $page->getLeadgenForms();
?>