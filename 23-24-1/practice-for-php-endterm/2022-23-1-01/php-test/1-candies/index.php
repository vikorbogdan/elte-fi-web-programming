<?php

$shop = [
  ["brand" => "Homemade", "type"  => "Dark chocolate", "price" => 2000],
  ["brand" => "Grandma's", "type"  => "Milk chocolate", "price" => 1500],
  ["brand" => "Worldsweet", "type"  => "Milk chocolate", "price" => 3000],
  ["brand" => "Worldsweet", "type"  => "Dark chocolate", "price" => 4000],
  ["brand" => "Worldsweet", "type"  => "Orange essence", "price" => 4000],
  ["brand" => "Homemade", "type"  => "Milk chocolate", "price" => 1000],
  ["brand" => "Speziale", "type"  => "Apple & Cinnamon", "price" => 1000]
];
$brands = array_unique(array_column($shop, "brand"));
$types = array_unique(array_column($shop, "type"));
sort($brands);
sort($types);

function getPrice($shop, $brand, $type)
{
  $result = array_filter($shop, function ($item) use ($brand, $type) {
    return $item["brand"] === $brand && $item["type"] === $type;
  });
  if (count($result) > 0)
    return current($result)["price"];
}

function getLowestPrice($shop)
{
  return min(array_column($shop, "price"));
}
function getLargestPrice($shop)
{
  return max(array_column($shop, "price"));
}

function getAveragePriceForBrand($shop, $brand)
{
  $filtered_array_by_brand = array_column(array_filter($shop, function ($item) use ($brand) {
    return $item["brand"] === $brand;
  }), "price");
  return round(array_sum($filtered_array_by_brand) / count($filtered_array_by_brand));
}

$largestPrice = getLargestPrice($shop);
$lowestPrice = getLowestPrice($shop);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Task 1</title>
</head>

<body>
  <h1>Task 1: Candies</h1>
  <table>
    <tr>
      <th></th>
      <?php foreach ($types as $type) : ?>
        <th><?= $type ?></th>
      <?php endforeach; ?>
      <th>Average price</th>
    </tr>
    <?php foreach ($brands as $brand) : ?>
      <tr>
        <th><?= $brand ?></th>
        <?php foreach ($types as $type) : ?>
          <td <?= getPrice($shop, $brand, $type) === $largestPrice ? 'class="largest"' : "" ?> <?= getPrice($shop, $brand, $type) === $lowestPrice ? 'class="lowest"' : "" ?>>
            <?= getPrice($shop, $brand, $type) ?></td>
        <?php endforeach; ?>
        <td>
          <?= getAveragePriceForBrand($shop, $brand) ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>