<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Mettiti in contatto con noi</h3>
    </div>
    <div ng-show="contattoCtrl.successo" class="alert alert-success" role="alert"><strong>Complimenti!</strong> la sua richiesta è stata persa in carico dal nostro sistema.</div>
    <div ng-show="contattoCtrl.failure" class="alert alert-danger" role="alert"><strong>Attenzione!</strong> si è verficato un errore riprovare più tardi</div>
    <div class="panel-body">
        <form name="contattoForm" ng-submit="contattoForm.$valid && contattoCtrl.sendMessage()" novalidate>
            <div class="form-group">
                <label for="nomeCongome">Nome e Cognome</label>
                <input ng-model="contattoCtrl.messaggio.mittente" type="text" class="form-control" id="nomeCognome" placeholder="Inserisci il tuo nome e cognome" required>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input ng-model="contattoCtrl.messaggio.telefono" type="text" class="form-control" id="telefono" placeholder="Inserisci il tuo numero di telefono" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input ng-model="contattoCtrl.messaggio.email" type="email" class="form-control" id="email" placeholder="Inserici il tuo indirizzo e-mail" required>
            </div>
            <div class="form-group">
                <label for="messaggio">Messaggio</label>
                <textarea ng-model="contattoCtrl.messaggio.testo" rows="5" class="form-control" id="messaggio" placeholder="Facci sapere cosa vuoi" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" ng-disabled="!contattoForm.$valid">Invia</button>
        </form>
        <br />
    </div>
</div>