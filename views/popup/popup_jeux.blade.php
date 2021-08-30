               
               
               
               
               
               <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            
                            <h5 class="modal-title " id="exampleModalLongTitle">Ajout Du Jeu Concours</h5>
                            
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>

                            <div class="modal-body media" >
                                <img class="align-self-center img_modal" src="{{asset('img/loterie.png')}}" />
                                <div class="media-body">
                                    <div class="form_jeu d-block ">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label for="Nom">Nom</label>
                                                <input type="text" class="form-control" placeholder="place holder" required="required">
                                            </div>
        
                                            <div class="form-group">
                                                <label for="Date Début">Date Début</label>
                                                <input type="date" class="form-control" placeholder="Date" required="required">
                                            </div>                            
                                            
                                            <div class="form-group">
                                                <label for="Date Fin">Date Fin </label>
                                                <input type="date" class="form-control" placeholder="Date" required="required">
                                            </div>  
        
                                            <div class="form-group">
                                                <label for="Status">Status</label>
                                                <div class="form-switch">    
                                                    <input class=" form-check-input btn-lg " type="checkbox" id="flexSwitchCheckDefault" />   
                                                </div> 
                                            </div>
                                                                                    
                                        
                                                        
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-danger btn-danger1" value="Valider">
                                                <input type="reset" class="btn btn-outline-secondary " data-dismiss="modal" value="Annuler">  
                                            </div>
                                
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer"></div>
                        </div>
                    </div>
                </div>