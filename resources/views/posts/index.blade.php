
@extends('layouts.postsLayout')
@section( 'content')     
     <center>
            <button type="button" class="btn btn-success" onclick="window.location='{{ route('posts.create') }}'">
                Create new post
            </button>
            
        </center>
    <table class="table m-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">Posted by</th>
                <th scope="col">Created at</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>java</td>
                <td>Ahmed</td>
                <td>2023-10-01</td>
                <td>
                    <button type="button" class="btn btn-info" onclick="window.location='{{ route('posts.show' , 1) }}'">
                       View
                    </button>
                    <button type="button" class="btn btn-warning" onclick="window.location='{{ route('posts.edit') }}'">
                        edit
                    </button>
                    <form action="{{ route('posts.delete') }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                    
                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                    
                </td>
            </tr>
           
        </tbody>
        </table>
@endsection