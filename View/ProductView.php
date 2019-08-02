<h3>Producten</h3>
<a href="/ProductController/loadAddProductView">Nieuw product toevoegen</a>
<form action="/ProductController/searchProduct" method="post">
  <input type="text" name="productNaam" placeholder="Zoek op product" required>
  <input type="submit" value="Zoek">
</form>
<table class="table">
  <th>Productnaam</th>
  <th>Type</th>
  <th>Merk</th>
  <th>Aankoopprijs</th>
  <th>Set</th>
  <th></th>
  <th></th>
<?php

foreach ($productJoined as $row)
{
  echo "<tr>";
  echo "<td>" . $row->productName . "</td>";
  echo "<td>" . $row->type . "</td>";
  echo "<td>" . $row->brandName . "</td>";
  echo "<td>€ " . $row->price . "</td>";
  echo "<td> " . $row->minimumAmountPerPurchase . "</td>";
  echo "<td><a href='/ProductController/loadEditProductView/". $row->productId . '/' . $row->productName . '/' . $row->type. '/' . $row->brandName . '/' . $row->price. '/' . $row->minimumAmountPerPurchase . "'>Bewerk</a></td>";
  echo "<td><a href='/ProductController/deleteProduct/" . $row->productId . "'>Verwijder</a></td>";
  echo "</tr>";
}

?>
</table>
