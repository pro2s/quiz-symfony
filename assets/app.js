/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

const $ = require('jquery');

require('bootstrap');

$(document).ready(function() {
  $(document).on('submit','form#answersQuestion',function() {
    const selectedRadioInputElement = $(this).find('input[type=radio]:checked');
    if (selectedRadioInputElement.length === 0) {
      alert('Please select answer');
      return false;
    }
    return true;
  });
});
