@extends("layouts.app")
@section('content')
<div class="container">
        <h1>Users</h1>
        @if(count($users) > 0)
            <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>name</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                            @foreach($users as $user)
                            <div class="well">
                            
                                            <tr>
                                                    <td><small>{{$user->name}}</small></td>
                                                    <td class="text-right">
                                                        <form style=" display: inline;" id="form-edite"  action="{{ route('admin.edit', $user->id)}}" method="GET" accept-charset="UTF-8">
                                                                <button  type="submit" class="btn btn-success">Editer</button>    
                                                            @csrf
                                                        </form>
                                                        <form style="display:inline;"  id="form-delete"   action="{{ route('admin.destroy', $user->id)}}" method="POST" >
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button type="submit" onclick="return confirm('Are you sure you want to delete?')"  id="delete" class="btn btn-danger">Delete</button>    
                                                            @csrf
                                                        </form>
                                                    </td>
                                                   
                                                  </tr>
                            
                                   
                            </div>
                           
                        @endforeach
                      
                    </tbody>
                  </table>
            {{$users->links()}}
        @else
            <p>No posts found</p>
        @endif
</div>
@endsection
