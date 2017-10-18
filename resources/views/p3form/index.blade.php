@extends('layouts.master')


@section('title')
    Arithmetic and Geometric Sequences
@endsection

@section('content')
    <h1>Arithmetic and Geometric Sequences</h1>
    <br>
    <h2>Numeric Sequences are a series of numbers that have either the same increment by addition/substration or the same ratio of expontial increment by multiplication/division. and they can be called Arithmetic Sequences and Geometric Sequences respectively.</h2>

    <form>
        <fieldset class='text'>
            <label for='firstTerm'>Enter Your First Term:
            <input type='text' name='firstTerm' id='firstTerm' required>
            </label>
        </fieldset>
        <br>
        <fieldset class='text'>
            <label for='factor'>Enter the Factor of Differences:
            <input type='text' name='factor' id='factor' required>
            </label>
        </fieldset>
        <br>
        <fieldset class='text'>
            <label for='terms'>Enter the Number of Terms:
            <input type='text' name='terms' id='terms' required>
            </label>
        </fieldset>
        <br>
        <fieldset class='radios'>
            <legend>Select the Type of Your Numeric Sequences</legend>
            <label class='type'><input type='radio' name='type' value='arithmetic' required>Arithmetic</label>
            <br>
            <label class='type'><input type='radio' name='type' value='geometric' required>Geometric</label>
        </fieldset>
        <br>
        <fieldset class='checkbox'>
            <label><input type='checkbox' name='roundup' value='roundup'> Round up?</label>
            <br>
            <br>
            <label for='result' class="typeSelect">I want to know the value of </label>
            <select name='result' id='result'>
                <option value='choose'>Choose one...</option>
                <option value='the sum'>the sum</option>
                <option value='the last term'>the last term</option>
            </select>
            <label for='result'  class="typeSelect">of this sequence.</label>
        </fieldset>
        <br>
        <input type='submit' class='submit'>
        <br>
        <br>
    </form>
@endsection
