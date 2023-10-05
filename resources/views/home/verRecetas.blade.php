<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/gg.css')}}">
    <title>Document</title>
</head>
<body>


<div>
    <div class="image">
        <img src="{{ asset('storage/' . $recetas->images) }}" alt="{{ $recetas->images }}">
    </div>
    <h1 class="title">{{ $recetas->name }}</h1><br>
    <p>{{ $recetas->ingredients }}</p><br>
    <p>{{ $recetas->description }}</p>
    <p>{{ $recetas->category_id }}</p>
    <h2>Comentarios:</h2>
    @foreach($recetas->comments as $comment)
        <p>{{ $comment->description }}</p>
    @endforeach
</div>


</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/CSS/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


    <title>Document</title>
</head>
<body>
<div class="container-title">
            <i class="fas fa-utensils"></i>{{ $recetas->name }}
        </div>
        

		<main>
			<div class="container-img">
            <img src="{{ asset('storage/' . $recetas->images) }}" >
			</div>
			<div class="container-info-product">
				<div class="container-description">
                    <div class="title-description">
                        <h4><i class="fas fa-star"></i> Descripcion</h4>
                    </div>
                    <div class="text-description">
                        <ol>
                            <h4>{{ $recetas->description }}</h4>
                        </ol>
                    </div>
                </div>

				<div class="container-description">
                    <div class="title-description">
                        <h4><i class="fas fa-utensils"></i> Lista de ingredientes</h4>
                    </div>
                    <div class="text-description">
                        <ul>
                            <li>{{ $recetas->ingredients }}</li>
                            <li>Ingrediente 2</li>
                            <li>Ingrediente 3</li>
                            <li>Ingrediente 4</li>
                            <!-- Añade más ingredientes según sea necesario -->
                        </ul>
                    </div>
                </div>
                

				<div class="container-description">
                    <div class="title-description">
                        <h4><i class="fas fa-list-alt"></i> Pasos para preparar</h4>
                    </div>
                    <div class="text-description">
                        <ol>
                            <li><i class="fas fa-hand-sparkles"></i>{{ $recetas->preparation }} </li>
                            <li><i class="fas fa-cut"></i> Cortar los ingredientes en trozos pequeños.</li>
                            <li><i class="fas fa-utensil-spoon"></i> Cocinar a fuego medio durante 20 minutos.</li>
                            <li><i class="fas fa-leaf"></i> Agregar hierbas frescas y mezclar bien.</li>
                        </ol>
                    </div>
                </div>
			</div>
		</main>
</body>
</html>