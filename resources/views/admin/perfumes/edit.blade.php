@php
@endphp

@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-12 mt-3">
                <h2 class='mt-5 text-center'>Modifica Profumo</h2>
                <div class="text-end">
                    <a href="{{ route('admin.perfumes.index') }}" class="btn btn-info justify-content-end">Elenco Profumi</a>
                </div>
            </div>
            <div class="col-12 col-sm-7 mt-3 mx-auto">    
                {{--errori del form--}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif 

                <form action="{{ route('admin.perfumes.update', $perfume->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3 mt-5 form-group">
                        <label class="col-sm-2 col-form-label control-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="name" name="name" placeholder="Inserisci qui il nome" value="{{ old('nome') ?? $perfume->name }}" {{--required--}}>
                        </div>
                    </div>
                    <div class="row mb-3 form-group">
                        <label class="col-sm-2 col-form-label control-label">Brand</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="brand" name="brand" placeholder="Inserisci qui il Brand" value="{{ old('brand') ?? $perfume->brand }}" {{--required--}}>
                        </div>
                    </div>
                    <div class="row mb-3 form-group">
                        <label class="col-sm-2 col-form-label control-label">Categoria</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="category" name="category" {{--required--}}>
                                <option value="">Seleziona Categoria Profumo</option>
                                <option value="Unisex Perfume" {{ $perfume->category == 'Unisex Perfume' ? 'selected' : '' }}>Unisex Perfume</option>
                                <option value="Women’s Perfume" {{ $perfume->category == 'Women’s Perfume' ? 'selected' : '' }}>Women’s Perfume</option>
                                <option value="Men’s Perfume" {{ $perfume->category == 'Men’s Perfume' ? 'selected' : '' }}>Men’s Perfume</option>
                            </select>
                        </div>
                    </div>                    

                    <div class="row mb-3 form-group">
                        <label class="col-sm-2 col-form-label control-label">Quantità</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="size" name="size" placeholder="Esempio: 100 ml" value="{{ old('size') ?? $perfume->size }}" {{--required--}}>  
                        </div>
                    </div>

                    <div class="row mb-3 form-group">
                        <label class="col-sm-2 col-form-label control-label">Prezzo</label>
                        <div class="col-sm-10">
                            <input type="number"  class="form-control" id="price" name="price" placeholder="Esempio: 10,00" value="{{ old('price') ?? $perfume->price }}" {{--required--}}>
                        </div>
                    </div>
                    
                    <div class="row mb-3 form-group">
                        <div>
                            @if(!empty($perfume->image))
                                @if(filter_var($perfume->image, FILTER_VALIDATE_URL))
                                    <img src="{{ $perfume->image }}" alt="image" class="image_show card product_card mt-3 mb-3 mx-auto" style="width: 250px">
                                @else
                                    <img src="{{ asset('storage/'.$perfume->image) }}" alt="image" class="image_show card product_card mt-3 mb-3 mx-auto" style="width: 250px">
                                @endif
                            @else
                                <h5>Cover non disponibile</h5>
                            @endif
                        </div>
                        <label class="col-sm-2 col-form-label control-label">Immagine</label>
                        <div class="col-sm-10">
                            <input type="file"  class="form-control" id="image" name="image">
                        </div>
                    </div>
                    
                    <div class="text-center mt-5 mb-5">
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>
                </form>
             </div>
        </div>
    </div>

@endsection