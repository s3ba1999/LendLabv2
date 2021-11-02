<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    static function uploadImage(Request $request, $alt, $route)
    {
        // script para subir la imagen
        if($request->hasFile("imagen")){

            $imagen = $request->file("imagen");
            $nombreimagen = Str::slug($request->nombre).".".$imagen->guessExtension();
            $ruta = public_path("img/".$route);

            //$imagen->move($ruta,$nombreimagen);
            copy($imagen->getRealPath(), $ruta . $nombreimagen);

            $image = Image::create(['route'=> $ruta . $nombreimagen, 'alt' => $alt]);
            return ['image_id'=> $image->id];
        }
    }
}
