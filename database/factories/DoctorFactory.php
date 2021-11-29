<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        \Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($this->faker);
        $this->faker->addProvider(new \Bezhanov\Faker\Provider\Medicine($this->faker));
        $this->faker->addProvider(new \Bezhanov\Faker\Provider\Avatar($this->faker));
        $this->faker->addProvider(new \Faker\Provider\Youtube($this->faker));

        $medicine1 = $this->faker->medicine;
        $medicine2 = $this->faker->medicine;
        $medicine3 = $this->faker->medicine;
        $medicine4 = $this->faker->medicine;
        $medicine5 = $this->faker->medicine;
        $medicine6 = $this->faker->medicine;


        return [
            'name' => $this->faker->name(),
            'photo' => null,
            'department_id' => Department::pluck('id')[$this->faker->numberBetween(1, Department::count() - 1)],
            'qualification' => $this->faker->educationalAttainment,
            'locality_id' => rand(98, 110),
            'extra_services' => $medicine1 . ',' . $medicine2 . ',' . $medicine3 . ',' . $medicine4 . ',' . $medicine5 . ',' . $medicine6,
            'about' => $this->faker->realText(100, 3),
            't_link' => $this->faker->youtubeUri(),
            'f_link' => $this->faker->youtubeUri(),
            'i_link' => $this->faker->youtubeUri(),
            'l_link' => $this->faker->youtubeUri(),
        ];
    }
}
