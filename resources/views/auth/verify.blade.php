@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Veuillez vérifier votre adresse E-mail</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Un lien de réinitialisation de mot de passe a été envoyé a votre adresse E-mail
                        </div>
                    @endif

                   Veuillez vérifier d'abord votre boite Mail
                    Vous n'avez toujours pas recu le lien de réinitialisation?
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Renvoyez le lien de réinitialisation</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
