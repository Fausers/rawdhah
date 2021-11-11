"use strict";
var KTSweetAlert2Demo={init:function(){
    $("#kt_sweetalert_demo_1").click((function(e){Swal.fire("Good job!")})),
        $("#kt_sweetalert_demo_2").click((function(e){Swal.fire("Here's the title!","...and here's the text!")})),
        $("#kt_sweetalert_demo_3_1").click((function(e){Swal.fire("Good job!","You clicked the button!","warning")})),
        $("#kt_sweetalert_demo_3_2").click((function(e){Swal.fire("Good job!","You clicked the button!","error")})),
        $("#kt_sweetalert_demo_3_3").click((function(e){Swal.fire("Good job!","You clicked the button!","success")})),
        $("#kt_sweetalert_demo_3_4").click((function(e){Swal.fire("Good job!","You clicked the button!","info")})),
        $("#kt_sweetalert_demo_3_5").click((function(e){Swal.fire("Good job!","You clicked the button!","question")})),
        $("#kt_sweetalert_demo_4").click((function(e){Swal.fire({title:"Good job!",text:"You clicked the button!",icon:"success",buttonsStyling:!1,confirmButtonText:"Confirm me!",customClass:{confirmButton:"btn btn-primary"}})})),
        $("#kt_sweetalert_demo_5").click((function(e){Swal.fire({title:"Good job!",text:"You clicked the button!",icon:"success",buttonsStyling:!1,confirmButtonText:"<i class='la la-headphones'></i> I am game!",showCancelButton:!0,cancelButtonText:"<i class='la la-thumbs-down'></i> No, thanks",customClass:{confirmButton:"btn btn-danger",cancelButton:"btn btn-default"}})})),

        $("#kt_sweetalert_demo_6").click((function(e){
            Swal.fire({
                position:"top-right",
                icon:"success",
                title:"Your Shop has been Activated",
                showConfirmButton:!1,
                timer:2000
            }
            )
        })),

        $("#kt_sweetalert_demo_7").click((function(e){Swal.fire({title:"jQuery HTML example",showClass:{popup:"animate__animated animate__wobble"},hideClass:{popup:"animate__animated animate__swing"}})})),
        $("#kt_sweetalert_demo_8").click((function(e){Swal.fire({title:"Are you sure?",text:"You won't be able to revert this!",icon:"warning",showCancelButton:!0,confirmButtonText:"Yes, delete it!"}).then((function(e){e.value&&Swal.fire("Deleted!","Your file has been deleted.","success")}))})),
        $("#kt_sweetalert_demo_9").click((function(e){Swal.fire({title:"Are you sure?",text:"You won't be able to revert this!",icon:"warning",showCancelButton:!0,confirmButtonText:"Yes, delete it!",cancelButtonText:"No, cancel!",reverseButtons:!0}).then((function(e){e.value?Swal.fire("Deleted!","Your file has been deleted.","success"):"cancel"===e.dismiss&&Swal.fire("Cancelled","Your imaginary file is safe :)","error")}))})),
        $("#kt_sweetalert_demo_10").click((function(e){Swal.fire({title:"Sweet!",text:"Modal with a custom image.",imageUrl:"https://unsplash.it/400/200",imageWidth:400,imageHeight:200,imageAlt:"Custom image",animation:!1})})),

        $("#kt_sweetalert_demo_11").click((function(e){
            Swal.fire({
                title:"Auto close alert!",
                text:"I will close in 5 seconds.",
                timer:5e3,
                onOpen:function(){
                    Swal.showLoading()
                }}).then((function(e){
                    "timer"===e.dismiss&&console.log("I was closed by the timer")
                }))
        }))}};
jQuery(document).ready((function(){KTSweetAlert2Demo.init()}));
