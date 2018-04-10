@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
                <div class="card">
                        <div class="card-header">navbare</div>
        
                        <div class="card-body">
                           list
                        </div>
                    </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tables</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                    @foreach ($tables as $key =>$table)
                        <div class="col-6">
                                @include('tables.tableAdmin',['table'=>$table])    
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
                <div class="card">
                        <div class="card-header">navbare</div>
        
                        <div class="card-body">
                           list
                        </div>
                    </div>
        </div>
    </div>
</div>
@endsection