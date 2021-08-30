
@extends('components.layout')
@section('content')



        <div class="main_content">

            <div class="titre c_blue" style="justify-content: space-between;">
                <div>
                    <h2 id="H2">Résulats des scans</h2> 
                    <h4 class="text-muted">Electricien</h4> 
                </div> 
                <div class="p-2 bd-highlight">
                    <button type="button" class="btn btn-outline-secondary float-right mx-1">Exportation CSV</button>
                    <button type="button" class="btn btn-outline-secondary float-right  ">Exportation Excel</button>
                </div>
            </div>
            
            <div class="filtre row">
                <label for="Filtrer" class="text-muted font-weight-bold">Filtrer par</label>
                <hr class="ml-2 mb-0">

                <div class="row g-3 mt-0 mb-3">
                    <div class="col-auto pr-0">
                      <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">Jeu</span>
                        <select class="custom-select" id="inputGroupSelect01">
                          <option selected>Operation printemps...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div> 
                  </div>
            </div> 

            <div class=" d-flex p-0 overflow-auto " style="margin: 15px!important;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">QR code</th>
                            <th scope="col">Nom de l'operation</th>
                            <th scope="col">Nom </th>
                            <th scope="col">Prénom </th>
                            <th scope="col">Ville</th>
                            <th scope="col">Distributeur </th>
                            <th scope="col">Date/Heure</th>
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
                            <td>@Casablanca</td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>hellllooo</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>

                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>hellllooo</td>
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
