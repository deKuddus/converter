@extends('layout')

@section('title', 'text-case-change')

@section('content')


<div class="col-md-8">
	@section('ajax')
      <script>
        $(document).ready(function(){
            $("#replace_string").click(function(){
                var given_string  = $("#given_string").val();
                var removal_string = $("#removal_string").val();
                var final_word = $("#final_word").val();
                $.ajax({
                   type:'GET',
                   url:'/text-find-and-replace',
                   data: {'_token': "{{ csrf_token() }}",'given_string': given_string,'removal_string': removal_string,'final_word': final_word},
                   success:function(response) {
                    console.log(response);
                     $("#changed_output").html(response);
                     
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
        <div class="form-group">
            <textarea id="removal_string" cols="30" rows="2" class="form-control" placeholder="write your word want to remove"></textarea>
        </div>
        <div class="form-group">
            <textarea id="final_word" cols="30" rows="2" class="form-control" placeholder="write your word want to replace"></textarea>
        </div>
    </div>
    <div class="output-area mb-2">
        <div class="form-group">
          <button id="replace_string" class="form-control mx-auto col-md-3 btn-info">
                 Replace 
          </button>
         </div>
        <button href="" class="copybutton btn btn-info btn-sm" title="Click to copy" id="copy-button">
            <i class="fa fa-files-o fa-2x" aria-hidden="true"></i>
        </button>
        <br>
        <div class="output mt-4">
             <textarea id="changed_output" class="form-control" cols="30" rows="5" disabled="disabled" ></textarea>
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