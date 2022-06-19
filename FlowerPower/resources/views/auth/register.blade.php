@extends('layouts.app')
<!--  Error handle -->
@if($errors->any())
        <div class="row collapse">
            <ul class="alert-box warning radius">
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
        @endif

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- name -->
                        <div class="row mb-3">
                            <label for="Customer_Name" class="col-md-4 col-form-label text-md-end">{{ __('Naam') }}</label>

                            <div class="col-md-6">
                                <input id="Customer_Name" type="text" class="form-control @error('Customer_Name') is-invalid @enderror" name="Customer_Name" value="{{ old('customer_name') }}" required autocomplete="customer_name" autofocus>

                                @error('customer_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- middle name -->
                        <div class="row mb-3">
                            <label for="Customer_MiddleName" class="col-md-4 col-form-label text-md-end">{{ __('Tussenvoegsel') }}</label>

                            <div class="col-md-6">
                                <input id="Customer_MiddleName" type="text" class="form-control @error('Customer_MiddleName') is-invalid @enderror" name="Customer_MiddleName" value="{{ old('customer_Middlename') }}" required autocomplete="customer_Middlename" autofocus>

                                @error('customer_middlename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- last name -->
                        <div class="row mb-3">
                            <label for="Customer_LastName" class="col-md-4 col-form-label text-md-end">{{ __('Achternaam') }}</label>

                            <div class="col-md-6">
                                <input id="Customer_LastName" type="text" class="form-control @error('Customer_LastName') is-invalid @enderror" name="Customer_LastName" value="{{ old('Customer_LastName') }}" required autocomplete="Customer_LastName" autofocus>

                                @error('Customer_LastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <!-- Email -->
                        <div class="row mb-3">
                            <label for="Customer_Email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="Customer_Email" type="email" class="form-control @error('Customer_Email') is-invalid @enderror" name="Customer_Email" value="{{ old('Customer_Email') }}" required autocomplete="Customer_Email">

                                @error('Customer_Email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- password -->
                        <div class="row mb-3">
                            <label for="Customer_Password" class="col-md-4 col-form-label text-md-end">{{ __('Wachtwoord') }}</label>

                            <div class="col-md-6">
                                <input id="Customer_Password" type="password" class="form-control @error('Customer_Password') is-invalid @enderror" name="Customer_Password" required autocomplete="new-password">

                                @error('Customer_Password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- password confirmation -->
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Bevestig wachtwoord') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- addres -->
                        <div class="row mb-3">
                            <label for="Customer_Addres" class="col-md-4 col-form-label text-md-end">{{ __('Addres') }}</label>

                            <div class="col-md-6">
                                <input id="Customer_Addres" type="text" class="form-control @error('Customer_Addres') is-invalid @enderror" name="Customer_Addres" value="{{ old('Customer_Addres') }}" required autocomplete="Customer_Addres" autofocus>

                                @error('Customer_Addres')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- house nummer -->
                        <div class="row mb-3">
                            <label for="Customer_HouseNumber" class="col-md-4 col-form-label text-md-end">{{ __('Huisnummer') }}</label>

                            <div class="col-md-6">
                                <input id="Customer_HouseNumber" type="text" class="form-control @error('Customer_HouseNumber') is-invalid @enderror" name="Customer_HouseNumber" value="{{ old('Customer_HouseNumber') }}" required autocomplete="Customer_HouseNumber" autofocus>

                                @error('Customer_HouseNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- postalcode -->
                        <div class="row mb-3">
                            <label for="Customer_PostalCode" class="col-md-4 col-form-label text-md-end">{{ __('Postcode') }}</label>

                            <div class="col-md-6">
                                <input id="Customer_PostalCode" type="text" class="form-control @error('Customer_PostalCode') is-invalid @enderror" name="Customer_PostalCode" value="{{ old('Customer_PostalCode') }}" required autocomplete="Customer_PostalCode" autofocus>

                                @error('Customer_PostalCode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- township -->
                        <div class="row mb-3">
                            <label for="Customer_TownShip" class="col-md-4 col-form-label text-md-end">{{ __('Provincie') }}</label>

                            <div class="col-md-6">
                                <input id="Customer_TownShip" type="text" class="form-control @error('Customer_TownShip') is-invalid @enderror" name="Customer_TownShip" value="{{ old('Customer_TownShip') }}" required autocomplete="Customer_TownShip" autofocus>

                                @error('Customer_TownShip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- phone nummer -->
                        <div class="row mb-3">
                            <label for="Customer_PhoneNumber" class="col-md-4 col-form-label text-md-end">{{ __('Telefoonnummer') }}</label>

                            <div class="col-md-6">
                                <input id="Customer_PhoneNumber" type="text" class="form-control @error('Customer_PhoneNumber') is-invalid @enderror" name="Customer_PhoneNumber" value="{{ old('Customer_PhoneNumber') }}" required autocomplete="Customer_PhoneNumber" autofocus>

                                @error('Customer_PhoneNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- date of birth -->
                        <div class="row mb-3">
                            <label for="Customer_DateOfBirth" class="col-md-4 col-form-label text-md-end">{{ __('Geboortedatum') }}</label>

                            <div class="col-md-6">
                                <input id="Customer_DateOfBirth" type="date" class="form-control @error('Customer_DateOfBirth') is-invalid @enderror" name="Customer_DateOfBirth" value="{{ old('Customer_DateOfBirth') }}" required autocomplete="Customer_DateOfBirth" autofocus>

                                @error('Customer_DateOfBirth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>






                        <div class="row mb-0">
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
