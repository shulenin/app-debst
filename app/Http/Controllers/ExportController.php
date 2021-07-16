<?php

namespace App\Http\Controllers;

use App\Exports\PostsExport;
use App\Models\Post;
use Barryvdh\DomPDF\Facade;
use Maatwebsite\Excel\Facades\Excel;

/**
 * Class ExportController
 * @package App\Http\Controllers
 */
class ExportController extends Controller
{
    /**
     * @return mixed
     */
    public function excel()
    {
        return Excel::download(new PostsExport(), 'debts.xlsx');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function pdf($id)
    {
        $post = Post::find($id);

        $pdf = Facade::loadView('export.pdf', compact('post'));

        return $pdf->download('debts.pdf');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function streamPDF($id)
    {
        $post = Post::find($id);

        $pdf = Facade::loadView('export.pdf', compact('post'));

        return $pdf->stream('debts.pdf');
    }


}
