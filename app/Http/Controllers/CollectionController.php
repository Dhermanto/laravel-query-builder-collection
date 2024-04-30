<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollectionController extends Controller
{
    public function index() {
        // $admin = DB::table('admins')->paginate(2);
        // return view('collection.index', compact('admin'));

        // $array = [1, 2, 3, 4, 5];
        // $arraySec = [1, 2, 3, 4, 5, 6];
        // $collection = collect($array);

        // dd(" Hasilnya  ",  $collection->all() == $arraySec);

        // $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        // $collection = collect($array);
        // // 1. for
        // for ($i=0; $i < $collection->count(); $i++) {
        //     echo $collection[$i] . "<br>";
        // }

        // 2. foreach
        // $list = [
        //     [
        //         'name' => 'John Doe',
        //         'age' => 30,
        //     ],
        //     [
        //         'name' => 'Jane Doe',
        //         'age' => 25,
        //     ],
        //     [
        //         'name' => 'Johnny Doe',
        //         'age' => 20,
        //     ],
        // ];
        // $collectionList = collect($list);
        // foreach ($collectionList as $key => $value) {
        //     echo $value['name'] . "<br>";
        // }

        // 3. while
        // $i = 0;
        // while ($i < $collectionList->count()) {
        //     echo $collectionList[$i]['name'] . "<br>";
        //     $i++;
        // }

        // $pluckCollection = [
        //     [
        //         'id' => 1,
        //         'name' => 'John Doe',
        //         'age' => 30,
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'Jane Doe',
        //         'age' => 25,
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'Johnny Doe',
        //         'age' => 20,
        //     ],
        // ];

        // $pluck = collect($pluckCollection)->pluck('name', 'id')->all();
        // return view('collection.index', compact('pluck'));

        // map
        // $collection = collect([1, 2, 3, 4, 5]);
        // $map = $collection->map(function ($item, $key) {
        //     return $item * 2;
        // });

        // group by
        // $groupCollection = [
        //     [
        //         'id' => 1,
        //         'name' => 'John Doe',
        //         'age' => 30,
        //     ],
        //     [
        //         'id' => 1,
        //         'name' => 'Jane Doe',
        //         'age' => 25,
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'Johnny Doe',
        //         'age' => 20,
        //     ],
        // ];

        // $result = collect($groupCollection)->groupBy('id');

        // 1. first
        // $collection = collect([1, 2, 3, 4, 5]);
        // $first = $collection->first();
        // $first2 =$collection->first(function($value, $key) {
        //     return $value > 2;
        // });
        // 2. last
        // $collection = collect([1, 2, 3, 4, 5]);
        // $last = $collection->last();
        // $end = $collection->last(function($value, $key) {
        //     return $value < 4;
        // });

        // filter
        // 1. isEmpty
        // 2. isNotEmpty
        // 3. contains
        // $array = [1, 2, 3, 4, 5];
        // $collection = collect($array);

        // $isEmpty = $collection->isEmpty();
        // $isNotEmpty = $collection->isNotEmpty();
        // $contains = $collection->contains(0);
        // dd($isEmpty, $isNotEmpty, $contains);

        // sorting collection
        // 1. sort
        // 2. sortBy
        // 3. sortDesc
        // 4. sortByDesc
        // 5. reverse
        // $array = [5, 3, 1, 2, 4];
        // $arrayAssoc = [
        //     [
        //         'id' => 1,
        //         'name' => 'John Doe',
        //         'age' => 30,
        //     ],
        //     [
        //         'id' => 1,
        //         'name' => 'Jane Doe',
        //         'age' => 25,
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'Johnny Doe',
        //         'age' => 20,
        //     ],
        // ];
        // $collection = collect($array);
        // $sort = $collection->sort();
        // $sortBy = collect($arrayAssoc)->sortBy('age');
        // $sortDesc = $collection->sortDesc();
        // $sortByDesc = collect($arrayAssoc)->sortByDesc('age');
        // $reverse = $collection->reverse();

        // aggregation
        // 1. sum
        // 2. min
        // 3. max
        // 4. avg
        // 5. count
        // $array = [1, 2, 3, 4, 5];
        // $collection = collect($array);

        // $sum = $collection->sum();
        // $min = $collection->min();
        // $max = $collection->max();
        // $avg = $collection->avg();
        // $count = $collection->count();
        // dd($sum, $min, $max, $avg, $count);

        // where
        // $arrayAssoc = [
        //     [
        //         'id' => 1,
        //         'name' => 'Imron',
        //         'age' => 30,
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'Imron',
        //         'age' => 25,
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'Rudi',
        //         'age' => 20,
        //     ],
        // ];
        // $collection = collect($arrayAssoc);
        // $filltered = $collection
        //     ->where('name', 'like', '%Im%')
        //     ->all();
        // dd($filltered);

        // where between
        // $collection = collect([
        //     ['product' => 'Desk', 'price' => 200, 'date' => '2021-01-02'],
        //     ['product' => 'Chair', 'price' => 80, 'date' => '2021-01-03'],
        //     ['product' => 'Bookcase', 'price' => 150, 'date' => '2021-01-04'],
        //     ['product' => 'Pencil', 'price' => 30, 'date' => '2021-01-05'],
        //     ['product' => 'Door', 'price' => 100, 'date' => '2021-01-06']
        // ]);

        // $filtered = $collection->whereBetween('date', ['2021-01-02', '2021-01-04'])->all();
        // dd($filtered);

        // where in
        // $collection = collect([
        //     ['product' => 'Desk', 'price' => 200],
        //     ['product' => 'Chair', 'price' => 100],
        //     ['product' => 'Bookcase', 'price' => 150],
        //     ['product' => 'Door', 'price' => 100],
        //     ['product' => 'Door', 'price' => 500],
        // ]);

        // $filtered = $collection->whereIn('product', ['Door', 'Chair'])->all();
        // dd($filtered);

        // where null
        // $collection = collect([
        //     ['product' => 'Desk', 'price' => 200],
        //     ['product' => 'Chair', 'price' => 100],
        //     ['product' => 'Bookcase', 'price' => null],
        //     ['product' => 'Door', 'price' => 100],
        //     ['product' => 'Door', 'price' => 500],
        // ]);
        // // $filtered = $collection->whereNull('price')->all();
        // $filtered = $collection->whereNotNull('price')->all();
        // dd($filtered);

        // skip
        // $array = [1, 2, 3, 4, 5];
        // $collection = collect($array);
        // $skip = $collection->skip(2)->all();
        // dd($skip);

        // has
        // $collection = collect(['product' => 'Desk', 'price' => 200]);
        // $has = $collection->has('product');
    }
}
