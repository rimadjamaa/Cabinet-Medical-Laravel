@extends('backend.layouts.app')


@section('content')
<br>
<div class="block-header">
    <a href="{{route('assistance.RDV.create')}}" class="btn btn-success d-block float-right">
        <i class="material-icons left">add</i>
        <span>CREATE</span>
    </a>
</div>
<br>
<br>

<div class="container">
    <h1>Rendez-vous List</h1>
    <br>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Medcin</th>
                <th>Patient</th>
                <th>Date</th>
                <th>Time</th>
                <th>Duration</th>
                <th>Location</th>
                <th>Status</th>
                <th width="150">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rdvs as $rdv)
            <tr>
                <td>{{ $rdv->medcin->name }}</td>
                <td>{{ $rdv->patient->name }}</td>
                <td>{{ $rdv->date }}</td>
                <td>{{ $rdv->time }}</td>
                <td>{{ $rdv->duration }}</td>
                <td>{{ $rdv->location }}</td>
                <td>
                    @if ($rdv->status === 'done')
                        <span class="badge bg-success">Done</span>
                    @elseif ($rdv->status === 'pending')
                        <span class="badge bg-warning text-dark">Pending</span>
                    @endif
                </td>
                <td class="text-center">
                    <a href="" class="btn btn-info btn-sm waves-effect">
                        <i class="material-icons">edit</i>
                    </a>
                    <button type="button" class="btn btn-danger btn-sm waves-effect" onclick="deleteRendezvous({{ $rdv->id }})">
                        <i class="material-icons">delete</i>
                    </button>
                    <form action="{{ route('assistance.RDV.destroy', $rdv->id) }}" method="POST" id="del-rendezvous-{{ $rdv->id }}" style="display:none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<br>

@endsection

@push('scripts')
 
    <script>
  
        function deleteRendezvous(id){
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
                    document.getElementById('del-rendezvous-'+id).submit();
                    swal(
                    'Deleted!',
                    'Patient has been deleted.',
                    'success'
                    )
                }
            })
        }
    </script>
@endpush