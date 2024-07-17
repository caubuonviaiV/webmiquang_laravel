@extends('admin.layout.main')

@section('content')
    <!-- Body: Body -->
    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0"> {{ $title }}</h3>
                        <div class="col-auto d-flex w-sm-100">
                            <a href="{{ route('feeships.add') }}">
                                <button type="button" class="btn btn-dark btn-set-task w-sm-100">
                                    <i class="icofont-plus-circle me-2 fs-6"></i>Thêm Phí Vận Chuyển
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- List --}}
            <div class="row">
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 50px">Id</th>
                                        <th>Quận/ huyện</th>
                                        <th>Phường/ xã</th>
                                        <th>Phí giao hàng</th>
                                        <th>Xử lý</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($feeships as $key => $fee)
                                        <tr>
                                            <td>{{ $fee->id }}</td>
                                            <td>{{ $fee->district->name }}</td>
                                            <td>{{ $fee->ward->name }}</td>
                                            <td>{{ number_format($fee->feeship, 0, '', '.') }}đ</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    <a class="btn btn-outline-secondary"
                                                        href="{{ route('feeships.edit', ['feeship' => $fee->id]) }}">
                                                        <button class="btn btn-primary btn-sm" type="button">
                                                            <i class="icofont-edit text-success"></i>
                                                        </button>
                                                    </a>

                                                    <a href="#" class="btn btn-outline-secondary"
                                                        onclick="removeRow({{ $fee->id }}, '{{ route('feeships.destroy') }}')">
                                                        <button type="button" class="btn btn-warning btn-sm">
                                                            <i class="icofont-ui-delete text-danger"></i>
                                                        </button>
                                                    </a>
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
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
