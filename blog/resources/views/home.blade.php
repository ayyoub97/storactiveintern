@extends('layouts.app')

@section('content')


            <div class="card">
                <div color="" class="card-header">{{ __('Stagiaires') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! <br>You are logged in baby! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br> ') }}
                </div>
            </div>



@endsection
