<?php

require "../run.php";

$resContacts = $crm->getContacts();

echo '<pre>';
print_r($resContacts);