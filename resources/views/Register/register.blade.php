@extends('Layouts.layout')
@section('contant')

<link rel="stylesheet" href="{{ asset("assets/css/auth.css")}}">

<section class="authForm bg-dark">
    <div class="container">
        <div class="backGround-form">
            <img src="/public/images/cta-bg.jpg" alt="" />
            <div class="authWrap">
                <div class=" loginHtml">
                    <input id="tab-2" type="radio" name="tab" class="signUp" checked /><label for="tab-2"
                        class="tab">Sign Up</label>

                    <div class="loginForm">
                        <div class="signUpHtm">
                            <form action="{{url('register')}}"  method="POST">
                                @csrf
                                <div class="group">
                                    <label for="user" class="label">Username</label>
                                    <input id="user" type="text" class="input" name='username'
                                          />
                                    {{-- <span>{registerInput.error_list.username}</span> --}}

                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" type="password" class="input" data-type="password"
                                        name='password'   />
                                    {{-- {console.log(registerInput.error_list.password)} --}}
                                    {{-- <span>{registerInput.error_list.password}</span> --}}

                                </div>

                                <div class="group">
                                    <label for="pass" class="label">phone</label>
                                    <input id="pass" type="number" class="input" name='phone'
                                         />
                                    {{-- <span>{registerInput.error_list.phone}</span> --}}

                                </div>

                                <div class="group">
                                    <label for="pass" class="label">Email Address</label>
                                    <input id="pass" type="text" class="input" name='email'
                                         />
                                    {{-- <span>{registerInput.error_list.email}</span> --}}
                                </div>


                                <div class="group ms-2">
                                    <input id="check" type="checkbox" class="check" />
                                    <label for="setC_male" class='me-3'><span class="icon"></span> Male</label>



                                    <input id="check" type="checkbox" class="check" />
                                    <label for="setC_female"><span class="icon"></span> Female</label>


                                </div>
                                <div class="group">
                                    <input type="submit" class="button" name="signup" value="Sign Up" />
                                </div>

                            </form>

                            <div class="hr"></div>
                            <div class="footInk">
                                <a href="{{url('/login')}}">Already Member?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
