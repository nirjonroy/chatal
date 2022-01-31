@extends('backend.layouts.master')

@section('title')
Dashboard Page - Admin Panel
@endsection


@section('admin-content')


 <!-- table success start -->
 <div class="main-content-inner">
    <div class="row">
       
        <div class="col-lg-6 col-ml-12">
            <div class="row">
                <!-- basic form start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Create brand</h4>
                            <form action="{{route('brand-store')}}" method="POST">
                               
                                @csrf
                                <div class="form-group">
                                    <label for="brand">brand Name</label>
                                    <input type="text" name="name" class="form-control" id="brandId" aria-describedby="emailHelp" placeholder="brand Name">
                                    @if($errors->has('name'))
                                        <div class="error">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="brandMobile">brand Description</label>
                                    <input type="text" name="description" class="form-control" id="brandId" aria-describedby="emailHelp" placeholder="brand phone">
                                    @if($errors->has('description'))
                                        <div class="error">{{ $errors->first('description') }}</div>
                                    @endif
                                </div>

                                

                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- basic form end -->
           
            </div>
        </div>
    </div>
</div>
<!-- table success end -->


@endsection