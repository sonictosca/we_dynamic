<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Mettiti in contatto con noi</h3>
    </div>
    <div id="successo" class="alert alert-success" role="alert"><strong>Complimenti!</strong> la sua richiesta è stata persa in carico dal nostro sistema.</div>
    <div id="errore" class="alert alert-danger" role="alert"><strong>Attenzione!</strong> si è verficato un errore riprovare più tardi</div>
    <div class="panel-body">
        {!! Form::open(array('url' => 'contatto', 'method' => 'PUT', 'id' => 'contattiForm')) !!}
            <div class="form-group">
                <label for="nomeCongome">Nome e Cognome</label>
                <input type="text" class="form-control" id="nomeCognome" name="nomeCognome" placeholder="Inserisci il tuo nome e cognome">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Inserisci il tuo numero di telefono">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Inserici il tuo indirizzo e-mail">
            </div>
            <div class="form-group">
                <label for="txtMsg">Messaggio</label>
                <textarea rows="5" class="form-control" id="txtMsg" name="txtMsg" placeholder="Facci sapere cosa vuoi"></textarea>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" id="consenso" name="consenso" checked> Autorizzo al trattamento dei miei dati personali ai sensi dell'art. 13 D.L. 30 giugno 2003 n. 196
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        {!! Form::close() !!}
        <br />
    </div>
</div>
