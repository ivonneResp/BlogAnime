@inject('markdown', 'Parsedown')
@php
    // TODO: There should be a better place for this.
    $markdown->setSafeMode(true);
@endphp

<div id="comment-{{ $comment->getKey() }}" class="media">
    <img class="img-thumbnail center-block" src="/img/usuarioanime.png" width="60" height="60">
    <div class="media-body">
        <h5 class="mt-0 mb-1">{{ $comment->commenter->name ?? $comment->guest_name }} <small class="text-muted">- {{ $comment->created_at->diffForHumans() }}</small></h5>
        <div style="white-space: pre-wrap;">{!! $markdown->line($comment->comment) !!}</div>

        <div>
        <form action="{{route('admin.comentarios.delete', $comment->id)}}" method="POST">
        {{csrf_field() }}
        @method('DELETE')
        <button class="btn btn-danger float-right"  style="margin-left: 10px" style='width:80px; height:15px padding-top =2px'> <font size=2>Eliminar</font></button>
        </form>
        <button type="button" style="margin-left: 10px" class="btn btn-warning float-right " data-toggle="modal" data-target="#modal-update-comment-{{$comment->id}}">
                            <font size=2>Editar </font>
                            </button>
        </tr>
        </div>
        <br>

        

        <br />{{-- Margin bottom --}}

        <?php
            if (!isset($indentationLevel)) {
                $indentationLevel = 1;
            } else {
                $indentationLevel++;
            }
        ?>

        {{-- Recursion for children --}}
        @if($grouped_comments->has($comment->getKey()) && $indentationLevel <= $maxIndentationLevel)
            {{-- TODO: Don't repeat code. Extract to a new file and include it. --}}
            @foreach($grouped_comments[$comment->getKey()] as $child)
                @include('comments::_commentedit', [
                    'comment' => $child,
                    'grouped_comments' => $grouped_comments
                ])
            @endforeach
        @endif

    </div>
</div>
<br>

{{-- Recursion for children --}}
@if($grouped_comments->has($comment->getKey()) && $indentationLevel > $maxIndentationLevel)
    {{-- TODO: Don't repeat code. Extract to a new file and include it. --}}
    @foreach($grouped_comments[$comment->getKey()] as $child)
        @include('comments::_comment', [
            'comment' => $child,
            'grouped_comments' => $grouped_comments
        ])
    @endforeach
@endif