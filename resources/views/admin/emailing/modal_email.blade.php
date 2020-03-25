<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="send_email">
    <div class="modal-dialog modal-sm">
        <!-- <div class="modal-content">
            <div class="modal-body title_modal_delete">
                Envoyer l'e-mail a une personne
            </div>
            <div class="modal-footer foot_modal_delete">
                <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Supprimer</button>
                <button type="button" data-dismiss="modal" class="btn">Annuler</button>
            </div>
        </div> -->
        <div class="modal-content">
            <form action="{{route('send_email')}}" method="POST">
                @csrf
                <div class="modal-header" style="text-align:center">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h2 class="modal-title" style="color:#f90">Envoyer l'e-mail a une personne</h2>
                </div>
                <div class="modal-body">
                    <div class="row" style="display:inline-block">
                        <div class="col-xs-12" >
                            <!-- <div class="col-xs-4">
                                <span>E-mail du personne :</span>
                            </div> -->
                            <!-- <div class="col-xs-8"> -->
                                <input type="email" class="form-control" name="mail" placeholder="Entrez l'email du personne" required>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Envoyer" style="border-radius:2px;font-size:15px" class="btn btn-primary">
                </div>
            </form>     
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>