<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Almalogix WMS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @include('shared.bootstrap')
        <link href="{{asset('css/login.css')}}" rel="stylesheet">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2 class="text-center text-dark mt-5">Bienvenido a Almalogix WMS</h2>
                    <div class="card my-5">

                        <form class="card-body cardbody-color p-lg-5">
                            @csrf
                            <div class="text-center">
                                <img src="{{asset('images/login/brand.jpeg')}}" 
                                     class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                                     width="200px" alt="profile">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text bi bi-person-fill"></span>
                                <input type="usuario" class="form-control form-control-lg" id="usuario" placeholder="Usuario">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text bi bi-lock-fill"></span>
                                <input type="password" class="form-control form-control-lg" id="pass" placeholder="Contraseña">
                            </div>
                            <div class="mb-3 text-center">
                                <input type="checkbox" class="form-check-input" id="recordar-usuario" style="border: solid 1px #c5c5c5;">
                                <label class="form-check-label" for="recordar-usuario">Recordar usuario</label>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btn-lg" type="button">
                                    Iniciar Sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  

    </body>
</html>
