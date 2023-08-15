@extends('templates.pages')
@section('title', isset($title) ? $title : 'Jenis Form')
@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">Jenis Form</h2>
      </div>
      <div class="col-auto ms-auto d-print-none">
        <a href="{{ route('superadmin.jenis-form.create') }}" class="btn btn-primary">Create</a>
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
          <div class="table-responsive">
            <table class="table table-vcenter card-table table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Form</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($jenis_forms as $jenis_form)
                <tr>
                  <td>{{ $jenis_forms->firstItem() + $loop->index }}</td>
                  <td>{{ $jenis_form->nama_form }}</td>
                  <td>
                    <div class="btn-list flex-nowrap">
                      <form action="{{ route('superadmin.jenis-form.destroy', $jenis_form->id) }}" method="POST" class="mb-0">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('superadmin.jenis-form.show', $jenis_form->id) }}" class="btn">Show</a>
                        <a href="{{ route('superadmin.jenis-form.edit', $jenis_form->id) }}" class="btn">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer d-flex align-items-center">
            <ul class="pagination m-0 ms-auto">
              @if($jenis_forms->hasPages())
                {{ $jenis_forms->links() }}
              @else
                <li class="page-item">No more records</li>
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection