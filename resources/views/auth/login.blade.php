
<x-guest-layout>
<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
            <div class="card-header">
                    <h3>Log In To Your Account</h3>
                </div>
                <div class="card-body">
                    <x-jet-validation-errors class="mb-4" />
                    <form name="frm-login" method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope-open"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control" placeholder="Type your email address" :value="old('email')" required autofocus >
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" placeholder="**********" required autocomplete="current-password">
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn" name="login">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="{{route('register')}}">Register Now</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{route('password.request')}}">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</x-guest-layout>
