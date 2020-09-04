<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


class dbBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Database backup';

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
        
        $path = base_path("/database".DIRECTORY_SEPARATOR."backups".DIRECTORY_SEPARATOR);
        $filename = "backup-".env("DB_DATABASE")."-".date("Y-m-d", time()).".sql"; // config('database.connection.mysql.database')
        $command = "mysqldump --user=homestead --password=secret --host=127.0.0.1 laravel_db > dump.sql".  $path.$filename;
        exec($command, $output, $returnvar);
        //Log::info("Database backup was created succesfully");
    }
}
