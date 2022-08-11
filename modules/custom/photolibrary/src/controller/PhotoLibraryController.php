<?php

namespace Drupal\photolibrary\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class PhotoLibraryController extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */
    public function content() {
      // Do something with your variables here.
        $myText = 'This is not just a default text!';
        $myNumber = 1;
        $myArray = [1, 2, 3];
        $images = [
            'https://t3.ftcdn.net/jpg/04/97/00/64/240_F_497006436_1K2U4YctMPBpqBRW10v8zB5x9r7Bmeci.jpg',
            'https://t3.ftcdn.net/jpg/04/97/71/50/240_F_497715029_AT5BAQ3WgeXXLKwasgBKsnxWgoqd0sAG.jpg',
            'https://thumbs.dreamstime.com/b/rainbow-love-heart-background-red-wood-60045149.jpg',
            'https://t3.ftcdn.net/jpg/05/04/58/54/240_F_504585449_mn2TyFGZwglrhOmgI1AcBjlkebjxgEQL.jpg',
            'https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzR8fHBlcnNvbnxlbnwwfHwwfHw%3D&w=1000&q=80',
            'https://t3.ftcdn.net/jpg/05/07/46/42/240_F_507464268_cByo5HCfIXlXWulJfvUGsQxBvBSR8Kgb.jpg',
            'https://images.unsplash.com/photo-1591805364522-9d563414ee09?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c2l6ZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
            'https://images.unsplash.com/photo-1545038495-06c466616626?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fHNpemV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'https://images.unsplash.com/photo-1604281662864-5c7d4f1148ca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHNpemV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
        ];

        return [
            // Your theme hook name.
            '#theme' => 'photolibrary_theme_hook',
            // Your variables.
            '#variable1' => $myText,
            '#variable2' => $myNumber,
            '#variable3' => $myArray,
            '#images' => $images
        ];
    }

}