<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        unset($rows[0]);
        
        foreach ($rows as $row) 
        {
            if(!empty($row[1])){
                $user = User::firstOrCreate([
                    'email' => $row[1]
                ],[
                    'name' => $row[5],
                    'email_verified_at' => now(),
                ]);

                $user->profile()->delete();

                $user->profile()->create([
                    'prc_number' => $row[3],
                    'prc_expiration_date' => $row[4],
                    'first_name' => $row[5],
                    'middle_name' => $row[6],
                    'last_name' => $row[7],
                    'contact_number' => $row[8],
                    'chapter' => $row[9],
                    'province' => $row[10],
                    'city' => $row[11],
                    'need_transporation' => $row[12],
                    'dental_practice_type' => $row[13],
                    'registration_type' => $row[14],
                    'paid_at' => now(),
                    'proof_of_transaction' => '',
                ]);
            }
            
        }
    }
}
