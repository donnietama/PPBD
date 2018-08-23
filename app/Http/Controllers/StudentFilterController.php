<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class StudentFilterController extends Controller
{
    // Saring data user yang baru mendaftar dengan pendaftar sebelumnya.
    public function index()
    {
        $rawQuery = 'select
                        name,
                        math,
                        science,
                        bahasa,
                        english,
                        @currentRANK := @currentRANK + 1 AS rank
                    from
                        student_files n, users u, (select @currentRANK := 0) r
                    where n.user_id = u.id
                    order by case when
                        math > science
                        and math > bahasa then math
                        when science > bahasa and science > english then science
                        when bahasa > english then bahasa
                        else english end desc';

        $filteredResult = DB::select($rawQuery);
        return $filteredResult;
    }
}
