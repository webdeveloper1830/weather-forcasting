<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use App\Models\City;

class Weather extends Component
{
    /** @var string */
    public $city;

    /** @var bool  */
    public bool $isLoading = false;

    public $currentWeather;
    public $futureWeather;

    /**
     * @return void
     */
    public function updated($name, $value)
    {
        if(empty($this->city)) {
            return null;
        }

        $this->isLoading = true;

        $api_key = config('services.openweathermap.key');
        $count = 16;

        $currentWeather = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$this->city}&appid={$api_key}&units=metric");
        $futureWeather = Http::get("https://api.openweathermap.org/data/2.5/forecast?q={$this->city}&cnt={$count}&appid={$api_key}");

        

        $this->currentWeather = $currentWeather->json();
        $this->futureWeather = $futureWeather->json();

        $this->isLoading = false;
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.weather');
    }

    /**
     * @param \App\Models\City $city
     * @return \Illuminate\Support\Collection
     */
    public function getCitiesProperty(City $city): Collection
    {
        return $city->get();
    }

}
