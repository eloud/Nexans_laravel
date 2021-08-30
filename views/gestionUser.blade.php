
@extends('components.layout')
@section('content')


        <div class="main_content">

            <div class="titre c_blue mb-5" style="justify-content: space-between;">
                <div>
                    <h2 id="H2">Gestion des utilisateurs</h2> 
                    
                </div>
                
                <div class="p-2 bd-highlight align-self-center cachez">
                    <button type="button" class="btn btn-outline-secondary float-right mytoggle "> Ajouter un utilisateur</button>
                    <button type="button" class="btn btn-outline-secondary float-right mx-1  ">Exportation CSV</button>
                    <button type="button" class="btn btn-outline-secondary float-right">Exportation Excel</button>
                </div>

            </div>
              

            <div class=" d-flex p-0 overflow-auto " style="margin: 15px!important;">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>mohamed ali klay</td>
                        <td>amine mehdi zrebe9</td>
                        <td>09 08 09 09 09</td>
                        <td>Tarik.eloud@gmail.com</td>
                        <td>adùinistarteur reseau</td>
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
               
                
                @include('form.form_user')                


            </div>
                
        </div>

<script>

// $("body").css("font-size", "14px");
  

    $('.mytoggle').click(function(){
            $('.table').hide();
            $('.login-form').show();
            $('.cachez').hide();
        });
        $('.annuler').click(function(){
            $('.table').show();
            $('.login-form').hide();
            $('.cachez').show();

        });
</script>


@endsection

