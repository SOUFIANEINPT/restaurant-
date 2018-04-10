<div class="card" style="width:18rem;margin-bottom:20px;">
    <img class="card-img-top" src="{{$table->picture}}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">{{$table->name}}</h5>
            <p class="card-text text">Number of  chaire {{$table->Nombrechaire}}</p>
            <div class="row text-center">
                <div class="col-6">
                        <form style=" display: inline;" id="form-edite" action="{{ route('table.edit', $table->id)}}" method="POST" accept-charset="UTF-8">
                                @csrf
                                <input name="_method" type="hidden" value="GET">
                              <button type="submit"  class="btn btn-primary btn-block">Editer</button>
                </div>
               <div class="col-6">
                   <form  action="{{ route('table.destroy', $table->id)}}" method="POST" accept-charset="UTF-8">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                         <button type="submit"   onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-block">Delete</button>
                   </form>
                </div> 
            </div>   
           </div>
 </div>