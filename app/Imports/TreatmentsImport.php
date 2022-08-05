<?php

namespace App\Imports;

use App\Models\treatment_data;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TreatmentsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new treatment_data([
            'Data1'     => $row['name'],
            'Data2'    => $row['tipocontrato'],
            'Data3'    => $row['tipoprocedimento'],
            'Data4'    => $row['objectocontrato'],
            'Data5'    => $row['adjudicantes'],
            'Winning_company'    => $row['adjudicatarios'],
            //'Data7'    => $row['datapublicacao'],
            //'Date'    =>$row['datacelebracaocontrato'],
            'Amount'    => $row['precocontratual'],
            'CPV'    => $row['cpv'],
            'Data11'    => $row['prazoexecucao'],
            'Data12'    => $row['localexecucao'],
            'Data13'    => $row['fundamentacao'],
        ]);
    }
}
