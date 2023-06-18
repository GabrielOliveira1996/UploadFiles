<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;

class UploadController extends Controller
{
    private $_request;

    public function __construct(Request $request){
        $this->_request = $request;
    }

    public function upload(){
        try {
            if($this->_request->hasFile('file')){
                $file = $this->_request->file('file');
                $size = $file->getSize(); 
                $type = $file->getMimeType(); 
                if($type == 'video/mp4' || $type == 'image/jpeg' || $type == 'image/jpg' || $type == 'image/png'){
                    if($size > 104857600.04){
                        throw new Exception('Não é possível enviar arquivo. O tamanho do arquivo excede o limite de 100 mb.', 413);
                    }
                    $path = $file->store('uploads');
                    return response()->json([
                        'message' => 'Arquivo enviado com sucesso.',
                        'path' => $path
                    ], 200);
                }else{
                    throw new Exception('Apenas vídeos e imagens podem ser enviados. São suportados apenas formatos mp4, png, jpg e jpeg.', 415);
                }
            }
        }catch(Exception $e){
            return response()->json([
                'code' => $e->getCode(),
                'message' => $e->getMessage(),
            ], 400);
        } 
    }
}
