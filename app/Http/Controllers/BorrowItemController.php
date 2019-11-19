<?php

namespace App\Http\Controllers;

use App\BorrowItem;
use Illuminate\Http\Request;

class BorrowItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = '1';
        $data = BorrowItem::where('brw_id', '=', $id)
            ->join('borrower', 'borrow_item.brw_id', '=', 'borrower.id')
            ->select('borrow_item.*',  'borrower.brw_prefix', 'borrower.brw_firstname', 'borrower.brw_lastname')
            ->paginate(5);

        foreach ($data as $datas) {
            if ($datas->borrowitem_status == 1) {
                $datas->stetus = 'อนุมัติ';
            }
            if ($datas->borrowitem_status == 2) {
                $datas->stetus = 'รับของ';
            }
            if ($datas->borrowitem_status == 3) {
                $datas->stetus = 'คืนแล้ว';
            }
        }
        return view('Borrower.borrowlist', ['data' => $data]);
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
        $data = BorrowItem::where('borrow_item.id', '=', $id)
            ->join('book_item', 'borrow_item.bookitem_id', '=', 'book_item.id')
            ->join('book_item_detail', 'book_item_detail.bookitem_id', '=', 'book_item.id')
            ->join('item', 'book_item_detail.item_id', '=', 'item.id')
            ->select('borrow_item.*', 'book_item.*','book_item_detail.*','item.item_name')
            ->paginate(5);
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
