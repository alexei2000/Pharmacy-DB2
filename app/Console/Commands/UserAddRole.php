<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UserAddRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:add-role {user} {role}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Agregar rol a usuario';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user_id = $this->argument('user');
        $user = User::find($user_id);

        if ($user) {
            $role = $this->argument('role');
            if ($user->addRole($role)) {
                $this->line("Rol {$role} agregado.");
            } else {
                $this->line("Rol {$role} ya existía.");
            }
            return Command::SUCCESS;
        } else {
            $this->line("Usuario {$user_id} no existe.", "error");
            return Command::INVALID;
        }
    }
}
