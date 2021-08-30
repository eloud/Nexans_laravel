
@extends('components.layout')
@section('content')



        <div class="main_content">

            <div class="titre c_blue" style="justify-content: space-between;">
                <div>
                    <h2 id="H2">Listes des distributeurs</h2>         
                </div>
                
                <div class="p-2 bd-highlight cachez">
                    <button type="button" class="btn btn-outline-secondary float-right mx-1  ">Exportation CSV</button>
                    <button type="button" class="btn btn-outline-secondary float-right">Exportation Excel</button>
                </div>

            </div>
            

            <div class=" d-flex p-0" style="margin: 15px!important;">
               <div class="overflow-auto tab1 mt-5" style="min-width: 65%;">
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Raison sociale</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Auke</td>
                            <td>Casablanca</td>
                            <td><i class="bi bi-trash"></i><i class="bi bi-eye"></i><i class="bi bi-pen"></i></td>    
                         </tr>
                         <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td><i class="bi bi-trash"></i> <i class="bi bi-eye"></i><i class="bi bi-pen"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>litle boy </td>
                            <td><i class="bi bi-trash"></i> <i class="bi bi-eye"></i><i class="bi bi-pen"></i></td>
                        </tr>
                    </tbody>
                  </table>   
                </div>
                
                  <div class="page2_distribisteur d-none" style="width: 100%;">
                    <div class="form-inline info_dist  d-flex mb-5" style="justify-content: space-evenly;">
                        <div class="form-group mb-2">
                          <label for="Raison sociale">Raison sociale:</label>
                          <span class="data_input">Auke</span>
                        </div>
                        <div class="form-group  mb-2">
                          <label for="inputPassword2">Jeu:</label>
                          <span class="data_input">Easy</span>
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputPassword2">Ville:</label>
                            <span class="data_input">Rabat</span>
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputPassword2">Date fin:</label>
                            <span class="data_input">12/12/2021</span>
                        </div>                
                    </div>

                    <div class="overflow-auto mt-5">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">N Gain</th>
                            <th scope="col">Nom de gain</th>
                            <th scope="col">Description de gain</th>
                            <th scope="col">Valeur</th>
                            <th scope="col">Type</th>
                            <th scope="col">Quantité</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>1</td>
                            <td>MOTO</td>
                            <td>Becann C11</td>
                            <td>20 000</td>
                            <td>ELECTRICIEN</td>
                            <td>20</td>   
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td> 
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>  
                          </tr>
                        </tbody>
                      </table>
                    </div>
    
                  </div>
                
            </div>

                
        </div>


        



    

<script>

    $('.bi-eye').click(function(){
            document.getElementById('H2').innerHTML="Listes des gains par distributeur";
            $('.tab1').hide();
            $('.cachez').hide();
            $('.page2_distribisteur').removeClass('d-none'); 
            
        });

</script>


@endsection



