@extends('components.layout')
@section('content')

        

        <div class="main_content">


            <div class="titre mb-5 c_blue" style="justify-content: space-between;">
                <div>
                    <h2 id="H2">Listes Des Gagnants</h2> 
                    
                </div>
                
                <div class="p-2 bd-highlight align-self-center">
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
                        <span class="input-group-text span_gagnant" id="inputGroupPrepend2">Jeu</span>
                        <select class="custom-select slc_gagnant" id="inputGroupSelect01">
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div>
                  
                    <div class="col-md-4 pr-0">
                      <div class="input-group">
                        <span class="input-group-text span_gagnant" id="inputGroupPrepend2">Ville</span>
                        <input type="text" class="form-control dist_gagnant" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                      </div>
                    </div>
                  
                    <div class="col-md-4 pr-0">
                      <div class="input-group">
                        <span class="input-group-text span_gagnant" id="inputGroupPrepend2">Distributeur</span>
                        <input type="text" class="form-control dist_gagnant" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                      </div>
                    </div>
                  </div>
            </div> 

            <div class=" d-flex p-0 overflow-auto " style="margin: 15px!important;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Operation</th>
                            <th scope="col">Classement</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Distributeur</th>
                            <th scope="col">N gain</th>
                            <th scope="col">Nom du gagnant</th>
                            <th scope="col">Gain</th>
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
                        </tr>
                    </tbody>
                </table>    
            </div>
                
        </div>



@endsection






