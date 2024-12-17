@extends('layouts.admin')

@section('content-header', __('kami.title'))

@section('content')
<div class="container">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h1>TIM FUFUFUFAFAFA</h1>
            </div>
            <br>
            
        </div>
        <div class="row">
            @foreach ($kami as $person)
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('storage/' . $person['photo']) }}" class="card-img-top" alt="{{ $person['name'] }}">
                        <div class="card-body d-flex justify-content-center">
                           <center><h5 class="card-title">{{ $person['name'] }} <br>{{ $person['nim'] }}</h5></center>
                        </div>                        
                        <!-- <div class="card-body d-flex justify-content-center">
                            
                        </div> -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
