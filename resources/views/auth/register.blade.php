<x-guest-layout>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card-rg">
                <div class="card-header">
                        <h3>Register Now</h3>
                    </div>
                    <div class="card-body">
                        <x-jet-validation-errors class="mb-4" />
                        <form name="frm-login" action="{{route('register')}}" method="POST">
                            @csrf
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="name" placeholder="Your name" :value="name" required autofocus autocomplete="name">                        
                            </div>

                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope-open"></i></span>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email Address" :value="email">                        
                            </div>

                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="password" required autocomplete="new-password">
                            </div>

                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Comftrm password" required autocomplete="new-password">
                            </div>

                            <div class="row align-items-center remember">
                                <input type="checkbox">Remember Me
                            </div>
                            <div class="form-group">
                            <input type="submit" value="Register" class="btn float-right login_btn" >
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                             have an account?<a href="{{route('login')}}">Log in</a>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</x-guest-layout>
