<?php

namespace App\Http\Controllers;

use App\Models\Keyword;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Promo;
use App\Models\Bookmark;

class PostController extends Controller
{
    public function index(Request $request) {

        // $posts = Post::latest();
        // dd(request('search'));

        $title = ' in Search';

        if(request('author')){
            $author = User::firstWhere('id', request('author'));
            $title = ' in ' . $author->name;
        }
        
        //$date = $request->input('date');
        $promoSlug = $request->input('promo');
        $search = $request->input('search');    
        // Query awal untuk post
        $postQuery = Post::query();

        // Filter pencarian
        $search = $request->input('search');
        if ($search) {
            $postQuery->where('title', 'like', '%' . $search . '%');
        }

        // Filter berdasarkan jenis promo
        if ($promoSlug) {
            $promo = Promo::where('slug', $promoSlug)->firstOrFail();
            $postQuery->where('promo_id', $promo->id);
            // $title = ' in ' . ' Jenis Promo ';
        }

        // Filter berdasarkan satuan promo
        $unit = $request->input('unit');
        if ($unit) {
            $postQuery->where('satuan_promo', $unit);
        }

        // Filter nilai promo terendah
        $minValue = $request->input('min_value');
        if ($minValue) {
            $postQuery->where('nilai_promo', '>=', $minValue);
        }

        // Filter nilai promo tertinggi
        $maxValue = $request->input('max_value');
        if ($maxValue) {
            $postQuery->where('nilai_promo', '<=', $maxValue);
        }
        
        // Filter harga promo terendah
        $minPrice = $request->input('min_price');
        if ($minPrice) {
            $postQuery->where('promo_price', '>=', $minPrice);
        } 
        // Filter harga promo tertinggi
        $maxPrice = $request->input('max_price');
        if ($maxPrice) {
            $postQuery->where('promo_price', '<=', $maxPrice);
        }

        // Filter urutan berdasarkan nama asc dan desc, post terbaru dan terlama, harga tertinggi dan terendah.
        $sort = $request->input('sort');
        if ($sort == 'name_asc') {
            $postQuery->orderBy('title', 'asc');
        } elseif ($sort == 'name_desc') {
            $postQuery->orderBy('title', 'desc');
        } elseif ($sort == 'latest') {
            $postQuery->latest();
        } elseif ($sort == 'oldest') {
            $postQuery->oldest();
        } elseif ($sort == 'highest') {
            $postQuery->orderBy('promo_price', 'desc');
        } elseif ($sort == 'lowest') {
            $postQuery->orderBy('promo_price', 'asc');
        }

        // Filter keyword
        $keyword = $request->input('keyword');
        if ($keyword) {
            $postQuery->where('key_one', 'like', "%$keyword%");
        } elseif ($keyword) {
            $postQuery->where('key_two', 'like', "%$keyword%");
        } elseif ($keyword) {
            $postQuery->where('key_three', 'like', "%$keyword%");
        } elseif ($keyword) {
            $postQuery->where('key_four', 'like', "%$keyword%");
        } elseif ($keyword) {
            $postQuery->where('key_five', 'like', "%$keyword%");
        }

        // Filter start from
        $startFrom = $request->input('start_from');
        if ($startFrom) {
            $postQuery->whereDate('new_at', '>=', $startFrom);
        }

        // Filter end on
        $endOn = $request->input('end_on');
        if ($endOn) {
            $postQuery->whereDate('expired_at', '<=', $endOn);
        }


        // Ambil data post setelah filtering
        $posts = $postQuery->paginate(6)->withQueryString();

        // Ambil semua data promosi untuk dropdown filter
        $promos = Promo::all();

        return view('offer', [
            'title' => "All Posts" . $title,
            'active' => "Offer",
            'post' => $posts,
            'promos' => $promos,
            // "post" => Post::latest()->search(request(['search', 'author']))
            //        ->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('detail', [
            "title" => "Detail Post",
            "post" => $post
        ]);
    }

    public function homeindex() {
        return view('home', [
            "title" => "All Penawaran",
            "active" => "home",
            "promos" => Promo::all(),
            // "post" => Post::all()
            "post" => Post::latest()->search(request(['search', 'promo', 'author', 'key_one', 'key_two', 'key_three', 'key_four', 'key_five']))
                   ->paginate(8)->withQueryString()
            // "post" => Post::latest()->paginate(8)
        ]);
    }

    public function compare(Request $request)
    {
        $post1 = Post::findOrFail($request->input('post1'));
        $post2 = Post::findOrFail($request->input('post2'));

        return view('compare.index', [
            'title' => "Compare",
            'post1' => $post1,
            'post2' => $post2,
        ]);
    }

    public function filter(Request $request)
    {
        $query = Post::query();
        //$title = ' in ';
        // if(request('promo')){
        //     $promo = Promo::firstWhere('slug', request('promo'));
        //     $title = ' in ' . $promo->jenis;
        // }

        if (request('promo')) {
            // $query->where('jenis_promo', $request->jenis_promo);
            $query = Promo::firstWhere('slug', request('promo'));
            
        }

        // if ($request->filled('tanggal_post')) {
        //     $query->whereDate('tanggal_post', $request->tanggal_post);
        // }

        // if ($request->filled('sort')) {
        //     if ($request->sort == 'harga-tertinggi') {
        //         $query->orderBy('harga', 'desc');
        //     } elseif ($request->sort == 'harga-terendah') {
        //         $query->orderBy('harga', 'asc');
        //     }
        // }

        //dd($query->get());
        $posts = $query->get();
        

        // return view('filter', compact('posts'));

        return view('filter', [
            'title' => "filter",
            'posts' => $posts
        ]);
    }

}
