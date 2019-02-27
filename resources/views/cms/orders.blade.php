@extends('cms.cms_master')
@section('main_cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">View Site Order</h1>

</div>
<div class="row mt-5">
  <div class="col-12">
    <table class="table table-striped justify-content-center ">
      <thead class="thead-dark h-1 text-center">
        <tr class="h4">
          <th>User</th>
          <th>Total</th>
          <th>Details</th>
          <th>Date</th>

        </tr>
      </thead>
      <tbody>
        @foreach($orders as $item)
        <tr class="h4">

          <td class="text-center">{{$item->name}}</td>
          <td>${{$item->total}}</td>
          <td>
            <table class="table table-striped text-center">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>
                @foreach(unserialize($item->data) as $order)
                <tr class="h5">

                  <td>{{$order['name']}}</td>
                  <td>${{$order['price']}}</td>
                  <td class="text-center">{{$order['quantity']}}</td>
                </tr>


                @endforeach
              </tbody>
            </table>
          </td>

          <td>{{date('d/M/Y',strtotime($item->created_at))}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection