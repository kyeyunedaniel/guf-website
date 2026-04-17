@extends('layouts.app')

@section('title', 'Cookie Policy | GUF Agency Ltd')
@section('description', 'Cookie policy for GUF Agency Ltd website and consent settings.')

@section('content')
    <section class="page-hero">
        <div class="container">
            <span class="chip">Legal</span>
            <h1>Cookie Policy</h1>
            <p class="lead">This page explains how cookies are used on the GUF Agency Ltd website and how you can manage your cookie preferences.</p>
        </div>
    </section>

    <section class="section">
        <div class="container grid-2">
            <article class="card">
                <h2>Essential Cookies</h2>
                <p>These cookies are required for core site functions such as security, session handling, and basic navigation.</p>
            </article>
            <article class="card">
                <h2>Preference Cookies</h2>
                <p>Preference cookies remember settings such as cookie consent choices to improve your experience.</p>
            </article>
            <article class="card">
                <h2>Consent Management</h2>
                <p>You can accept all cookies or only necessary cookies via the consent banner. Your choice is stored in your browser.</p>
            </article>
            <article class="card">
                <h2>Need Help?</h2>
                <p>Contact us at business@gufagency.com if you need help understanding or changing your cookie options.</p>
            </article>
        </div>
    </section>
@endsection
