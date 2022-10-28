<?php

namespace App\Console\Commands;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class MakeUserWithToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user-with-token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a user with a Sanctum API Token';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = User::create([
            'name'              => 'Buckley',
            'email'             => 'buckley@railway.com',
            'email_verified_at' => Carbon::now(),
            'password'          => Str::random(),
        ]);

        $this->info($user->createToken('@bearmint/bep-100')->plainTextToken);

        return Command::SUCCESS;
    }
}
