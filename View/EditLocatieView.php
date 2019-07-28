<h1>Locatie bewerken</h1>

<form action="/LocatieController/editLocatie" method="post">
  <div class="form-group">
    <table class="table">
      <input type="hidden" name="locatieId" value="<?php echo $locatieId ?>">
      <td><input type="text" name="locatieNaam" placeholder="Locatienaam" value="<?php echo $locatieNaam ?>"></td>
      <td><input type="submit" value="Sla wijzigingen op"></td>
    </table>
  </div>
</form>
