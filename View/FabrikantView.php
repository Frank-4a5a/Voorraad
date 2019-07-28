<h3>Fabrikant</h3>
<a href="/FabrikantController/loadAddFabrikantView">Nieuw fabrikant toevoegen</a>
<table class="table">
  <th>Fabrikantnaam</th>
  <th></th>
  <th></th>
<?php

foreach ($fabrikant as $row)
{
  echo "<tr>";
  echo "<td>" . $row->fabrikantNaam . "</td>";
  echo "<td><a href='/FabrikantController/loadEditFabrikantView/". $row->fabrikantId . '/' . $row->fabrikantNaam ."'>Bewerken</a></td>";
  echo "<td><a href='/FabrikantController/deleteFabrikant/" . $row->fabrikantId . "'>Verwijderen</a></td>";
  echo "</tr>";
}

?>
</table>
