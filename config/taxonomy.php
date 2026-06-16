<?php
/**
 * Taxonomie canonique — source unique de vérité.
 * Consommée par : articles-capvietnam.php, blog-capvietnam.php,
 *                 footer.php, _related-articles.php, vi/index.php
 */
define('TAXONOMY', [
    'couple' => [
        'label'    => 'Notre histoire & couple',
        'emoji'    => '❤️',
        'hex'      => '#1b6b52',
        'color'    => 'couple',
        'desc_fr'  => 'La rencontre, la belle-famille, les différences culturelles, le quotidien à deux.',
        'desc_vi'  => 'Câu chuyện tình yêu, sự khác biệt văn hóa, cuộc sống hàng ngày.',
    ],
    'mariage' => [
        'label'    => 'Se marier',
        'emoji'    => '💍',
        'hex'      => '#7b3f72',
        'color'    => 'mariage',
        'desc_fr'  => 'CCAM, cérémonie au Vietnam, transcription Nantes, faire venir son conjoint.',
        'desc_vi'  => 'CCAM, lễ cưới tại Việt Nam, đăng ký kết hôn, bảo lãnh sang Pháp.',
    ],
    'vivre-ensemble' => [
        'label'    => 'Vivre ensemble',
        'emoji'    => '🏠',
        'hex'      => '#bf4a2a',
        'color'    => 'vivre-ensemble',
        'desc_fr'  => 'Visa conjoint, titre de séjour, s\'installer en France ou au Vietnam.',
        'desc_vi'  => 'Visa vợ/chồng, thẻ cư trú, định cư tại Pháp hoặc Việt Nam.',
    ],
    'argent' => [
        'label'    => 'L\'argent à deux',
        'emoji'    => '💰',
        'hex'      => '#b88b0b',
        'color'    => 'argent',
        'desc_fr'  => 'Budgets, transferts, fiscalité, comptes bancaires et financement du mariage.',
        'desc_vi'  => 'Ngân sách, chuyển tiền, thuế và tài chính đôi lứa.',
    ],
    'vie-pratique' => [
        'label'    => 'Vie pratique au Vietnam',
        'emoji'    => '🌏',
        'hex'      => '#2a7a7a',
        'color'    => 'vie-pratique',
        'desc_fr'  => 'Visa, logement, santé, transport et vie quotidienne au Vietnam.',
        'desc_vi'  => 'Visa, chỗ ở, y tế, giao thông và cuộc sống hàng ngày tại Việt Nam.',
    ],
]);
