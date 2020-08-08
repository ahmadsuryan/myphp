@extends('layouts.master')

@section('content')

    <div class="well well-lg">
        <div class="container">
            <h2>Detail Pertanyaan</h2>
        </div>
    </div>

    <div class="container">

        <div class="panel panel-primary">
            <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="judul">Judul :</label>
                                <input class="form-control" id="judul" type="text" name="judul" 
                                value={{ $pertanyaan->judul }} disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="isi">Isi Pertanyaan :</label>
                                <textarea name="isi" id="isi" class="form-control" rows="4" 
                                disabled>{{ $pertanyaan->isi }} </textarea>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>

@endsection