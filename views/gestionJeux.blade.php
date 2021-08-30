
@extends('components.layout')
@section('content')



        <div class="main_content">

            <div class="titre c_blue mb-5" style="justify-content: space-between;">
                <div>
                    <h2 id="H2">Gestion des Jeux Concours</h2>             
                </div>
                
                <div class="p-2 bd-highlight align-self-center">
                    <button type="button" class="btn btn-outline-secondary float-right" data-toggle="modal" data-target="#exampleModalCenter"> Ajouter un Jeu</button>
                    <button type="button" class="btn btn-outline-secondary float-right mx-1  ">Exportation CSV</button>
                    <button type="button" class="btn btn-outline-secondary float-right">Exportation Excel</button>
                </div>

            </div>
              

            <div class=" d-flex p-0 overflow-auto " style="margin: 15px!important;">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Operation</th>
                        <th scope="col">Date début</th>
                        <th scope="col">Date fin</th>
                        <th scope="col">Nbr de coupons <br> scannes</th>
                        <th scope="col">Nbr de gagnant</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td><i class="bi bi-trash"></i> <i class="bi bi-pen"></i></td>
                        
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>hellllooo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td><i class="bi bi-trash"></i> <i class="bi bi-pen"></i></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>@mdo</td>
                        <td>litle boy </td>
                        <td><i class="bi bi-trash"></i> <i class="bi bi-pen"></i></td>
                      </tr>
                    </tbody>
                  </table>

            </div>

            
            @include('popup.popup_jeux')
                
        </div>



@endsection
