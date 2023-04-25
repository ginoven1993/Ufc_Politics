<?php

namespace App\Http\Controllers;

use App\Models\Galeries;
use Illuminate\Http\Request;

class GalerieController extends Controller
{
    public function index(){
        return view('dashboard.galeries.add');
    }

    public function store(Request $request){

        if ($request->isMethod('post')) {
                $request->validate([
                    'description' => 'required',
                    'video',
                    'photo' => 'required',
                ]);

            

                $videos = null;

                if($request->hasFile('photo')){
                    $image = $request->file('photo');
                    $imagePath = $image->store('public/galerie');
                    $imagePath = str_replace('public/', '/storage/', $imagePath);
                }

                if($request->hasFile('video')){
                    $video = $request->file('video');
                    $videoPath = $video->store('public/galerie/video');
                    $videos = str_replace('public/', '/storage/', $videoPath);
                }

                Galeries::insert([
                    'video' => $videos,
                    'photo' => $imagePath,
                    'description' => $request->description,
                ]);

        return redirect()->back()->with('flash_message_success','Element ajoutée dans la galerie');
            }  else 
        {
        return redirect('/admin/galeries/show')->with('flash_message_error','Element non ajoutée! Un problème est survenu.');
        }
    }


    public function show(){
        $galeries = Galeries::all();
        return view('dashboard.galeries.show', compact('galeries'));
    }

    public function delete($idgalerie){

        // $galeries = Galeries::where(['id' => $idgalerie])->first();
        Galeries::where(['id' => $idgalerie])->delete([]);

        return redirect()->back()->with('flash_message_success', 'Elément supprimée avec succès!');
    }

    public function update(Request $request, $idgalerie){

        $galerie = Galeries::where(['id' => $idgalerie])->first();
        if ($request->isMethod('post')) {
                $request->validate([
                    'description' => 'required',
                    // 'video' => 'required|mimetypes:video/mp4,video/mpeg,video/quicktime|max:20000',
                    'video',
                    'photo' => 'required',
                ]);

                $videos = null;

                if($request->hasFile('photo')){
                    $image = $request->file('photo');
                    $imagePath = $image->store('public/galerie');
                    $imagePath = str_replace('public/', '/storage/', $imagePath);
                }

                if($request->hasFile('video')){
                    $video = $request->file('video');
                    $videoPath = $video->store('public/galerie/video');
                    $videos = str_replace('public/', '/storage/', $videoPath);
                }

                Galeries::where(['id' => $idgalerie])->update([
                    'video' => $videos,
                    'photo' => $imagePath,
                    'description' => $request->description,
                ]);

            return redirect()->back()->with('flash_message_success','Mise a jour éffectué');
        } 

        return redirect('/admin/galeries/show')->with('flash_message_error','Echec! Un problème est survenu.');

    }

    public function details($idgalerie){
        $galeries = Galeries::where(['id' => $idgalerie])->first();
        return view('dashboard.galeries.details', compact('galeries'));
    }
}
