@extends('layouts.app')

@section('content')

<div class="pe-5 ps-5 pt-5 pb-5">
    <div class="table-responsive">
        <div>
            <h3>Treni in partenza</h3>
            <p>Acquista il biglietto prima che parta senza di te!</p>
        </div>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            @foreach($lastStart->first()->getAttributes() as $last => $value)
            <th>{{ $last }}</th>
            @endforeach
          </tr>
        </thead>
        <tbody>
          @foreach($lastStart as $last)
            <tr>
              @foreach($last->getAttributes() as $value)
                <td>{{ $value }}</td>
              @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>



@endsection
