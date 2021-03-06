<?php

require_once '../pdfBootstrap.php';

$pdf = new pdfGenerator([
  'format' => PdfFormats::F_LETTER,
  'orientation' => PdfOrientation::O_PORTRAIT,
  'mode' => PdfFonts::CORE,
  //'default_font' => PdfFonts::MONO_FREE,
  ]);

$html = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test External CSS</title>
  <link rel="stylesheet" href="external.css"/>
</head>
<body>
  <div class="underlined text-blue">
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut quos cumque voluptatum voluptas. Tempore eligendi provident omnis. Debitis aspernatur nihil odio fuga vitae in illum voluptas iure laborum, magni officia amet deleniti excepturi quaerat voluptate asperiores? Eveniet nesciunt nihil, nisi perferendis ut eius officiis rerum impedit qui. Id ex magni, veritatis ipsa soluta qui maiores delectus recusandae, voluptates reiciendis cumque modi quia perferendis porro eaque quos expedita sequi odit deleniti in nobis. Odit est deserunt laborum non optio earum reiciendis aspernatur assumenda, sapiente explicabo libero totam fugiat, consequuntur accusantium iure rerum nihil dolorum accusamus ab itaque rem necessitatibus. Maiores delectus aliquam voluptates atque laudantium sequi, nihil eveniet aut? Aut in aliquam asperiores mollitia voluptatum doloremque quam, quibusdam, voluptatem doloribus recusandae autem vero cupiditate ea sunt itaque ex blanditiis consequatur enim dolor sit. Numquam neque tempora, perferendis architecto in iste, aliquid enim laborum natus veritatis ut similique debitis placeat accusamus. Veritatis dolorum ex, expedita architecto hic labore quod eveniet id accusantium cumque! Omnis iusto at autem officia, labore magnam? Libero dolorum expedita, quam nesciunt laudantium sit voluptatem quo non voluptates quia eos sed eius reprehenderit consequuntur dolor. Iure, unde vitae quibusdam maxime perspiciatis tempore, cumque adipisci nam molestiae facere necessitatibus ab.
  </div>
  <br>
  <div>
    <p class="text-red">
      <strong>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore reiciendis sed quis, similique accusamus rerum!
      </strong>
    </p>
  </div>
</body>
</html>';


$pdf->createHtml($html);

$pdf->outputFileToBrowser();
