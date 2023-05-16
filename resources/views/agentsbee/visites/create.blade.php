@extends('layouts.sbeeagt')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create demande') }}</h1>
                    <a href="{{ route('agentsbee.demandes.index') }}" class="btn btn-primary btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('agentsbee.visites.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Demandeur">{{ __('Demandeur') }}</label>
                        <select name="idDemandeur" id="idDemandeur" class="form-control">
                            @foreach ($demandeurs as $demandeur)
                                <option value="{{ $demandeur->id }}">{{ $demandeur->id }} -  {{ $demandeur->nom }} {{ $demandeur->prenom }}</option>
                            @endforeach
    
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="start">{{ __('Start_time') }}</label>
                       <input name="start" id="start" type="datetime-local" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="finish">{{ __('Finish_time') }}</label>
                        <input name="finish" id="finish" type="datetime-local" class="form-control">
                     </div>

                     <div class="form-group">
                        <label for="comment">{{ __('Comments') }}</label>
                        <textarea name="comments" id="comments" cols="15" rows="5" class="form-control"></textarea>
                     </div>
                   
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection


@push('style-alt')
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
@endpush

@push('script-alt')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

@endpush