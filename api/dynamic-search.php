<?php

declare(strict_types=1);

require_once '../functions/database.php';

$search = $_GET['search'];

$res = getDB()->query("
  select distinct description, price, photo, productID
  from products 
  where lower(description) like '%{$search}%'
  limit 10
");

# as JSON Response
# echo json_encode($res->fetchAll(PDO::FETCH_ASSOC)); 

$data = $res->fetchAll(PDO::FETCH_ASSOC);

echo '<hr class="my-0">';

if (count($data) <= 0)
  echo('<div class="flex-row justify-center align-center overline text-center text-error py-6">Keine Ergebnisse gefunden<span class="material-icons-outlined ml-2">search_off</span></div>');
else
  foreach ($data as $row) {
    echo include $_SERVER['DOCUMENT_ROOT'] . '/components/dynamic-search-result.php';
    echo "<hr>";
  }

