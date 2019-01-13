@extends('layouts.ajax')

@section('title') Ajax CRUD  @endsection

@section('content')
    <br>
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <h3>Data Post</h3>
    <a data-toggle="modal" data-target="#create" class="btn btn-outline-primary" href="#" role="button">Tambah Data</a>
    <p></p>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {{ csrf_field() }}
            <?php $no = 0; ?>
            @foreach ($post as $data)
            <?php $no++ ?>
            <tr>
                <td scope="row">{{ $no }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->content }}</td>
                <td>
                    <!-- Button Edit modal -->
                    <button data-toggle="modal" data-target="#edit" data-title="{{ $data->title }}"  data-postid="{{$data->id}}" data-content="{{ $data->content }}" class="btn btn-outline-primary" role="button">Edit</button>
                    <button data-toggle="modal" data-target="#detail" data-title="{{ $data->title }}" data-postid="{{$data->id}}" data-content="{{ $data->content }}" class="btn btn-outline-info" role="button">Detail</button>
                    <button data-toggle="modal" data-target="#delete" data-title="{{ $data->title }}" data-postid="{{$data->id}}" data-content="{{ $data->content }}" class="btn btn-outline-danger" role="button">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection