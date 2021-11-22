



$(document).ready(function () {
  $('#datatable').DataTable({
    order: [[ 1, 'desc' ]],
    "language":{
      "emptyTable": "Nenhum registro encontrado",
      "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
      "infoEmpty": "Mostrando 0 até 0 de 0 registros",
      "infoFiltered": "(Filtrados de _MAX_ registros)",
      "infoThousands": ".",
      "loadingRecords": "Carregando...",
      "processing": "Processando...",
      "zeroRecords": "Nenhum registro encontrado",
      "search": "Pesquisar",
      "paginate": {
        "next": "Próximo",
        "previous": "Anterior",
        "first": "Primeiro",
        "last": "Último"
      },
    },
  });
});



var amount;
var reach;

var x = $(window).width() - 400;

$('.donate form').on("click", function(){
  amount = $('input[name=amount]:checked', '#donAmount').val();
  reach = amount * 22;
  $('#confirm .amount').text("$" + amount);
  $('#check span').text("$" + amount);
  $('#confirm strong').text(reach + " voters");
});

$(".donate button-donate").on("click", function(){
  $(".donate").toggleClass("active");
  if( $(".donate").is(".active") ) {
    $("form").slideDown(450, "easeOutQuart");
  } else {
    $("form").slideUp(300, "easeInOutQuad");
  }
});

$('.donate label').on("click", function(){
  setTimeout(function() {
    if (amount == "other"){
      $("#custom").css("margin-left", x/2);
$("#custom").css("margin-right", x/2);
      $('body').addClass('custom');
    	$(".donate").hide("slide", { easing: "easeInQuart", direction: "left" }, 700, function(){
    		$("#custom").show("slide", { easing: "easeOutQuart", direction: "right" }, 700);
    	});
  	} else {
      $('body').removeClass('custom');
    	$(".donate").hide("slide", { easing: "easeInQuart", direction: "left" }, 700, function(){
    		$("#details").show("slide", { easing: "easeOutQuart", direction: "right" }, 700);
  		});
  	}
  }, 150);
});

$('#custom .next').on("click", function(){
  amount = $('input[name=custom-amount]', '#customDonation').val();
  reach = amount * 22;
  $('#confirm .amount').text("$" + amount);
  $('#check span').text("$" + amount);
  $('#confirm strong').text(reach + " voters");
  $("#custom").hide("slide", { easing: "easeInQuart", direction: "left" }, 700, function(){
    $("#details").show("slide", { easing: "easeOutQuart", direction: "right" }, 700);
  });
});

$('#custom .back').on("click", function(){
  $("#custom").hide("slide", { easing: "easeInQuart", direction: "right" }, 700, function(){
    $(".donate").show("slide", { easing: "easeOutQuart", direction: "left" }, 700);
  });
});

$('#details .next').on("click", function(){
  console.log(amount);
  $("#details").hide("slide", { easing: "easeInQuart", direction: "left" }, 700, function(){
    $("#card").show("slide", { easing: "easeOutQuart", direction: "right" }, 700);
  });
});

$('#details .back').on("click", function(){
  
  if ( $('body.custom').length > 0 ){
      $("#details").hide("slide", { easing: "easeInQuart", direction: "right" }, 700, function(){
    $("#custom").show("slide", { easing: "easeOutQuart", direction: "left" }, 700);
  });
  } else {
      $("#details").hide("slide", { easing: "easeInQuart", direction: "right" }, 700, function(){
    $(".donate").show("slide", { easing: "easeOutQuart", direction: "left" }, 700);
  });
  }
  
});

$('#card .next').on("click", function(){
  $("#card").hide("slide", { easing: "easeInQuart", direction: "left" }, 700, function(){
  });
});

$('#card .back').on("click", function(){
  $("#card").hide("slide", { easing: "easeInQuart", direction: "right" }, 700, function(){
    $(".details").show("slide", { easing: "easeOutQuart", direction: "left" }, 700);
	});
});

$('#card .next').on("click", function(){
  $("#card").hide("slide", { easing: "easeInQuart", direction: "left" }, 700, function(){
    $("#check").show("slide", { easing: "easeOutQuart", direction: "right" }, 700);
  });
});

$('#check .back').on("click", function(){
  $("#check").hide("slide", { easing: "easeInQuart", direction: "right" }, 700, function(){
    $("#card").show("slide", { easing: "easeOutQuart", direction: "left" }, 700);
	});
});

