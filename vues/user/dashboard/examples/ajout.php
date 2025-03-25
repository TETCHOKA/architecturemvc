



<div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                    <?php  if(isset($message)){
                                                 echo $message;
                                                }      
                                            ?>
                        <h3 class="text-center font-weight-light my-4">Nouvelle utilisateur </h3></div>
                                    <div class="card-body">
                                        <form action="categories.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputNomCategories" type="text" name="nom_categorie" value="" />
                                                <label for="inputNomCategories">Nom</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputNomCategories" type="text" name="nom_categorie" value="" />
                                                <label for="inputNomCategories">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputNomCategories" type="text" name="nom_categorie" value="" />
                                                <label for="inputNomCategories">Password</label>
                                            </div>
                                            
                                                <input type="submit" name="enregistrer_categorie" value="Enregistrer" class="btn btn-primary">
                                            </div>
                                        </form>
                                    </div>

                                </div>