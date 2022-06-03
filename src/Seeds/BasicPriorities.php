<?php

namespace PanicHD\PanicHD\Seeds;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use PanicHD\PanicHD\Models\Priority;

class BasicPriorities extends Seeder
{
    public $priorities = [
        'Critique' => [
            'color'     => '#cc0000',
            'magnitude' => '4', ],
        'Haute' => [
            'color'     => '#ffbc1b',
            'magnitude' => '3', ],
        'Normale' => [
            'color'     => '#aaa',
            'magnitude' => '2', ],
        'Basse' => [
            'color'     => '#4bcd54',
            'magnitude' => '1', ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Create priorities
        foreach ($this->priorities as $name => $data) {
            $priority = Priority::firstOrNew(['name'  => $name]);
            $priority->color = $data['color'];
            $priority->magnitude = $data['magnitude'];
            $priority->save();
        }
    }
}
