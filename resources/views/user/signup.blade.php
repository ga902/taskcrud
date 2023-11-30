@include('layout.header')
<div class="mt-4"> 
    <h3 class="title">Signup form</h3>
</div>
<form action="/postLogin" method="post" class="mt-3 p-3 border border-secondary rounded">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" name="name" class="form-control" />
        @error('name')
        <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" name="email" class="form-control" />
        @error('email')
        <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" name="password" class="form-control" />
        @error('password')
        <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Verify Password:</label>
        <input type="password" name="password_confirmation" class="form-control" />
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
