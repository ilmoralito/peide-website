@if ($message = session('message'))
    <br>
    <article class="message">
        <div class="message-body">{{ $message }}</div>
    </article>
@endif
