<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Image;

class GenerateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('generate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $img = Image::make(public_path('images/sertifikat1.png'));  
            $img->text($request->name, 330, 250, function($font) {  
                $font->file(public_path('font/Gotham-Black.otf'));  
                $font->size(22);  
                $font->color('#000');  
                $font->align('center');  
                $font->valign('center');  
            });  

            $src = date('Y-m-d H:i:s').'.png';
            $success = 'Berhasil Generate.';
            $img->save(public_path('images/sertifikat/'.$src));  

            return back()->with(compact(['success', 'src']));
        } catch (Exception $e) {
            return back()->with('error', 'Terjadi kesalahan sistem.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
