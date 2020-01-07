@if( Session::has('flash_message') )
  
 <script>
 
    swal({
    title: "  {{Session::get('flash_message') }} ",
    text: "",
    timer: 2000,
    showConfirmButton: false
    });

 </script>
  
 
  
@endif
