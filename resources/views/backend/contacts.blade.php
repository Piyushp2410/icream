@extends('backend.layout')
@section('title')
    Admin Contacts Deatails
@endsection
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Contact</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Contacts Datatables</h5>
                            @if (Session('del'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('del') }}
                                    <button type="button" class="btn btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $srno = 0;
                                    @endphp
                                    @foreach ($data as $cdata)
                                        <tr>
                                            <td>{{ $srno = $srno + 1 }}</td>
                                            <td>{{ $cdata->name }}</td>
                                            <td>{{ $cdata->email }}</td>
                                            <td>{{ $cdata->subject }}</td>
                                            <td>{{ $cdata->message }}</td>
                                            <td class="text-center"> <a
                                                    href='{{ route('del-contacts', ['id' => $cdata->id]) }}'
                                                    style="text-decoration:none;list-style-type:none;color:red;"
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
