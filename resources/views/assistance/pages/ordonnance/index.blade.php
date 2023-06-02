@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Liste des Ordonnances</h1>
            </div>
        </div>
        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Patient</th>
                            <th>Médecin</th>
                            <th>date</th>
                            <th>Dosage</th>
                            <th>fréquence</th>
                            <th>Duree</th>
                            <th>Instruction</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ordonnances as $ordonnance)
                            <tr>
                                <td>{{ $ordonnance->id }}</td>
                                <td>{{ $ordonnance->consultation->patient->name }}</td>
                                <td>{{ $ordonnance->consultation->medcin->name }}</td>                        
                                <td>{{ $ordonnance->consultation->date }}</td>
                                <td>{{ $ordonnance->dosage }}</td>
                                <td>{{ $ordonnance->frequency }}</td>
                                <td>{{ $ordonnance->duration }}</td>
                                <td>{{ $ordonnance->instructions }}</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm">Voir</a>
                                    <button type="button" class="btn btn-danger btn-sm waves-effect" onclick="deleteordonnance({{$ordonnance->id}})">
                                            <i class="material-icons">delete</i>
                                    </button>
                                    <form action="{{ route('assistance.ordonnance.destroy', $ordonnance->id) }}" method="POST" id="del-ordonnance-{{$ordonnance->id}}" style="display:none;">
                                            @csrf
                                            @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

<script>
        function deleteordonnance(id){
            
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
                    document.getElementById('del-ordonnance-'+id).submit();
                    swal(
                    'Deleted!',
                    'Ordenance has been deleted.',
                    'success'
                    )
                }
            })
        }
    </script>

@endpush