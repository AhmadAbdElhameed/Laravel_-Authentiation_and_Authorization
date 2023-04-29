
@section('title','Back Verify Email Page')
<!DOCTYPE html>

<html
    lang="en"
    class="light-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{asset('assets_back/')}}"
    data-template="vertical-menu-template-free"
>
@include('back.partials.auth_back.head')

<body>
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Forgot Password -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    @include('back.partials.auth_back.logo')
                    <!-- /Logo -->
                    <h4 class="mb-2">Verify Email 🔒</h4>

                    <div class="mb-4 text-sm text-gray-600" >
                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                    </div>


                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 font-medium text-sm text-green-600" style="color: green;">
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </div>
                    @endif

                    <div class="mt-4 flex items-center justify-between">
                        <form id="formAuthentication" class="mb-3" action="{{ route('verification.send') }}" method="POST">
                            @csrf

                            <button class="btn btn-primary d-grid w-100">Resend Verification Email</button>

                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button class="btn btn-danger d-grid w-30">
                                {{ __('Log Out') }}
                            </button>
                        </form>

                    </div>


                </div>
            </div>
            <!-- /Forgot Password -->
        </div>
    </div>
</div>

<!-- / Content -->

@include('back.partials.auth_back.scripts')
</body>
</html>

