<?php

namespace App\Http\Controllers;

use App\Models\StudentsModel;

class StudentsController extends Controller {
    public function allSelect() {
        $result = StudentsModel::where('name', 'Raju')->value('roll');
        return $result;
    }
    public function demo() {
        $result = StudentsModel::where('id', '=', 2)->update(['name' => 'Sushma']);
        return $result;
    }
}
