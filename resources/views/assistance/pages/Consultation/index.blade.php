@extends('backend.layouts.app')

@push('styles')

    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}">

@endpush

@section('content')
<br>

<div class="block-header">
    <a href="{{ route('assistance.consultation.create') }}" class="btn btn-success d-block float-right">
        <i class="material-icons left">add</i>
        <span>CREATE</span>
    </a>
</div>

    
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-indigo">
                    <h2> Consultations LIST</h2>
                </div>
                <div class="body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>medcin</th>
                                    <th>patient</th>
                                    <th>date</th>
                                    <th>diagnostic</th>
                                    <th>prescription</th>
                                    <th>description</th>
                                    <th>Etat</th>
                                    <th width="150">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(!empty($consultations))
                            @foreach( $consultations as $key => $consultation)
                                <tr>
                                    <td>{{$consultation->medcin->name}}</td>
                                    <td>{{$consultation->patient->name}}</td>
                                    <td>{{$consultation->date}}</td>
                                    <td>{{$consultation->diagnostic}}</td>
                                    <td>{{$consultation->prescription}}</td>
                                    <td>{{$consultation->description}}</td>
                                    <td>
                                        <span style="display: inline-block; width: 10px; height: 10px; border-radius: 50%; background-color: {{ $consultation->status === 'Donne' ? 'green' : 'red' }}"></span>
                                        {{ $consultation->status }}
                                    </td>


                                    <td class="text-center">
                                        <a href="" class="btn btn-info btn-sm waves-effect">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm waves-effect" onclick="deleteconsultation({{$consultation->id}})">
                                            <i class="material-icons">delete</i>
                                        </button>
                                        <form action="{{ route('assistance.consultation.destroy', $consultation->id) }}" method="POST" id="del-consultation-{{$consultation->id}}" style="display:none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
@endsection


@push('scripts')

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('backend/js/pages/tables/jquery-datatable.js') }}"></script>

    <script>
        function deleteconsultation(id){
            
            swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    document.getElementById('del-consultation-'+id).submit();
                    swal(
                    'Deleted!',
                    'Consultation has been deleted.',
                    'success'
                    )
                }
            })
        }
    </script>


@endpush