<?php
/**
 * Summary of getMural
 * $itens Array of Arrays
 * @description $itens abriga arrays com os as propriedades image(imagem do canto superior esquerdo), title(titulo do card) e text (Texto interno do card)
 * @return string
 */
function getMural(){
    $itens = [
        [
            "image"=>"assets/img/avatars/avatar01.svg",
            "title"=>"Image optimisation",
            "text"=>"Our CDN will scan &amp; optimise your images, resizing, compressing
            and converting to fast loading formats such as JPEG XR or WebP – with
            no visible loss in&nbsp;quality.",
        ],
        [
            "image"=>"assets/img/avatars/avatar01.svg",
            "title"=>"Image optimisation",
            "text"=>"Our CDN will scan &amp; optimise your images, resizing, compressing
            and converting to fast loading formats such as JPEG XR or WebP – with
            no visible loss in&nbsp;quality.",
        ],
        [
            "image"=>"assets/img/avatars/avatar01.svg",
            "title"=>"Image optimisation",
            "text"=>"Our CDN will scan &amp; optimise your images, resizing, compressing
            and converting to fast loading formats such as JPEG XR or WebP – with
            no visible loss in&nbsp;quality.",
        ],
        [
            "image"=>"assets/img/avatars/avatar01.svg",
            "title"=>"Image optimisation",
            "text"=>"Our CDN will scan &amp; optimise your images, resizing, compressing
            and converting to fast loading formats such as JPEG XR or WebP – with
            no visible loss in&nbsp;quality.",
        ],
        [
            "image"=>"assets/img/avatars/avatar01.svg",
            "title"=>"Image optimisation",
            "text"=>"Our CDN will scan &amp; optimise your images, resizing, compressing
            and converting to fast loading formats such as JPEG XR or WebP – with
            no visible loss in&nbsp;quality.",
        ],
        [
            "image"=>"assets/img/avatars/avatar01.svg",
            "title"=>"Image optimisation",
            "text"=>"Our CDN will scan &amp; optimise your images, resizing, compressing
            and converting to fast loading formats such as JPEG XR or WebP – with
            no visible loss in&nbsp;quality.",
        ],
        [
            "image"=>"assets/img/avatars/avatar01.svg",
            "title"=>"Image optimisation",
            "text"=>"Our CDN will scan &amp; optimise your images, resizing, compressing
            and converting to fast loading formats such as JPEG XR or WebP – with
            no visible loss in&nbsp;quality.",
        ],
        [
            "image"=>"assets/img/avatars/avatar01.svg",
            "title"=>"Image optimisation",
            "text"=>"Our CDN will scan &amp; optimise your images, resizing, compressing
            and converting to fast loading formats such as JPEG XR or WebP – with
            no visible loss in&nbsp;quality.",
        ],
        [
            "image"=>"assets/img/avatars/avatar01.svg",
            "title"=>"Image optimisation",
            "text"=>"Our CDN will scan &amp; optimise your images, resizing, compressing
            and converting to fast loading formats such as JPEG XR or WebP – with
            no visible loss in&nbsp;quality.",
        ],
        
    ];
    $html = '';
    foreach($itens as $item){
        $html.='<div class="col-sm-6 col-lg-4">
          <div class="d-flex align-items-center gap-15 mb-2"><img class="object-fit-contain"
              src="'.$item["image"].'" alt="Image optimisation" width="48" height="48"
              loading="lazy" decoding="async">
            <h3 class="fs-18">'.$item["title"].'</h3>
          </div>
          <p class="m-0">'.$item["text"].'
          </p>
        </div>';
    }
    return $html;
}