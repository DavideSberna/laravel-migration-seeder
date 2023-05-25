@extends('layouts.app')

@section('content')



<div class="pe-5 ps-5 pt-5 pb-5">
    <div class="table-responsive">
        <div>
            <h3>Treni in partenza</h3>
            <p>Acquista il biglietto più economico! Sono ordine crescente</p>
        </div>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
              <th>Azienda</th>
              <th>Oriario partenza</th>
              <th>Destinazione</th>
          </tr>
        </thead>
        <tbody>
          @foreach($priceTrain as $price)
            <tr>
              @foreach($price->getAttributes() as $value)
                <td>{{ $value }}</td>
              @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>

@endsection
