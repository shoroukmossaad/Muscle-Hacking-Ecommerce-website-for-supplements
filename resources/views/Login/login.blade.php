@extends('Layouts.layout')
@section('contant')

    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <section class="authForm bg-dark ">
        <div class="container">
            <div class="backGround-form">
                <img src="/public/images/cta-bg.jpg" alt="" />
                <div class="authWrap">
                    <div class=" loginHtml">
                        <input id="tab-1" type="radio" name="tab" class="signIn" checked /><label for="tab-1"
                            class="tab">Sign In</label>


                        <div class="loginForm">
                            <div class="signInHtm">
                                <div class="group">
                                    <form action=" {{url('login')}}" method="POST">
                                        @csrf

                                        <label for="user" class="label">Email</label>
                                        <input id="user" type="email" class="input" name='email' />
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" type="password" class="input" data-type="password"
                                        name='password' />
                                </div>
                                <div class="group">
                                    <input id="check" type="checkbox" class="check" name='keepme' />
                                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign In" />
                                </div>
                                <div class="hr">


                                </div>
                                </form>
                                <div class="footInk">
                                    <a href="/register">Create new account?</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
