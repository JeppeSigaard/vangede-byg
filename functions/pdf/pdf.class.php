<?php 
class PDF extends FPDF{
    
    function ChapterTitle($label){
        // Title
        $this->Cell(0,11, ' '.$label,0,1,'L',true);
        // Line break
        $this->Ln(4);
    }

    function ChapterBody($file){
        // Output justified text
        $this->MultiCell(0, 6, $file, 0, 'left');
        // Line break
        $this->Ln();
    }

    function PrintChapter($title, $file){
        $this->AddPage();
        $this->ChapterTitle($title);
        $this->ChapterBody($file);
    }
}