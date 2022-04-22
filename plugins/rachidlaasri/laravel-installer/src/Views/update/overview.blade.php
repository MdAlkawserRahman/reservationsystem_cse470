@extends('vendor.installer.layouts.master-update')

@section('title', 'Welcome To The Updater')
@section('container')
    <p class="paragraph text-center">{{ trans_choice('installer_messages.updater.overview.message', $numberOfUpdatesPending, ['number' => $numberOfUpdatesPending]) }}</p>
    <div class="buttons">
        <a href="{{ route('LaravelUpdater::database') }}" class="button">{{ 'Install Updates' }}</a>
    </div>
@stop