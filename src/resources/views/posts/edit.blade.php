@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/post" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <h1>Update Recipe</h1>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title:</label>


                    <input id="title" placeholder="Enter the title of the recipe" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required autocomplete="title" autofocus>

                    @error('title')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Description:</label>


                    <input id="caption" placeholder="A little about your recipe" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                    @error('caption')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>        

        <div class="row">
            <div class="col-8">
                <div class="form-group row">
                    <label for="ingredients" class="col-md-4 col-form-label">Ingredients:</label>


                    <input id="ingredients" placeholder="List the ingredients and their quantities" name="ingredients" type="text" class="form-control @error('ingredients') is-invalid @enderror" value="{{ old('ingredients') }}" required autocomplete="ingredients" autofocus>

                    @error('ingredients')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group row">
                    <label for="servings" class="col-md-4 col-form-label">Servings:</label>


                    <input id="servings" placeholder="Enter the number of servings" name="servings" type="number" class="form-control @error('servings') is-invalid @enderror" value="{{ old('servings') }}" required autocomplete="servings" autofocus>

                    @error('servings')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-8">
                <div class="form-group row">
                    <label for="c_time" class="col-md-4 col-form-label">Cooking time:</label>


                    <input id="c_time" placeholder="Enter cooking time in minutes" name="c_time" type="number" class="form-control @error('c_time') is-invalid @enderror" value="{{ old('c_time') }}" required autocomplete="c_time" autofocus>

                    @error('c_time')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group row">
                    <label for="p_time" class="col-md-4 col-form-label">Prep time:</label>


                    <input id="p_time" placeholder="Enter preparation time in minutes" name="p_time" type="number" class="form-control @error('p_time') is-invalid @enderror" value="{{ old('p_time') }}" required autocomplete="p_time" autofocus>

                    @error('p_time')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group row">
                    <label for="instructions" class="col-md-4 col-form-label">Instructions:</label>


                    <input id="instructions" placeholder="Add tips and details" name="instructions" type="text" class="form-control @error('instructions') is-invalid @enderror" value="{{ old('instructions') }}" required autocomplete="instructions" autofocus>

                    @error('instructions')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group row">
                    <label for="notes" class="col-md-4 col-form-label">Notes:</label>


                    <input id="notes" placeholder="Add tips and details" name="notes" type="text" class="form-control @error('notes') is-invalid @enderror" value="{{ old('notes') }}" required autocomplete="notes" autofocus>

                    @error('notes')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <label for="image" class="col-md-4 col-form-label">Add Photo</label>

            <input type="file" class="form-control-file" id="image" name="image">

            @error('image')
            <strong>{{ $message }}</strong>
            @enderror
        </div>

        <div class="row pt-4">
            <button class="btn btn-primary">Add New Recipe</button>
        </div>
    </form>
</div>
@endsection