@extends('layouts.sbeeagt')

@section('content')



<div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Client') }}
                </h6>
                <div class="ml-auto">
                    <a href="{{ route('agentsbee.demandes.create') }}" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('Nouvelle demande') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-Client" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10">
                                  Id
                                </th>
                                <th>No demande</th>
                                <th>Nom demandeur</th>
                                <th>Prenom demandeur</th>
                                <th>Localite</th>
                                {{-- <th>Phone</th>
                                <th>Photo</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($demandes as $demande)
                            
                            <tr data-entry-id="{{ $demande->id }}">
                              
                                <td>{{ $demande->id }}</td>
                                <td>{{ $demande->no_demande }}</td>
                                <td>{{ $demande->demandeur->nom }}</td>
                                <td>{{ $demande->demandeur->prenom }}</td>
                                {{-- <td>{{ $demande->demandeur->nom }}</td>
                                <td>{{ $demande->demandeur->prenom }}</td>
                                <td>{{ $demande->demandeur->localite }}</td> --}}
                                
                                {{-- <td>
                                    @if($client->photo)
                                        <a href="{{ $client->photo->getUrl() }}" target="_blank">
                                            <img src="{{ $client->photo->getUrl() }}" width="50px" height="50px">
                                        </a>
                                    @endif
                                </td> --}}
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        {{-- <a href="{{ route('admin.clients.edit', $client->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a> --}}
                                        <form onclick="return confirm('are you sure ? ')" class="d-inline" action="{{ route('agentsbee.demandes.destroy', $demande->id) }}" method="POST">
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



    





