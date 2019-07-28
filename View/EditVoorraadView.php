<h1>Voorraad bewerken</h1>

<form action="/VoorraadController/editVoorraad" method="post">
  <div class="form-group">
    <table class="table">
      <input type="hidden" name="productIdOld" value="<?php echo $productId ?>">
      <input type="hidden" name="locatieIdOld" value="<?php echo $locatieId ?>">
      <td>
        <select name="productId">
          <?php
          foreach ($product as $row)
          {
            if ($row->productId == $productId)
            {
              echo "<option selected='selected' value='$row->productId'>" . $row->productNaam . "</option>";
            }
            else
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
            if ($row->locatieId == $locatieId)
            {
              echo "<option selected='selected' value='$row->locatieId'>" . $row->locatieNaam . "</option>";
            }
            else
            echo "<option value='$row->locatieId'>" . $row->locatieNaam . "</option>";
          }
          ?>
        </select>
      </td>
      <td><input type="number" name="aantal" placeholder="Aantal" value="<?php echo $aantal ?>"></td>
      <td><input type="number" name="minimumAantal" placeholder="Minimum aantal" value="<?php echo $minimumAantal ?>"></td>
      <td><input type="submit" value="Sla wijzigingen op"></td>
    </table>
  </div>
</form>
