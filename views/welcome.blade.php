

@extends('components.layout')

@section('content')
        <div class="main_content">

            <div class="titre mb-5 c_blue" style="justify-content: space-between;">
                    <h2 id="H2">Conditions Générales De Participation </h2> 
            </div>

            <div class="m-3 flex-column" style="width:95%;">
                <textarea id="summernote" name="editordata"></textarea>
                <button type="button" class="btn btn-danger mt-4 btn-lg float-right">Sauvegarder</button>
            </div>
        
        </div>

    <script>
    //  -----for riche text----//
    $(document).ready(function() {
    $('#summernote').summernote();
    });

    </script>

    @endsection