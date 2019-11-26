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
                            <h1 class="h2 text-red-900 mb-4 font-weight-bold">Intervention</h1>
                        </div>

                        <form class="user">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Informations Membership</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-sm-3 mb-3 mb-sm-0">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Type de membre</strong>
                                            </label>
                                            <?php echo form_dropdown('typeMembre', $typeMembre,set_value('id_type_membre'),['class'=>'form-control form_input_ci','id'=>'idTypeMembre'])?>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-14 mb-3 control-label"> <strong>Date
                                                    de diagnostic(VIH)</strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci datepicker"
                                                id="datepicker3" placeholder="Date Diagnostic">
                                            <br />
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-14 mb-3 control-label"> <strong>Date de Renouvellement
                                                </strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci datepicker"
                                                id="datepicker4" placeholder="Date renouvellement">
                                        </div>
                                        <div class="col-sm-3">

                                            <label class="col-sm-10 mb-3 control-label"> <strong>Preuve de
                                                    Revenu</strong>
                                            </label>
                                            <?php echo form_dropdown('preuveRevenu', $preuveRevenu,set_value('id_preuve_revenu'),['class'=>'form-control form_input_ci','id'=>'idPreuveRevenu'])?>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Source de
                                                    Revenu</strong>
                                            </label>
                                            <?php echo form_dropdown('sourceRevenu', $sourceRevenu,set_value('id_source_revenu'),['class'=>'form-control form_input_ci','id'=>'idSourceRevenu'])?>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Groupe
                                                    specifique</strong>
                                            </label>
                                            <?php echo form_dropdown('groupespec', $groupeSpec,set_value('id_groupe_spec'),['class'=>'form-control form_input_ci','id'=>'idGroupeSpec'])?>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-12 mb-3 control-label"> <strong>Nb d'Enfant a
                                                    charge</strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci" id="nbEnfant"
                                                placeholder="# Nombre d'enfant a charge">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Mise a jour
                                                    par</strong>
                                            </label>
                                            <?php echo form_dropdown('fichecpar', $users,set_value('id_user'),['class'=>'form-control form_input_ci','id'=>'idUser'])?>
                                            <br />
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Date
                                                    de mise a jour</strong>
                                            </label>
                                            <input type="text" class="form-control form_input_ci datepicker"
                                                id="datepicker5" placeholder="Date inscription">
                                                <br/>
                                        </div>
                                        <div class="col-sm-4s">
                                            <br /><br />
                                            <label class="checkbox-inline" for="adm1tier">
                                                <input type="checkbox" name="adm1tier" id="adm1tier"><strong>**
                                                    Administration par un tiers</strong>
                                            </label>
                                            
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Notes supplementaires</strong>
                                            </label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Correspondance</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">

                                        <div class="col-sm-6">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>
                                                    <center>SIDUS</center>
                                                </strong>
                                            </label>
                                        </DIV>
                                        <div class="col-sm-6">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>
                                                    <center>INFOS DIVERS</center>
                                                </strong>
                                            </label>
                                        </DIV>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Par la poste</strong>
                                            </label>
                                        </DIV>
                                        <div class="col-sm-3">
                                            <select class="form-control form_input_ci">
                                                <option value="oui">Oui</option>
                                                <option value="non">Non</option>
                                            </select>
                                        </DIV>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Par la poste</strong>
                                            </label>
                                        </DIV>
                                        <div class="col-sm-3">
                                            <select class="form-control form_input_ci">
                                                <option value="oui">Oui</option>
                                                <option value="non">Non</option>
                                            </select>
                                        </DIV>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Par la poste</strong>
                                            </label>
                                        </DIV>
                                        <div class="col-sm-3">
                                            <select class="form-control form_input_ci">
                                                <option value="oui">Oui</option>
                                                <option value="non">Non</option>
                                            </select>
                                        </DIV>
                                        <div class="col-sm-3">
                                            <label class="col-sm-10 mb-3 control-label"> <strong>Par la poste</strong>
                                            </label>
                                        </DIV>
                                        <div class="col-sm-3">
                                            <select class="form-control form_input_ci">
                                                <option value="oui">Oui</option>
                                                <option value="non">Non</option>
                                            </select>
                                        </DIV>


                                    </div>

                                </div>
                            </div>


                            <hr class="">


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