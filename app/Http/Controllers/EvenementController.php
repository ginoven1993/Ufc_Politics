<?php

namespace App\Http\Controllers;

use App\Models\Evenements;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function index(){
        return view('dashboard.evenements.add');
    }

    public function store(Request $request){

        if ($request->isMethod('post')) {
                $request->validate([
                    'titre',
                    'photo',
                    'video',
                    'date',
                    'description',
                    'heure',
                    'lieu'
                ]);

            

                $videos = null;

                if($request->hasFile('photo')){
                    $image = $request->file('photo');
                    $imagePath = $image->store('public/evenement');
                    $imagePath = str_replace('public/', '/storage/', $imagePath);
                }

                if($request->hasFile('video')){
                    $video = $request->file('video');
                    $videoPath = $video->store('public/evenement/video');
                    $videos = str_replace('public/', '/storage/', $videoPath);
                }

                Evenements::insert([
                    'video' => $videos,
                    'photo' => $imagePath,
                    'description' => $request->description,
                    'titre' => $request->titre,
                    'date' => $request->date,
                    'heure' => $request->heure,
                    'lieu' => $request->lieu,
                   
                ]);

        return redirect()->back()->with('flash_message_success','Evènement ajoutée dans la galerie');
            }  else 
        {
        return redirect('/admin/events/show')->with('flash_message_error','Evènement non ajoutée! Un problème est survenu.');
        }
    }


    public function show(){
        $events = Evenements::all();
        return view('dashboard.evenements.show', compact('events'));
    }

    public function delete($idevent){

        // $galeries = Galeries::where(['id' => $idgalerie])->first();
        Evenements::where(['id' => $idevent])->delete([]);

        return redirect()->back()->with('flash_message_success', 'Evènement supprimée avec succès!');
    }

    public function update(Request $request, $idevent){

        $events = Evenements::where(['id' => $idevent])->first();
        if ($request->isMethod('post')) {
            $request->validate([
                'titre',
                'photo',
                'video',
                'date',
                'description',
                'heure',
                'lieu'
            ]);

        

            $videos = null;

            if($request->hasFile('photo')){
                $image = $request->file('photo');
                $imagePath = $image->store('public/evenement');
                $imagePath = str_replace('public/', '/storage/', $imagePath);
            }

            if($request->hasFile('video')){
                $video = $request->file('video');
                $videoPath = $video->store('public/evenement/video');
                $videos = str_replace('public/', '/storage/', $videoPath);
            }


                Evenements::where(['id' => $idevent])->update([
                    'video' => $videos,
                    'photo' => $imagePath,
                    'description' => $request->description,
                    'titre' => $$request->titre,
                    'date' => $request->date,
                    'heure' => $request->heure,
                    'lieu' => $request->lieu,
                ]);

            return redirect()->back()->with('flash_message_success','Mise a jour éffectué');
        } 

        return redirect('/admin/events/show')->with('flash_message_error','Echec! Un problème est survenu.');

    }

    public function details($idevent){
        $events = Evenements::where(['id' => $idevent])->first();
        return view('dashboard.evenements.details', compact('events'));
    }
}
