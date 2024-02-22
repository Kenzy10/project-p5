@extends('layouts.master')
@section('kontent')
<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
            @if (Session('success'))
        <div style="width: 100%; padding: 10px">
        <ul class="alert alert-success" role="alert">{{ session('success') }}</ul>
        </div>
        @endif

              <h5 class="card-title fw-semibold mb-3" style="padding-left: 10%">Forms</h5>
              <div class="card">
                <div class="">
                  <form action="" method="POST">
                  <div class="mb-3">
                      <label for="minggu" class="form-label">Minggu Ke- </label>
                      <input type="number" class="form-control" id="minggu" name="minggu">
                    </div>
                    <div class="mb-3">
                      <label for="materi" class="form-label">Materi</label>
                      <input type="file" class="form-control" id="materi" name="materi">
                    </div>
                    <div class="mb-3">
                      <label for="lkpd" class="form-label">LKPD</label>
                      <input type="file" class="form-control" id="lkpd" name="lkpd">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection