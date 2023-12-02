@extends('backend.layouts.app')
@section('backend_content')
    <div class=" col-sm-12 col-md-12 mt-5">
        <table class="table table-bordered data-table table-striped">
            <thead>
                <tr>
                    <th>Student Id</th>
                    <th>Full Name</th>
                    <th>Pnone</th>
                    <th>Email</th>
                    <th>Current Location</th>
                    <th>Nationality</th>
                    <th>Recruiter</th>
                    <th>Aplication</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="invoice_image_modal" aria-hidden="true" aria-labelledby="chamberDaytimeModalToggleLabelAdd"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center text-uppercase" id="chamberDaytimeModalToggleLabelAdd"></h5>
                    <button type="button" class="btn-close single-doctor-schedule-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <h6 class="modal-title alert-danger text-danger px-2" id="chamberClosed">

                </h6>
                <div class="modal-body">
                    <div class="card-body" id="download_invoice">
                        <img src="" width="100px" height="auto" alt=""><a class="btn col-12 btn-success"
                            href="" download=""><i class="fa-solid fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('member-scripts')
    <script>
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('all.student.table') }}",
            columns: [{
                    data: 'student_id'
                },
                {
                    data: 'full_name'
                },
                {
                    data: 'phone'
                },
                {
                    data: 'email'
                },
                {
                    data: 'current_student_location'
                },
                {
                    data: 'country'
                },
                {
                    data: 'recruiter'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ],
            pageLength: 20,
            lengthMenu: [
                [5, 10, 20, 25, 50, -1],
                [5, 10, 20, 25, 50, "All"]
            ]
        });
    </script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.invoice-image', function() {
                var invoice = $(this).attr('data-image')
                $('#download_invoice img').attr('src', invoice)
                $('#download_invoice a').attr('href', invoice)
                $('#invoice_image_modal').modal('show');
            })
        })
    </script>
@endpush
@push('custom-css')
    <style>
        .modal-body img {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }

        table.table-bordered.dataTable td:last-child {
            width: 200px;
        }

        .data-table {
            font-size: 13px;
        }

        .data-table td {
            padding: 0;
            text-align: center;
        }

        table.dataTable>thead>tr>th:not(.sorting_disabled) {
            padding-right: 0px;
        }
    </style>
@endpush
