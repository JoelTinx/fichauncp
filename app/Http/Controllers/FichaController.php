<?php

namespace App\Http\Controllers;

use App\FichaModel;
use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class FichaController extends Controller
{
    private $fontLabCon = 8;
    private $fontTexCon = 8;
    private $lineHeight = 5;

    public function PostFicha(Request $request) {
        $data = null;
        try {
            $ficha = new FichaModel();
            $ficha->create($request->all());

            $data = [
                'error' => false,
                'mensaje' => 'Insertado correctamente'
            ];
        } catch (\Exception $exception) {
            $data = [
                'error' => true,
                'mensaje' => $exception->getMessage()
            ];
        }

        return response()->json($data);
    }

    public function GetFicha() {
        $data = null;
        try {
            $fichas = FichaModel::all();

            $data = [
                'error' => false,
                'fichas' => $fichas,
                'mensaje' => ''
            ];
        } catch (\Exception $exception) {
            $data = [
                'error' => false,
                'fichas' => [],
                'mensaje' => $exception->getMessage()
            ];
        }

        return response()->json($data);
    }

    public function VizualizarFicha($id)
    {
        $data = null;
        try {
            $ficha = FichaModel::where('id', $id)->first();

            $pdf = new Fpdf();
            $pdf->AddPage('P','A4');
            $pdf->SetMargins(20,15,15);
            $pdf->AliasNbPages();
            $pdf->SetAutoPageBreak(true,10);

            $yline = 10.0;
            $pdf->SetTextColor(0, 0, 0);

            // TÍTULO
            $pdf->SetFont("Arial", "B", 12);
            $pdf->SetXY(20, $yline);
            $pdf->Cell(110, 30, utf8_decode("FICHA DE EVALUACIÓN SOCIOECONÓMICA"), "", 0, "C", false, 0, "");

            // CÓDIGO DE MATRÍCULA
            $pdf->SetFont("Times", "B", $this->fontLabCon);
            $pdf->Cell(110, $this->lineHeight, "", "0", 0, "L", false, 0, "");
            $pdf->Cell(25, $this->lineHeight, "COD. MAT.", "0", 0, "L", false, 0, "");

            $pdf->SetFont("Arial", "", $this->fontTexCon);
            $pdf->Cell(20, $this->lineHeight, utf8_decode($ficha->codigo_matricula), "0", 0, "", false, 0, "");
            $pdf->Ln();

            // FACULTAD
            $pdf->SetFont("Times", "B", $this->fontLabCon);
            $pdf->Cell(110, $this->lineHeight, "", "0", 0, "L", false, 0, "");
            $pdf->Cell(25, $this->lineHeight, "FACULTAD", "0", 0, "L", false, 0, "");

            $pdf->SetFont("Arial", "", $this->fontTexCon);
            $pdf->Cell(20, $this->lineHeight, utf8_decode($ficha->facultad), "0", 0, "", false, 0, "");
            $pdf->Ln();

            // ESCUELA
            $pdf->SetFont("Times", "B", $this->fontLabCon);
            $pdf->Cell(110, $this->lineHeight, "", "0", 0, "L", false, 0, "");
            $pdf->Cell(25, $this->lineHeight, "ESCUELA", "0", 0, "L", false, 0, "");

            $pdf->SetFont("Arial", "", $this->fontTexCon);
            $pdf->Cell(20, $this->lineHeight, utf8_decode($ficha->escuela), "0", 0, "", false, 0, "");
            $pdf->Ln();

            // SEMESTRE
            $pdf->SetFont("Times", "B", $this->fontLabCon);
            $pdf->Cell(110, $this->lineHeight, "", "0", 0, "L", false, 0, "");
            $pdf->Cell(25, $this->lineHeight, "SEMESTRE", "0", 0, "L", false, 0, "");

            $pdf->SetFont("Arial", "", $this->fontTexCon);
            $pdf->Cell(20, $this->lineHeight, utf8_decode($ficha->semestre), "0", 0, "", false, 0, "");
            $pdf->Ln();

            // SEGUNDA CARRERA
            $pdf->SetFont("Times", "B", $this->fontLabCon);
            $pdf->Cell(110, $this->lineHeight, "", "0", 0, "L", false, 0, "");
            $pdf->Cell(25, $this->lineHeight, "2DA CARRERA", "0", 0, "L", false, 0, "");

            $pdf->SetFont("Arial", "", $this->fontTexCon);
            $pdf->Cell(20, $this->lineHeight, utf8_decode($ficha->segunda_carrera), "0", 0, "", false, 0, "");
            $pdf->Ln();

            $pdf->Ln();
            $pdf->Ln();

            $pdf->SetFillColor(0, 0, 0);
            $pdf->SetTextColor(255, 255, 255);
            $pdf->Cell(170, $this->lineHeight, "I DATOS GENERALES", "0", 0, "L", true, 0, "");

            $pdf->SetTextColor(0, 0, 0);
            $pdf->SetY(54);
            $pdf->SetFont("Arial", "", $this->fontTexCon + 2);
            $pdf->Cell(170, $this->lineHeight, utf8_encode($ficha->nombre_completo), "0", 0, "C", false, 0, "");

            $pdf->Line(20, 60, 190, 60);
            $pdf->SetY(59.5);
            $pdf->SetFont("Arial", "", $this->fontTexCon - 1);
            $pdf->Cell(170, $this->lineHeight, "Apellidos y Nombres", "0", 0, "C", false, 0, "");



            $pdf->Output('F', 'files/prueba.pdf', true);

            $data = [
                'error' => false,
                'mensaje' => 'Se ha generado correctamente'
            ];
        } catch (\Exception $exception) {
            $data = [
                'error' => true,
                'mensaje' => $exception->getMessage().' '.$exception->getLine().' '.$exception->getFile()
            ];
        }
        return response()->json($data);
    }

//    public function VizualizarFicha($id)
//    {
//        $ficha = FichaModel::where('id', $id)->first();
//
//        $pdf = new Fpdf();
//        $pdf->AddPage('P','A4');
//        $pdf->SetMargins(20,15,15);
//        $pdf->AliasNbPages();
//        $pdf->SetAutoPageBreak(true,10);
//
//        $yline = 10.0;
//        $pdf->SetTextColor(0, 0, 0);
//
//        // TÍTULO
//        $pdf->SetFont("Arial", "B", 12);
//        $pdf->SetXY(20, $yline);
//        $pdf->Cell(110, 30, utf8_decode("FICHA DE EVALUACIÓN SOCIOECONÓMICA"), "", 0, "C", false, 0, "");
//
//        // CÓDIGO DE MATRÍCULA
//        $pdf->SetFont("Times", "B", $this->fontLabCon);
//        $pdf->Cell(110, $this->lineHeight, "", "0", 0, "L", false, 0, "");
//        $pdf->Cell(25, $this->lineHeight, "COD. MAT.", "0", 0, "L", false, 0, "");
//
//        $pdf->SetFont("Arial", "", $this->fontTexCon);
//        $pdf->Cell(20, $this->lineHeight, utf8_decode($ficha->codigo_matricula), "0", 0, "", false, 0, "");
//        $pdf->Ln();
//
//        // FACULTAD
//        $pdf->SetFont("Times", "B", $this->fontLabCon);
//        $pdf->Cell(110, $this->lineHeight, "", "0", 0, "L", false, 0, "");
//        $pdf->Cell(25, $this->lineHeight, "FACULTAD", "0", 0, "L", false, 0, "");
//
//        $pdf->SetFont("Arial", "", $this->fontTexCon);
//        $pdf->Cell(20, $this->lineHeight, utf8_decode($ficha->facultad), "0", 0, "", false, 0, "");
//        $pdf->Ln();
//
//        // ESCUELA
//        $pdf->SetFont("Times", "B", $this->fontLabCon);
//        $pdf->Cell(110, $this->lineHeight, "", "0", 0, "L", false, 0, "");
//        $pdf->Cell(25, $this->lineHeight, "ESCUELA", "0", 0, "L", false, 0, "");
//
//        $pdf->SetFont("Arial", "", $this->fontTexCon);
//        $pdf->Cell(20, $this->lineHeight, utf8_decode($ficha->escuela), "0", 0, "", false, 0, "");
//        $pdf->Ln();
//
//        // SEMESTRE
//        $pdf->SetFont("Times", "B", $this->fontLabCon);
//        $pdf->Cell(110, $this->lineHeight, "", "0", 0, "L", false, 0, "");
//        $pdf->Cell(25, $this->lineHeight, "SEMESTRE", "0", 0, "L", false, 0, "");
//
//        $pdf->SetFont("Arial", "", $this->fontTexCon);
//        $pdf->Cell(20, $this->lineHeight, utf8_decode($ficha->semestre), "0", 0, "", false, 0, "");
//        $pdf->Ln();
//
//        // SEGUNDA CARRERA
//        $pdf->SetFont("Times", "B", $this->fontLabCon);
//        $pdf->Cell(110, $this->lineHeight, "", "0", 0, "L", false, 0, "");
//        $pdf->Cell(25, $this->lineHeight, "2DA CARRERA", "0", 0, "L", false, 0, "");
//
//        $pdf->SetFont("Arial", "", $this->fontTexCon);
//        $pdf->Cell(20, $this->lineHeight, utf8_decode($ficha->segunda_carrera), "0", 0, "", false, 0, "");
//        $pdf->Ln();
//
//        $pdf->Ln();
//        $pdf->Ln();
//
//        $pdf->SetFillColor(0, 0, 0);
//        $pdf->SetTextColor(255, 255, 255);
//        $pdf->Cell(170, $this->lineHeight, "I DATOS GENERALES", "0", 0, "L", true, 0, "");
//
//        $pdf->Line(10, 60, 180, 60);
//
//        $pdf->Output();
//    }

}
