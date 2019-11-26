@extends('layouts.main')
@section('content')
<div class="container" id="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h2 text-red-900 mb-4 font-weight-bold">Informations</h1>
                        </div>

                        <form class="user">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Informations General</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-sm-3 mb-3 mb-sm-0">
                                            <label class="col-sm-6 mb-3 control-label"> <strong># Dossier</strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci" id="#dossier"
                                                placeholder="# Dossier">
                                        </div>
                                        <div class="col-sm-3 mb-3 mb-sm-0">
                                            <label class="col-sm-6 mb-3 control-label"> <strong>Prenom</strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci" id="prenomMembre"
                                                placeholder="Prenom">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-6 mb-3 control-label"> <strong>Nom</strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci" id="nomMembre"
                                                placeholder="Nom">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Date
                                                    d'inscription</strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci datepicker"
                                                id="datepicker1" placeholder="Date inscription">
                                            <br />
                                        </div>
                                       <!--  <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Date de Naissance
                                                </strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci datepicker"
                                                id="datepicker2" placeholder="Date naissance">
                                        </div> -->
                                        <div class="col-sm-3">

                                            <label class="col-sm-10 mb-3 control-label"> <strong>Sexe</strong>
                                            </label>
                                            <?php echo form_dropdown('sexes', $sexes,set_value('id_sexe'),['class'=>'form-control form_input_ci','id'=>'idSexe'])?>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Complete par</strong>
                                            </label>
                                            <?php echo form_dropdown('fichecpar', $users,set_value('id_user'),['class'=>'form-control form_input_ci','id'=>'idUser'])?>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Intervenant</strong>
                                            </label>
                                            <?php echo form_dropdown('fichecpar', $users,set_value('id_user'),['class'=>'form-control form_input_ci','id'=>'idInterven'])?>
                                        </div>
                                        <div class="form-group">
                                            <br />
                                            @foreach($soutiens as $ss)
                                            <label class="checkbox-inline" for="checkboxes-{{$ss->id_type_membre}}">
                                                <input type="checkbox" name="checkboxes"
                                                    id="checkboxes-{{$ss->id_type_membre}}"
                                                    value={{$ss->id_type_membre}}>
                                                <strong> {{"** ".$ss->type_membre}}</strong>

                                            </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <hr class="">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Coordonnees</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-sm-3 mb-3 mb-sm-0">
                                            <label class="col-sm-6 mb-3 control-label"> <strong>Adresse</strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci" id="adresse"
                                                placeholder="adresse">
                                        </div>
                                        <div class="col-sm-3">

                                            <label class="col-sm-10 mb-3 control-label"> <strong>Ville</strong>
                                            </label>
                                            <?php echo form_dropdown('villes', $villes,set_value('id_ville'),['class'=>'form-control form_input_ci','id'=>'idVille'])?>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Code Postal</strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci" id="codePostal"
                                                placeholder="Code postal">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Telephone
                                                    maison</strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci" id="telMaison"
                                                placeholder="Telephone maison">
                                            <br />
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Telephone
                                                    travail</strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci" id="telTravail"
                                                placeholder="Telephone travail">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Cellulaire</strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci" id="cellulaire"
                                                placeholder="Cellulaire">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Autre
                                                    Telephone</strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci" id="telAutre"
                                                placeholder="Autre Telephone">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Message</strong>
                                            </label>
                                            <select class="form-control form_input_ci">
                                                <option value="oui">Oui</option>
                                                <option value="non">Non</option>
                                            </select>
                                            <br />
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Courriel</strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci" id="courriel"
                                                placeholder="Courriel">
                                        </div>
                                        <div class="col-sm-3">

                                            <label class="col-sm-10 mb-3 control-label"> <strong>Etat Civil</strong>
                                            </label>
                                            <?php echo form_dropdown('etatCivil', $etatCivil,set_value('id_etat_civil'),['class'=>'form-control form_input_ci','id'=>'idCivil'])?>
                                        </div>
                                        <div class="col-sm-3">

                                            <label class="col-sm-10 mb-3 control-label"> <strong>Citoyennete</strong>
                                            </label>
                                            <?php echo form_dropdown('citoyennete', $citoyennete,set_value('id_citoyennete'),['class'=>'form-control form_input_ci','id'=>'idCitoyennete'])?>
                                            <br />
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Intervenant</strong>
                                            </label>
                                            <?php echo form_dropdown('fichecpar', $users,set_value('id_user'),['class'=>'form-control form_input_ci','id'=>'idInterven'])?>
                                        </div>
                                        <div>
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Langue usuelle</strong>
                                            </label>
                                            @foreach($langues as $ss)
                                            <label class="checkbox-inline" for="checkboxes-{{$ss->id_langue}}">
                                                <input type="checkbox" name="checkboxeLangue"
                                                    id="checkboxeLangue-{{$ss->id_langue}}" value={{$ss->id_langue}}>
                                                <strong> {{"** ".$ss->langue_membre}}</strong>

                                            </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Contact en cas d'urgence</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <label class="col-sm-6 mb-3 control-label"> <strong>Nom</strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci" id="nomContact"
                                                placeholder="Nom Contact">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Telephone</strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci" id="telContact"
                                                placeholder="Telephone">
                                        </div>
                                        <div class="col-sm-3">

                                            <label class="col-sm-10 mb-3 control-label"> <strong>Lien</strong>
                                            </label>
                                            <?php echo form_dropdown('lien', $lien,set_value('id_lien'),['class'=>'form-control form_input_ci','id'=>'idLien'])?>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Connait statut VIH</strong>
                                            </label>
                                            <select class="form-control form_input_ci">
                                                <option value="oui">Oui</option>
                                                <option value="non">Non</option>
                                            </select>
                                            <br />
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">

                                </div>
                                <div class="col-sm-2">

                                </div>
                                <div class="col-sm-3">
                                    <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    <i class="far fa-save"></i> <strong>Enregistrer</strong>
                                    </a>
                                </div>
                            </div>




                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</html>