$("#check .next").on('click', function(){
  $("#check").hide("slide", { easing: "easeInQuart", direction: "left" }, 700, function(){
    $(".processing").fadeIn(1500, function(){
      $(".progress").animate({ width: "14em" }, 3500, "easeInOutCirc", function() {
        $( ".mask" ).hide("slide", { easing: "easeInQuart", direction: "right" }, 400);
      });
    });
  });
  
	setTimeout(function() {
		$('.processing .message, .outer').fadeOut();
  	$("#confirm").addClass('animated fadeInUp');
	}, 6250);
});

var owl = $('.owl-carousel-slide-inicio');
owl.owlCarousel({
    loop:true,
    nav:false,
    margin:1,
    autoplay:true,
    autoplayTimeout:16000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },            
        960:{
            items:1
        },
        1200:{
            items:1
        }
    }
});

jQuery(document).ready(function($){
  $('.owl-container-noticias').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    dots:false,
    autoplayHoverPause:false,
    responsive:{
        200:{
            items:1,
            nav:false
        },
        576:{
            items:1,
            nav:false
        },
        600:{
            items:2,
            nav:false,
            loop:false
        },
        900:{
          items:2,
          nav:false,
          loop:false
        },
        1024:{
          items:2,
          nav:false,
          loop:false
       },
       1200:{
          items:3,
          nav:false,
          loop:false
       },
       1500:{
          items:3,
          nav:false,
          loop:false
        },
        1900:{
          items:4,
          nav:false,
          loop:false
        },
      }
    });

    $('.owl-container-noticias-topo').owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      dots:false,
      autoplayHoverPause:false,
      responsive:{
          200:{
              items:1,
              nav:false
          },
          576:{
              items:1,
              nav:false
          },
          600:{
              items:2,
              nav:false,
              loop:false
          },
          900:{
            items:2,
            nav:false,
            loop:false
          },
          1024:{
            items:2,
            nav:false,
            loop:false
         },
         1200:{
            items:3,
            nav:false,
            loop:false
         },
         1500:{
            items:3,
            nav:false,
            loop:false
          },
          1900:{
            items:1,
            nav:false,
            loop:false,
            center:true
          },
        }
      });

    $('.owl-container-projetos').owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      dots:false,
      autoplayHoverPause:false,
      responsive:{
          200:{
              items:1,
              nav:false
          },
          576:{
              items:1,
              nav:false
          },
          600:{
              items:2,
              nav:false,
              loop:false
          },
          900:{
            items:2,
            nav:false,
            loop:false
          },
          1024:{
            items:2,
            nav:false,
            loop:false
         },
         1200:{
            items:3,
            nav:false,
            loop:false,
            center:false
         },
         1500:{
            items:3,
            nav:false,
            loop:false
          },
          1900:{
            items:4,
            nav:false,
            loop:false
          },
        }
      });

      $('.owl-container-projetos-corpo').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            200:{
                items:1,
                nav:false,
            },
            576:{
                items:1,
                nav:false
            },
            600:{
                items:1,
                nav:false,
                loop:false
            },
            900:{
              items:1,
              nav:false,
              loop:false
            },
            1024:{
              items:2,
              nav:false,
              loop:false
           },
           1200:{
              items:2,
              nav:false,
              loop:false,
              center:false
           },
           1500:{
              items:3,
              nav:false,
              loop:false
            },
            1900:{
              items:3,
              nav:false,
              loop:false
            },
          }
        });


      $('.owl-container-videos').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        dots:false,
        autoplayHoverPause:false,
        responsive:{
            200:{
                items:1,
                nav:false,
                loop:false,
                center:true
            },
            576:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false,
                loop:false,
                center:false
            },
            900:{
              items:2,
              nav:true,
              loop:false
            },
            1024:{
              items:2,
              nav:false,
              loop:false
           },
           1200:{
              items:3,
              nav:false,
              loop:false
           },
           1500:{
              items:3,
              nav:false,
              loop:false
            },
            1900:{
              items:4,
              nav:false,
              loop:false
            },
          }
        });


        $('.owl-container-videos-video').owlCarousel({
          loop:false,
          margin:10,
          responsiveClass:true,
          autoplay:true,
          autoplayTimeout:1000,
          autoplayHoverPause:true,
          responsive:{
              200:{
                  items:1,
                  nav:false,
                  
                  center:true
              },
              576:{
                  items:1,
                  nav:false
              },
              600:{
                  items:2,
                  nav:false,
                  
                  center:false
              },
              900:{
                items:2,
                nav:true,
               
              },
              1024:{
                items:2,
                nav:false,
                
             },
             1200:{
                items:3,
                nav:false,
                
             },
             1500:{
                items:4,
                nav:false,
                
              },
            }
          });


          
        $('.owl-container-eventos').owlCarousel({
          loop:false,
          margin:10,
          responsiveClass:true,
          dots:false,
          autoplayHoverPause:false,
          responsive:{
              200:{
                  items:1,
                  nav:false,
                  center:true
              },
              576:{
                  items:2,
                  nav:false,
                  center:false
              },
              600:{
                  items:2,
                  nav:false,
                  loop:false,
                  center:false
              },
              930:{
                items:2,
                nav:true,
                loop:false,
                center:false
              },
              1024:{
                items:2,
                nav:false,
                loop:false
             },
             1200:{
                items:4,
                nav:false,
                loop:false
             },
             1500:{
                items:5,
                nav:false,
                loop:false
              },
            }
          });

          $('.owl-container-slide-secundario').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            dots:false,
            autoplayHoverPause:false,
            responsive:{
                200:{
                    items:1,
                
                },
                576:{
                    items:1,
                  
                },
                600:{
                    items:1,
                },
                930:{
                  items:1,
                  stagePadding: 20,
                },
                1024:{
                  items:1,
                  stagePadding: 20,
                
               },
               1200:{
                  items:1,
                  stagePadding: 40,
                 
               },
               1500:{
                  items:1,
                  stagePadding: 40,
                  
                },
                1900:{
                  items:1,
                  stagePadding: 40,
               
                },
              }
            });

          $('.owl-container-gestao').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            dots:false,
            autoplayHoverPause:false,
            responsive:{
                200:{
                    items:1,
                    nav:false,
                    loop:false
                },
                576:{
                    items:2,
                    nav:false,
                    loop:false
                },
                600:{
                    items:2,
                    nav:false,
                    loop:false
                },
                930:{
                  items:2,
                  nav:false,
                  loop:false
                },
                1024:{
                  items:2,
                  nav:false,
                  loop:false
               },
               1200:{
                  items:3,
                  nav:false,
                  loop:false,
                  center:false
               },
               1500:{
                  items:3,
                  nav:false,
                  loop:false
                },
                1900:{
                  items:4,
                  nav:false,
                  loop:false
                },
              }
            });

            $('.imagens-projetos').owlCarousel({
              loop:true,
              margin:10,
              responsiveClass:true,
              autoplay:true,
              autoplayTimeout:2000,
              autoplayHoverPause:true,
              dots:false,
              responsive:{
                  200:{
                      items:1,
                      nav:false
                  },
                  576:{
                      items:1,
                      nav:false
                  },
                  600:{
                      items:1,
                      nav:false,
                     
                  },
                  930:{
                    items:1,
                    nav:false,
                  
                  },
                  1024:{
                    items:1,
                    nav:false,
                    
                 },
                 1200:{
                    items:1,
                    nav:false,
                 },
                 1500:{
                    items:1,
                    nav:false,
                  },
                  1900:{
                    items:1,
                    nav:false,
                    center:false,
                  },
                }
              });

              $('.imagens-noticia').owlCarousel({
                loop:false,
                margin:10,
                responsiveClass:true,
                autoplay:false,
                autoplayTimeout:2000,
                autoplayHoverPause:true,
                dots:false,
                responsive:{
                    200:{
                        items:1,
                        nav:false
                    },
                    576:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:1,
                        nav:false,
                       
                    },
                    930:{
                      items:1,
                      nav:false,
                    
                    },
                    1024:{
                      items:1,
                      nav:false,
                      
                   },
                   1200:{
                      items:1,
                      nav:false,
                   },
                   1500:{
                      items:1,
                      nav:false,
                    },
                    1900:{
                      items:1,
                      nav:false,
                      center:false,
                    },
                  }
                });

              $('.videos-noticia').owlCarousel({
                loop:false,
                margin:10,
                responsiveClass:true,
                dots:false,
                responsive:{
                    200:{
                        items:1,
                        nav:false
                    },
                    576:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:1,
                        nav:false,
                       
                    },
                    930:{
                      items:1,
                      nav:false,
                    
                    },
                    1024:{
                      items:1,
                      nav:false,
                      
                   },
                   1200:{
                      items:1,
                      nav:false,
                   },
                   1500:{
                      items:1,
                      nav:false,
                    },
                    1900:{
                      items:1,
                      nav:false,
                      center:false,
                    },
                  }
                });

      const shareButton = document.querySelectorAll("button.shareButton")

      shareButton[0].addEventListener("click", (e) => {
          for( let i=0; i < shareButton.length; i++ ) {
            shareButton[i].classList.toggle("open")
            shareButton[0].classList.remove("sent")
          }
      })

      for( let i=1; i < shareButton.length; i++ ) {
        
        shareButton[i].addEventListener("click", (e) => {
            
        for( let i=0; i < shareButton.length; i++ ) {
            shareButton[i].classList.toggle("open")
        }
        shareButton[0].classList.toggle("sent")
        })
      }
});