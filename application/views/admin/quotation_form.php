@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Quotation List') }} <button style="float:right;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Add Quotation
                </button></div>
                

                <div class="card-body">
                    <div class="card">
                        <a href="{{url('/quotaion_view')}}">view</a>
          
                        
                           

                        
                      
            </div>
        </div>
    </div>
</div>

<div class="modal fade  bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Quotation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{url('/submit_quote_form')}}" style="margin:20px;">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="companyname">Company Name</label>
                    <input type="text" class="form-control" id="companyname" placeholder="Please Enter Company Name" require>
                </div>
                <div class="form-group col-md-6">
                    <label for="mobilenumber">Mobile Number</label>
                    <input type="text" class="form-control" id="mobilenumber" placeholder="Please Enter Mobile Number" require>
                </div>
                <div class="form-group col-md-6">
                    <label for="route1">Route From</label>
                    <input type="text" class="form-control" id="route1" placeholder="Please Enter Route From" require>
                </div>

                <div class="form-group col-md-6">
                    <label for="route2">Route To</label>
                    <input type="text" class="form-control" id="route2" placeholder="Please Enter Route To" require>
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect2">Vehicle Type</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        @foreach($Vehicle_type as $key=>$value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect2">Material Weight</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        @foreach($Material_weight as $key=>$value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="loading">Loading Point</label>
                    <input type="text" class="form-control" id="loading" placeholder="Please Enter Loading Point" require>
                </div>

                <div class="form-group col-md-6">
                    <label for="unloading">Unloading Point</label>
                    <input type="text" class="form-control" id="unloading" placeholder="Please Enter Material Weight" require>
                </div>


                <div class="form-group col-md-6">
                    <label for="exampleFormControlTextarea1">Address  </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="3"></textarea>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
