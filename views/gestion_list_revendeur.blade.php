
@extends('components.layout')

@section('content')

    
        <div class="main_content">

            <div class="titre" style="justify-content: space-between;">
                <div>
                    <h2 id="H2">Listes Des inscrits</h2> 
                    <h4 class="text-muted cachez">Revendeur</h4>
                </div>
                
                <div class="p-2 bd-highlight align-self-center cachez">
                    <button type="button" class="btn btn-outline-secondary float-right mx-1">Exportation CSV</button>
                    <button type="button" class="btn btn-outline-secondary float-right">Exportation Excel</button>
                </div>

            </div>
              
            <div class="filtre row">
                
                <label for="Filtrer" class="text-muted font-weight-bold">Filtrer par</label>
                <hr class="ml-2 mb-0">


                <div class="row g-3 mt-0 mb-4">
    
                    <div class="col-md-4 pr-0">
                      <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">Nom</span>
                        <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                      </div>
                    </div>
                  
                    <div class="col-md-4 pr-0">
                      <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">Tel</span>
                        <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                      </div>
                    </div>

                    <div class="col-md-4 pr-0">
                        <div class="input-group">
                          <span class="input-group-text" id="inputGroupPrepend2">Fournisseur</span>
                          <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                      </div>

                  </div>



            </div> 

            <div class="bg-light d-flex p-0 " style="margin: 15px!important;">
                <table class="table table-condensed table-responsive p-0 mx-0 my-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Raison sociale</th>
                            <th scope="col">Nom du gérant</th>
                            <th scope="col">Prénom du gérant</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Email</th>
                            <th scope="col">ville</th>
                            <th scope="col">Date/Heure</th>
                            <th scope="col">Fournisseur1 <br>Raison social</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Fournisseur2<br> Raison social</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Fournisseur3 <br>Raison social</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Jean pierre emeric</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@tarik@gmail.com</td>
                            <td>Casablanca</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@Casablanca</td>
                            <td>@Casablanca</td>
                            <td>Casablanca</td>
                            <td>@Casablanca</td>
                            <td>@Casablanca</td>
                            <td>@Casablanca</td>
                            <td><i class="bi bi-trash"></i> <i class="bi bi-pen add"></i></td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>hellllooo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td><i class="bi bi-trash"></i> <i class="bi bi-pen add"></i></td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>litle boy </td>
                            <td><i class="bi bi-trash"></i> <i class="bi bi-pen add"></i></td>
                          </tr>

                      </tbody>
                </table>   
                
               @include('form.form_list_rev')
            </div>
                
        </div>
    
<script>


    $('.bi-pen').click(function(){
            $('.table').hide();
            $('.filtre').hide();
            $('.cachez').hide();
            $('.login-form').show();
            document.getElementById('H2').innerHTML="Gestion des utilisateurs";
        });
        $('.annuler').click(function(){
            $('.table').show();
            $('.filtre').show();
            $('.cachez').show();
            $('.login-form').hide();
            document.getElementById('H2').innerHTML="Listes Des inscrits";
        });

</script>

@endsection

