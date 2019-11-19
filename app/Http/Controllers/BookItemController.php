<?php

namespace App\Http\Controllers;

use App\BookItem;
use App\BookItemDetail;
use Illuminate\Http\Request;

class BookItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = 1;
        // $sort = $request->sort;
        // $view = $request->view;
        // $search = $request->search; 
        // sort: ["company_name", "asc"],
        // search: ["", "company_name"],
        // page: 1,
        // view: 5,
        $sort[0] = 'book_item.created_at';
        $sort[1] = 'desc';
        $view = '2';
        $search[0] = '';
        $search[1] = 'borrower.brw_firstname]';

        $data = BookItem::where('brw_id', '=', $id)
            ->leftJoin('borrower', 'book_item.brw_id', '=', 'borrower.id')
            ->select('book_item.*',  'borrower.brw_prefix', 'borrower.brw_firstname', 'borrower.brw_lastname')
            // ->paginate(5);
            ->orderBy($sort[0], $sort[1]);
        if ($search[0] != "") {
            $data = $data->where($search[1], 'like', '%' . $search[0] . '%')->paginate($view);
        } else {
            $data = $data->paginate($view);
        }
        foreach ($data as $datas) {
            if ($datas->bookitem_status == 0) {
                $datas->stetus = 'รอการพิจารณา';
            }
            if ($datas->bookitem_status == 1) {
                $datas->stetus = 'อนุมัติ';
            }
            if ($datas->bookitem_status == 2) {
                $datas->stetus = 'ไม่อนุมัติ';
            }
        }


        // return $data;
        return view('Borrower.booklist', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   // $id = '1';
        $data = BookItemDetail::where('bookitem_id', '=', $id)
            ->leftJoin('item', 'book_item_detail.bookitem_id', '=', 'item.id')
            ->select('item.item_name', 'book_item_detail.*')
            // ->get();
            ->paginate(5);
        // return $data;
        return view('Borrower.bookitemdetail', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
