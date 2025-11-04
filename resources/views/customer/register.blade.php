@extends("layout.default")
@section("main")
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Customer Register') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('customer.register') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-right">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="formcontrol @error('name') is-invalid @enderror"
                                           name="name" value="{{ old('name') }}" required />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('EMail Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="formcontrol @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address"
                                       class="col-md-4 col-form-label text-right">{{ __('Address') }}</label>
                                <div class="col-md-6">
                                    <input id="address" type="text"
                                           class="form-control @error('address') isinvalid @enderror" name="address"
                                           value="{{ old('address') }}" required />
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone"
                                       class="col-md-4 col-form-label text-right">{{ __('Phone') }}</label>
                                <div class="col-md-6">
                                    <input id="phone" type="text"
                                           class="form-control @error('phone') isinvalid @enderror" name="phone"
                                           value="{{ old('phone') }}" required />
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="birthday"
                                       class="col-md-4 col-form-label text-right">{{ __('Birthday') }}</label>
                                <div class="col-md-6">
                                    <input id="birthday" type="date"
                                           class="form-control @error('birthday') isinvalid @enderror" name="birthday"
                                           value="{{ old('birthday') }}" required />
                                    @error('birthday')
                                    <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-right">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') isinvalid @enderror" name="password"
                                           required />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-right">{{ __('Confirm Password') }}</label>
                                <div class="col-md-6">
                                    <input id="passwordconfirm" type="password" class="form-control"
                                           name="password_confirmation" required />
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
