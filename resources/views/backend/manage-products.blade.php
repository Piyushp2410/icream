@extends('backend.layout')
@section('title')
    Manage Products
@endsection


@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Products</li>
                    <li class="breadcrumb-item active">Manage Products</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        @if (Session('update'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('update') }}
                <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Products Datatables</h5>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Product IMG</th>
                                        <th>Product Des.</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $srno = 0;
                                    @endphp

                                    @foreach ($data as $pdata)
                                        <tr>
                                            <td>{{ $srno = $srno + 1 }}</td>
                                            <td>{{ $pdata->pname }}</td>
                                            <td>{{ $pdata->pprice }}</td>
                                            <td><img src="{{ asset('uploads/' . $pdata->pimg) }}"
                                                    class="border border-1 border-dark p-1 img img-responsive rounded rounded-4"
                                                    alt="" width="50"> </td>
                                            <td>{{ $pdata->pdes }}</td>
                                            <td> <a href='{{ route('update-products', ['id' => $pdata->id]) }}'
                                                    style="text-decoration:none;list-style-type:none;color:black;"><i
                                                        class="bi bi-pencil"></i></a> | <a
                                                    href='{{ route('del-products', ['id' => $pdata->id]) }}'
                                                    style="text-decoration:none;list-style-type:none;color:black;"
                                                    onclick="return confirm('Are you sure to delete Data')"><i
                                                        class="bi bi-trash"></i></a> </td>
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
