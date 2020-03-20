@can('follow', $user)
  <div class="text-center mt-2 mb-4">
    @if (Auth::user()->isFollowing($user->id))
      <form action="{{ route('followers.destroy', $user) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger">Unfollow</button>
      </form>
    @else
      <form action="{{ route('followers.store', $user) }}" method="post">
        @csrf
        <button type="submit" class="btn btn-sm btn-primary">Follow</button>
      </form>
    @endif
  </div>
@endcan