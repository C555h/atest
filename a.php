<?php
$a = [1,34,5];

$sql = <<<SQL
select *
  from $tablename
 where id in [$order_ids_list]
   and product_name = "widgets"
SQL;

$sql = "
select *
  from $tablename
 where id in [$order_ids_list]
   and product_name = \"widgets\"
";

foreach ($a as $value) {
    echo "$value";
}