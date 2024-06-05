<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \Illuminate\Http\JsonResponse;

use App\Repositories\Interfaces\DistrictRepositoryInterface as DistrictRepository;

use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceRepository;

class LocationController extends Controller
{
    protected $districtRepository;
    protected $provinceRepository;

    public function __construct(
        DistrictRepository $districtRepository,
        ProvinceRepository $provinceRepository,
    ) {
        $this->districtRepository = $districtRepository;
        $this->provinceRepository = $provinceRepository;
    }

    public function getLocation(Request $request)
    {
        $get = $request->input();
        $html = '';
        if ($get['target']== 'districts') {
            $province = $this -> provinceRepository->findById($get['data']['location_id'],['code','name'],['districts']);
            $html = $this->renderHtml($province->districts, '[Choose District]');
            } else if ($get['target'] == 'wards') {
                $district = $this -> districtRepository->findById($get['data']['location_id'],['code','name'],['wards']);
                $html = $this->renderHtml($district->wards, '[Choose Ward]');
            }
        $response = [
            'html' => $html,
        ];
        return response()->json($response);

    }

    public function renderHtml($districts, $root = '[Choose District]'): string
    {
        $html = '<option value="0">' .$root. '</option>';
        foreach ($districts as $district) {
            $html .= '<option value="' . sprintf('%03d', $district->code) . '">' . $district->name . '</option>';
        }
        return $html;
    }
}
