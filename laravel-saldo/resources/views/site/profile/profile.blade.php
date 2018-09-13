@extends('site.layouts.app')

@section('title', 'Minha Conta')

@section('content')
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">

		    @include('admin.includes.alert')   <!--mensagens-->
			
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Atualizar <small>Perfil</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form action="{{route('profile.update')}}" method="POST" role="form" enctype="multipart/form-data">
                            {!! csrf_field() !!} <!--utilizado quando requisiçao é post-->
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                            <input value="{{auth()->user()->name}}" type="text" name="name" id="name" class="form-control input-sm" placeholder="Seu Nome">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input value="{{auth()->user()->email}}" type="email" name="email" id="email" class="form-control input-sm" placeholder="Seu Email">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input value="" type="password" name="password" id="password" class="form-control input-sm" placeholder="Seu Password">
			    			</div>

			    			<div class="form-group">
								@if( auth()->user()->image != null )
									<img src="{{ url('storage/users/'. auth()->user()->image) }}" alt="{{ auth()->user()->name }}" style="max-width: 50px;">
                                @endif
								<input value="" type="file" class="form-control-file" name="image">
                            </div>
                            <button type="submit" name="" id="" class="btn btn-info btn-block">Atualizar</button>
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

    
@endsection