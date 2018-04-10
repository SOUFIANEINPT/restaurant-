<div class="card" style="width:18rem;margin-bottom:20px;position:relative;">
<img class="card-img-top" src="{{$table->picture}}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">{{$table->name}}</h5>
        <p class="card-text">Number of  chaire {{$table->Nombrechaire}}</p>
          <a href="#" class="btn btn-primary">Resrver</a>    
        </div>
</div>
@if (isset($id))
<div  style="position:absolute;width:18rem;height:96%;opacity:0.8;filter: alpha(opacity=80);
background-color: lightblue;;z-index:900;margin-top:-456px;border-radius:5px" data-id="{{$id}}" data-value="{{$table->dateFin}}" >
<h3 class="text-center" style="margin-top:20%;font-weight: bold;">
  this table has been availble in 
</h3>
<h1 class="text-center" style="margin-top:30%;font-weight: bold;" id="{{$id}}">

</h1>
</div>
@else
@endif