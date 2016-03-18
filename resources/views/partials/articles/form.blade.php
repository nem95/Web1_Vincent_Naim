{{--Page de formulaire pour les articles, avec un if qui permet de savoir si on est sur la page de création de l'article ou de modification--}}
    @if($action == 'edit')
        {!! Form::model($post, array('route' => ['articles.update',$post->id], 'method' => 'PUT')) !!}
        {{--{!! Form::select('user_id',$users, $post->user_id, ['class' => 'form-control']) !!}--}}
    @else
        {!! Form::open(array('route' => 'articles.store', 'method' => 'POST')) !!}
        {{--{!! Form::select('user_id',$users, null, ['class' => 'form-control']) !!}--}}
   @endif

   {{csrf_field()}}


    {!! Form::label('name_du_champs', 'titre') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    <div class="form-group">
        {!! Form::textarea('description', null ,['class'=>'form-control', 'maClasse', 'placeholder'=>'', 'Mon champs']) !!}
    </div>
    {!! Form::submit('Envoyer', ['class'=>'btn btn-block']) !!}

    {!! Form::close() !!}
