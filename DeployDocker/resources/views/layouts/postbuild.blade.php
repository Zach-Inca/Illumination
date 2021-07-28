
    
        <img src="/storage/{{ $post->image }}" class="w-100" style="height:350px; width:250px;" alt="">

        <p> <b>Title:</b> {{ $post->title }} </p>

        <p> <b>Description:</b> {{ $post->caption }} </p>

        <p> <b>Servings:</b> {{ $post->servings }} </p>

        <p> <b>Cooking Time:</b> {{ $post->c_time }} minutes</p>

        <p> <b>Prep Time:</b> {{ $post->p_time }} minutes</p>

        <p> <b>Ingredients:</b> {{ $post->ingredients }} </p>

        <p> <b>Instructions:</b> {{ $post->instructions }} </p>

        <p> <b>Notes:</b> {{ $post->notes }} </p>
