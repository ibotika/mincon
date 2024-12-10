<?php

namespace App\Console\Commands;

use App\Imports\UsersImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ImportSampleExcel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:sample';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Sample Excel';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Excel::import(new UsersImport, database_path('imports/sample.xlsx'));

        $this->info('Import Done');
    }
}
