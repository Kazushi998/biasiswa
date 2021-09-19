@extends('layouts.app')
abc
@section('content')
  <section class="uk-section" style="background-image: linear-gradient(0deg, rgba(34,195,169,1) 0%, rgba(255,225,200,1) 100%);">
    <div class="uk-container">
      <div class="uk-flex-center" uk-grid>
        <div class="uk-width-1-1 uk-width-1-1">
          <div class="uk-card uk-box-shadow-small uk-box-shadow-hover-large" style="background-color:#ffffff;  border-radius: 15px;">
            <div class="uk-card-body">
            <div class="uk-card-header">
              <h2 class="uk-text-center">{{ __('Senarai Permohonan Yang Belum Disahkan') }}</h2>
            </div>
            <table class="uk-table uk-table-divider">
    <thead>
        <tr>
            <th>Nama Pemohon</th>
            <th>Status</th>
            <th>Kemaskini</th>
        </tr>
    </thead>
    <tbody>
      @foreach($permohonan as $data)
        @if ($data->status == 'Permohonan Belum Disahkan')
        <tr>
            <td>{{ $data-> name }}</td>
            <td>{{ $data-> status }}</td>
            <td><a class="uk-button uk-button-primary uk-border-rounded" href="{{ route('permohonan.edit', $data->id) }}"><span uk-icon="pencil"></span></a></td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br>

    <div class="uk-container">
      <div class="uk-flex-center" uk-grid>
        <div class="uk-width-1-1 uk-width-1-1">
          <div class="uk-card uk-box-shadow-small uk-box-shadow-hover-large" style="background-color:#ffffff;  border-radius: 15px;">
            <div class="uk-card-body">
            <div class="uk-card-header">
              <h2 class="uk-text-center">{{ __('Senarai Permohonan Yang Telah Disahkan') }}</h2>
            </div>
            <table class="uk-table uk-table-divider">
    <thead>
        <tr>
            <th>Nama Pemohon</th>
            <th>Status</th>
            <th>Kemaskini</th>
        </tr>
    </thead>
    <tbody>
    @foreach($permohonan as $data)
        @if ($data->status == 'Permohonan Telah Disahkan')
        <tr>
            <td>{{ $data-> name }}</td>
            <td>{{ $data-> status }}</td>
            <td><a class="uk-button uk-button-primary uk-border-rounded" href="{{ route('permohonan.edit', $data->id) }}"><span uk-icon="pencil"></span></a></td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <br><br>

    <div class="uk-container">
      <div class="uk-flex-center" uk-grid>
        <div class="uk-width-1-1 uk-width-1-1">
          <div class="uk-card uk-box-shadow-small uk-box-shadow-hover-large" style="background-color:#ffffff;  border-radius: 15px;">
            <div class="uk-card-body">
            <div class="uk-card-header">
              <h2 class="uk-text-center">{{ __('Senarai Permohonan Yang Telah Ditolak') }}</h2>
            </div>
            <table class="uk-table uk-table-divider">
    <thead>
        <tr>
            <th>Nama Pemohon</th>
            <th>Status</th>
            <th>Kemaskini</th>
        </tr>
    </thead>
    <tbody>
    @foreach($permohonan as $data)
        @if ($data->status == 'Permohonan Telah Ditolak')
        <tr>
            <td>{{ $data-> name }}</td>
            <td>{{ $data-> status }}</td>
            <td><a class="uk-button uk-button-primary uk-border-rounded" href="{{ route('permohonan.edit', $data->id) }}"><span uk-icon="pencil"></span></a></td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
