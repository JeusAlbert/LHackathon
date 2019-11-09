<?php

namespace App\Http\Controllers;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        Mapper::map(14.586553, 121.065575, ['zoom' => 17, 'markers' => ['symbol' => 'circle', 'scale' => 1000, 'animation' => 'DROP']])
            ->circle([['latitude' => 14.586553, 'longitude' => 121.065575]],
                ['strokeColor' => '#000000', 'strokeOpacity' => 0.1, 'strokeWeight' => 2, 'fillColor' => '#add8e6', 'radius' => 150]);;
        Mapper::marker(14.587186, 121.064824);
        Mapper::marker(14.585986, 121.064824);
        Mapper::marker(14.585785, 121.066358);
        return view('testMap');
    }
}
