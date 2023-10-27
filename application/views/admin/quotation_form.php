<?php include("head.php"); ?> 


<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Quotation List </div>
                <div class="card-body">
                        <form method="post" action="{{url('/submit_quote_form')}}" style="margin:20px;">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="companyname">Company Name</label>
                                    <input type="text" class="form-control" id="companyname" placeholder="Please Enter Company Name" require>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlTextarea1">Address  </label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="3"></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="mobilenumber">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobilenumber" placeholder="Please Enter Mobile Number" require>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="route1">Route From</label>
                                    <input type="text" class="form-control" id="route1" placeholder="Please Enter Route From" require>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="route2">Route To</label>
                                    <input type="text" class="form-control" id="route2" placeholder="Please Enter Route To" require>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect2">Vehicle Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        @foreach($Vehicle_type as $key=>$value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect2">Material Weight</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        @foreach($Material_weight as $key=>$value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="loading">Loading Point</label>
                                    <input type="text" class="form-control" id="loading" placeholder="Please Enter Loading Point" require>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="unloading">Unloading Point</label>
                                    <input type="text" class="form-control" id="unloading" placeholder="Please Enter Material Weight" require>
                                </div>



                            </div>
                        </form>
                </div>      
            </div>
        </div>
    </div>
</div>
      
      