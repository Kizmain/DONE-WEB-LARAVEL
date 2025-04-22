@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Profile</h2>
    @include('profiles.form', [
        'action' => route('profiles.update', $profile->id),
        'method' => 'PUT',
        'profile' => $profile
    ])
</div>
@endsection
