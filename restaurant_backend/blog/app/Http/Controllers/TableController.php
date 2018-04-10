<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabel;
use App\Resrvation;
use App\Menu;
use App\Categorie;
use Illuminate\Support\Facades\DB;
class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $this->authorize('user');
        $resvation=new Resrvation();
        $resvation->DeletReservExp();
        $table=new Tabel();
        $tableResrve=$table->tableresrve();
        $tableNonRes=$table->tableNoResrve();
        return view('tables.index')->with(['tablesRes'=>$tableResrve,'tablesNonRes'=>$tableNonRes]);
    }
    public function indexAdmin()
    {   
        $this->authorize('admin');
        $table=new Tabel();
        $tables=$table->all();
        return view('tables.indexAdmin')->with('tables',$tables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        $menus=Menu::pluck('name')->all();
        //dd($menus);
        $Categories=Categorie::pluck('name')->all();
        $this->authorize('admin');
        return view('tables.create')->with(['menus'=>$menus,'categories'=>$Categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin');
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'Nombrechaire'=> 'required|numeric|min:4|max:6',
            'menu_id'=>'required',
            'picture'=>'required',
            'categories_id'=>'required'
        ]);
        $table=Tabel::create($request->except(['_method','_token']));
        return redirect()->route('table.indexAdmin')->with('success','Table creat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('admin');
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'numbershaire'=> 'required|numeric|min:4|max:6',
            'menu_id'=>'required',
            'picture'=>'required',
            'categorie_id'=>'required'
        ]);
     $table=Table::whereId($id)->update($request->except(['_method','_token']));
     return redirect()->route('admin.index')->with('success','User update');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('admin');
        $Table=Tabel::findOrFail($id);
        $menus=Menu::pluck('name')->all();
        $Categories=Categorie::pluck('name')->all();
        return view('tables.Edite')->with(['table'=>$Table,'menus'=>$menus,'categories'=>$Categories]);
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
        $this->authorize('admin');
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'Nombrechaire'=> 'required|numeric|min:4|max:6',
            'menu_id'=>'required',
            'picture'=>'required',
            'categories_id'=>'required'
        ]);
     $table=Tabel::whereId($id)->update($request->except(['_method','_token']));
     return redirect()->route('table.indexAdmin')->with('success','Table update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        $table=Table::find($id);
        $table->delete();
        return redirect()->route('Table.indexAdmin')->with('success','Table is delete');
    }
   
}
