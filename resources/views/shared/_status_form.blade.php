<form action="{{ route('statuses.store') }}" method="post">
  @include('shared._errors')
  @csrf
  <textarea name="content" id="content" rows="3" class="form-control" placeholder="Write something...">
  </textarea>
  <div class="text-right">
    <button type="submit" class="btn btn-primary mt-3">Publish</button>
  </div>
</form>