@extends('layout')

@section('title', 'get http header')

@section('content')


<div class="col-md-8">
	@section('ajax')
      <script>
        $(document).ready(function(){
            $("#get_info").click(function(){
                var url  = $("#url").val();
                $.ajax({
                   type:'GET',
                   url:'/get-http-header',
                   data: {'_token': "{{ csrf_token() }}",'url': url},
                   success:function(response) {
                    console.log(response);
                     $("#header_info").html(response);
                     
                   }
                });
            });
        });
        
      </script>
	@stop
                <h2 class="text-center header-style br-bt"><a href="#" class="resource-link">HTTP Header Information</a></h2>
                <div class="user-input-area">	
                <div class="form-group">
                    <textarea  id="url" cols="30" rows="5" class="form-control" placeholder="write your url"></textarea>
                </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control mx-auto col-md-3 btn-info" id="get_info">
                        GET HEADER
                  </button>
                 </div>
                <div class="output-area mb-2">
                    <button href="" class="copybutton btn btn-info btn-sm" title="Click to copy" id="copy-button"><i class="fa fa-files-o fa-2x" aria-hidden="true"></i>
                    </button>
                    <br>
                    <div class="output mt-4">
                        <textarea id="header_info" class="form-control" cols="30" rows="20" disabled="disabled" ></textarea>
                    </div>
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