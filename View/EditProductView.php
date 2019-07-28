<h1>Product bewerken</h1>

<form action="/ProductController/editProduct" method="post">
  <div class="form-group">
    <table class="table">
      <input type="hidden" name="productId" value="<?php echo $productId ?>">
      <td><input type="text" name="productNaam" placeholder="Productnaam" value="<?php echo $productNaam ?>"></td>
      <td><input type="text" name="type" placeholder="Type" value="<?php echo $type ?>"></td>
      <td>
        <select name="fabrikantId">
          <?php
          foreach ($fabrikant as $row)
          {
            if ($row->fabrikantId == $fabrikantId)
            {
              echo "<option selected='selected' value='$row->fabrikantId'>" . $row->fabrikantNaam . "</option>";
            }
            else
            echo "<option value='$row->fabrikantId'>" . $row->fabrikantNaam . "</option>";
          }
          ?>
        </select>
      </td>
      <td><input type="text" name="inkoopprijs" placeholder="Inkoopprijs" value="<?php echo $inkoopprijs ?>"></td>
      <td><input type="text" name="verkoopprijs" placeholder="Verkoopprijs" value="<?php echo $verkoopprijs ?>"></td>
      <td><input type="submit" value="Sla wijzigingen op"></td>
    </table>
  </div>
</form>
