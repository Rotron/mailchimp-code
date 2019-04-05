<!-- /resources/views/post/create.blade.php -->

<h1>Create Post</h1>


<form method="post" action="{{ route('post.store') }}">
    <div class="form-group">
        @csrf
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email"/>
    </div>
    <div class="form-group">
        <label for="code">Code :</label>
        <input type="text" class="form-control" name="code"/>
    </div>

    <button type="submit" class="btn btn-primary">Reedem</button>
</form>






@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->
