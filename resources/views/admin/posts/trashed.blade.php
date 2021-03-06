@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">All Trashed Posts</div>

        <div class="card-body">
             <table class="table table-hover">
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th colspan=2>Action</th>
                </thead>
                <tbody>
                    @if($posts->count() >0)
                        @foreach($posts as $post)
                          <tr>
                              <td>
                                  <img src="{{ $post->featured }}" alt="{{$post->title}}" width="90px" height="50px">
                              </td>
                              <td>
                                  {{$post->title}}
                              </td>
                              <td>
                                  <a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-sm btn-info">Restore</a>
                              </td>
                              <td>
                              <a href="{{ route('post.kill',['id' => $post->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                              </td>
                          </tr>
                        @endforeach
                    @else
                        <tr>
                            <th colspan=4 class="text-center">No Trashed posts yet!</th>
                        </tr>
                    @endif
                </tbody>
             </table>
@endsection