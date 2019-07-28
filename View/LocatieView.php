<h3>Locatie</h3>
<a href="/LocatieController/loadAddLocatieView">Nieuw locatie toevoegen</a>
<table class="table">
  <th>Locatienaam</th>
  <th></th>
  <th></th>
<?php

foreach ($locatie as $row)
{
  echo "<tr>";
  echo "<td>" . $row->locatieNaam . "</td>";
  echo "<td><a href='/LocatieController/loadEditLocatieView/". $row->locatieId . '/' . $row->locatieNaam ."'>Bewerken</a></td>";
  echo "<td><a href='/LocatieController/deleteLocatie/" . $row->locatieId . "'>Verwijderen</a></td>";
  echo "</tr>";
}

?>
</table>
