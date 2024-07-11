
@extends('layouts.app')

@section('content')
<body>
    <div
        style="height: 43px;width:auto ; margin:auto;display: flex;justify-content: space-evenly;flex-direction: column; background-color:#fff9e3">
        <p></p>

    </div>
<div class="wrapper">
        <div class="fondito">
            <form class="login-form">
                <h1>LOGIN</h1>
                <div class="input-group">
                    <input type="text"  id="usuario" placeholder="Usuario" name="Usuario" required>
                </div>
                <div class="input-group">
                    <input type="password" id="contraseña" placeholder="Contraseña" name="Contraseña" required>
            
                </div>
                <div class="entrar" id="btn-entrar"> <button type="submit"  id="boton" class="btn btn-outline-light">Entrar</button>
                
                    </div>
        
                <div class="options">
                    <label><input type="checkbox" id="recordar"> Recordarme</label>
                </div>
                <div class="olvide"><button type="submit" a href="#" id="recuperar" class="btn btn-outline-light">Olvide mi contraseña</button>

                </div>
        </div>
                </div> 
    
@endsection

@section('style')
@endsection

