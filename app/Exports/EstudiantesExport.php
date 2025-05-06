<?php

namespace App\Exports;

use App\Models\Estudiantes;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class EstudiantesExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles,WithCustomCsvSettings
{
    /**
     * Devuelve la colección de datos para exportar.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Estudiantes::select(
            'id',
            'nombre',
            'apellido',
            'grado',
            'edad',
            'nombre_acudiente',
            'apellido_acudiente',
            'telefono_acudiente',
            'estado'
        )->get();
    }

    /**
     * Define los encabezados de las columnas.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Nombre',
            'Apellido',
            'Grado',
            'Edad',
            'Nombre del Acudiente',
            'Apellido del Acudiente',
            'Teléfono del Acudiente',
            'Estado',
        ];
    }

    /**
     * Aplica estilos a las celdas.
     *
     * @param Worksheet $sheet
     * @return array
     */
    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:I1')->applyFromArray([
            'font' => [
                'bold' => true,
                'color' => ['rgb' => 'FFFFFF'], // Texto blanco
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => ['rgb' => '017bfe'], // Fondo verde
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
            ],
        ]);
    
        // Aplica bordes a toda la tabla
        $sheet->getStyle('A1:I' . $sheet->getHighestRow())->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['rgb' => '000000'], // Bordes negros
                ],
            ],
        ]);
    
        // Centra horizontalmente todas las columnas
        $sheet->getStyle('A:I')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
    
        // Ajusta automáticamente el ancho de las columnas
        foreach (range('A', 'I') as $column) {
            $sheet->getColumnDimension($column)->setAutoSize(true);
        }
    
        return [];
    }

    public function getCsvSettings(): array
    {
        return [
            'use_bom' => true, // Agrega el encabezado BOM para soportar caracteres especiales
        ];
    }
}