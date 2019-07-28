<h3>Voorraad</h3>
<form action="/VoorraadController/searchVoorraad" method="post">
  <input type="text" name="productNaam" placeholder="Zoek op product" required>
  <input type="submit" value="Zoek">
</form>
<a href="/VoorraadController/loadAddVoorraadView">Nieuw voorraad toevoegen</a>
<table class="table">
  <th>Productnaam</th>
  <th>Locatienaam</th>
  <th>Aantal</th>
  <th>Minimum aantal</th>
  <th></th>
  <th></th>
<?php

foreach ($voorraadJoined as $row)
{
  echo "<tr>";
  echo "<td>" . $row->productNaam . "</td>";
  echo "<td>" . $row->locatieNaam . "</td>";
  echo "<td>" . $row->aantal . "</td>";
  echo "<td>" . $row->minimumAantal . "</td>";
  echo "<td><a href='/VoorraadController/loadEditVoorraadView/". $row->productId . '/' . $row->productNaam . '/' . $row->locatieId . '/' . $row->locatieNaam . '/' . $row->aantal . '/' . $row->minimumAantal . "'>Bewerken</a></td>";
  echo "<td><a href='/VoorraadController/deleteVoorraad/" . $row->productId . '/' . $row->locatieId ."'>Verwijderen</a></td>";
  echo "</tr>";
}

?>
</table>
