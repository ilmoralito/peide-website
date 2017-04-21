<div class="is-clearfix">
    <div class="block is-pulled-right">
        <a href="/admin/projects/{{ $project->id }}/edit" class="button">Editar</a>
        <form action="/admin/projects/delete" method="POST" class="is-pulled-right" style="margin-left: 5px;">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <input type="hidden" name="id" value="{{ $project->id }}">

            <button type="submit" class="button is-danger">Eliminar</button>
        </form>
    </div>
</div>
