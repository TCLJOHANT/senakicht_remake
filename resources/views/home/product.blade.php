<x-app-layout>  <x-slot name="title">Productos</x-slot>
    <link rel="stylesheet" href="{{ asset('css/shared/productos.css')}}">
    <section class="products" id="products">
        <h1 class="heading"> nuestros <span>productos</span> </h1>
        @can('admin.products.store')
        <div class="flex m-6 mx-auto w-full">
          @livewire('shared.form-product') 
        </div>
        @endcan
        <div class="box-container">
            @foreach($productos as $product)
                @livewire('app.components.shared.card.card-product', ['product' => $product])
            @endforeach
        </div>
    </section>
</x-app-layout>