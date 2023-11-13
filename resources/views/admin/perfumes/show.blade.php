@php
@endphp

@extends('layouts.admin')

@section('content')
    
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <section class="band_product container-fluid">
                <div class="row band_product">
                    <div class="col-12 mt-5">
                        <h2 class="text-center">Visualizza Profumo</h2>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.perfumes.index') }}" class="btn btn-info mb-2 me-2">Elenco Profumi</a>
                            <a href="{{ route('admin.perfumes.edit', $perfume->id) }}" class="btn btn-warning mb-2 me-2">Modifica</a>
                            <form class='d-inline-block delete-perfume-form' action="{{ route('admin.perfumes.destroy', $perfume->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mb-2" type="submit">Cancella</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="title_product container">
                <div class="row justify-content-center ">
                    <div class="col-12 p-4 mt-1 text-center">
                        @if(!empty($perfume->image))
                        @if(filter_var($perfume->image, FILTER_VALIDATE_URL))
                            <img src="{{ $perfume->image }}" alt="image" class="image_show card product_card img-fluid mx-auto d-block" style="width: 400px">
                        @else
                            <img src="{{ asset('storage/'.$perfume->image) }}" alt="image" class="image_show card product_card img-fluid mx-auto d-block" style="width: 400px">
                        @endif
                        @else
                            <h5>Cover non disponibile</h5>
                        @endif
                        <h5 class="mt-5"><strong>Nome:</strong> {{ $perfume->name }}</h5>
                        <h5 class="mt-2"><strong>Brand:</strong> {{ $perfume->brand }}</h5>
                        <h5 class="mt-2"><strong>Categoria:</strong> {{ $perfume->category }}</></h5>
                        <h5 class="mt-2"><strong>Quantità:</strong> {{ $perfume->size }}</></h5>
                        <h5 class="mt-2"><strong>Prezzo:</strong> {{ $perfume->price }}</> €</h5>
                    </div>
                </div>
            </section>
        </div>
    </div>  
</div> 
    @include('admin.partials.modal_delete')
@endsection