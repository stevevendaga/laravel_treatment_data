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
            'data1'     => $row['nanuncio'],
            'data2'    => $row['tipocontrato'],
            'data3'    => $row['tipoprocedimento'],
            'data4'    => $row['objectocontrato'],
            'data5'    => $row['adjudicantes'],
            'winning_company'=> $row['adjudicatarios'],
            'data7'    =>$this->transformDate($row['datapublicacao']),
            'date'    =>$this->transformDate($row['datacelebracaocontrato']),
            'amount'    => $row['precocontratual'],
            'cpv'    => $row['cpv'],
            'data11'    => $row['prazoexecucao'],
            'data12'    => $row['localexecucao'],
            'data13'    => $row['fundamentacao'],
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
