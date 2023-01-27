<div class="container">
    <div class="card shadow col col-lg-6 mx-auto mt-5">
        <div class="card-body">
            <h3 class="fw-bold text-center">Log in Now!</h3>
            <form action="login" method="POST">
                @csrf
                
                <label class="fw-bold mt-3">Email</label>
                <input value="{{old('email')}}" placeholder="Email" type="text" name="email" class="form-control">
                @error('email')
                    <p class="text-danger fs-6">{{$message}}</p>
                @enderror
                <label class="fw-bold mt-3">Password</label>
                <input placeholder="Password" type="password" name="password" class="form-control">
                <button class="btn btn-dark w-100 mt-3">Sign Up</button>
            </form>
        </div>
        
    </div>
</div>
