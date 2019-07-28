<h1>Fabrikant bewerken</h1>

<form action="/FabrikantController/editFabrikant" method="post">
  <div class="form-group">
    <table class="table">
      <input type="hidden" name="fabrikantId" value="<?php echo $fabrikantId ?>">
      <td><input type="text" name="fabrikantNaam" placeholder="Fabrikantnaam" value="<?php echo $fabrikantNaam ?>"></td>
      <td><input type="submit" value="Sla wijzigingen op"></td>
    </table>
  </div>
</form>
