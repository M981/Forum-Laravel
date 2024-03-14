@extends('layouts.main')
@section('pagetitle')
    Aanmelden
@endsection

@section('content')

    <!-- BEGIN PAGINA CONTAINER -->
    <div class="container main-content">
        <div class="row first-row">
            <div class="col s6 push-s3">
                <!-- BEGIN LOGIN FORMULIER -->
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <form class="col s12" method="POST" action="{{ route('login') }}">
                                @csrf <!-- Include this for CSRF protection -->
                                <h1 class="title">Aanmelden</h1>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="Email" name="email" type="text" class="validate">
                                        <label for="Email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="Password" type="password" name="password" class="validate">
                                        <label for="Password">Wachtwoord</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <button class="btn waves-effect waves-light right" type="submit" name="action">
                                            Aanmelden
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
