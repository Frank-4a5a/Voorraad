<h1>Product toevoegen</h1>

<form action="/ProductController/addProduct" method="post">
  <div class="form-group">
    <table class="table">
      <td><input type="text" name="productNaam" placeholder="Productnaam"></td>
      <td><input type="text" name="type" placeholder="Type"></td>
      <td>
        <select name="fabrikantId">
          <?php
          foreach ($fabrikant as $row)
          {
            echo "<option value='$row->fabrikantId'>" . $row->fabrikantNaam . "</option>";
          }
          ?>
        </select>
      </td>
      <td><input type="text" name="inkoopprijs" placeholder="Inkoopprijs"></td>
      <td><input type="text" name="verkoopprijs" placeholder="Verkoopprijs"></td>
      <td><input type="submit" value="Nieuw product toevoegen"></td>
    </table>
  </div>
</form>
