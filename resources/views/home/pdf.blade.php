<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ public_path('css/CSS/style.css') }}">

    <title>Document</title>
</head>
<body>
<div class="container-title">
            <i class="fas fa-utensils"></i>{{ $recipe->name }}
        </div>
		<main>
			<div class="container-img">
                @foreach($recipe->multimedia as $imagenes)
                    <img alt="img" class="" src="{{ asset('storage/' . $imagenes->ruta) }}">
                @endforeach
			</div>
            <b>tiempo de preparacion: {{$recipe->preparation_time}}</b>
			<div class="container-info-product">
				<div class="container-description">
                    <div class="title-description">
                        <h4><i class="fas fa-star"></i> Descripcion</h4>
                    </div>
                    <div class="text-description">
                        <ol>
                            <h4>{{ $recipe->description }}</h4>
                        </ol>
                    </div>
                </div>

				<div class="container-description">
                    <div class="title-description">
                        <h4><i class="fas fa-utensils"></i> Lista de ingredientes</h4>
                    </div>
                    <div class="text-description">

                        <ul>
                            @foreach($recipe->ingredients as $ingredients)
                            <li class="leading-relaxed">{{$ingredients->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                

				<div class="container-description">
                    <div class="title-description">
                        <h4><i class="fas fa-list-alt"></i> Pasos para preparar</h4>
                    </div>
                    <div class="text-description">
                        <ol>
                            <li><i class="fas fa-hand-sparkles"></i>{{json_encode($recipe->preparation_steps) }} </li>
                        </ol>
                    </div>
                </div>
			</div>
		</main>
</body>
</html>