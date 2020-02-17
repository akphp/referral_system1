@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>You are logged in!</h1>
                    <br/>
                    
                    {{-- <input type="text" readonly="readonly"  --}}
                        {{-- value="{{url('/').'/?ref='.Auth::user()->affiliate_id}}"> --}}
                

                @if(Auth::user()->affiliate_id)
                    <div class="form-group">
                      <label class="h3" for="exampleInputEmail1"> Url Refarres</label>
                      <input type="email" class="form-control" readonly="readonly" 
                      value="{{url('/').'/?ref='.Auth::user()->affiliate_id}}">
                    </div>
                


                  <div class="card">
                    <div class="card-body">
                       <h4 class="text-danger">  Your current total points is :  {{ Auth::user()->points }} </h4>
                    </div>
                  </div>


                  @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
