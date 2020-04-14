<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cs/estilo.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title>Parque Chatun</title>
</head>

<body>
    <section class="contenido">
        <section>
            <a href="#"><img class="logo" src="images/mensajero.png" alt="logomessenger" style="top: 22%;"></a>
            <a href="#"><img class="logo" src="images/whatsapp.png" alt="logo whatsapp"></a>
            <img id="logo" src="images/logo.png" width="200px;" alt="logotipo">
        </section>
        <h1 id="parque">Parque Chatun</h1>
        <h3 id="parquesub">Contacto con la Naturaleza!!</h3>
        <audio src="audio/caida.mp3"></audio>
        <div style="text-align: center;">
            <a class="bubbly-button animated bounce delay-2s" href="home.html" onmouseover="playclip()">Iniciar Aventura</a>
        </div>
    </section>
    <section class="actividad">
        <div>
            <h1 class="titulo">Actividad</h1>
            <h4 class="titulo">Parque Chatun</h4>
            <button type="button" data-toggle="modal" data-target=".actividades" class="btn"><img src="images/mas.png" width="30px"></button>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($activi as $a)
                    <div class="col-lg-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{Storage::url($a->picture)}}" alt="evento">
                            <div class="card-body">
                            <h5 class="card-title">{{$a->title}}</h5>
                            <p class="card-text">{{$a->description}}</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="modal fade actividades" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="actividades">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{route('inicio.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <div class="for-row">
                        <div class="col">
                            <label for="titulo">Titulo</label>
                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>
                    </div><br>
                    <div class="for-row">
                        <div class="col">
                            <h4>Imagen</h4>
                            <input name="picture" id="picture" type="file" required>
                        </div> 
                    </div>
                    <div class="for-row">
                        <div class="col">
                            <label>Contenido de la Actividad</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Actividad</span>
                                </div>
                                <textarea class="form-control" name="description" id="description" aria-label="With textarea" required></textarea>
                            </div><br>
                        </div>
                    </div>
                    <br><br>
                    <div class="for-row">
                        <div class="col">
                            <button class="btn btn-success" type="submit">Subir</button><br><br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>  
    
    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>