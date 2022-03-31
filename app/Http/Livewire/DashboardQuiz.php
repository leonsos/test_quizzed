<?php

namespace App\Http\Livewire;

use App\Models\Quiz;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DashboardQuiz extends Component
{
    public function render()
    {
        //cantidad de encuestas
        $FavoriteSocialNetwork = Quiz::all()->count();
        //promedio whatsapp
        $promedioWhatsapp = Quiz::where('favoriteSocialNetwork', 'WhatsApp')->avg('timeOnWhatsApp');
        //promedio Facebook
        $promedioFacebook = Quiz::where('favoriteSocialNetwork', 'Facebook')->avg('timeOnFacebook');
        //promedio Instagram
        $promedioInstagram = Quiz::where('favoriteSocialNetwork', 'Instagram')->avg('timeOnInstagram');
        //promedio Tiktok
        $promedioTiktok = Quiz::where('favoriteSocialNetwork', 'Tiktok')->avg('timeOnTiktok');
        //promedio Twitter
        $promedioTwitter = Quiz::where('favoriteSocialNetwork', 'Twitter')->avg('timeOnTwitter');     //dd($promedioWhatsapp2);       

        $dataInstagram = DB::table('quizzes')
            ->select(DB::raw('COUNT(id) as ids'), 'quizzes.age')
            ->where('quizzes.favoriteSocialNetwork', 'Instagram')
            ->groupBy('quizzes.age')
            ->orderBy('quizzes.id', 'asc')
            ->take(1)
            ->get()
            ->pluck('age');
        $dataFacebook = DB::table('quizzes')
            ->select(DB::raw('COUNT(id) as ids'), 'quizzes.age')
            ->where('quizzes.favoriteSocialNetwork', 'Facebook')
            ->groupBy('quizzes.age')
            ->orderBy('quizzes.id', 'asc')
            ->take(1)
            ->get()
            ->pluck('age');
        $dataTwitter = DB::table('quizzes')
            ->select(DB::raw('COUNT(id) as ids'), 'quizzes.age')
            ->where('quizzes.favoriteSocialNetwork', 'Twitter')
            ->groupBy('quizzes.age')
            ->orderBy('quizzes.id', 'asc')
            ->take(1)
            ->get()
            ->pluck('age');
        $dataTiktok = DB::table('quizzes')
            ->select(DB::raw('COUNT(id) as ids'), 'quizzes.age')
            ->where('quizzes.favoriteSocialNetwork', 'Tiktok')
            ->groupBy('quizzes.age')
            ->orderBy('quizzes.id', 'asc')
            ->take(1)
            ->get()
            ->pluck('age');
        $dataWhatsApp = DB::table('quizzes')
            ->select(DB::raw('COUNT(id) as ids'), 'quizzes.age')
            ->where('quizzes.favoriteSocialNetwork', 'WhatsApp')
            ->groupBy('quizzes.age')
            ->orderBy('quizzes.id', 'asc')
            ->take(1)
            ->get()
            ->pluck('age');

        $dataFav = DB::table('quizzes')
        ->select(DB::raw('COUNT(id) as ids'),'quizzes.favoriteSocialNetwork')
        ->groupBy('quizzes.favoriteSocialNetwork')
        ->orderBy('quizzes.id','asc')  
        ->take(1)      
        ->get()
        ->pluck('favoriteSocialNetwork');
        $dataLess = DB::table('quizzes')
        ->select(DB::raw('COUNT(id) as ids'),'quizzes.favoriteSocialNetwork')
        ->groupBy('quizzes.favoriteSocialNetwork')
        ->orderBy('quizzes.id','desc')  
        ->take(1)      
        ->get()
        ->pluck('favoriteSocialNetwork');
        //dd($dataFav);
        // $lineChartModel =
        //     (new lineChartModel())
        //     ->setTitle('cant of quiz completed')
        //     ->singleLine('Cant of voted', $FavoriteSocialNetwork, '#f6ad55'); 
        $columnChartModel =
            (new ColumnChartModel())
            ->setTitle('cant of quiz completed')
            ->addColumn('Cant of voted', $FavoriteSocialNetwork, '#f6ad55');

        $timePromedio =
            (new ColumnChartModel())
            ->setTitle('average time per social network')
            ->addColumn('Facebook', $promedioFacebook, '#f6ad55')
            ->addColumn('WhatsApp', $promedioWhatsapp, '#90cdf4')
            ->addColumn('Twitter', $promedioTwitter, '#6875F5')
            ->addColumn('Tiktok', $promedioTiktok, '#45cdf4')
            ->addColumn('Instagram', $promedioInstagram, '#90cd34');

        $age =
            (new ColumnChartModel())
            ->setTitle('most used age range')
            ->addColumn('Facebook ' . $dataFacebook[0] . 'years', $dataFacebook[0], '#f6ad55')
            ->addColumn('Twitter ' . $dataTwitter[0] . ' years', $dataTwitter[0], '#ff7dd8')
            ->addColumn('Instagram ' . $dataInstagram[0] . ' years', $dataInstagram[0], '#90cd34')
            ->addColumn('Tiktok ' . $dataTiktok[0] . ' years', $dataTiktok[0], '#75c7ff')
            ->addColumn('WhatsApp ' . $dataWhatsApp[0] . ' years', $dataWhatsApp[0], '#ffa43a');

        return view('livewire.dashboard-quiz', compact('dataLess','FavoriteSocialNetwork','dataFav','columnChartModel', 'timePromedio', 'age'));
    }
}
