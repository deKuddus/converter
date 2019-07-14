@extends('layout')

@section('title', 'wp-password-generator')

@section('content')


<div class="col-md-8">
	@section('ajax')
      <script>
        $(document).ready(function(){
          $("#given_string").keypress(function(){
            
            var given_string  = $("#given_string").val();
              $.ajax({
                 type:'GET',
                 url:'/gnerate-wordpress-password',
                 data: {'_token': "{{ csrf_token() }}",'given_string': given_string},
                 success:function(response) {
                 	console.log(response);
                   $("#wp_outputdata").html(response);
                   
                 }
              });
          
          });
        });
      </script>
	@stop
                <h2 class="text-center header-style br-bt"><a href="#" class="resource-link">Wordpress password generator</a></h2>
                <div class="user-input-area">
                    	
                        <div class="form-group">
                            <textarea  id="given_string" cols="30" rows="5" class="form-control" placeholder="Write your string to convert wordpress password"></textarea>
                        </div>
                </div>
                <div class="output-area mb-2">
                    <button href="" class="copybutton btn btn-info btn-sm" title="Click to copy" id="copy-button"><i class="fa fa-files-o fa-2x" aria-hidden="true"></i>
                    </button>
                    <br>
                    <div class="output mt-4">
                            <textarea id="wp_outputdata" class="form-control" cols="30" rows="5" disabled="disabled" ></textarea>
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