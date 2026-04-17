@extends('layouts.app')

@section('title', 'Privacy Policy | GUF Agency Ltd')
@section('description', 'Privacy policy for GUF Agency Ltd covering contact submissions and data handling practices.')

@section('content')
    <section class="page-hero">
        <div class="container">
            <span class="chip">Legal</span>
            <h1>Privacy Policy</h1>
            <p class="lead">This policy explains how GUF Agency Ltd collects, uses, and protects personal information shared through this website.</p>
        </div>
    </section>

    <section class="section">
        <div class="container grid-2">
            <article class="card">
                <h2>Information We Collect</h2>
                <ul class="list-clean">
                    <li>Name, email, phone, and message content submitted through the contact form.</li>
                    <li>Technical data such as IP address and browser user-agent for security and diagnostics.</li>
                </ul>
            </article>
            <article class="card">
                <h2>How We Use Information</h2>
                <ul class="list-clean">
                    <li>Respond to inquiries and provide insurance guidance.</li>
                    <li>Maintain service quality and communication records.</li>
                    <li>Comply with legal and regulatory obligations.</li>
                </ul>
            </article>
            <article class="card">
                <h2>Data Retention</h2>
                <p>We retain contact submissions only as long as needed for business communication, support, and compliance requirements.</p>
            </article>
            <article class="card">
                <h2>Your Rights</h2>
                <p>You may request access, correction, or deletion of your personal data by contacting us at business@gufagency.com.</p>
            </article>
        </div>
    </section>
@endsection
