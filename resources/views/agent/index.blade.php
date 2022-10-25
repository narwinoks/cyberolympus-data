@extends('templates.main')
@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">List Master City</h6>
                <p class="card-description">Enter Your Master Data From City</p>
                <div class="table">
                    <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Agent</th>
                                <th>Total Customers</th>
                            </tr>
                        </thead>

                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endpush
@push('scripts')
    <script>
        // DataTable
        $('#dataTableExample').DataTable({
            processing: true,
            searching: false,
            //  serverSide: true,
            ajax: "{{ route('agent') }}",
            columns: [{
                    data: "id"
                },
                {
                    data: 'name'
                },
                {
                    data: 'total'
                }
            ]
        });
    </script>
@endpush
