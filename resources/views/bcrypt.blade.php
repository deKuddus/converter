@extends('layout')

@section('title', 'bcrypt generator online')

@section('content')


<div class="col-md-8">
	@section('ajax')
      <script>
         $(document).ready(function(){
            $("#bcrypt_palinText").keypress(function(){
              var bcrypt_palinText  = $("#bcrypt_palinText").val();
              $.ajax({
                 type:'GET',
                 url:'/bcrypt-generatro',
                 data: {'_token': "{{ csrf_token() }}",'bcrypt_palinText': bcrypt_palinText},
                 success:function(response) {
                  console.log(response);
                    $("#bcrypt_outputdata").html(response);
                   
                 }
              });
            });

         });
         	
         
      </script>
	@stop
                <h2 class="text-center header-style br-bt"><a href="#" class="resource-link">Bcrypt Generator Form</a></h2>
                <div class="user-input-area">
                    	
                        <div class="form-group">
                            <textarea  id="bcrypt_palinText" cols="30" rows="5" class="form-control" placeholder="Input your string here"></textarea>
                        </div>
                </div>
                <div class="output-area mb-2">
                    <button href="" class="copybutton btn btn-info btn-sm" title="Click to copy" id="copy-button"><i class="fa fa-files-o fa-2x" aria-hidden="true"></i>
                    </button>
                    <br>
                    <div class="output mt-4">
                            <textarea id="bcrypt_outputdata" class="form-control" cols="30" rows="5" disabled="disabled" ></textarea>
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