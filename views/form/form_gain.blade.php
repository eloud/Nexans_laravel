

  <div class="login-form ">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="Nom">Nom de gain</label>
                            <input type="text" class="form-control" placeholder="moto"  required="required">
                        </div>
                        <div class="form-group">
                            <label for="Prénom">Description de gain</label>
                            <input type="text" class="form-control" placeholder="Prénom"  required="required">
                        </div>
                        <div class="form-group">
                            <label for="Téléphone">Valeur</label>
                            <input type="text" class="form-control" placeholder="Téléphone"  required="required">
                        </div>  
                        
                        <div class="form-group">
                            <label for="Type">Type</label>
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Electricien</option>
                                <option value="1">Revendeur</option>
                            </select>
                        </div>
    
                        <!-- <div class="form-group">
                             <input type="file" class="custom-file-input" id="customFile">
                            <span class="btn custom-file-label btn-secondary add_img"> Ajouter une image </span>
                        </div> -->

                        <div class="form-group">
                        <input type="file" id="file" style="display:none;" />
                        <button id="button" class="btn btn-secondary add_img" name="button" value="Upload" onclick="thisFileUpload();">Ajouter une image</button>
                        </div>



                        <div class="form-group">
                            <input type="submit" class="btn btn-danger btn-danger1" value="Valider">
                            <input type="reset" class="btn btn-outline-secondary annuler " value="Annuler">  
                        </div>
            
                    </form>
                
                </div>


