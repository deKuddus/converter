@extends('layout')

@section('title', 'base64 decode online')

@section('content')


<div class="col-md-8">
	@section('ajax')
      <script>
        $(document).ready(function(){
            $("#myIp").click(function(){
                var iptext  = "my ip";
                $.ajax({
                   type:'GET',
                   url:'/find-my-ip',
                   data: {'_token': "{{ csrf_token() }}",'iptext': iptext},
                   success:function(response) {
                     $("#my_ip").html(response);
                     
                   }
                });
            });
        });
        
      </script>
	@stop
                <h2 class="text-center header-style br-bt"><a href="#" class="resource-link">Base 64 Decoding</a></h2>
                <div class="user-input-area">	
                <div class="form-group">
                    <textarea  id="my_ip" cols="30" rows="5" class="form-control" readonly="readonly"></textarea>
                </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control mx-auto col-md-3 btn-info" id="myIp">
                         Find My IP 
                  </button>
                 </div>
                <div class="content-area">
                    <h2 class="header-style pt-3 text-center">
                        MD5 Generator
                    </h2>
                    <p class="text-justify">
                    	Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut tempora maxime asperiores officiis delectus! Nisi fugit eum doloribus nobis quis in tenetur odio distinctio quos.
                    </p>
                </div>
            </div>


@endsection