@extends('layouts.lp')

@section('page_css')

@endsection

@section('content')
<div class="container">

    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Driver Applications
                    <span class="d-block text-muted pt-2 font-size-sm">
                        List Of all  Drivers Applicatio in the system
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
                    <th title="Field #1">first Name</th>
                    <th title="Field #3">Middle Name</th>

                    <th >Years Of Experience</th>
                    <th >Date of birth</th>
                    <th >licence_type</th>
                    <th >Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($drivers as $driver)
                    <tr>
                        <td>{{$driver->fname}}</td>
                        <td>
                            {{$driver->mname}}
                        </td>

                        <td class="text-right" style="text-align: right !important;"> {{number_format($driver->year_experience)}} Years</td>
                        <td>{{date('d M Y',strtotime($driver->dob))}}</td>
                        <td class="text-right">{{$driver->licence_type}}</td>
                        <td>
                            <a href="{{route('view_driver',[$driver->id])}}" class="btn btn-success btn-xs" >
                                <i class="fa fa-eye"></i>
                            </a>
                            
                        </td>
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
