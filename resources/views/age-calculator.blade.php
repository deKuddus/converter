@extends('layout')

@section('title', 'age calculator')

@section('content')


<div class="col-md-8">
	@section('ajax')
      <script>
        $(document).ready(function(){
            $("#get_age").click(function(){
                var dob  = $("#dob").val();
                $.ajax({
                   type:'GET',
                   url:'/calculate-age',
                   data: {'_token': "{{ csrf_token() }}",'dob': dob},
                   success:function(response) {
                    console.log(response);
                     $("#calculated_age").html(response);
                     
                   }
                });
            });
        });
        
      </script>
	@stop
                <h2 class="text-center header-style br-bt"><a href="#" class="resource-link">Age Calculator</a></h2>
                <div class="user-input-area">	
                <div class="form-group">
                    <input type="date" id="dob" class="form-control">
                </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control mx-auto col-md-3 btn-info" id="get_age">
                         Show Age
                  </button>
                 </div>
                <div class="output-area mb-2">
                    <button href="" class="copybutton btn btn-info btn-sm" title="Click to copy" id="copy-button"><i class="fa fa-files-o fa-2x" aria-hidden="true"></i>
                    </button>
                    <br>
                    <div class="output mt-4">
                            <textarea id="calculated_age" class="form-control" cols="30" rows="5" disabled="disabled" ></textarea>
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