@php
    $counter = 1;
@endphp

@extends('layouts.admin')

@section('content')

    <section class="container max_width_tab">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="d-flex justify-content-between align-item-center"></div>
                <h2 class="text-center">Tutti i Profumi</h2>
                {{-- <a href="{{ route('admin.perfume.create') }}" class="btn btn-warning">Aggiungi Profumo</a> --}}
            </div>
            <div class="col-12">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            {{--<th>N.</th>--}}
                            <th>Nome</th>
                            <th>Brand</th>
                            <th>Categoria</th>
                            <th>Quantità</th>
                            <th>Prezzo</th>
                            {{-- <th>Immagine</th> --}}
                        </tr>
                    </thead>
                     <tbody class="text-center">
                        @foreach ($perfumes as $perfume)
                            <tr class="align-middle">
                                 <td>{{ $perfume->id }}</td> 
                                {{-- <td>{{ $counter++ }}</td> --}}
                                <td>{{ $perfume->name }}</td>
                                <td>{{ $perfume->brand }}</td>
                                <td>{{ $perfume->category }}</td>
                                <td>{{ $perfume->size }}</td>
                                <td>{{ $perfume->price }}</td>
                                {{-- <td>
                                    @if(!empty($perfume->image))
                                        <img src="{{ asset('storage/'.$perfume->image) }}" class="image" style="width: 160px; height: 70px;">
                                    @else
                                        <h5>Cover non disponibile</h5>
                                    @endif
                                </td>  --}}
                                <td width="200">
                                    <a href="{{ route('admin.perfumes.show', $perfume->id) }}" class="btn btn-info btn-sm ms-2"><i class="fa-regular fa-eye"></i></a>
                                    <a href="{{ route('admin.perfumes.edit', $perfume->id) }}" class="btn btn-warning btn-sm ms-2"><i class="fas fa-edit"></i></a>
                                    <form class='d-inline-block delete-perfume-form ms-2' action="{{ route('admin.perfumes.destroy', $perfume->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm text-center" type="submit" style="width: 31px; height: 30px;">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form> 
                                </td> 
                            </tr>
                        @endforeach 
                    </tbody> 
                </table>
            </div>
        </div>
        <div class="mx-auto pb-10 w-4/5">
           {{ $perfumes->links() }}
        </div>         
        
    </section>
    
    {{-- @include('admin.partials.modal_delete') --}}
@endsection