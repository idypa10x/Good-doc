<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creer des roles
        $admin = Role::create(['name' => 'admin']);
        $medecin = Role::create(['name' => 'medecin']);
        $infirmier = Role::create(['name' => 'infirmier']);
        $patient = Role::create(['name' => 'patient']);
        $secretaire = Role::create(['name' => 'secretaire']);
        $caissier = Role::create(['name' => 'caissier']);

        //creer des permissions
        $seeinfopatient = Permission::create(['name' => 'voir infos patient']);
        $confirmerrdv = Permission::create(['name' => 'confirmer rdv']);
        $voirrdv = Permission::create(['name' => 'voir rdv']);
        $addnote = Permission::create(['name' => 'ajouter note']);
        $voirnote = Permission::create(['name' => 'voir note']);

    }
}
