@extends('layouts.app')

@section('content')
    <div class="centerstage">

        <div class="stage">
            <h1 class="title">Log in</h1>

            @if($page->hasMessage())
                <x-messages.alert :type="$page->message['type']" :text="$page->message['text']">
                    {{ $page->message['text'] }}
                </x-messages.alert>
            @endif

            <x-auth.loginform />
        </div>

    </div>
@endsection
