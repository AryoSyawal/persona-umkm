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
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Invoices</h3>
          </div>
          <div class="card-body border-bottom py-3">
            <div class="row g-2">
              <div class="col-6">
                <div class="">
                  <label class="form-label">File</label>
                  <input type="file" class="form-control">
                </div>
              </div>
              <div class="col-5">
              <div class="">
                <label class="form-label">Jenis Form</label>
                <select name="user[month]" class="form-select">
                  <option value="">Month</option>
                </select>
              </div>
              </div>
              <div class="col-1 mt-auto">
                <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal" style="width: 100%;">Export</button>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-vcenter card-table table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Title</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Maryjo Lebarree</td>
                  <td class="text-muted">
                    Civil Engineer, Product Management
                  </td>
                  <td class="text-muted"><a href="#" class="text-reset">mlebarree5@unc.edu</a></td>
                  <td><a href="{{ route('superadmin.form.show', auth()->user()->id) }}" class="btn">Edit</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer d-flex align-items-center">
            <ul class="pagination m-0 ms-auto">
              {{-- @if($projects->hasPages())
                {{ $projects->links() }}
              @else
                <li class="page-item">No more records</li>
              @endif --}}
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection