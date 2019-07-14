@extends('layout')

@section('title', 'remove-space-from-text')

@section('content')


<div class="col-md-8">
	@section('ajax')
      <script>
        $(document).ready(function(){

            $("#remove_all_space").click(function(){
                var given_string  = $("#given_string").val();
                $.ajax({
                   type:'GET',
                   url:'/remove-all-space-from-string',
                   data: {'_token': "{{ csrf_token() }}",'given_string': given_string},
                   success:function(response) {
                    console.log(response);
                     $("#final_output").html(response);
                     
                   }
                });
            });

            $("#remove_extra_string").click(function(){
                var given_string  = $("#given_string").val();
                $.ajax({
                   type:'GET',
                   url:'/remove-all-extra-space-from-string',
                   data: {'_token': "{{ csrf_token() }}",'given_string': given_string},
                   success:function(response) {
                    console.log(response);
                     $("#final_output").html(response);
                     
                   }
                });
            });


        });
        
      </script>
	@stop
    <h2 class="text-center header-style br-bt"><a href="#" class="resource-link">Text Replace</a></h2>
    <div class="user-input-area">
        <div class="form-group">
            <textarea id="given_string" cols="30" rows="5" class="form-control" placeholder="write your  text here"></textarea>
        </div>
    </div>
    <div class="output-area mb-2">
        <div class="form-group">
          <button id="remove_all_space" style="margin-right: 5px;" class="btn-info">
                 Remove All Space 
          </button>
          <button id="remove_extra_string" style="margin-right: 5px;" class="btn-info">
                 Remove Extra Space 
          </button>
         </div>
        <button href="" class="copybutton btn btn-info btn-sm" title="Click to copy" id="copy-button">
            <i class="fa fa-files-o fa-2x" aria-hidden="true"></i>
        </button>
        <br>
        <div class="output mt-4">
             <textarea id="final_output" class="form-control" cols="30" rows="5" disabled="disabled" ></textarea>
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