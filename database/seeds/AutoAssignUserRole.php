<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Repositories\RoleRepository;

class AutoAssignUserRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$roleRepository = new RoleRepository();
    	$users = User::where('email', '<>', 'admin@getsella.com')->get();
    	foreach ($users as $key => $user) {
    		# code...
    		$defaultRoles = $roleRepository->findByField('default', '1');
	        $defaultRoles = $defaultRoles->pluck('name')->toArray();
	        $user->assignRole($defaultRoles);
    	}
    }
}
