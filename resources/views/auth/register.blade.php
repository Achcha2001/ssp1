{{-- @extends('layouts.frontend')

@section('content')

<style>
    .card {
        margin-top: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: rgba(15, 15, 58, 0.911);
        padding-left: 40%;
        font-size: 20px;
        color: white;
    }

    .card-body {
        padding: 20px;
    }

    label {
        font-weight: bold;
    }

    .btn-primary {
        background-color: #0a0d1000;
        outline: outset;
        border-radius: 5px;
        border: none;
        width: 100px;
        margin-left: 30%;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    /* Style for Password and Confirm Password fields in the same row */
    #password,
    #password-confirm {
        border: 1px solid #ddd;
        border-radius: 4px;
        
        transition: border-color 0.3s;
        width: 90%;
        color: black;
    }

    /* Optional: Add margin or spacing between the fields */
    #password {
        margin-right: 10px;
    }

    /* Optional: Style for the "Confirm Password" placeholder */
    #password-confirm::placeholder {
        color: #999; /* Adjust the color as needed */
    }

    /* Style for Date of Birth and NIC/Passport fields in the same row */
    .dob-nic-row {
        display: flex;
        flex-wrap: wrap;
    }

    .dob-nic-row .col-md-6 {
        flex-basis: calc(50% - 10px); /* Adjust the width as needed */
        margin-right: 10px; /* Add spacing between fields */
    }

    form {
        align-content: center;
        background: rgba(14, 30, 62, 0.758);
        width: 500px;
        margin-left: 30%;
        color: black;
        margin-top: 10%;
        margin-bottom: 5%;
    }
    #name{
        width: 90%;
        border-radius: 4px;
    }
    #email{
        width: 90%;
        border-radius: 4px;
    }
    #contact_number{
        width: 90%;
        border-radius: 4px;
    }
    #date_of_birth{
        color: rgba(0, 0, 0, 0.783);
    }
   
</style>

<form>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 dob-nic-row">
                                <div class="col-md-6">
                                    <label for="date_of_birth" class="col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                                    <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                                    @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="nic_passport" class="col-form-label text-md-right">{{ __('NIC/Passport') }}</label>
                                    <input id="nic_passport" type="text" class="form-control @error('nic_passport') is-invalid @enderror" name="nic_passport" value="{{ old('nic_passport') }}" required>
                                    @error('nic_passport')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password and Confirm Password Fields -->
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="password"  class="col-form-label text-md-right">{{ __('Password') }}</label>
                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                </div>

                                <div class="col-md-6">
                                    <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>
                            </div>
                            <!-- End Password and Confirm Password Fields -->

                            <div class="form-group row">
                                <label for="contact_number" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>

                                <div class="col-md-6">
                                    <input id="contact_number" type="text" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" value="{{ old('contact_number') }}" required>

                                    @error('contact_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="yes_no" class="col-md-4 col-form-label text-md-right">{{ __('Are you a government worker? (Put a tick)') }}</label>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="yes_no" name="yes_no" {{ old('yes_no') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="yes_no">
                                            {{ __('Tick for Yes') }}
                                        </label>
                                    </div>
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
</form>
@endsection --}}
