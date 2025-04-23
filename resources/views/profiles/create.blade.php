@extends('layouts.profile')

@section('content')
<div class="container">
    <h2>Create Profile</h2>
    @include('profiles.form', [
        'action' => route('profiles.store'),
        'method' => 'POST',
        'profile' => new \App\Models\Profile()
    ])
</div>
@endsection
