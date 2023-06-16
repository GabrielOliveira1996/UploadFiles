@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center">

<div class="card col-md-6 m-5" style="background-color: #252a37;">
    <div class="card-body">
        <div class="row mt-5">

            <div id="app">
                <div class="row d-flex justify-content-center p-3">
                    <div class="border p-5 d-flex justify-content-center">
                        <img :src="imagePreview" class="col-md-10 rounded">
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" 
                            role="progressbar" 
                            :style="{ 'width': `${loadingProgress}%` }" 
                            aria-valuenow="0" 
                            aria-valuemin="0" 
                            aria-valuemax="100"
                            v-text="loadingProgress">
                    </div>
                </div>
                <div class="row mx-1 mt-2">

                    <div class="row">
                        <div class="col-md-2">
                            <label class="text-white">Nome: </label>
                        </div>
                        <div class="col-md-8">
                            <div v-text="name" class="text-white"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label class="text-white">Tipo: </label>
                        </div>
                        <div class="col-md-8">
                            <div v-text="type" class="text-white"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label class="text-white">Tamanho: </label>
                        </div>
                        <div class="col-md-8">
                            <div v-text="size" class="text-white"></div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12">
                        <input @change="handleFileUpload" type="file" class="form-control mt-2">
                    </div>
                    <div class="col-md-12">
                        <button @click="uploadFile" type="submit" class="btn btn-primary mt-2 col-md-12">Carregar</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</div>

@endsection