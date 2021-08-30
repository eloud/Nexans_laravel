<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/connexion.css') }}" >

</head>
<body>
    


    <div class="all_page">

        <div class="top">
            <h1 class="title">Gestion Du Back-Office Application Mobile</h1>
            <input type="text" value="2021" class="an" disabled>
            <img src="{{ asset('img/nexans_login.png') }}" alt="logo" srcset="">
        </div>

        <div class="bottom">

            <div class="login-form">
                <form action="{{url('/gestionUser')}}" method="post">
                @csrf
                    <h2 class="text-center">Connexion</h2>       
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="nexans@gmail" required="required">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="*******"  required="required">
                    </div>
                    <div class="clearfix">
                        <label class="float-left form-check-label"><input type="checkbox"> ce souvenir de moi</label>   
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-danger btn-lg" value="Se Connecter">
                    </div>
        
                </form>
            </div>

        </div>

    </div>








</body>
</html>