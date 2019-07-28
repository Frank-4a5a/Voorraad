<h1>Voorraad toevoegen</h1>

<form action="/VoorraadController/addVoorraad" method="post">
  <div class="form-group">
    <table class="table">
      <td>
        <select name="productId">
          <?php
          foreach ($product as $row)
          {
            echo "<option value='$row->productId'>" . $row->productNaam . "</option>";
          }
          ?>
        </select>
      </td>
      <td>
        <select name="locatieId">
          <?php
          foreach ($locatie as $row)
          {
            echo "<option value='$row->locatieId'>" . $row->locatieNaam . "</option>";
          }
          ?>
        </select>
      </td>
      <td><input type="number" name="aantal" placeholder="Aantal"></td>
      <td><input type="number" name="minimumAantal" placeholder="Minimum aantal"></td>
      <td><input type="submit" value="Nieuw voorraad toevoegen"></td>
    </table>
  </div>
</form>
