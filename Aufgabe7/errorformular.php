<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
<div class="form-group">
    <label class="control-label col-sm-2 col-md-2 row" for="vorname">Vorname :</label>
    <div class="col-sm-10 col-md-6 invalid-feedback" id="roterHintergrund">
    <input type="text" class="form-control" name="vorname" placeholder="Vorname">
    Bitte Vornamen eingeben!
</div>
</div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2 col-md-2 row" for="nachname">Nachname :</label>
    <div class="col-sm-10 col-md-6 invalid-feedback" id="roterHintergrund">
        <input type="text" class="form-control" name="nachname" placeholder="Nachname">
        Bitte Nachnamen eingeben!
    </div>
    </div>
<div class="form-group">
    <label class="control-label col-sm-2 col-md-2 row" for="email">Email: </label>
<div class="col-sm-10 col-md-6 invalid-feedback" id="roterHintergrund">
    <input type="email" class="form-control" name="email" placeholder="E-Mail">
    Bitte E-Mail Adresse eingeben!
</div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2 col-md-2 row" for="studiengang">Studiengang: </label>
<div class="col-sm-10 col-md-6">
    <select class="form-control" name="studiengang">
        <option value="FIW">Informatik und Wirtschaft</option>
        <option value="AI">Angewandte Informatik</option>
        <option value="WI">Wirtschaftsinformatik</option>
        <option value="IMI">Internationale Medieninformatik</option>
    </select>
</div>
</div>
<div class="form-group">
    <label for="pwd" class="control-label col-sm-2 col-md-2 row">Password: </label>
    <div class="col-sm-10 col-md-6 invalid-feedback" id="roterHintergrund">
        <input type="password" class="form-control" name="pwd" placeholder="Passwort">
        Bitte Passwort eingeben!
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10 col-md-offset-2 col-md-6 row">
        <button type="submit" class="btn btn-default">Anmelden</button>
    </div>
</div>
</form>
