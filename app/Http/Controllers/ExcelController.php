<?php

namespace App\Http\Controllers;

use App\Application;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Es;
use App\Ecosystem;
use App\Study;
use App\Valuation;
use App\Bibilographic;
use App\Data;

class ExcelController extends Controller
{

    public function excelQuery()
    {
        $excel_data = [];

        $applications = Application::where('status', 'a')->get();

        foreach ($applications as $app) {

            $partial = new \stdClass();


            // -------------------- ecosystem part ------------------------------

            $ecosystems = Ecosystem::where('es_value_id', $app->es_value_id)->get();

            foreach ($ecosystems as $gg) {
                $partial->es_value_id = $gg->es_value_id;
                $partial->created = $gg->created_at;
                $partial->fao_biome = $gg->fao_biome;
                $partial->ecosystem = $gg->ecosystem;
                $partial->ecosystem_teeb = $gg->teeb;
                $partial->zone = json_decode($gg->zone);
                $partial->others = $gg->others;
                $partial->zone_text = $gg->zone_text;
                $partial->comment = $gg->comment;

            }

            // -------------------- ecosystem part ------------------------------

            // -------------------- es part ------------------------------

            $es = Es::where('es_value_id', $app->es_value_id)->get();

            foreach ($es as $gg) {
                $partial->es_bundle = json_decode($gg->es_bundle);
                $partial->es_class = $gg->es_class;
                $partial->es_text = $gg->es_text;
                $partial->sub_es_text = $gg->sub_es_text;
                $partial->es_teeb = $gg->teeb;
                $partial->iucn = $gg->iucn;
                $partial->es_comment = $gg->comment;
            }

            // -------------------- es part ------------------------------

            // -------------------- study part ------------------------------

            $study = Study::where('es_value_id', $app->es_value_id)->get();

            foreach ($study as $gg) {
                $partial->district = json_decode($gg->district);
                $partial->division = json_decode($gg->division);
                $partial->site_scale = $gg->site_scale;
                $partial->study_others_1 = $gg->other_1;
                $partial->study_teeb = $gg->teeb;
                $partial->location_name = $gg->location_name;
                $partial->legal_status = $gg->legal_status;
                $partial->study_other_2 = $gg->other_2;
                $partial->site_area = $gg->site_area;
                $partial->site_unit = $gg->site_unit;
                $partial->site_ha = $gg->site_ha;
                $partial->site_condition_text = $gg->site_condition_text;
                $partial->site_condition = $gg->site_condition;
                $partial->latitude = $gg->latitude;
                $partial->longitude = $gg->longitude;

            }


            // -------------------- study part ------------------------------

            // -------------------- valuation part ------------------------------

            $valuation = Valuation::where('es_value_id', $app->es_value_id)->get();

            foreach ($valuation as $gg) {
                $partial->valuation_method = json_decode($gg->valuation_method);
                $partial->valuation_other_1 = $gg->valuation_other_1;
                $partial->valuation_other_2 = $gg->valuation_other_2;
                $partial->valuation_measured_text = $gg->valuation_measured_text;
                $partial->value_original = $gg->value_original;
                $partial->value_total = $gg->value_total;
                $partial->value_currency = $gg->value_currency;
                $partial->value_year = $gg->value_year;
                $partial->spatial_unit = $gg->spatial_unit;
                $partial->temporal_unit = $gg->temporal_unit;
                $partial->beneficial_unit = json_decode($gg->beneficial_unit);
                $partial->beneficial_other_1 = $gg->beneficial_other_1;
                $partial->beneficial_other_2 = $gg->beneficial_other_2;
                $partial->beneficial_number = $gg->beneficial_number;
                $partial->beneficial_text = $gg->beneficial_text;

            }

            // -------------------- valuation part ------------------------------


            // -------------------- bibliographic part ------------------------------

            $bibliographic = Bibilographic::where('es_value_id', $app->es_value_id)->get();

            foreach ($bibliographic as $gg) {
                $partial->author = $gg->author;
                $partial->year_publication = $gg->year_publication;
                $partial->title = $gg->title;
                $partial->full_reference = $gg->full_reference;
                $partial->study_link = $gg->study_link;
                $partial->research_link = $gg->research_link;

            }


            // -------------------- bibliographic part ------------------------------

            // -------------------- data part ------------------------------

            $data = Data::where('es_value_id', $app->es_value_id)->get();

            foreach ($data as $gg) {
                $partial->data_entered_by = $gg->data_entered_by;
                $partial->data_entered_date = $gg->data_entered_date;
                $partial->reviewer_name = $gg->reviewer_name;
                $partial->reviewer_date = $gg->reviewer_date;
                $partial->notes = $gg->notes;

            }

            // -------------------- data part ------------------------------


            array_push($excel_data, $partial);

        }

        return $excel_data;

    }


    public function excelPage()
    {
        $excel_data = $this->excelQuery();
        return view('excel.excel', compact('excel_data'));
    }

    public function excelJson(){
        $excel_data = $this->excelQuery();
        return response()->json([
            'data' => $excel_data,
            'status' => Response::HTTP_OK
        ]);
    }
}
