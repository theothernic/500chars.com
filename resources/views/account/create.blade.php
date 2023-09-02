@extends('layouts.app')

@section('content')
    <div class="stage">
        <h1>{{ $page->title }}</h1>

        <form id="frmAccountCreate" name="frmAccountCreate" method="post" action="{{ url()->route('accounts.store') }}">
            <div class="control"></div>

            <div class="actions">
                <button id="cmdSubmit" type="submit">@lang('button.save')</button>
            </div>
        </form>
    </div>
