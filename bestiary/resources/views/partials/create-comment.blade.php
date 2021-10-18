<form method="POST" action="{{route('comments.store') }}" class="border border-blue-200 rounded-lg">
    {{csrf_field()}}
    <header> Want to leave a comment? </header>

    <div class="m-8">
        <textarea name="body" class="w-full focus:outline-none focus:ring rounded-lg" cols="50" rows="3" placeholder="Comment"></textarea>
    </div>

    <div>
        <button
            type="submit"
            value="submit"
            class="btn btn-sm btn-fill btn-primary">Post</button>
    </div>
</form>
