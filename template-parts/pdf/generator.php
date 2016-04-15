<?php 
require get_template_directory() . '/functions/pdf/fpdf.class.php';
require get_template_directory() . '/functions/pdf/pdf.class.php';


$post_id = esc_attr($_GET['pdf']);
$post = get_post($post_id);



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->addFont('worksans-regular');
$pdf->addFont('worksans-bold');
$pdf->SetFont('worksans-regular','',12);
$pdf->SetTitle(sanitize_title($post->post_title));
$pdf->SetAuthor('Vangede Gruppen');

//// SIDE 1

$pdf->addPage();

// header
$pdf->setDrawColor(230, 230, 230);
$pdf->rect(10,10,190,20,'D');

$pdf->setFillColor(241, 131, 22);
$pdf->rect(10,10,.8,20,'F');
$pdf->setFillColor(255, 255, 255);
$pdf->Image(get_template_directory() .'/statics/img/gruppen.png',16,14.9,0,10);


$pdf->setTextColor(90,90,90);

$tw = $pdf->GetStringWidth(get_theme_mod('info_telefon'));
$right = -7 - $tw;
$pdf->SetFont('worksans-regular','',9);
$pdf->setXY($right,17);
$pdf->Write(1,get_theme_mod('info_telefon'),'');

$tw = $pdf->GetStringWidth(get_theme_mod('info_email'));
$pdf->SetFont('worksans-regular','',9);
$pdf->setXY(-15 - $tw, 20);
$pdf->Write(5,get_theme_mod('info_email'),'mailto:'. get_theme_mod('info_telefon'));

$pdf->setXY(10,30);

// Artikeltitel
$pdf->SetFont('worksans-bold','',11);
$pdf->setTextColor(255,255,255);
$pdf->setFillColor(70,70,70);
$pdf->ChapterTitle(utf8_decode($post->post_title));

// Artikelindhold
$pdf->SetFont('worksans-regular','',10);
$pdf->setTextColor(80,80,80);
$pdf->ChapterBody(utf8_decode(strip_shortcodes($post->post_content)));

//footer
$pdf->Image(get_template_directory() .'/statics/img/hus.jpg',102,280,10,0);


///// SIDE 2

$gallery = get_post_meta($post_id,'pdf_gallery',false);
if($gallery) :


$pdf->addPage();

// header
$pdf->setDrawColor(230, 230, 230);
$pdf->rect(10,10,190,20,'D');

$pdf->setFillColor(241, 131, 22);
$pdf->rect(10,10,.8,20,'F');
$pdf->setFillColor(255, 255, 255);
$pdf->Image(get_template_directory() .'/statics/img/gruppen.png',16,14.9,0,10);


$pdf->setTextColor(90,90,90);

$tw = $pdf->GetStringWidth(get_theme_mod('info_telefon'));
$right = -13 - $tw;
$pdf->SetFont('worksans-regular','',9);
$pdf->setXY($right,17);
$pdf->Write(1,get_theme_mod('info_telefon'),smamo_tel(get_theme_mod('info_telefon')));

$tw = $pdf->GetStringWidth(get_theme_mod('info_email'));
$pdf->SetFont('worksans-regular','',9);
$pdf->setXY(-15 - $tw, 20);
$pdf->Write(5,get_theme_mod('info_email'),'mailto:'. get_theme_mod('info_telefon'));

$pdf->setXY(10,30);

// Artikeltitel
$pdf->SetFont('worksans-bold','',11);
$pdf->setTextColor(255,255,255);
$pdf->setFillColor(70,70,70);
$pdf->ChapterTitle(utf8_decode($post->post_title));


$i = 0;
$y = 43;
foreach($gallery as $img) : $i ++; if ($i < 7) :
    $image_url = wp_get_attachment_image_src( $img, '550-350' );
    $img_url = str_replace(get_bloginfo('url'),ABSPATH,$image_url[0]);
    
    if ($i %2 === 0){
        $pdf->Image($img_url,106,$y,94,0);
        $y += 62;
    }
    else{
        $pdf->Image($img_url,10,$y,94,0);
    }
    

endif; endforeach;

//footer
$pdf->Image(get_template_directory() .'/statics/img/hus.jpg',102,280,10,0);


endif;
// Output
$pdf->Output();
?>

*/