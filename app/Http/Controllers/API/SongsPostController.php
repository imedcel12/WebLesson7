<?php
namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Songs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class SongsPostController extends Controller
{
    public $successStatus = 200;

    public function getAllPosts(Request $request) {
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null){
            $songs = Songs::all();

            return response()->json($songs, $this->successStatus);
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }
        
    }
    public function getPost(Request $request){
            $id = $request['pid']; // pid = post id 
            $token = $request['t']; // t = token
            $userid = $request['u']; // u = userid
    
            $user = User::where('id', $userid)->where('remember_token', $token)->first();
    
            if ($user != null){
                $songs = Songs::where('id', $id)->first();
    
                if ($songs != null){
                    return response()->json($songs, $this->successStatus);
                } else {
                    return response()->json(['response' => 'Post not found'], 404);
                }
            } else {
                return response()->json(['response' => 'Bad Call'], 501);
            }
    }
    public function searchPost(Request $request){
        $params = $request['p']; // p = params
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null){
            $songs = Songs::where('song_title', 'LIKE', '%' . $params . '%')
            ->orWhere('genre', 'LIKE', '%' . $params . '%')
            ->get();
// SELECT * FROM posts WHERE song_title LIKE '%params%' OR genre LIKE '%params%' 
            if ($songs != null){
                return response()->json($songs, $this->successStatus);
            } else {
                return response()->json(['response' => 'Post not found'], 404);
            }
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }
} 
}