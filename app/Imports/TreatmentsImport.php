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
            'Data1'     => $row['nanuncio'],
            'Data2'    => $row['tipocontrato'],
            'Data3'    => $row['tipoprocedimento'],
            'Data4'    => $row['objectocontrato'],
            'Data5'    => $row['adjudicantes'],
            'Winning_company'=> $row['adjudicatarios'],
            'Data7'    =>$this->transformDate($row['datapublicacao']),
            'Date'    =>$this->transformDate($row['datacelebracaocontrato']),
            'Amount'    => $row['precocontratual'],
            'CPV'    => $row['cpv'],
            'Data11'    => $row['prazoexecucao'],
            'Data12'    => $row['localexecucao'],
            'Data13'    => $row['fundamentacao'],
        ]);
    }
    public function transformDate($value, $format = 'Y-m-d')
    {
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }
}
