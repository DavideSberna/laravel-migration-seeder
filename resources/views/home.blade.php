@extends('layouts.app')

@section('content')



<div class="pe-5 ps-5 pt-5 pb-5">
    <div>
        <h3>Tutti i treni</h3>
        <p>Vai dove vuoi in qualsiasi orario</p>
    </div>
    <div class="table-responsive max-65vh">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            @foreach($trains->first()->getAttributes() as $column => $value)
              <th>{{ $column }}</th>
            @endforeach
          </tr>
        </thead>
        <tbody>
          @foreach($trains as $train)
            <tr>
              @foreach($train->getAttributes() as $value)
                <td>{{ $value }}</td>
              @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>

@endsection
