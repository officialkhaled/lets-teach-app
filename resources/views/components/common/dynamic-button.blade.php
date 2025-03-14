<button class="btn btn-{{ $color ?? 'success' }} btn-sm" type="{{ $type ?? 'submit' }}"
        id="{{ $id ?? '' }}" onclick="{{ $onClick ?? '' }}">
    &nbsp;<i class="fa fa-{{ $icon ?? 'save' }} opacity-75"></i>&nbsp;&nbsp;{{ $name }}&nbsp;
</button>

<button class="btn btn-warning btn-sm" type="button" onclick="pageRefresh()">
    &nbsp;<i class="fa fa-refresh opacity-75"></i>&nbsp;&nbsp;Refresh&nbsp;
</button>
