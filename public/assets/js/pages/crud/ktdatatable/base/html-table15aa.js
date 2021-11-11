

"use strict";
var KTDatatableHtmlTableDemo={init:function(){
    var t;t=$("#kt_datatable").KTDatatable({
            data:{saveState:{cookie:!1}},search:{
                input:$("#kt_datatable_search_query"),key:"generalSearch"
            },layout:{
                class:"datatable-bordered"},columns:[{
                field:"DepositPaid",type:"number"},{
                field:"OrderDate",type:"date",format:"YYYY-MM-DD"},{
                field:"Status",title:"Status",
                autoHide:!1,template:function(t){
                    var e={
                        0:{title:"Pending",class:" label-light-warning"},
                        1:{title:"Active",class:" label-light-success"},
                        2:{title:"Delivered",class:" label-light-danger"},
                        3:{title:"Canceled",class:" label-light-primary"},
                        4:{title:"Success",class:" label-light-success"},
                        5:{title:"Info",class:" label-light-info"},
                        6:{title:"Danger",class:" label-light-danger"},
                        7:{title:"Warning",class:" label-light-warning"}};
                    return'<span class="label font-weight-bold label-lg'+e[t.Status].class+' label-inline">'+e[t.Status].title+"</span>"}},
            {field:"Type",title:"Type",autoHide:!1,template:function(t){
                var e={
                    1:{title:"Main Category",state:"primary"},
                    2:{title:"Sub Category",state:"success"},
                    3:{title:"Direct",state:"danger"}};
                return'<span class="label label-'+e[t.Type].state+' label-dot mr-2"></span><span class="font-weight-bold text-'+e[t.Type].state+'">'+e[t.Type].title+"</span>"}}]}),$("#kt_datatable_search_status").on("change",(function(){t.search($(this).val().toLowerCase(),"Status")})),
        $("#kt_datatable_search_type").on("change",(function(){
            t.search($(this).val().toLowerCase(),"Type")})),$("#kt_datatable_search_status, #kt_datatable_search_type").selectpicker()}};jQuery(document).ready((function(){KTDatatableHtmlTableDemo.init()}));
