<?php

namespace App\Http\Livewire;

use App\Models\Quiz;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DashboardQuiz extends Component
{
    public function render()
    {
        $FavoriteSocialNetwork = Quiz::all()->count();
        $promedioWhatsapp=DB::table('quizzes')
                                ->select(DB::raw('AVG(timeOnWhatsApp) as res'))
                                ->where('favoriteSocialNetwork','WhatsApp')
                                ->get();
        
            // dd($promedioWhatsapp[0]);
        $columnChartModel = 
            (new ColumnChartModel())
                ->setTitle('cant of quiz completed')
                ->addColumn('Cant of voted', $FavoriteSocialNetwork, '#f6ad55');
                // ->addColumn('Shopping', 200, '#fc8181')
                // ->addColumn('Travel', 300, '#90cdf4')
            
            $timePromedio = 
            (new ColumnChartModel())
                ->setTitle('cant of quiz completed')
                ->addColumn('Facebook', 12.5, '#f6ad55')
                ->addColumn('WhatsApp', $promedioWhatsapp[0], '#90cdf4');
                // ->addColumn('Shopping', 200, '#fc8181')
                // ->addColumn('Travel', 300, '#90cdf4')
        return view('livewire.dashboard-quiz',compact('columnChartModel','timePromedio'));
    }
}
