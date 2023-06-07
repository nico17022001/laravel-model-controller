<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies;

class PageController extends Controller
{
    public function index(){
        $title = 'Home';
        $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni facilis sunt pariatur, corporis dolorem voluptatem! Provident nobis, veniam, quos commodi eum porro earum ad tempore repellat, soluta quidem necessitatibus blanditiis eos suscipit doloribus ducimus? Officiis optio incidunt blanditiis provident! Hic, voluptates deserunt ipsa illo voluptatibus numquam assumenda dicta est iure esse possimus ipsum harum dolorem exercitationem, beatae magni ullam veritatis nihil corporis maxime. Vel in magni aspernatur quam, explicabo dolor libero aliquam quisquam quis esse, ratione voluptatem quasi sit soluta doloremque cupiditate corrupti voluptates quibusdam. Porro, sint laboriosam? Maiores, vero tenetur eum accusantium dolores quod, molestiae dicta itaque maxime voluptates ab beatae? Nesciunt numquam quos nisi et, eum nam nihil possimus voluptatibus incidunt error amet reiciendis, alias consequuntur minima velit perspiciatis optio sequi. Sequi repellendus ratione repudiandae ea nihil atque ipsam molestias. Natus cupiditate at et totam eius magni error suscipit incidunt veritatis tempora ipsam nulla amet eum nisi ea, facere sit voluptatem. Facilis facere dicta eligendi laborum, magni dolor suscipit repudiandae, esse ducimus iure expedita dolore. Eveniet, nulla? Vitae dicta corporis minus porro quasi fugit blanditiis possimus temporibus, accusamus praesentium, maxime non provident amet, suscipit et aut aperiam natus. Voluptates iusto laborum eius ex natus sit, voluptas eum rem!';
        return view('home', compact('title', 'text'));
    }

    public function films(){
        $title = 'Elenco Film';

        $films = Movies::orderBy('title')->get();

        return view('films', compact('films','title'));
    }

    public function detail($id){

        $film = Movies::find($id);

        return view('film-detail', compact('film'));
    }
}
