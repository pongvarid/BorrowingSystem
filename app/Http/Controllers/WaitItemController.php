<?php

namespace App\Http\Controllers;

use App\BookItem;
use App\BookItemDetail;

use Illuminate\Http\Request;

class WaitItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BookItem::join('borrower', 'book_item.brw_id', '=', 'borrower.id')
            ->select('book_item.*', 'borrower.*')
            ->paginate(5);
        // $list = array("รอการพิจารณา", "อนุมัติ", "ไม่อนุมัติ");
        return view('Officer.waititem', ['data' => $data]);
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
    {
        $data = BookItemDetail::where('book_item_detail.bookitem_id', '=', $id)
            ->leftJoin('book_item', 'book_item_detail.bookitem_id', '=', 'book_item.id')
            ->leftJoin('item', 'book_item_detail.item_id', '=', 'item.id')
            ->select('book_item_detail.*', 'book_item.*', 'item.item_name')
            ->paginate(5);
        return view('Officer.waititemdetail', ['data' => $data]);
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
        $data = BookItem::where('id', '=', $id);
        $data->update([
            'bookitem_status' => $data->bookitem_status
        ]);
        if ($data) {
            return redirect('waititem')->with('success', ' Success!');
        } else {
            return redirect('waititem')->with('error', 'Error!');
        }
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
