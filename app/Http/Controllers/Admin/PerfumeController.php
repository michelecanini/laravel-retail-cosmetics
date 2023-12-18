<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perfume;
use App\Http\Requests\StorePerfumeRequest;
use App\Http\Requests\UpdatePerfumeRequest;
use Illuminate\Support\Facades\Storage;

class PerfumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perfumes = Perfume::paginate(10);
        
        $categories = [
            1 => 'Unisex Perfume',
            2 => 'Women’s Perfume',
            3 => 'Men’s Perfume'
        ];

        return view('admin.perfumes.index', compact('perfumes', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.perfumes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePerfumeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerfumeRequest $request)
    {
        $form_data = $request->all();

        $new_perfume = new Perfume();

        if($request->hasFile('image')){
            $path = Storage::put('perfume_image', $request->image);
            $form_data ['image'] = $path;
        }

        //if($request->hasFile('image')){
        //    $path = Storage::disk('public')->put('perfume_image', $request->image);
        //    $form_data ['image'] = $path;
        //}

        $new_perfume->fill($form_data);
        $new_perfume->save();

        $request->session()->flash('success', 'Profumo creato con successo!');

        return redirect()->route('admin.perfumes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function show(Perfume $perfume)
    {
        $categories = [
            1 => 'Unisex Perfume',
            2 => 'Women’s Perfume',
            3 => 'Men’s Perfume'
        ];

        return view('admin.perfumes.show', compact('perfume','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfume $perfume)
    {
        $perfumes = Perfume::all();
        return view('admin.perfumes.edit', compact('perfume'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerfumeRequest  $request
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePerfumeRequest $request, Perfume $perfume)
    {
        $form_data = $request->all();

        if($request->hasFile('image')){
            if ($perfume->image){
                Storage::delete($perfume->image);
            }
            $path = Storage::put('perfume_image', $request->image);
            $form_data ['image'] = $path;
        }

        $perfume->update($form_data);

        $request->session()->flash('success', 'Profumo modificato con successo!');

        return redirect()->route('admin.perfumes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Perfume $perfume)
    {   
        $perfume->delete();

        $request->session()->flash('success', 'Profumo cancellato con successo!');

        return redirect()->route('admin.perfumes.index');
    }

    //public function search(Request $request)
    //{
    //    $search = $request->query->get('search');
    //    $perfumes = Perfume::where('name', 'like', '%' . $search . '%')->paginate(10);
    //    return view('admin.perfumes.index', compact('perfumes'));
    //}
}
