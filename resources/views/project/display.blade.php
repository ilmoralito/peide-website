@extends('layouts.master')

@section('content')
    <div class="columns">
        <div class="column is-three-quarters">
            <div class="content">
                <p class="title">{{ $project->name }}</p>
                <p class="subtitle">{{ $project->description }}</p>
                @if ($project->url)
                    <p>
                        <a href="{{ $project->url }}">{{ $project->url }}</a>
                    </p>
                @endif

                <p>{{ $project->body }}</p>
            </div>
        </div>

        <div class="column">
            @if (count($project->projectFaqs))
                <div class="content">
                    <p class="subtitle">Preguntas frecuentes</p>
                    
                    @foreach ($project->projectFaqs as $faq)
                        <div class="content">
                            <p class="subtitle">{{ $faq->question }}</p>
                    
                            <p>{{ $faq->answer }}</p>
                            <small>Ultima actualizacion: {{ $faq->updated_at->diffForHumans() }}</small>
                        </div>
                    @endforeach
                </div>

                @include('partials.faq')
            @else
                @include('partials.faq')
            @endif
        </div>
    </div>
@endsection
