@extends('layouts.admin')
@section('content')
    <section class="py-5">
        <div class="container">
            <h4 class="text-dark mb-5">Pengguna Quizz</h4>

            <div class="card border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($user as $key => $u)
                                <tr class="align-middle">
                                    <td> {{++$key}} </td>
                                    <td> {{$u->name}} </td>
                                    <td> {{$u->email}} </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-sm btn-light">
                                                <i class="bx bx-trash"></i> Hapus
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
