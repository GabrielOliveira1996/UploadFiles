@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center">

<div class="card col-md-6 m-5">
    <div class="card-body">
        <div class="row mt-5">

            <div id="app">
                <div class="row d-flex justify-content-center p-3">
                    <div class="border p-5 d-flex justify-content-center">
                        <img src="{{ asset('img/icons/envio.png') }}" class="col-md-3">
                    </div>
                </div>
                <div class="row mx-1 mt-2">
                    <label>Nome: </label>
                    <label>Tipo: </label>
                    <label>Tamanho: </label>
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

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/upload.js') }}"></script>

@endsection