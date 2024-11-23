@extends('layouts.header')

@section('content')
<div class="container">
    <h2>Verify OTP</h2>
    <p>An OTP has been sent to your phone number. Please enter it below:</p>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="{{ route('otp.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="otp">OTP:</label>
            <input type="text" id="otp" name="otp" class="form-control" required>
            @error('otp')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Verify</button>
    </form>
</div>
@endsection
