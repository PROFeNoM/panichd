<?php

namespace PanicHD\PanicHD\Seeds;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use PanicHD\PanicHD\Models\Category;

use App\Models\User;
use PanicHD\PanicHD\Models\Member;

class Basic extends Seeder
{
    public $categories = [
        'Bugs' => '#ffbc1b',
        'Question' => '#71ED61',
        'Demande' => '#5EC6EC',
        'Autre' => '#4e00ff',
    ];

    public $tags = [
        'e-mail', 'matériel', 'internet', 'SAP', 'logiciel',
        'fournisseur', 'article', 'appro', 'finance', 'logistique',
        'televente', 'autre'
    ];

    public $a_bg_color = [
        '#e6b8af', '#f4cccc', '#fce5cd', '#fff2cc',
        '#d9ead3', '#d0e0e3', '#c9daf8', '#cfe2f3',
        '#d9d2e9', '#ead1dc'
    ];

    public $closing_reasons = [
        'erreur utilisateur', 'erreur logicielle', 'erreur matérielle',
        'aucune réponse', 'résolu', 'autre'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Retrieve super-admin users and set panichd_admin and panichd_agent to 1
        $super_admins = Member::where('role_slug', 'super-admin')->get();
        foreach ($super_admins as $super_admin) {
            $super_admin->panichd_admin = 1;
            $super_admin->panichd_agent = 1;
            $super_admin->save();
        }

        // Create categories
        foreach ($this->categories as $name => $color) {
            $category = Category::firstOrNew(['name' => $name]);
            $category->color = $color;
            $category->save();

            // Create category's tags
            foreach ($this->tags as $tag) {
                $category->tags()->create([
                    'name'          => $tag,
                    'bg_color'      => $this->a_bg_color[array_rand($this->a_bg_color)],
                    'text_color'    => '#0c343d',
                ]);
            }

            // Create category's closing reasons
            $ordering = 0;
            foreach ($this->closing_reasons as $reason) {
                $category->closingReasons()->create([
                    'text' => $reason,
                    'category_id'   => $category->id,
                    'ordering'      => $ordering,
                    'status_id'     => 4 // /!\ I ASSUME THE STATUS 'Résolu' IS ALWAYS THE 4TH ID IN THE DB /!\
                ]);
                $ordering++;
            }

            // Associate super-admins to the category
            foreach ($super_admins as $super_admin) {
                $super_admin->categories()->create([
                    'category_id'   => $category->id,
                    'user_id'       => $super_admin->id,
                    'autoassign'    => 1
                ]);
            }
        }

        // Create priorities
        $this->call(BasicPriorities::class);

        // Create statuses
        $this->call(BasicStatuses::class);
    }
}
