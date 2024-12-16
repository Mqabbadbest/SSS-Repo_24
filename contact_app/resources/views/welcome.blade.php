<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <div>
            <a href="{{ route('contacts.index') }}">All Contacts</a>
            <a href="{{ route('contacts.create') }}">Add Contact</a>
            <a href="{{ route('contacts.show', 1) }}">Show Contact</a>
        </div>   
    </body>
</html>
