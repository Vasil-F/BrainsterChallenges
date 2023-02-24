// Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});

$(document).ready(function(){

    // function handlerIn() {
    //     $('.action-btns').removeClass('hidden')
    //     $('.action-btns').addClass('inline-block')   
    // };
    // function handlerOut() {
    //     $('.action-btns').removeClass('inline')
    //     $('.action-btns').addClass('hidden')   
    // };
    

    $('.card-inside').each(function(){
        let btns = $('.action-btns', this)
        function handleIn() {
            $(btns).removeClass('hidden')
            $(btns).addClass('inline-block')   
        };
        function handleOut() {
            $(btns).removeClass('inline')
            $(btns).addClass('hidden')   
        };

        $(this).hover(handleIn, handleOut)
    })

    // $('.card-inside').each(function(){
    //     let project_id = $(this).attr('data-id')
    //     $('.card-inside[data-id="'+project_id+'"]').hover(handlerIn, handlerOut)
    // });
        
    

    $('.edit-btn').on('click', function(){
        let project_id = $(this).attr('data-id')
        $('.card-form[data-id="'+project_id+'"]').show()
        $('.card-inside[data-id="'+project_id+'"]').hide()
    });
    $('.cancel-btn').on('click', function(){
        let project_id = $(this).attr('data-id')
        $('.card-form[data-id="'+project_id+'"]').hide()
        $('.card-inside[data-id="'+project_id+'"]').show()
    });
    $('.delete-btn').on('click', function(){
        let project_id = $(this).attr('data-id')
        $('.modal-div[data-id="'+project_id+'"]').show()
    });
    $('.hide-modal-btn').on('click', function(){
        let project_id = $(this).attr('data-id')
        $('.modal-div[data-id="'+project_id+'"]').hide()
    });


    
});