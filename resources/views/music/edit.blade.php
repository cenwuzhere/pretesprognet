@extends('layouts.app')

@section('title','Edit music')

@section('page-title','Edit music')

@section('dashboard-content')

<form action="{{URL('music/'.$musics->id)}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH')}}
    <div class="form-group">
        <label for="title">Nama</label>
        <input type="text" name="title" class="form-control" id="title" value="{{$musics->title}}">
    </div>
    <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" name="genre" class="form-control" id="genre" value="{{$musics->genre}}">
    </div>
    <div class="form-group">
        <label for="singer">Penyanyi</label>
        <input type="text" name="singer" class="form-control" id="singer" value="{{$musics->singer}}">
    </div>
    <div class="form-group">
        <label for="song_writer">Penulis Lagu</label>
        <input type="text" name="song_writer" class="form-control" id="song_writer" value="{{$musics->song_writer}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection
