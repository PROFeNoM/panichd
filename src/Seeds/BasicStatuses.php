<?php

namespace PanicHD\PanicHD\Seeds;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use PanicHD\PanicHD\Models\Status;

class BasicStatuses extends Seeder
{
    public $statuses = [
        'Nouveau'       => '#319df8',
        'Ouvert'        => '#ffbc1b',
        'En attente'    => '#df32f9',
        'Résolu'        => '4bcd540',
        'Rejeté'        => '#858585',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Create statuses
        foreach ($this->statuses as $name => $color) {
            $status = Status::firstOrNew(['name'  => $name]);
            $status->color = $color;
            $status->save();
        }
    }
}
