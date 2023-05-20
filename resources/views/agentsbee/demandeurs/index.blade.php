@extends('layouts.sbeeagt')

@section('content')



<div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Listes des demandeurs ') }}
                </h6>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-Client" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10">
                                  Id
                                </th>
                                {{-- <th>Id demandeur</th> --}}
                                <th>Nom demandeur</th>
                                <th>Prenom demandeur</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Localite</th>
                                <th>Longitude</th> 
                                <th>Latitude</th> 
                                <th>Image</th> 
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($demandeurs as $demandeur)
                            <tr data-entry-id="{{ $demandeur->id }}">
                              
                                <td>{{ $demandeur->id }}</td>                                
                                <td>{{ $demandeur->nom }}</td>
                                <td>{{ $demandeur->prenom }}</td>
                                <td>{{ $demandeur->email }}</td>
                                <td>{{ $demandeur->contact }}</td>
                                <td>{{ $demandeur->localite }}</td>
                                <td>{{ $demandeur->longitude }}</td>
                                <td>{{ $demandeur->latitude }}</td>
                                <td>
                                   
                                    <img src="{{ asset('/storage/images/uploads/'.$demandeur->file_path) }}" width="50px" height="50px">
                                   
                                </td>
                                

                                <td>                                    
                               
                                    <div class="btn-group btn-group-sm">
                                        {{-- <a href="{{ route('admin.clients.edit', $client->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a> --}}
                                        <form onclick="return confirm('are you sure ? ')" class="d-inline" action="{{ route('agentsbee.demandeur.destroy', $demandeur->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr >
                                <td colspan="7" class="text-center">{{ __('Data Empty') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
@endsection

@push('script-alt')
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  let deleteButtonTrans = 'delete selected'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('agentsbee.demandes.mass_destroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });
      if (ids.length === 0) {
        alert('zero selected')
        return
      }
      if (confirm('are you sure ?')) {
        $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'asc' ]],
    pageLength: 50,
  });
  $('.datatable-Client:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endpush



    





