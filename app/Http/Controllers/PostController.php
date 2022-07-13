<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; //usando post

class PostController extends Controller
{
    public function create(Request $request){
    
     ////metodo 1   
     /*   $new_post =[
            'title'=>'meu primeiro post',
            'content'=>'conteudo',
            'author'=>'wendel'
        ];
        $post = new Post($new_post); //instanciando models post
        */

        $post=new post();
        $post->title ='reserva';
        $post->content =' meu conteudo';
        $post->author ='wendel';
        $post->email ='wendel.1@hotmail.com';
        $post->senha ='123456789';
        $post->save();

        dd($post);

    }
    //-----------------------------------------------------
    public function read(Request $r){
        $post = new Post();

        $posts = $post->all();//find (1) onde o id for 1  //where onde o id seja = a tal

        dd($posts);


    }
    public function all(Request $r){
        $posts =Post::all();// method static e a mesma coisa do de cima
        return $posts;
    }
    //-----------------------------------------------------
    public function update(Request $request){

    //1 $post = Post::find(1);//quero pegar dado com id 1
    //1 $post->title = 'meu post atualizado5';
    //1 $post->save();
    //1 return $posts;


    $posts = Post::where('id','>',2)->update([ //atualiva varias informaçoes do banco
        'author'=>'desconhecido', 
        'title'=>'novo titulo'

    ]);// atualiza onde o id dor maio q 0
        return $posts;
    }

    public function delete(Request $request){
       
        $post=Post::find(3);

        if($post){
         return $post->delete();
            
        }
        return 'não existe poste com esse id';
    }

}
