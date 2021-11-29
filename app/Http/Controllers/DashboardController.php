<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Review;
use App\Models\Service;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Colors\RandomColor;

class DashboardController extends Controller
{
    public $firstRun = true;
    public $showDataLabels = true;

    public function index()
    {
        $doctor_locality = Doctor::with('locality')->get();

        $pieChartModel2 = $doctor_locality->groupBy('locality_id')->reduce(
            function ($pieChartModel2, $doctor_locality) {
                $patients = $doctor_locality->first()->locality->name;
                $count = $doctor_locality->count('id');
                $color = RandomColor::one(['luminosity' => 'dark', 'format' => 'hex']);
                return $pieChartModel2->addSlice($patients, $count, $color);
            },
            (new PieChartModel())
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(true)
                ->legendPositionLeft()
                ->setDataLabelsEnabled($this->showDataLabels)
                ->setOpacity(0.85)
        );

        $review_doctor = Review::with('doctor')->get();

        $pieChartModel1 = $review_doctor->groupBy('doctor_id')->reduce(
            function ($pieChartModel1, $review_doctor) {
                $patients = $review_doctor->first()->doctor->name;
                $count = $review_doctor->count('id');
                $color = RandomColor::one(['luminosity' => 'dark', 'format' => 'hex']);
                return $pieChartModel1->addSlice($patients, $count, $color);
            },
            (new PieChartModel())
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(true)
                ->legendPositionLeft()
                ->setDataLabelsEnabled($this->showDataLabels)
                ->setOpacity(0.85)
        );

        $doctor_count = Doctor::count();
        $review_count = Review::count();
        $service_count = Service::count();

        return view('dashboard', compact(['doctor_count', 'review_count', 'service_count', 'pieChartModel1', 'pieChartModel2']));
    }
}
