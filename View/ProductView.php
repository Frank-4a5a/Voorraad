<h3>Producten</h3>
<a href="/ProductController/loadAddProductView">Nieuw product toevoegen</a>
<form action="/ProductController/searchProduct" method="post">
  <input type="text" name="productNaam" placeholder="Zoek op product" required>
  <input type="submit" value="Zoek">
</form>
<table class="table">
  <th>Productnaam</th>
  <th>Type</th>
  <th>Fabrikant</th>
  <th>Inkoopprijs</th>
  <th>Verkoopprijs</th>
  <th></th>
  <th></th>
<?php

foreach ($productJoined as $row)
{
  echo "<tr>";
  echo "<td>" . $row->productNaam . "</td>";
  echo "<td>" . $row->type . "</td>";
  echo "<td>" . $row->fabrikantNaam . "</td>";
  echo "<td>€ " . $row->inkoopprijs . "</td>";
  echo "<td>€ " . $row->verkoopprijs . "</td>";
  echo "<td><a href='/ProductController/loadEditProductView/". $row->productId . '/' . $row->productNaam . '/' . $row->type. '/' . $row->fabrikantId . '/' . $row->inkoopprijs. '/' . $row->verkoopprijs . "'>Bewerken</a></td>";
  echo "<td><a href='/ProductController/deleteProduct/" . $row->productId . "'>Verwijderen</a></td>";
  echo "</tr>";
}

?>
</table>
