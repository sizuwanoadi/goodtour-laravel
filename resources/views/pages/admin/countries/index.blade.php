@extends('layouts.admin')
@section('title')
    Countries
@endsection
@section('content')




    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Countries</h1>
      </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
                <a href="{{ route('countries.create')}}" class="btn btn-sm btn-primary">
                    <i class="fas fa-plus fa-sm"></i> Insert Countries
                </a>
                <div class="card shadow mb-4 mt-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Galleries</h6>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-light table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="bg-primary text-light">
                                    <th>No</th>
                                    <th>Country</th>
                                    <th>About</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @forelse ($items as $item)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->country }}</td>
                                    <td>{{ $item->about}}</td>
                                    <td><img src="{{ Storage::url($item->image)}}" alt="" width="120px" class="img-thumbnail"></td>
                                    <td>
                                        <!-- Update Data -->
                                        <a href="{{ route('countries.edit', $item->countries_id)}}" class="btn btn-primary" data-toggle="update" data-target="#updateData{{ $item->travel_packs_id }}" on>
                                                <i class="fa fa-pencil-alt"></i>
                                        </a> 
                                        <form action="{{ route('countries.destroy', $item->countries_id)}}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger" type="submit">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Empty Data</td>
                                    </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <!-- Content Row -->
    </div>
    <!-- /.container-fluid -->


@endsection