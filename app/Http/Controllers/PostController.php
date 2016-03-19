<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct(){
        //middleware qui permettent ou non l'acces a certaine page auth qui signifie qu'il faut etre authentifier
        // et edit qui permet d'editer et de supprimer un article a condition qu'on soit l'auteur de celui-ci ou alors un admin

        $this->middleware('auth', ['except'=>['index', 'show']]);
        //$this->middleware('edit', ['only'=>['edit','destroy' ]]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index est une toute predefinite lors de la création du controller avec l'opption --resource
        //on crée la variable $posts qui recupere tout les postes

        $posts = Post::all();

        //on return la vue article.index avec l'argument posts

        return view('articles.index')->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //on recupere le nom et l'id de l'user qu'on envoie dans la page create

        $users = User::all()->lists('name','id');
        return view('articles.create')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ValidatePostRequest $request)
    {
        //store est la fonction qui permet d'envoyer les infos du formulaire dans la bdd

        $post = new Post;

        //par exemple: $post->user_id = Auth::user()->id; on a un champ dans la page create qui recupere l'id de l'user qui creer le post
        //et donc on recupere cet id pour le mettre dans la bdd
        $post->user_id = Auth::user()->id;
        //$request c'est l'argument qui contient tout les champs du form
        $post->title = $request->title;
        $post->description = $request->description;
        //on sauvegarde dans la bdd
        $post->save();
        //et on envoie vers l'article creer
        return redirect()->route('articles.show', $post->id)
        ->with(compact('post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);

        try{
            $posts = Post::findOrFail($id);
            $comments = $posts->comments;
            return view('articles.show')->with(compact('posts', 'comments'));
        }catch(\Exception $e){
            return redirect()->route('articles.index')->with((['erreur' => 'Erreur biatch']));
        };

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $users = User::all()->lists('name','id');
        return view('articles.edit')->with(compact('post', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //pareil que pour le store sauf que la on fait un update des donnees presentes dans la bdd
        //find id sert a trouver l'id de l'article

        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;

        //update sert a update
        $post->update();
        //redirection
        return redirect()->route('articles.show',$post->$id)->with(compact('posts'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        //$comment = $post->comments;
        //dd($comment);
        //$comment->delete();
        $post->delete();
        return redirect()->route('articles.index');
        
    }
}
