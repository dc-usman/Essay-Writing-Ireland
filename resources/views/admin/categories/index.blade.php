@extends('layouts.admin')
@section('content')

    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">{{ trans('cruds.category.title') }}</h5>
                                <a href="{{ route('admin.categories.create') }}" class="btn btn-sm btn-primary my-auto"> {{ trans('global.create') }} {{ trans('cruds.category.title_singular') }} </a>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Blogs Count</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td> {{$category->name ?? "-"}} </td>
                                            <td> {{$category->blogs_count ?? "-"}} </td>
                                            <td>
                                                <div class="btn-group" >
                                                    <a href='{{ route('admin.categories.show', [$category->id]) }}' role='button' class='btn btn-sm btn-primary'> <i class='bi bi-eye' ></i> </a>
                                                    <a href='{{ route('admin.categories.edit', [$category->id]) }}' role='button' class='btn btn-sm btn-info'> <i class='bi bi-pencil' ></i> </a>
                                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure? This will delete all related data also.');" style="display: inline-block;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
