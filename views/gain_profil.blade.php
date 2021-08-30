
 @extends('components.layout')

@section('content')
        
        <div class="main_content">

            <div class="titre c_blue mb-5" style="justify-content: space-between;">
                <div>
                    <h2 id="H2">Gain Par Profile</h2> 
                    <h4 class="text-muted gain" style="display: none">Gain N01</h4>
                    
                </div>
                
                <div class="p-2 bd-highlight buttons ">
                    <button type="button" class="btn btn-outline-secondary float-right my_toggle "> Ajouter un Gain</button>
                    <button type="button" class="btn btn-outline-secondary float-right mx-1">Exportation CSV</button>
                    <button type="button" class="btn btn-outline-secondary float-right">Exportation Excel</button>
                </div>

            </div>
              

            <div class=" d-flex p-0 overflow-auto " style="margin: 15px!important;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">N gain</th>
                            <th scope="col">Type</th>
                            <th scope="col">Gain</th>
                            <th scope="col">Valeur</th>
                            <th scope="col">Description de gain</th>
                            <th scope="col">Action</th>
                          </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>1</td>
                        <td>Electricien</td>
                        <td>Moto</td>
                        <td>20 000</td>
                        <td>bECAN 100cc</td>
                        <td><i class="bi bi-trash"></i> <i class="bi bi-pen "></i></td>                   
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>hellllooo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td><i class="bi bi-trash"></i> <i class="bi bi-pen "></i></td>
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

                
                @include('form.form_gain')
                
            </div>

            <div class="form-group IMG" style="float: right; margin: 2%;">
                    <input type="file" id="file" style="display:none;" />
                    <button id="button" class="btn btn-secondary add_img" name="button" value="Upload" onclick="thisFileUpload();">Ajouter une image</button>
            </div>
          
                
        </div>


        

    

<script>

    $('.my_toggle').click(function(){
            $('.table').hide();
            $('.login-form').show();
            $('.buttons').hide();
            $('.IMG').hide();
            $('.gain').show();

        });

        $('.annuler').click(function(){
            $('.table').show();
            $('.login-form').hide();
            $('.buttons').show();
            $('.gain').hide();

        });
        

        function thisFileUpload() {
            document.getElementById("file").click();
        };

</script>


@endsection