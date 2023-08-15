@extends('templates.pages')
@section('title', isset($title) ? $title : 'Form')
@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">Form</h2>
      </div>
    </div>
  </div>
</div>
<div class="page-body">
  <div class="container-xl">
    <div class="row row-cards">
      <div class="col-12">
        <form action="" method="POST" class="card" enctype="multipart/form-data">
          @csrf
          <div class="card-header">
            <h4 class="card-title">Show</h4>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label required">Nama Form</label>
              <input disabled type="text" class="form-control" name="nama_form" value="{{ $jenis_form->nama_form }}" placeholder="Masukan nama form">
              @error('nama_form')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
          </div>
          <div class="card-footer text-end">
            <a href="{{ route('superadmin.jenis-form.index') }}" class="btn">Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection