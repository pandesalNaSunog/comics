<div class="container">
    <div class="card shadow col col-lg-6 mx-auto mt-5">
        <div class="card-body">
            <h3 class="fw-bold text-center">Sign Up Now!</h3>
            <p class="text-center">Sign Up to post new entries!</p>
            <form action="register" method="POST">
                @csrf
                <label class="fw-bold" for="">Name</label>
                <input value="{{old('name')}}" placeholder="Name" type="text" name="name" class="form-control">
                @error('name')
                    <p class="text-danger fs-6">{{$message}}</p>
                @enderror
                <label class="fw-bold mt-3">Email</label>
                <input value="{{old('email')}}" placeholder="Email" type="text" name="email" class="form-control">
                @error('email')
                    <p class="text-danger fs-6">{{$message}}</p>
                @enderror
                <label class="fw-bold mt-3">Password</label>
                <input placeholder="Password" type="password" name="password" class="form-control">
                @error('password')
                    <p class="text-danger fs-6">{{$message}}</p>
                @enderror
                <label class="fw-bold mt-3">Confirm Password</label>
                <input placeholder="Confirm Password" type="password" name="password_confirmation" class="form-control">
                @error('password_confirmation')
                    <p class="text-danger fs-6">{{$message}}</p>
                @enderror
                <button class="btn btn-dark w-100 mt-3">Sign Up</button>
            </form>
        </div>
        
    </div>
</div>
