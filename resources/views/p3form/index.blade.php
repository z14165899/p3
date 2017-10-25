@extends('layouts.master') @section('title') Arithmetic and Geometric Sequences @endsection @section('content')
<h1>Arithmetic and Geometric Sequences</h1>
<br>
<h2>Numeric Sequences are a series of numbers that have either the same increment by addition/substration or the same ratio of expontial increment by multiplication/division. and they can be called Arithmetic Sequences and Geometric Sequences respectively.</h2>

<form method='GET' action='/answer'>
    <fieldset class='text'>
        <label for='firstTerm'>Enter Your First Term:
            <input type='text' name='firstTerm' id='firstTerm' value='{{ old('firstTerm') }}'>
            </label> @if(count($errors) > 0)
        <ul>
            @foreach ($errors->get('firstTerm') as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </fieldset>
    <br>
    <fieldset class='text'>
        <label for='factor'>Enter the Factor of Differences:
            <input type='text' name='factor' id='factor' value='{{ old('factor') }}'>
            </label> @if(count($errors) > 0)
        <ul>
            @foreach ($errors->get('factor') as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </fieldset>
    <br>
    <fieldset class='text'>
        <label for='terms'>Enter the Number of Terms:
            <input type='text' name='terms' id='terms' value='{{ old('terms') }}'>
            </label> @if(count($errors) > 0)
        <ul>
            @foreach ($errors->get('terms') as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </fieldset>
    <br>
    <fieldset class='radios'>
        <legend>Select the Type of Your Numeric Sequences</legend>
        <label class='type'><input type='radio' name='type' value='arithmetic' {{ ($type=='arithmetic') ? 'CHECKED' : '' }}>Arithmetic</label>
        <br>
        <label class='type'><input type='radio' name='type' value='geometric' {{ ($type=='geometric') ? 'CHECKED' : '' }}>Geometric</label> @if(count($errors) > 0)
        <ul>
            @foreach ($errors->get('type') as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </fieldset>
    <br>
    <fieldset class='checkbox'>
        <label><input type='checkbox' name='roundup' value='roundup' {{ ($roundup) ? 'CHECKED' : '' }}> Round up?</label>
        <br>
    </fieldset>
    <br>
    <input type='submit' class='submit'>
    <br>
    <br>
    <div class="alert alert-info" role="alert" id="output1">
        {{$message}}
    </div>
</form>
@endsection
