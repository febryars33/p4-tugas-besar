@extends('layouts.core')

@section('title', 'Pendaftaran')
@section('content')

{{-- Hero --}}
<div class="w3-panel w3-padding-64 w3-light-grey w3-center">
    <h1>Pendaftaran</h1>
</div>

<div class="w3-row">
    <div class="w3-col l3 m6 s4 w3-center">
        &nbsp;
    </div>
    <div class="w3-col l7 m3 s4">
        <form class="w3-container w3-card-4" method="POST" id="registration">
            <h3 class="w3-text-blue">Pendaftaran</h3>
            <p>
                <label for="name"><b>Nama</b></label>
                <input class="w3-input w3-border" id="name" name="name" type="text">
            </p>
            <p>
                <label for="email"><b>Email</b></label>
                <input class="w3-input w3-border" id="email" name="email" type="email">
            </p>
            <p>
                <button class="w3-button w3-red" type="submit">Register</button>
            </p>
        </form>
    </div>
    <div class="w3-col l2 m3 s4 w3-center">
        &nbsp;
    </div>
</div>