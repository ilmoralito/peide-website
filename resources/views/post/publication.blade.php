@extends('layouts.master')

@section('stylesheets')
    <style>
        .resp-sharing-button__link,
        .resp-sharing-button__icon {
            display: inline-block
        }

        .resp-sharing-button__link {
            text-decoration: none;
            color: #fff;
            margin: 0.5em
        }

        .resp-sharing-button {
            border-radius: 5px;
            transition: 25ms ease-out;
            padding: 0.5em 0.75em;
            font-family: Helvetica Neue,Helvetica,Arial,sans-serif
        }

        .resp-sharing-button__icon svg {
            width: 1em;
            height: 1em;
            margin-right: 0.4em;
            vertical-align: top
        }

        .resp-sharing-button--small svg {
            margin: 0;
            vertical-align: middle
        }

        /* Non solid icons get a stroke */
        .resp-sharing-button__icon {
            stroke: #fff;
            fill: none
        }

        /* Solid icons get a fill */
        .resp-sharing-button__icon--solid,
        .resp-sharing-button__icon--solidcircle {
            fill: #fff;
            stroke: none
        }

        .resp-sharing-button--twitter {
            background-color: #55acee
        }

        .resp-sharing-button--twitter:hover {
            background-color: #2795e9
        }

        .resp-sharing-button--pinterest {
            background-color: #bd081c
        }

        .resp-sharing-button--pinterest:hover {
            background-color: #8c0615
        }

        .resp-sharing-button--facebook {
            background-color: #3b5998
        }

        .resp-sharing-button--facebook:hover {
            background-color: #2d4373
        }

        .resp-sharing-button--tumblr {
            background-color: #35465C
        }

        .resp-sharing-button--tumblr:hover {
            background-color: #222d3c
        }

        .resp-sharing-button--reddit {
            background-color: #5f99cf
        }

        .resp-sharing-button--reddit:hover {
            background-color: #3a80c1
        }

        .resp-sharing-button--google {
            background-color: #dd4b39
        }

        .resp-sharing-button--google:hover {
            background-color: #c23321
        }

        .resp-sharing-button--linkedin {
            background-color: #0077b5
        }

        .resp-sharing-button--linkedin:hover {
            background-color: #046293
        }

        .resp-sharing-button--email {
            background-color: #777
        }

        .resp-sharing-button--email:hover {
            background-color: #5e5e5e
        }

        .resp-sharing-button--xing {
            background-color: #1a7576
        }

        .resp-sharing-button--xing:hover {
            background-color: #114c4c
        }

        .resp-sharing-button--whatsapp {
            background-color: #25D366
        }

        .resp-sharing-button--whatsapp:hover {
            background-color: #1da851
        }

        .resp-sharing-button--hackernews {
        background-color: #FF6600
        }
        .resp-sharing-button--hackernews:hover, .resp-sharing-button--hackernews:focus {   background-color: #FB6200 }

        .resp-sharing-button--vk {
            background-color: #507299
        }

        .resp-sharing-button--vk:hover {
            background-color: #43648c
        }

        .resp-sharing-button--facebook {
            background-color: #3b5998;
            border-color: #3b5998;
        }

        .resp-sharing-button--facebook:hover,
        .resp-sharing-button--facebook:active {
            background-color: #2d4373;
            border-color: #2d4373;
        }

        .resp-sharing-button--email {
            background-color: #777777;
            border-color: #777777;
        }

        .resp-sharing-button--email:hover,
        .resp-sharing-button--email:active {
            background-color: #5e5e5e;
            border-color: #5e5e5e;
        }

        .resp-sharing-button--whatsapp {
            background-color: #25D366;
            border-color: #25D366;
        }

        .resp-sharing-button--whatsapp:hover,
        .resp-sharing-button--whatsapp:active {
            background-color: #1DA851;
            border-color: #1DA851;
        }

        nav.unslider-nav {
            background: rgba(0, 0, 0, 0.5);
        }

    </style>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        // Toggle modal
        $('#sharingButton').on('click', function() {
            $('.modal').addClass('is-active');
        });

        $('.modal-background, .modal-close').on('click', function() {
            $('.modal').removeClass('is-active');
            $('#help').html('');
        });

        // clipboard
        $('#button').on('click', function(event) {
            event.preventDefault();

            let succeeded;
            let help = $('#help');

            $('#url').select();

            try {
                succeeded = document.execCommand('copy');
            } catch(e) {
                succeeded = false;
            }

            if (succeeded) {
                help.html('Copiado');
            } else {
                help.html('A ocurrido un error al intentar copiar');
            }
        });
    </script>
@endsection

@section('content')
    <div class="columns">
        <div class="column is-three-quarters">
            <p class="title">{{ $post->title }}</p>
            <p class="subtitle">Publicado por <a href="/publications/users/{{ $post->user->name }}">{{ $post->user->name }}</a> hace {{ $post->created_at->diffForHumans() }}</p>
            <p>
                @foreach ($post->tags as $tag)
                    <a href="/publications/tags/{{ $tag->name }}"># {{ $tag->name }}</a>
                @endforeach
            </p>

            <p>{!! $post->body !!}</p>
        </div>

        <div class="column">
            @include('partials.share', [
                'name' => $post->title,
                'type' => 'articulo'
            ])

            @include('post.archives')

            @include('partials.tags')
        </div>
    </div>
@endsection
