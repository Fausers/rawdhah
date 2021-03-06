@extends('layouts.lp')

@section('page_css')

@endsection

@section('content')
<div class="container">

    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Quotes Applications
                    <span class="d-block text-muted pt-2 font-size-sm">
                        List Of all  Quotes Application in the system
                    </span></h3>
            </div>
            
        </div>
        <div class="card-body">
            <!--begin: Search Form-->
            <!--begin::Search Form-->
            <div class="mb-7">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" /><span>
                                        <i class="flaticon2-search-1 text-muted"></i>
                                    </span>
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                    </div>
                </div>
            </div>
            <!--end::Search Form-->
            <!--end: Search Form-->
            <!--begin: Datatable-->
            <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                <thead>
                <tr>
                    <th title="Field #1">Loading Point</th>
                    <th title="Field #3">Destination Zip</th>

                    <th >Sector</th>
                    <th >Company</th>
                    <th >Total Weight</th>
                    <th >Phone Number</th>
                    <th >Email</th>
                   
                </tr>
                </thead>
                <tbody>
                @foreach($quotes as $post)
                    <tr>
                        <td>{{$post->loading_point}}</td>
                        <td>
                            {{$post->destination_zip}}
                        </td>

                        
                        <td>{{$post->sector}}</td> 
                        <td>{{$post->company_name}}</td>
                        <td class="text-right">{{$post->total_weight}}Kg</td>
                        <td class="text-right">{{$post->phone_number}}</td>
                        <td>{{$post->email}}</td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Card-->
</div>

 

@endsection

@section('page_js')

		<!--begin::Page Scripts(used by this page)-->
		<script src="{{url('/')}}/assets/js/pages/crud/ktdatatable/base/html-table15aa.js?v=7.2.2"></script>
		<!--end::Page Scripts-->
@endsection
