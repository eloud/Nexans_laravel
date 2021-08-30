    
     @extends('components.layout')

@section('content')


        <div class="main_content">

            <div class="titre c_blue" style="justify-content: space-between;">
                <div>
                    <h2 id="H2">Tirage Au Sort</h2> 
                    <h4 class="text-muted cachez">Revendeur</h4>
                </div>
                
                <div class="p-2 bd-highlight align-self-center cachez">
                    <button type="button" class="btn btn-outline-secondary float-right mx-1">Exportation CSV</button>
                    <button type="button" class="btn btn-outline-secondary float-right">Exportation Excel</button>
                </div>

            </div>
              
            <div class="filtre row">
                
                <div class="row g-3 mt-0 mb-4" style="width:100%; justify-content: space-between; transform: translate(0px,-10px);">
    
                    <!-- <span class="float-left nbr_participant" style="position: relative;top: 10px;left: 10px;">Nombre de participant par ville</span> -->
                    <div class="col-md-3 pr-0">
                        <span class="float-left nbr_participant">Nombre de participant par ville</span>
                        <input type="text" class="form-control " value="444" readonly style="min-width: 75px;">     
                    </div>
                  
                    <div class="col-md-3 pr-0" style="align-self: flex-end;">
                        <select class="selectpicker pick100" id="gainid">
                            <option value="0" class="d-none">Gain</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                      
                    </div>


                    <div class="col-md-3 pr-0" style="align-self: flex-end;">
                        <div class="input-group">
                            <input type="number" id="quantityxx" class="form-control" placeholder="QUANTITE" min="0" >
                            <div style="display: grid; width: 38px; max-height:38px;background:#0B314B">
                                <button type="button" onclick=" var x=plus($('#quantityxx').val());$('#quantityxx').val(x) " class="btn" style="min-height: 19px; border-radius: 0;">
                                    <i class="bi bi-caret-up-fill"></i>
                                </button>
                                                    
                                    <button type="button" onclick=" var x=minus($('#quantityxx').val()); $('#quantityxx').val(x)" class="btn" style="min-height: 19px; border-radius: 0;">
                                        <i class="bi bi-caret-down-fill"></i>
                                    </button>
                            </div>                    
                        </div>
                    </div>

                    <div class="col-md-3 pr-0" style="align-self: flex-end;">
                        <select class="selectpicker pick100" id="classementid">
                            <option value="0" class="d-none">Classement</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>


                </div>



            </div> 

            <div class="overflow-auto ml-4">
                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Classement</th>
                          <th scope="col">N Gain</th>
                          <th scope="col">Nom de gain</th>
                          <th scope="col">Description du gain</th>
                          <th scope="col">Valeur</th>
                          <th scope="col">Type</th>
                          <th scope="col" >Quantite</th>
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

            <button type="button" class="btn btn-danger float-right my-5 mx-3" data-toggle="modal" data-target="#exampleModalCenter">Demarer le tirage au sort</button>
               

            @include('popup.popup_tirage')

            @include('popup.modal_gagnant')

        </div>


@endsection