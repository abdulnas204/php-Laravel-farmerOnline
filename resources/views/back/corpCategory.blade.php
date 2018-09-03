@extends('layouts.back_layout') 
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Corp Category</li>
		</ol>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Corp Category</h1>
		</div>
	</div>
    <!--/.row-->
    <div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Add Corp Category
                </div>
				<div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/add-corp-category">
                            {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group{{ $errors->has('corpname') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Corp Name</label>

                                <div class="col-md-6">
                                    <input id="corpname" type="text" class="form-control" name="corpname" required>

                                    @if ($errors->has('corpname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('corpname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div> 
                        </fieldset>
                    </form>
				</div>
			</div>
		</div>
	</div>
	<!--/.row-->
    <div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					List Corp Category
                </div>
				<div class="panel-body">
				
				</div>
			</div>
		</div>
	</div>
	<!--/.row-->
    
@endsection