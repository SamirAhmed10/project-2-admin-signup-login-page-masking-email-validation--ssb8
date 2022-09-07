@extends('backend.layout.template')
@section('body-content')
  <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Manage Brands</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
</div>
 <div class="br-pagebody">
        <div class="row">
          <div class="col-lg-12">
        <div class="card shadow-base bd-0 overflow-hidden">

      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Serial no</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
      
    </tr>
  </thead>
  <tbody>
    @php $i=1; @endphp
    @foreach($brand as $brands)
    <tr>
      <th scope="row">{{$i}}</th>
      <td>
        @if(!empty($brands->image))
        @else
           No image found
        @endif
      </td>
      <td>{{ $brands->name }}</td>
      <td>
         @if ( $brands->status == 0 )
             <span class="badge badge-danger">Inactive</span>
         @elseif ( $brands->status == 1 )
             <span class="badge badge-success">Active</span>
         @endif
        </td>
      <td>Update/Delete</td>

    </tr>
    @php $i++; @endphp
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
      </div>

    @endsection
