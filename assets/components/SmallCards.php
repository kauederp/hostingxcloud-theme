<?php

/**
 * Summary of getMural
 * $itens Array of Arrays
 * @description $itens abriga arrays com os as propriedades image(imagem do canto superior esquerdo), title(titulo do card) e text (Texto interno do card)
 * @return string
 */
function getSmallCards()
{
    $section_title="Supercharge your websites with our unlimited&nbsp;CDN";
    $section_text="40% of consumers will leave a website if it takes more than 3 seconds to
            load. 20i is proven to boost website load times wherever your traffic
            comes&nbsp;from.";
    $itens = [
        [
            "image" => "assets/img/cards/enhanced-security.avif",
            "title" => "Enhanced security",
            "text" => "Enterprise level security technology and advanced
                  configuration
                  management to keep your websites&nbsp;secure.",
        ],
        [
            "image" => "assets/img/cards/higher-search-rankings.avif",
            "title" => "Enhanced security",
            "text" => "Enterprise level security technology and advanced
                  configuration
                  management to keep your websites&nbsp;secure.",
        ],
        [
            "image" => "assets/img/cards/more-sales.avif",
            "title" => "Enhanced security",
            "text" => "Enterprise level security technology and advanced
                  configuration
                  management to keep your websites&nbsp;secure.",
        ],
        [
            "image" => "assets/img/cards/no-traffic-limits.avif",
            "title" => "Enhanced security",
            "text" => "Enterprise level security technology and advanced
                  configuration
                  management to keep your websites&nbsp;secure.",
        ],

    ];
    $html = '<div class="py-5 container ">
        <div class="text-center mx-auto mb-3" style="max-width: 46.5rem;">
          <h2 class="h1 mt-0">'.$section_title.'</h2>
          <p>'.$section_text.'</p>
        </div>
        <div class="row g-3">';
    foreach ($itens as $item) {
        $html .= '<div class="col-sm-6 col-xl-3">
            <div class="card shadow-lg h-100">
              <div class="card-body p-0">
                <picture>
                  <img class="img-fluid pt-2" srcset="'.$item["image"].'
                " src="'.$item["image"].'" alt="Enhanced security" width="452" height="254"
                    decoding="lazy">
                </picture>
                <div class="d-flex align-items-center justify-content-center" style="height: 3rem;">
                  <h3 class="fs-18 text-center mx-2 mt-1">'.$item["title"].'</h3>
                </div>
                <p class="text-center pt-2 mx-2 border-top">'.$item['text'].'</p>
              </div>
            </div>
          </div>';
    }
    $html.='           
        </div>
      </div>';
    return $html;
}
