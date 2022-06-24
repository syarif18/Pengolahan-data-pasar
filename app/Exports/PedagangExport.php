<?php

namespace App\Exports;

use App\Models\SewaUser;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PedagangExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $nama_pasar;
    protected $search;

    function __construct($nama_pasar, $search = '') {
        $this->nama_pasar = $nama_pasar;
        $this->search = $search;
 }

    public function collection()
    {
        $data = SewaUser::where('konfirmasi', '1')->where('nama_pasar', $this->nama_pasar);
        if(!empty($this->search)){
            $data->where('jenis_tempat', 'like', '%' . $this->search . '%');
        }

        return $data->get([
            'nama_pasar', 'jenis_tempat', 'nama', 'nik', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'jenis_jualan', 'nomor_hp'
        ]);
    }

    public function headings(): array
    {
        return [
            'Nama Pasar',
            'Jenis Tempat',
            'Nama',
            'NIK',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Alamat',
            'jenis Jualan',
            'Nomor Handphone'
        ];
    }
}
