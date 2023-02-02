@extends('admin.master')
@section('content')
    <form class="row g-3">
        <div class="col-12">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-12">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-12">
            <label class="form-label">Company Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-12">
            <label class="form-label">Address</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-12">
            <label class="form-label">Email</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-12">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-12">
            <label class="form-label">Additional Information</label>
            <textarea class="form-control" rows="4" cols="4"></textarea>
        </div>
        <div class="col-12">
            <div class="form-check d-flex justify-content-center gap-2">
                <input class="form-check-input" type="checkbox" id="gridCheck3-c" checked>
                <label class="form-check-label" for="gridCheck3-c">
                    Create an account?
                </label>
            </div>
        </div>
        <div class="col-12">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Place Order</button>
            </div>
        </div>
    </form>
@endsection
