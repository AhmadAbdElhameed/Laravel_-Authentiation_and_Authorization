
@section('title','Front Login Page')
<!DOCTYPE html>

<html
    lang="en"
    class="light-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{asset('assets_front/')}}"
    data-template="vertical-menu-template-free"
>
@include('front.partials.auth_front.head')

<body>
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register Card -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    @include('front.partials.auth_front.logo')
                    <!-- /Logo -->
                    <h4 class="mb-2">Adventure starts here 🚀</h4>
                    <p class="mb-4">Make your app management easy and fun!</p>

                    <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
                        @csrf
                        {{--name--}}
                        <div class="mb-3">
                            <label for="username" class="form-label">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                placeholder="Enter your name"
                                autofocus
                                :value="old('name')"
                                autocomplete="name"
                            />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        {{--email--}}
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" id="email" name="email" type="email" :value="old('email')" autocomplete="email"  placeholder="Enter your email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        {{--password--}}
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group input-group-merge">
                                <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password"
                                />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        {{--password confirmation--}}
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Password Confirmation</label>
                            <div class="input-group input-group-merge">
                                <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="password_confirmation"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password"
                                />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>

                        {{--Agree Button--}}
{{--                        <div class="mb-3">--}}
{{--                            <div class="form-check">--}}
{{--                                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />--}}
{{--                                <label class="form-check-label" for="terms-conditions">--}}
{{--                                    I agree to--}}
{{--                                    <a href="javascript:void(0);">privacy policy & terms</a>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <button class="btn btn-primary d-grid w-100">Sign up</button>
                    </form>

                    <p class="text-center">
                        <span>Already have an account?</span>
                        <a href="auth-login-basic.html">
                            <span>Sign in instead</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- Register Card -->
        </div>
    </div>
</div>

<!-- / Content -->

@include('front.partials.auth_front.scripts')
</body>
</html>

