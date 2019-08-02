<h3>Voorraad</h3>
<form action="/VoorraadController/searchVoorraad" method="post">
  <input type="text" name="productNaam" placeholder="Zoek op product" required>
  <input type="submit" value="Zoek">
</form>
<a href="/VoorraadController/loadAddVoorraadView">Nieuw voorraad toevoegen</a>
<table class="table">
  <th>Productnaam</th>
  <th>Aantal</th>
<?php

foreach ($voorraadJoined as $row)
{
  echo "<tr>";
  echo "<td>" . $row->productName . "</td>";
  echo "<td>" . $row->currentAmount . "</td>";
  echo "<td><a href='/VoorraadController/loadEditVoorraadView/". $row->productId . '/' . $row->productName . '/' . $row->currentAmount . "'>Bewerk</a></td>";
  echo "<td><a href='/VoorraadController/deleteVoorraad/" . $row->productId . "'>Verwijder</a></td>";
  echo "</tr>";
}

?>
</table>
