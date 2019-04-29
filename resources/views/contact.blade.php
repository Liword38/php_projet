<!-- Vue affichant le formulaire de contact ainsi que les messages déjà postés -->
<!doctype <!DOCTYPE html>
@extends('layouts/main')
<html>
@section('content')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<!-- Affiche un formulaire de contact qui renvoie une variable $errors si certains champs ne sont pas valides -->
<form action="{{ url('/contact') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control {{ $errors->has('contact_name') ? 'is-invalid' : '' }}" name="contact_name" id="contact_name" placeholder="Votre nom (sans espace)"
                                value="{{ old('contact_name') }}"> {!! $errors->first('contact_name', '
                            <div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" name="contact_email" id="contact_email" placeholder="Votre email"
                                value="{{ old('contact_email') }}"> {!! $errors->first('contact_email', '
                            <div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            <textarea class="form-control {{ $errors->has('contact_message') ? 'is-invalid' : '' }}" name="contact_message" id="contact_message" placeholder="Votre message">{{ old('contact_message') }}</textarea>                            {!! $errors->first('contact_message', '
                            <div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <button type="submit" class="btn btn-secondary">Envoyer !</button>
                    </form>


<div class="content">
        <h2>Messages des utilisateurs:</h2>
            <ul>
            <!-- Affiche tous les contacts passés à la vue par la variable $contacts -->
                @foreach ( $contacts as $contact )

                    <li> {{ $contact->contact_name }} a posté: {{ $contact->contact_message }}</li>

                @endforeach
            </ul>

            </div>

</body>


@endsection
</html>
