@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edite Table') }}</div>
                  <div class="card-body">
                    <form method="POST" action="{{route('table.update',$table->id)}}">
                        @csrf
                        <input name="_method" type="hidden" value="PUT">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$table->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Nombrechaire" class="col-md-4 col-form-label text-md-right">{{ __('Number of Chaire') }}</label>

                            <div class="col-md-6">
                                <input id="Nombrechaire" type="number" class="form-control{{ $errors->has('Nombrechaire') ? ' is-invalid' : '' }}" name="Nombrechaire" min="4" max="6" value="{{ $table->Nombrechaire}}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Nombrechaire') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('picture') }}</label>

                            <div class="col-md-6">
                            <input id="picture" type="url" value="{{$table->picture}}" class="form-control{{ $errors->has('picture') ? ' is-invalid' : '' }}" name="picture" required>

                                @if ($errors->has('picture'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('picture') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="menu_id" class="col-md-4 col-form-label text-md-right">select role</label>
                            <div class="col-md-6">
                            <select name="menu_id" class="form-control" id="menu_id" required>
                             @foreach ($menus as $key =>$value)
                             <option @if ($key+1==$table->menu_id)
                                    selected="selected"
                                @endif value='{!! $key+1 !!}'>{!! $value !!}</option>
                             @endforeach
                            </select>
                                @if ($errors->has('menu_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('menu_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="categories_id" class="col-md-4 col-form-label text-md-right">select role</label>
                            <div class="col-md-6">
                            <select name="categories_id" class="form-control" id="categories_id" required>
                             @foreach ($categories as $key =>$value)
                             <option @if ($key+1==$table->categories_id)
                                    selected="selected"
                                @endif value='{!! $key+1 !!}'>{!! $value !!}</option>
                             @endforeach
                            </select>
                                @if ($errors->has('categories_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('categories_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Edite') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
                <div class="card" style="width:18rem;margin-bottom:20px;position:relative;">
                <div class="card-header">{{ __('How table is display') }}</div>
                <div style="padding:20px">
                        <img class="card-img-top" id ='Picture' src="" alt="Card image cap">
                        <div class="card-body">
                        <h5 id="Name" class="card-title"></h5>
                        <p id="numberShaire" class="card-text">Number of  chaire</p>
                          <a href="#" class="btn btn-primary">Resrver</a>    
                        </div>
                </div>
                </div>
                
        </div>
    </div>
</div>
@endsection