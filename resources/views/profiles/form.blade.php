<form action="{{ $action }}" method="POST">
    @csrf
    @if($method === 'PUT') @method('PUT') @endif

    <div class="mb-3">
        <label for="full_name" class="form-label">Full Name</label>
        <input type="text" name="full_name" id="full_name" class="form-control" 
            value="{{ old('full_name', $profile->full_name ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" 
            value="{{ old('email', $profile->email ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" name="phone" id="phone" class="form-control" 
            value="{{ old('phone', $profile->phone ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="mobile" class="form-label">Mobile</label>
        <input type="text" name="mobile" id="mobile" class="form-control" 
            value="{{ old('mobile', $profile->mobile ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address" id="address" class="form-control" 
            value="{{ old('address', $profile->address ?? '') }}">
    </div>

    <div class="mb-3">
    <label for="website" class="form-label">Website</label>
    <input type="text" name="website" id="website" class="form-control" 
        value="{{ old('website', $profile->website ?? '') }}">
</div>

<div class="mb-3">
    <label for="github" class="form-label">GitHub</label>
    <input type="text" name="github" id="github" class="form-control" 
        value="{{ old('github', $profile->github ?? '') }}">
</div>

<div class="mb-3">
    <label for="twitter" class="form-label">Twitter</label>
    <input type="text" name="twitter" id="twitter" class="form-control" 
        value="{{ old('twitter', $profile->twitter ?? '') }}">
</div>

<div class="mb-3">
    <label for="instagram" class="form-label">Instagram</label>
    <input type="text" name="instagram" id="instagram" class="form-control" 
        value="{{ old('instagram', $profile->instagram ?? '') }}">
</div>

<div class="mb-3">
    <label for="facebook" class="form-label">Facebook</label>
    <input type="text" name="facebook" id="facebook" class="form-control" 
        value="{{ old('facebook', $profile->facebook ?? '') }}">
</div>


    <button type="submit" class="btn btn-primary">Save</button>
</form>
