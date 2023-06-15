<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    private $_request;

    public function __construct(Request $request){
        $this->_request = $request;
    }

    public function upload(){
        if($this->_request->hasFile('file')){
            $file = $this->_request->file('file');
            $path = $file->store('uploads');
            return response()->json([
                'message' => 'Arquivo enviado com sucesso.',
                'path' => $path
            ], 200);
        }
        return response()->json([
            'message' => 'Nenhum arquivo enviado.'
        ], 400);
    }
}
