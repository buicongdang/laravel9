<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $photos = DB::select('select * from photos');
        dd($photos);
        return view('abtesting');
    }

    /**
     *
     */
    function create()
    {
        foreach ()
        DB::insert('insert into photos(`name`, `url`, `meta`) values()')
        echo 'create';
        die;
    }

    /**
     * @param $id
     */
    function show($id)
    {
        echo $id;
        die;
    }

    /**
     * @param $id
     */
    function edit($id)
    {
        echo 'edit'.$id;
        die;
    }

}
