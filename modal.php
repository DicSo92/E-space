<!-- Modal CONNEXION-->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ConnexionLabel">Connectez-Vous</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <!-- /form -->
                <form class="form-signin" method="post" action="index.php">
                    <input type="email" id="inputEmail" class="form-control mb-2" placeholder="Adresse Email" name="email" required autofocus>
                    <input type="password" id="inputPassword" class="form-control mb-2" placeholder="Mot de Passe" name="password" required>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Connexion</button>
                </form>
                <a href="#" class="forgot-password"> Mot de Passe Oublié? </a>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-lg btn-primary btn-block" id="signin">
                    Pas encore Inscrit ?
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modal INSCRIPTION-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Formulaire d'Inscription</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container">

                    <form method="post" action="index.php">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Pseudo</label>
                                    <div class="cols-sm-10">
                                        <input type="text" class="form-control"  placeholder="Entrer votre Prénom" name="pseudo" id="pseudo"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label">Email</label>
                                    <div class="cols-sm-10">
                                        <input type="email" class="form-control" placeholder="Entrer votre Email" name="email" id="email"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="password" class="cols-sm-2 control-label">Mot de Passe</label>
                                    <div class="cols-sm-10">
                                        <input type="password" class="form-control" placeholder="Entrer votre Mot de Passe" name="password" id="password"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirm" class="cols-sm-2 control-label">Confirmation de Mot de Passe</label>
                                    <div class="cols-sm-10">
                                        <input type="password" class="form-control" placeholder="Confirmation de Mot de Passe" name="password_confirm" id="password_confirm" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" name="register" value="inscription"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    //set button id on click to hide first modal
    $("#signin").on( "click", function() {
        $('#myModal1').modal('hide');
    });
    //trigger next modal
    $("#signin").on( "click", function() {
        $('#myModal2').modal('show');
    });
</script>

