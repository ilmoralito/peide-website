<table class="table">
    <caption>Preguntas comunes</caption>
    <tbody>
        @foreach ($faqs as $faq)
            <tr>
                <td>
                    <p class="field">{{ $faq->question }}</p>
                    <p>{!! $faq->answer !!}</p>
                    <small>Actualizado hace: {{ $faq->updated_at->diffForHumans() }}</small>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
