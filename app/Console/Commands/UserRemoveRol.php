<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UserRemoveRol extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:remove-role {user} {role}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $role = $this->argument('role');

        if ($user) {
            if ($user->removeRole($role)) {
                $this->line("Rol {$role} eliminado.");
            } else {
                $this->line("El usuario no tenía el rol {$role}.");
            }
            return Command::SUCCESS;
        } else {
            $this->line("Usuario {$user_id} no existe.", "error");
            return Command::INVALID;
        }
    }
}
