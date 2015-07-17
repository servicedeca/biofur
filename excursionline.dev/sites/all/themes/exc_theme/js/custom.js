(function ($, Drupal, window, document, undefined) {

  Drupal.behaviors.excurSwitcher = {
    attach: function(context, settings) {
      // Language
      $('#language-switcher label').once().click(function() {
        window.location = $(this).data('url');
      });

      // Currency
      $('#currency-switcher label').once().click(function() {
        $.cookie('excur_currency', $(this).data('currency'), {expires: 86400, path: '/'});
        location.reload();
      });
    }
  };

  Drupal.behaviors.excurCustomUserLogin = {
    attach: function(context, settings) {
      $('#user-login-custom a.registration-button').once().click(function() {
        var $trueForm = $(this).closest('form');
        $('.form-actions input.form-submit', $trueForm).click();
      });
    }
  };

  Drupal.behaviors.excurCustomUserRegister = {
    attach: function(context, settings) {
      $('#user-register-custom a.registration-button').once().click(function() {
        var $trueForm = $(this).closest('form');
        $('.form-actions input.form-submit', $trueForm).click();
      });
    }
  };

  Drupal.behaviors.excurFlipContinents = {
    attach: function(context, settings) {
      $('.hover').once().hover(function() {
        $(this).addClass('flip');
      }, function() {
        $(this).removeClass('flip');
      });
    }
  };

  Drupal.behaviors.excurContinentCode = {
    attach: function(context, settings) {
      $('body').once('continent-id', function() {
        if (Drupal.settings.continentCode != undefined) {
          $('body').attr('id', Drupal.settings.continentCode);
        }
      });
    }
  };

  Drupal.behaviors.excurOwlCarousel = {
    attach: function(context, settings) {
      $('#owl-demo').once('country-cities', function() {
        $("#owl-demo").owlCarousel({
          navigation: true,
          navigationText: [
            "",
            ""
          ]
        });
      });
    }
  };

  Drupal.behaviors.excurScrollTo = {
    attach: function(context, settings) {
      $('#excur-order-button').click(function() {
        var id = $(this).attr('href');
        $(id).ScrollTo();
      });
    }
  };

  Drupal.behaviors.excurServiceCategory = {
    attach: function(context, settings) {
      $('section.excur-list-category a').once().click(function(e) {
        e.preventDefault();

        var tid = $(this).data('tid');
        $('#views-exposed-form-content-city-service #edit-field-category-tid').val(tid);
        $('#views-exposed-form-content-city-service #edit-submit-content').click();
      });
    }
  };

  Drupal.behaviors.excurWriteGuide = {
    attach: function() {
      $('.excur-not-login').click(function(){
        $('.head-reg').trigger('click');
      });
    }
  }

  Drupal.behaviors.excurButBook = {
    attach: function () {
      $('#edit-submit--3').click(function(){
        alert('ok');
        var id = $(this).data('sub-id');
        console.log(id);
        $('#service-offer-booking-' + id).trigger('click');
      });
    }
  }

  Drupal.behaviors.excurBookingOffers = {
    attach: function() {
      var classTickets = $('.edit-tickets'),
        class_t,
        class_t_ID;
      for(var i = 0; i < classTickets.length; i++) {
        class_t  = classTickets[i];
        class_t_ID = class_t.attributes[4].value.split('-')[2];
        var valClass = $('#edit-tickets-' + class_t_ID).val()
        $('#input-ticket-' + class_t_ID).val(valClass);
      }

      var tickets = $('.sum-price'),
        offID,
        off;
      for(var j = 0; j < tickets.length; j++) {
        off  = tickets[j];
        offID = off.attributes[0].value.split('-')[3];
        var oId = offID.split('_');
        var oSum = 0,
          price;
        var count;
        for(var k in oId) {
          count = parseInt($('#input-ticket-' + oId[k]).val());
          price = parseFloat($('#ticket-price-' + oId[k]).html());
          oSum += count * price;
        }
        $('#sum-price-offer-' + offID).html(oSum.toFixed(2));
      }

      $('.icon-minus').click(function(){
        var num = $(this).attr('id').split('-')[2];
        var count = new Number($('#input-ticket-' + num).val());
        if (count > 0) {
          $('#input-ticket-' + num).val(count - 1);
          $('#edit-tickets-' + num).val(count - 1);

          var numSum = $(this).data('sum');
          var price = new Number($('#ticket-price-' + num).html());
          var sum = new Number($('#sum-price-offer-' + numSum).html());
          sum = sum -price;
          $('#sum-price-offer-' + numSum).html(sum.toFixed(2));
        }
      });

      $('.icon-plus').click(function(){
        var num = $(this).attr('id').split('-')[2];
        var count = new Number($('#input-ticket-' + num).val());
        $('#input-ticket-' + num).val(count + 1);
        $('#edit-tickets-' + num).val(count + 1);

        var numSum = $(this).data('sum');
        var price = new Number($('#ticket-price-' + num).html());
        var sum = new Number($('#sum-price-offer-' + numSum).html());
        sum = sum + price;
        $('#sum-price-offer-' + numSum).html(sum.toFixed(2));
      });

      $(document).on('click', '#pay-back', function(){
        $('#pay-form-step-two').hide();
        $('#pay-form-step-one').show();
      });

    }
  }

  Drupal.behaviors.excurOfferPayEnd = {
    attach: function () {
      $(document).on('click', '#offer-pay-end', function(){
        var offId = $(this).data('offer-id');

        $.ajax({
          url: '/excur/offer/pay_end',
          type: 'POST',
          data: {
            offer_id : offId
          },
          success: function(response) {
            $('#pay-form-step-two').html(response);
          },
          error: function(response) {
            alert('false');
          }
        })
      });
    }
  }





})(jQuery, Drupal, this, this.document);
